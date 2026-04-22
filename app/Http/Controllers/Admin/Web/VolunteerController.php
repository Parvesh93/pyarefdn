<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{

    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_volunteer', 1);
        $this->route     = 'admin.volunteer';
        $this->view      = 'admin.web.volunteer';
        $this->path      = 'volunteer';
        $this->access    = 'volunteer';

        $this->middleware('permission:'.$this->access.'-view|'.$this->access.'-create|'.$this->access.'-edit|'.$this->access.'-delete', ['only' => ['index','show']]);
        $this->middleware('permission:'.$this->access.'-create', ['only' => ['create','store']]);
        $this->middleware('permission:'.$this->access.'-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:'.$this->access.'-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        $data['rows'] = Volunteer::orderBy('id', 'desc')->get();
        return view($this->view.'.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        return view($this->view.'.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            'experience' => 'nullable|string',
            'join' => 'nullable|string',
            // uploads
        'aadhaar' => ['required','file','mimes:jpg,jpeg,png,pdf','max:2048'],
        'pan'     => ['required','file','mimes:jpg,jpeg,png,pdf','max:2048'],
        'photo'   => ['required','image','mimes:jpg,jpeg,png','max:2048'],
        ]);

        // Store the validated data in the

try {

    // 1) Upload files
    $aadhaarPath = $request->file('aadhaar')->store('volunteers/aadhaar', 'public');
    $panPath     = $request->file('pan')->store('volunteers/pan', 'public');
    $photoPath   = $request->file('photo')->store('volunteers/photo', 'public');

    // 2) Save volunteer
    $volunteer = new Volunteer();
    $volunteer->name  = $request->first_name . ' ' . $request->last_name;
    $volunteer->email = $request->email;

    $contact = preg_replace('/\D/', '', $request->contact);
    if (strlen($contact) > 10 && substr($contact, 0, 2) == "91") $contact = substr($contact, 2);
    if (strlen($contact) == 11 && substr($contact, 0, 1) == "0") $contact = substr($contact, 1);
    $volunteer->phone = '+91-' . $contact;

    $volunteer->address       = $request->address;
    $volunteer->city          = $request->city;
    $volunteer->state         = $request->state;
    $volunteer->date_of_birth = $request->dob;
    $volunteer->gender        = $request->gender;
    $volunteer->experience    = $request->experience;
    $volunteer->join          = $request->join;

    // file paths
    $volunteer->aadhaar_path = $aadhaarPath;
    $volunteer->pan_path     = $panPath;
    $volunteer->photo_path   = $photoPath;

    $volunteer->save();

    return redirect()->back()->with([
        'message' => 'Volunteer created successfully!',
        'alert-type' => 'success'
    ]);

} catch (\Exception $e) {

    \Log::error('Volunteer create failed: '.$e->getMessage());

    return redirect()->back()->withInput()->with([
        'message' => 'Failed to create volunteer.',
        'alert-type' => 'error'
    ]);
}}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['volunteer'] = Volunteer::findOrFail($id);
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        return view($this->view.'.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['row'] = Volunteer::findOrFail($id);
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        return view($this->view.'.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',

            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:15',
            'address' => 'required|string',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'dob' => 'required|date',
            'gender' => 'required|string|in:MALE,FEMALE,OTHER',
            'experience' => 'nullable|string',
            'join' => 'nullable|string',
        ]);

        try {
            $volunteer = Volunteer::findOrFail($id);
            $volunteer->name = $request->name;
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
            $volunteer->experience = $request->experience;
            $volunteer->join = $request->join;
            $volunteer->status = $request->status ? 1 : 0;
            $volunteer->save();

            return redirect()->back()->with([
                'message' => 'Volunteer updated successfully!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to update volunteer.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $volunteer = Volunteer::find($id);
        if ($volunteer) {
            $volunteer->delete();
            return redirect()->back()->with([
                'message' => 'Volunteer deleted successfully!',
                'alert-type' => 'success'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'Volunteer not found.',
            'alert-type' => 'error'
        ]);
    }
}
