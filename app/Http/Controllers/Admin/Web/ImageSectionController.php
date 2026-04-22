<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\ImageSection;
use Illuminate\Http\Request;

class ImageSectionController extends Controller
{


    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_image_section', 1);
        $this->route     = 'admin.image-section';
        $this->view      = 'admin.web.image-section';
        $this->path      = 'image-section';
        $this->access    = 'image-section';

        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
        $this->middleware('permission:' . $this->access . '-condition', ['only' => ['ImageCondition']]);
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

        $data['imageSections'] = ImageSection::where('status', '1')->orderBy('id', 'asc')->get();
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

        ]);

        try {

            $imageSection = new ImageSection();
            $imageSection->title = $request->title;
            $imageSection->description = $request->description;



            $imageSection->save();
            return redirect()->route($this->route . '.index')->with(['message' => 'Image Section created successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Image section creation failed", 'alert-type' => 'error']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

        ]);

        try {
            $imageSection = ImageSection::findOrFail($id);
            $imageSection->title = $request->title;
            $imageSection->description = $request->description;
            $imageSection->save();
            return redirect()->route($this->route . '.index')->with(['message' => 'Image Section updated successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Image section update failed", 'alert-type' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imageSection = ImageSection::findOrFail($id);
        $imageSection->delete();
        return redirect()->route($this->route . '.index')->with(['message' => 'Image Section deleted successfully!', 'alert-type' => 'success']);
    }

    //Method Image Section Condition
    public function ImageCondition(Request $request)
    {
        $request->validate([
            'image_section_id' => 'required|exists:image_sections,id',
            'condition' => 'required|string|max:255',
        ]);

        try {
            $imageSection = ImageSection::findOrFail($request->image_section_id);
            $imageSection->condition = $request->condition;
            $imageSection->save();

            return redirect()->route($this->route . '.index')->with(['message' => 'Image Section condition updated successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Image section condition update failed", 'alert-type' => 'error']);
        }
    }
}
