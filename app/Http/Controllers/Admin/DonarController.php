<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendPassword;
use App\Models\Donation;
use App\Models\Donor;
use App\Models\User;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DonarController extends Controller
{
    use FileUploader;

    public function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_donor', 1);
        $this->route     = 'admin.donar';
        $this->view      = 'admin.donar';
        $this->path      = 'profile';
        $this->access    = 'donor';


        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['donarList', 'show', 'status', 'sendPassword']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update', 'status']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
        $this->middleware('permission:' . $this->access . '-password-print', ['only' => ['printPassword']]);
        $this->middleware('permission:' . $this->access . '-password-change', ['only' => ['passwordChange']]);
        $this->middleware('permission:' . $this->access . '-password-show', ['only' => ['showPassword']]);
        $this->middleware('permission:' . $this->access . '-password-send', ['only' => ['sendPassword']]);
    }

    public function donarList()
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['path'] = $this->path;
        $data['access'] = $this->access;
        $data['view'] = $this->view;


        $data['rows'] = Donor::with(['donations' => function ($q) {
            $q->where('payment_status', 'completed'); // ✅ Filter successful donations only
        }])
            ->withCount(['donations as successful_donations_count' => function ($q) {
                $q->where('payment_status', 'completed');
            }])
            ->withSum(['donations as successful_donations_sum' => function ($q) {
                $q->where('payment_status', 'completed');
            }], 'amount')
            ->orderBy('created_at', 'desc')
            ->get();

        return view($this->view . '.index', $data);
    }

    public function show($id)
    {
        $data['route'] = $this->route;
        $data['rows'] = Donation::with('donor')->where('donor_id', $id)->get();

        $data['user'] = Donor::where('id', $id)
            ->with(['donations'])
            ->withCount('donations')
            ->withSum('donations', 'amount')
            ->first();

        return view($this->view . '.view', $data);
    }


    public function editProfile($id)
    {
        $data['route'] = $this->route;
        $data['user'] = User::findOrFail($id);

        return view('admin.donar.edit_profile', $data);
    }
    public function updateProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'contact' => 'nullable|string|max:15',
            'attach' => 'nullable|image',
        ]);
        
        $contact = preg_replace('/\D/', '', $request->contact); // sirf digits

            if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") {
                $contact = substr($contact, 2); // starting ke 91 hata do
            }
            // Agar number 0 se start ho aur length 11 ho
            if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") {
                $contact = substr($contact, 1);
            
            }

        


        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = '+91-' . $contact;

        if ($request->hasFile('attach')) {
            //  dd($request->all());
            $user->attach = $this->updateImage($request, 'attach', $this->path, 180, 180, $user->attach, 'attach');
        }

        $user->update();

        return redirect()->route('admin.donor.editProfile', $user->id)->with([
            'message' => 'Profile updated successfully!',
            'alert-type' => 'success'
        ]);
    }



    public function destroy($id)
    {
        $donor = Donor::findOrFail($id);


        if ($donor) {
            $donor->delete();
            return redirect()->back()->with([
                'message' => 'User deleted successfully!',
                'alert-type' => 'success'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'User not found.',
            'alert-type' => 'error'
        ]);
    }

    public function printPassword($id)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        $data['donor'] = Donor::findOrFail($id);
        return view('admin.donar.print_password', $data);
    }

    public function showPassword($id)
    {
        $data['row'] = Donor::findOrFail($id);

        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        return view('admin.donar.view_password', $data);
    }

    public function sendPassword($id)
    {

        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        $sendPasswordData = Donor::findOrFail($id);

        if ($sendPasswordData) {
            // Send email logic here
            // You can use Laravel's Mail facade to send the email
            // Example:
            Mail::to($sendPasswordData->email)->send(new SendPassword($sendPasswordData));

            return redirect()->back()->with([
                'message' => 'Password sent to email successfully!',
                'alert-type' => 'success'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'User not found.',
            'alert-type' => 'error'
        ]);
    }



    public function printDonation($id)
    {
        $data['donation'] = Donation::find($id);
        return view('admin.donation.print', $data);
    }
}
