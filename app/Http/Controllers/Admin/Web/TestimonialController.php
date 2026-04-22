<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    use FileUploader;
    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_testimonial', 1);
        $this->route     = 'admin.testimonial';
        $this->view      = 'admin.web.testimonial';
        $this->path      = 'testimonial';
        $this->access    = 'testimonial';

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

        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['testimonials'] = Testimonial::where('status', '1')->orderBy('id', 'asc')->get();

        return view($this->view . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        return view($this->view . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'attach' => 'nullable|image',
        ]);

        try {
            $testimonial = new Testimonial();
            $testimonial->name = $request->name;
            $testimonial->sub_title = $request->sub_title;
            $testimonial->description = $request->description;

            if ($request->hasFile('attach')) {
                $testimonial->attach = $this->uploadImage($request, 'attach', $this->path, 180, 180);
            }

            $testimonial->save();
            return redirect()->route($this->route . '.index')->with(['message' => 'Testimonial created successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Testimonial creation failed", 'alert-type' => 'error']);
        }
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
        $testimonial = Testimonial::findOrFail($id);
        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;
        $data['testimonial'] = $testimonial;

        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'attach' => 'nullable|image',
        ]);

        try {
            $testimonial = Testimonial::findOrFail($id);

            $testimonial->name = $request->name;
            $testimonial->sub_title = $request->sub_title;
            $testimonial->description = $request->description;

            if ($request->hasFile('attach')) {
                $testimonial->attach = $this->updateImage($request, 'attach', $this->path, 180, 200, $testimonial, 'attach');
            }

            $testimonial->update();
            return redirect()->route($this->route . '.index')->with(['message' => 'Testimonial updated successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Testimonial updataion failed", 'alert-type' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $testimonial = Testimonial::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $testimonial);

        //Delete Data
        $testimonial->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
