<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FeatureController extends Controller
{

    use FileUploader;

     function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_feature', 1);
        $this->route     = 'admin.feature';
        $this->view      = 'admin.web.feature';
        $this->path      = 'feature';
        $this->access    = 'feature';

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

        $data['features'] = Feature::where('status', '1')->orderby('id', 'asc')->get();
        return view($this->view.'.index', $data);
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
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'button_more' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'donate_link' => 'nullable|string|max:255',
            'attach' => 'nullable|image',
        ]);

        $feature = new Feature();
        $feature->title = $request->title;
        $feature->slug = Str::slug($request->title, '-');
        $feature->subtitle = $request->sub_title;
        $feature->button_more = $request->button_more;
        $feature->button_link = $request->button_link;
        $feature->donate_link = $request->donate_link;
        $feature->description = $request->description;

        //width: 400px height: 280px
        if ($request->hasFile('attach')) {
            $feature->attach = $this->uploadImage($request, 'attach', $this->path, 1150, 850);
        }

        $feature->save();
        return redirect()->route($this->route . '.index')->with(['message' => 'Feature created successfully!', 'alert-type' => 'success']);
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
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'button_more' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'donate_link' => 'nullable|string|max:255',
            'attach' => 'nullable|image',
        ]);


        $feature = Feature::find($id);

        $feature->title = $request->title;
        $feature->slug = Str::slug($request->title, '-');
        $feature->subtitle = $request->sub_title;
        $feature->button_more = $request->button_more;
        $feature->button_link = $request->button_link;
        $feature->donate_link = $request->donate_link;
        $feature->description = $request->description;

        //width: 400px height: 280px
        if ($request->hasFile('attach')) {
            $feature->attach = $this->updateImage($request, 'attach', $this->path, 1150, 850, $feature, 'attach');
        }

        $feature->save();
        return redirect()->back()->with(['message' => 'Feature updated successfully!', 'alert-type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feature = Feature::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $feature);

        //Delete Data
        $feature->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
