<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
           
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:20',
            'comment' => 'required|string|max:500',
        ]);
        //   dd('s');

        // Store the contact message in the 
        try {
            // Assuming you have a Contact model to save the data
            $contact = new Contact();
            $contact->first_name = $request->first_name;
            $contact->last_name = $request->last_name;
            $contact->email = $request->email;
            $contact->phone = $request->contact;
            $contact->comment = $request->comment;
            $contact->save();

          

            return redirect()->back()->with([
                'message' => 'Your message has been sent successfully!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'There was an error sending your message.',
                'alert-type' => 'error'
            ]);
        }
    }
}
