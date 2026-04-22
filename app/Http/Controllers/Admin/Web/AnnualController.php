<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Annual;
use Illuminate\Http\Request;

class AnnualController extends Controller
{

    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_annual', 1);
        $this->route     = 'admin.annual';
        $this->view      = 'admin.web.annual';
        $this->path      = 'annual';
        $this->access    = 'annual';

        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
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

        $data['rows'] = Annual::orderBy('id', 'desc')->get();
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
        $data['access']    = $this->access;

        return view($this->view . '.create', $data);
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
            $annual->experience = $request->experience;
            $annual->join = $request->join;
            $annual->save();

            return redirect()->back()->with([
                'message' => 'Annual Member created successfully!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to create annual member.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $data['member'] = Annual::findOrFail($id);
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        return view($this->view . '.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['row'] = Annual::findOrFail($id);
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        return view($this->view . '.edit', $data);
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
            $annual = Annual::findOrFail($id);
            $annual->name = $request->name;
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
            $annual->experience = $request->experience;
            $annual->join = $request->join;
            $annual->status = $request->status ? 1 : 0;
            $annual->save();

            return redirect()->back()->with([
                'message' => 'Annual Member updated successfully!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to update annual member.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $annual = Annual::find($id);
        if ($annual) {
            $annual->delete();
            return redirect()->back()->with([
                'message' => 'Annual Member deleted successfully!',
                'alert-type' => 'success'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'Annual Member not found.',
            'alert-type' => 'error'
        ]);
    }
}
