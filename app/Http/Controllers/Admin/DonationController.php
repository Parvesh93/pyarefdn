<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\paymentReceipt;
use App\Models\Donation;
use App\Models\Donor;
use App\Models\RazorpaySetting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Razorpay\Api\Api;
use App\Notifications\DonationReceived;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Notification;

class DonationController extends Controller
{




    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_donation', 1);
        $this->route     = 'admin.donation';
        $this->view      = 'admin.donation';
        $this->path      = 'donation';
        $this->access    = 'donation';

        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;
        // dd('s');
        if (!empty($request->campaign) || $request->campaign != null) {
            $data['selected_campaign'] = $campaign = $request->campaign;
        } else {
            $data['selected_campaign'] = $campaign = Null;
        }

        if (!empty($request->status) || $request->status != null) {
            $data['selected_status'] = $status = $request->status;
        } else {
            $data['selected_status'] = $status = Null;
        }

        if (!empty($request->start_date) || $request->start_date != null) {
            $data['selected_start_date'] = $start_date = $request->start_date;
        } else {
            $data['selected_start_date'] = $start_date = date('Y-m-d', strtotime(Carbon::now()->subYear()));
        }

        if (!empty($request->end_date) || $request->end_date != null) {
            $data['selected_end_date'] = $end_date = $request->end_date;
        } else {
            $data['selected_end_date'] = $end_date = date('Y-m-d', strtotime(Carbon::today()));
        }
        // dd('s');


        // dd($request->from_date);
        if (isset($request->campaign) || isset($request->status) || isset($request->start_date) || isset($request->end_date)) {
            // dd('s');
            $donations = Donation::whereDate('payment_date', '>=', $start_date)
                ->whereDate('payment_date', '<=', $end_date);
                
               
                

            if (!empty($request->campaign)) {
                $donations->where('campaign', $campaign)->get();
            }
            
            
            //  dd($donations);
            if (!empty($request->status)) {
                $donations->where('payment_status', $status);
            }


            $data['rows'] =  $donations->orderBy('created_at', 'desc')->get();
            // dd($data['rows']);
        }



        return view($this->view . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        return view($this->view . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // 1. Validation
        $request->validate([
            'amount' => ['required'],
            'first_name' => ['required'],

            'email' => ['required', 'email'],
            'contact' => ['required'],
            'address' => ['required'],
            'razorpay_payment_id' => ['required'], // ye sabse important hai
        ]);

        // dd($request->first_name);

        $razorpay_setting = RazorpaySetting::first();

        try {
            // 2. Initialize Razorpay
            $api = new Api(
                $razorpay_setting->razorpay_key_id ?? '',       // Razorpay Key ID from DB
                $razorpay_setting->razorpay_key_secret ?? ''     // Razorpay Secret from DB
            );

            // 3. Fetch Payment Details from Razorpay
            $payment = $api->payment->fetch($request->razorpay_payment_id);

            // 4. Verify & Capture Payment
            if (!$payment || $payment['status'] !== 'authorized') {

                $contact = preg_replace('/\D/', '', $request->contact); // sirf digits

                if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") {
                    $contact = substr($contact, 2); // starting ke 91 hata do
                }
                // Agar number 0 se start ho aur length 11 ho
                if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") {
                    $contact = substr($contact, 1);
                }

                $password = Str::random(8); // ek hi password generate hoga

                // 5. Check if User already exists or create new one
                $donor = Donor::firstOrCreate(
                    ['email' => $request->email],
                    [
                        'first_name' => $request->firstName,
                        'last_name' => $request->lastName,
                        'name' => $request->firstName . ' ' . $request->lastName,
                        'phone' => '+91-' . $contact,
                        'password' => bcrypt($password),
                        'password_text' => Crypt::encryptString($password),
                    ]
                );
                // Save failed payment attempt
                $donation = new Donation();
                $donation->donor_id = $donor->id;
                $donation->name = $request->lastName ? trim($request->firstName . ' ' . $request->lastName) : trim($request->firstName);
                $donation->email = $request->email;
                $donation->contact = '+91-' . $contact;

                $donation->address = $request->address;
                $donation->amount = $request->amount;
                $donation->payment_status = 'failed';
                $donation->campaign = $request->campaign ?? 'General';
                $donation->payment_id = $request->razorpay_payment_id ?? "";
                $donation->payment_method = 'Razorpay';
                $donation->payment_date = $request->payment_date;
                $donation->status = 0;
                $donation->save();



                return redirect()->back()->with([
                    'message' => 'Payment authorization failed!',
                    'alert-type' => 'error'
                ]);
            }

            // Capture amount in paisa (multiply by 100)
            $response = $payment->capture(['amount' => $payment['amount']]);

            $contact = preg_replace('/\D/', '', $request->contact); // sirf digits

            if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") {
                $contact = substr($contact, 2); // starting ke 91 hata do
            }
            // Agar number 0 se start ho aur length 11 ho
            if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") {
                $contact = substr($contact, 1);
            }

            $password = Str::random(8); // ek hi password generate hoga

            // 5. Check if User already exists or create new one
            $donor = Donor::firstOrCreate(
                ['email' => $request->email],
                [
                    'first_name' => $request->firstName,
                    'last_name' => $request->lastName,
                    'name' => $request->firstName . ' ' . $request->lastName,
                    'phone' => '+91-' . $contact,
                    'password' => bcrypt($password),
                    'password_text' => Crypt::encryptString($password),
                ]
            );

            // 6. Save Donation Details
            $donation = new Donation();
            $donation->donor_id = $donor->id;
            $donation->name = $request->last_name
                ? trim($request->first_name . ' ' . $request->last_name)
                : trim($request->first_name);

            $donation->email = $request->email;

            // Final format => +91-XXXXXXXXXX
            $donation->contact = '+91-' . $contact;

            $donation->address = $request->address;
            $donation->amount = $response->amount / 100; // paisa → rupees
            $donation->payment_status = $response->status === 'captured' ? 'completed' : 'pending';
            $donation->payment_id = $response->id;
            $donation->payment_method = "Razorpay";
            $donation->payment_date = $request->payment_date;
            $donation->campaign = $request->campaign;
            $donation->save();
            
            
            // एक साथ multiple email addresses
            $recipients = [$request->email, 'pyarefdn@gmail.com',];

            Mail::to($recipients)->send(new paymentReceipt($receiptData));


            // 7. Redirect with Success
            return redirect()->back()->with([
                'message' => 'Donation created successfully!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {

            $contact = preg_replace('/\D/', '', $request->contact); // sirf digits

            if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") {
                $contact = substr($contact, 2); // starting ke 91 hata do
            }
            // Agar number 0 se start ho aur length 11 ho
            if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") {
                $contact = substr($contact, 1);
            }

            $password = Str::random(8); // ek hi password generate hoga

            // 5. Check if User already exists or create new one
            $donor = Donor::firstOrCreate(
                ['email' => $request->email],
                [
                    'first_name' => $request->firstName,
                    'last_name' => $request->lastName,
                    'name' => $request->firstName . ' ' . $request->lastName,
                    'phone' => '+91-' . $contact,
                    'password' => bcrypt($password),
                    'password_text' => Crypt::encryptString($password),
                ]
            );
            // Save failed payment attempt
            $donation = new Donation();
            $donation->donor_id = $donor->id;
            $donation->name = $request->lastName ? trim($request->firstName . ' ' . $request->lastName) : trim($request->firstName);
            $donation->email = $request->email;
            $donation->contact = '+91-' . $contact;

            $donation->address = $request->address;
            $donation->amount = $request->amount;
            $donation->payment_status = 'failed';
            $donation->campaign = $request->campaign ?? 'General';
            $donation->payment_id = $request->razorpay_payment_id ?? "";
            $donation->payment_method = 'Razorpay';
            $donation->payment_date = $request->payment_date;
            $donation->status = 0;
            $donation->save();

            return redirect()->back()->with([
                'message' => 'Payment failed!',
                'alert-type' => 'error'
            ]);
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['donation'] = Donation::find($id);
        return view('admin.donation.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['donation'] = Donation::find($id);
        return view('admin.donation.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'amount' => ['required'],
            'name' => ['required'],

            'email' => ['required'],
            'contact' => ['required'],
            'address' => ['required'],
            'payment_status' => ['required']
        ]);

        try {
            $donation = Donation::find($id);
            $donation->payment_id = $request->paymentId;
            $donation->payment_method = $request->paymentMethod;
            $donation->amount = $request->amount;
            $donation->name = $request->name;

            $donation->email = $request->email;

            $contact = preg_replace('/\D/', '', $request->contact); // sirf digits

            if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") {
                $contact = substr($contact, 2); // starting ke 91 hata do
            }
            // Agar number 0 se start ho aur length 11 ho
            if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") {
                $contact = substr($contact, 1);
            }

            // Final format => +91-XXXXXXXXXX
            $donation->contact = '+91-' . $contact;
            $donation->address = $request->address;
            $donation->campaign = $request->campaign;
            $donation->payment_status = $request->payment_status;
            $donation->payment_date = $request->payment_date;

            $donation->save();

            return redirect()->back()->with([
                'message' => 'Donation updated successfully!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'An error occurred while processing your request.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $donation = Donation::find($id);
        if ($donation) {
            $donation->delete();
            return redirect()->back()->with([
                'message' => 'Donation deleted successfully!',
                'alert-type' => 'success'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'Donation not found.',
            'alert-type' => 'error'
        ]);
    }




    public function payment($id)
    {

        $data['donation'] = Donation::find($id);
        return view('admin.donation.payment_page', $data);
    }

    public function paymentRazorpay(Request $request, $id)
    {
        // dd($request->all());
        // dd($id);

        $donation = Donation::find($id);


        try {
            $donation = Donation::find($id);
            $api = new Api(config('razorpay.key'), config('razorpay.secret'));

            $payment = $api->payment->fetch($request->razorpay_payment_id);

            if ($request->has('razorpay_payment_id') && $request->filled('razorpay_payment_id')) {
                try {
                    $response = $api->payment->fetch($request->razorpay_payment_id)
                        ->capture(['amount' => $payment['amount']]);
                } catch (\Exception $e) {
                    return $e->getMessage();
                }
            }


            $paymentId = $response->id;
            $amount = $response->amount / 100; // convert to rupees


            $donation->payment_status = $paymentId ? 'Completed' : 'Pending';
            $donation->amount = $amount;
            $donation->payment_id = $paymentId;

            $donation->payment_method = "Razorpay";
            $donation->payment_date = today();
            $donation->update();

            return redirect()->route('admin.payment.success', $id)->with([
                'message' => 'Payment successful!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Payment failed',
                'alert-type' => 'error'
            ]);
        }
    }


    public function success($id)
    {


        $receiptData = Donation::where('id', $id)->first();

        // एक साथ multiple email addresses
        $recipients = [$receiptData->email, 'pyarefdn@gmail.com',];

        Mail::to($recipients)->send(new paymentReceipt($receiptData));

        return view('frontend.pages.thanku', compact('receiptData'));
    }
}
