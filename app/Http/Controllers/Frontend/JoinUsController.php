<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Traits\FileUploader;
use App\Models\Annual;
use Illuminate\Support\Facades\Mail;
use App\Mail\annualReceipt;
use App\Mail\volunteerReceipt;

class JoinUsController extends Controller
{
    
     use FileUploader;
    
    
    public function annualMember()
    {
        return view('frontend.pages.become_annual_member');
    }

    public function volunteerMember(){
        return view('frontend.pages.become_volunteer_member');
    }
    
     public function storeVolunteerMember(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:15',
            'address' => 'required|string',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'dob' => 'required|date',
            'gender' => 'required|string|in:MALE,FEMALE,OTHER',
            'aadhaar_path'=>'required',
            'pan_path'=>'required',
            'photo_path'=>'required',
            'experience' => 'nullable|string',
            'join_member' => 'nullable|string',
            'about_pyare'=>'nullable|string',
            'hear_pyare'=>'nullable|string',
        ]);

        // Store the validated data in the


        try {

            $volunteer = new Volunteer();
            $volunteer->name = $request->first_name . ' ' . $request->last_name;
            $volunteer->email = $request->email;
            $contact = preg_replace('/\D/', '', $request->contact); // sirf digits

            if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") {
                $contact = substr($contact, 2); // starting ke 91 hata do
            }
            // Agar number 0 se start ho aur length 11 ho
            if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") {
                $contact = substr($contact, 1);
            }
            $volunteer->phone = '+91-' . $contact;
            $volunteer->address = $request->address;
            $volunteer->city = $request->city;
            $volunteer->state = $request->state;

            $volunteer->date_of_birth = $request->dob;
            $volunteer->gender = $request->gender;
            
            $volunteer->about_pyare = $request->about_pyare;
            $volunteer->hear_pyare = $request->hear_pyare;
            
            $volunteer->experience = $request->experience;
            $volunteer->join_member = $request->join_member;
            
            $volunteer->aadhaar_path = $this->uploadMedia($request, 'aadhaar_path', 'volunteer-documents');
            $volunteer->pan_path = $this->uploadMedia($request, 'pan_path', 'volunteer-documents');
            $volunteer->photo_path = $this->uploadMedia($request, 'photo_path', 'volunteer-documents');
            $volunteer->save();
            
              // ✅ Redirect to success page
            return redirect()->route('volunteer-member.success', $volunteer->id);


           
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Form submission failed.',
                'alert-type' => 'error'
            ]);
        }
    }
    
    
    
     public function volunteerMemberSuccess($id)
     {
         
         
     try{
        
       $volunteerData = Volunteer::where('id', $id)->first();

        // एक साथ multiple email addresses
        $recipients = [$volunteerData->email, 'pyarefdn@gmail.com',];

        Mail::to($recipients)->send(new volunteerReceipt($volunteerData));

        return redirect()->back()->with([
                'message' => 'Form filled successfully',
                'alert-type' => 'success'
            ]);
        
        }catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Form submission failed.',
                'alert-type' => 'error'
            ]);
        }


         
    }
    

    public function annualReport()
    {
        return view('frontend.pages.annual_report');
    }
    
    public function storeAnnualMember(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:15',
            'address' => 'required|string',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'dob' => 'required|date',
            'gender' => 'required|string|in:MALE,FEMALE,OTHER',
            'aadhaar_path'=>'required',
            'pan_path'=>'required',
            'photo_path'=>'required',
            'experience' => 'nullable|string',
            'join_member' => 'nullable|string',
            'about_pyare'=>'nullable|string',
            'hear_pyare'=>'nullable|string',
        ]);

        // Store the validated data in the
    
        try {

            $annual = new Annual();
            $annual->name = $request->first_name . ' ' . $request->last_name;
            $annual->email = $request->email;
            $contact = preg_replace('/\D/', '', $request->contact); // sirf digits

            if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") {
                $contact = substr($contact, 2); // starting ke 91 hata do
            }
            // Agar number 0 se start ho aur length 11 ho
            if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") {
                $contact = substr($contact, 1);
            }
            $annual->phone = '+91-' . $contact;
            $annual->address = $request->address;
            $annual->city = $request->city;
            $annual->state = $request->state;

            $annual->date_of_birth = $request->dob;
            $annual->gender = $request->gender;
            
            $annual->about_pyare = $request->about_pyare;
            $annual->hear_pyare = $request->hear_pyare;
            
            $annual->experience = $request->experience;
            $annual->join_member = $request->join_member;
            
           
            
            $annual->aadhaar_path = $this->uploadMedia($request, 'aadhaar_path', 'annual-documents');
            $annual->pan_path = $this->uploadMedia($request, 'pan_path', 'annual-documents');
            $annual->photo_path = $this->uploadMedia($request, 'photo_path', 'annual-documents');
            $annual->save();
            
            
             // ✅ Redirect to success page
            return redirect()->route('annual-member.success', $annual->id);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Form submission failed.',
                'alert-type' => 'error'
            ]);
        }
    }
    
    
    
     public function annualMemberSuccess($id)
    {



    try{
        
        $annualData = Annual::where('id', $id)->first();

        // एक साथ multiple email addresses
        $recipients = [$annualData->email, 'pyarefdn@gmail.com',];

        Mail::to($recipients)->send(new annualReceipt($annualData));

        return redirect()->back()->with([
                'message' => 'Form filled successfully',
                'alert-type' => 'success'
            ]);
        
    }catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Form submission failed.',
                'alert-type' => 'error'
            ]);
        }
       
    }
    
    
    
    
}
