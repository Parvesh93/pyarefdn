<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Focuse;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class FocusController extends Controller
{
    use FileUploader;

     function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_focus', 1);
        $this->route     = 'admin.focus';
        $this->view      = 'admin.web.focus';
        $this->path      = 'focus';
        $this->access    = 'focus';

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

        $data['focuses'] = Focuse::where('status', '1')->orderby('id', 'asc')->get();
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
        // dd($request->all());

        $request->validate([
            'title' => 'required|string|max:255',
            'project_heading' => 'required|string|max:255',
            'attach' => 'nullable|image' // Max size 2MB
        ]);


        // dd($request->attach);



        $focus = new Focuse();

        $focus->title = $request->title;
        $focus->heading = $request->project_heading;
        $focus->bg_color = $request->background_color;
        $focus->description = $request->description;

        //width: 400px height: 280px
        if ($request->hasFile('attach')) {
            $focus->attach = $this->uploadImage($request, 'attach', $this->path, 400, 280);
        }

        $focus->save();

        return redirect()->route('admin.focus.index')->with(['message' => 'Focus created successfully!', 'alert-type' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }



    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'project_heading' => 'required|string|max:255',
            'attach' => 'nullable|image' // Max size 2MB
        ]);


        $focus = Focuse::find($id);
        $focus->title = $request->title;
        $focus->heading = $request->project_heading;
        $focus->bg_color = $request->background_color;
        $focus->description = $request->description;
        //width: 400px height: 280px

        $focus->attach = $this->updateImage($request, 'attach', $this->path, 390, 280, $focus, 'attach');

        $focus->save();
        return redirect()->back()->with(['message' => 'Focus updated successfully!', 'alert-type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $focus = Focuse::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $focus);

        //Delete Data
        $focus->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
