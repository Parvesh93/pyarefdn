<?php

namespace App\Http\Controllers\Donor;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\User;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class DonorProfileController extends Controller
{
    use FileUploader;

    public function __construct()
    {
        // Module Data
        $this->path  = 'profile';
    }

    public function editProfile($id)
    {

        $data['donor'] = Donor::findOrFail($id);
        return view('donor.profile.edit', $data);
    }

    public function updateProfile(Request $request, $id)
    {
        $donor = Donor::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $donor->id,
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



        try {
            $donor->name = $request->name;
            $donor->email = $request->email;
            $donor->phone = '+91-' . $contact;

            if ($request->hasFile('attach')) {
                //  dd($request->all());
                $donor->photo = $this->updateImage($request, 'attach', $this->path, 180, 180, $donor->attach, 'attach');
            }

            $donor->update();

            return redirect()->route('donor.edit.profile', $donor->id)->with([
                'message' => 'Profile updated successfully!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {


            return redirect()->back()->with([
                'message' => 'An error occurred while processing your request.',
                'alert-type' => 'error'
            ]);
        }
    }
}
