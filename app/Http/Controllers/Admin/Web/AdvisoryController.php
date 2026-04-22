<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Advisory;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class AdvisoryController extends Controller
{

     use FileUploader;

      function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_advisory', 1);
        $this->route     = 'admin.advisory';
        $this->view      = 'admin.web.advisory';
        $this->path      = 'advisory';
        $this->access    = 'advisory';

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
        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['advisories'] = Advisory::where('status', '1')->orderBy('id', 'asc')->get();

        return view($this->view . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'organization' => 'nullable|string',
            'attach' => 'nullable|image',
        ]);

        $advisory = new Advisory();
        $advisory->name = $request->name;
        $advisory->designation = $request->designation;
        $advisory->organization = $request->organization;
        $advisory->primary_role = $request->primary_role;
        //width: 400px height: 280px

        if ($request->hasFile('attach')) {
            $advisory->attach = $this->uploadImage($request, 'attach', $this->path, 300, 390);
        }

        $advisory->save();

        return redirect()->route($this->route . '.index')->with(['message' => 'Advisory created successfully!', 'alert-type' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'organization' => 'nullable|string|max:255',
            'primary_role' => 'nullable|string|max:255',
            'attach' => 'nullable|image',
        ]);

        $advisory = Advisory::findOrFail($id);
        $advisory->name = $request->name;
        $advisory->designation = $request->designation;
        $advisory->organization = $request->organization;
        $advisory->primary_role = $request->primary_role;

        if ($request->hasFile('attach')) {
            $advisory->attach = $this->updateImage($request, 'attach', $this->path, 300, 390, $advisory, 'attach');
        }

        $advisory->save();

        return redirect()->back()->with(['message' => 'Advisory updated successfully!', 'alert-type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $advisory = Advisory::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $advisory);

        //Delete Data
        $advisory->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
