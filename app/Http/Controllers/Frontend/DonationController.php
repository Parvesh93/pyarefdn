<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\paymentReceipt;
use App\Models\Donation;
use App\Models\Donor;
use App\Models\RazorpaySetting;
use App\Models\User;
use App\Notifications\DonationReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Notification;
use Razorpay\Api\Api;

class DonationController extends Controller
{
    //

   public function store(Request $request)
    {
        // 1️⃣ Validate request
        $request->validate([
            'amount' => ['required', 'numeric'],
            'firstName' => ['required'],
            'email' => ['required', 'email'],
            'contact' => ['required'],
            'address' => ['required'],
            'razorpay_payment_id' => ['required'],
            'razorpay_order_id' => ['required'],
            'razorpay_signature' => ['required'], // ✅ new field for verification
        ]);

        $razorpay_setting = RazorpaySetting::first();

        try {
            // 2️⃣ Initialize Razorpay API
            $api = new Api(
                $razorpay_setting->razorpay_key_id ?? '',
                $razorpay_setting->razorpay_key_secret ?? ''
            );

            // 3️⃣ Verify Signature (security step)
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature,
            ];

            $api->utility->verifyPaymentSignature($attributes); // ❗Throws error if invalid

            // 4️⃣ Fetch payment details
            $payment = $api->payment->fetch($request->razorpay_payment_id);

            // 5️⃣ If payment is only authorized, capture it
            if ($payment['status'] === 'authorized') {
                $payment->capture(['amount' => $payment['amount']]);
            }

            // ✅ Clean & format phone number
            $contact = preg_replace('/\D/', '', $request->contact);
            if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") {
                $contact = substr($contact, 2);
            }
            if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") {
                $contact = substr($contact, 1);
            }

            // ✅ Create or get donor
            $password = Str::random(8);
            $donor = Donor::firstOrCreate(
                ['email' => $request->email],
                [
                    'first_name' => $request->firstName,
                    'last_name' => $request->lastName,
                    'name' => trim($request->firstName . ' ' . $request->lastName),
                    'phone' => '+91-' . $contact,
                    'password' => bcrypt($password),
                    'password_text' => Crypt::encryptString($password),
                ]
            );

            // ✅ Store donation details
            $donation = new Donation();
            $donation->donor_id = $donor->id;
            $donation->name = trim($request->firstName . ' ' . $request->lastName);
            $donation->email = $request->email;
            $donation->contact = '+91-' . $contact;
            $donation->given_method = $request->donationTypeValue;
            $donation->address = $request->address;
            $donation->amount = $payment['amount'] / 100; // convert paisa → rupee
            $donation->payment_status = $payment['status'] === 'captured' ? 'completed' : 'pending';
            $donation->payment_id = $payment['id'];
            $donation->order_id = $request->razorpay_order_id; // ✅ store order_id
            $donation->payment_method = "Razorpay";
            $donation->campaign = $request->campaign ?? 'General';
            $donation->payment_date = now();
            $donation->status = 1;
            $donation->save();

            // ✅ Notify Admins
            $userNotifications = User::where('is_admin', 1)->get();
            Notification::send($userNotifications, new DonationReceived($donation->name));

            // ✅ Redirect to success page
            return redirect()->route('web.payment.success', $donation->id);
        } catch (SignatureVerificationError $e) {
            // ❌ Fake or tampered payment
            // \Log::warning('Razorpay Signature Verification Failed: ' . $e->getMessage());

            return back()->with([
                'message' => 'Payment verification failed! Please try again.',
                'alert-type' => 'error'
            ]);
        } catch (\Exception $e) {
            // ❌ Other payment issues
            // \Log::error('Payment Error: ' . $e->getMessage());

            // Optional: store failed attempt
            // $donation = new Donation();
            // $donation->email = $request->email;
            // $donation->amount = $request->amount;
            // $donation->payment_status = 'failed';
            // $donation->payment_method = 'Razorpay';
            // $donation->payment_date = now();
            // $donation->status = 0;
            // $donation->save();

            return back()->with([
                'message' => 'Payment failed! ',
                'alert-type' => 'error'
            ]);
        }
    }
    
    
    public function createOrder(Request $request)
    {
        try {
            $razorpay_setting = RazorpaySetting::first();

            if (!$razorpay_setting) {
                return response()->json(['error' => 'Razorpay credentials not found'], 500);
            }

            $api = new Api(
                $razorpay_setting->razorpay_key_id,
                $razorpay_setting->razorpay_key_secret
            );

            $order = $api->order->create([
                'receipt' => 'donation_' . uniqid(),
                'amount' => $request->amount * 100, // in paise
                'currency' => 'INR',
            ]);

            return response()->json(['order_id' => $order['id']]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
