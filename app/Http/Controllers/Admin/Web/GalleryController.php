<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\ImageCondition;
use App\Models\ImageSection;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class GalleryController extends Controller
{

    use FileUploader;
  
    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_gallery', 1);
        $this->route     = 'admin.gallery';
        $this->view      = 'admin.web.gallery';
        $this->path      = 'gallery';
        $this->access    = 'gallery';

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


        $data['galleries'] = Gallery::with(['imageSection'])->where('status', '1')->orderBy('id', 'asc')->get();
        // dd($data);
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
            'attach' => 'required|image',
        ]);

        $imageSectionCondition = ImageCondition::first();

        try {

            if ($request->image_section == $imageSectionCondition->govind_leela) {
                $gallery = new Gallery();
                $gallery->title = $request->title;
                $gallery->image_section = $request->image_section;
                $gallery->description = $request->description;

                if ($request->hasFile('attach')) {
                    $gallery->attach = $this->uploadImage($request, 'attach', $this->path,  1150, 850);
                }

                $gallery->save();
                return redirect()->route('admin.gallery.index')->with(['message' => 'Govind Leela Gallery created successfully!', 'alert-type' => 'success']);
            } else {
                $gallery = new Gallery();
                $gallery->title = $request->title;
                $gallery->image_section = $request->image_section;
                $gallery->description = $request->description;

                if ($request->hasFile('attach')) {
                    $gallery->attach = $this->uploadImage($request, 'attach', $this->path,   170, 50,);
                }

                $gallery->save();
                return redirect()->route('admin.gallery.index')->with(['message' => 'Gallery created successfully!', 'alert-type' => 'success']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Gallery creation failed", 'alert-type' => 'error']);
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
            // 'attach' => 'required|image',
        ]);


        $imageSectionCondition = ImageCondition::first();

        try {

            if ($request->image_section == $imageSectionCondition->govind_leela) {

                // dd('ss');
                $gallery = Gallery::findOrFail($id);
                $gallery->title = $request->title;
                $gallery->image_section = $request->image_section;
                $gallery->description = $request->description;

                if ($request->hasFile('attach')) {
                    $gallery->attach =  $this->updateImage($request, 'attach', $this->path, 1150, 850, $gallery, 'attach');
                }

                $gallery->update();
                return redirect()->route('admin.gallery.index')->with(['message' => 'Govind Leela Gallery Updated successfully!', 'alert-type' => 'success']);
            } else {

                // dd('sg');
                $gallery = Gallery::findOrFail($id);
                $gallery->title = $request->title;
                $gallery->image_section = $request->image_section;
                $gallery->description = $request->description;

                if ($request->hasFile('attach')) {
                    $gallery->attach =  $this->updateImage($request, 'attach', $this->path, 170, 170, $gallery, 'attach');
                }

                $gallery->update();
                return redirect()->route('admin.gallery.index')->with(['message' => 'Gallery Updated successfully!', 'alert-type' => 'success']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Gallery updation failed", 'alert-type' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $gallery = Gallery::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $gallery);

        //Delete Data
        $gallery->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }


   public function UploadImage(Request $request)
    {
        $imag = $request->file('file');
        $fileTime = time() . '.' . $imag->extension();
        $new_path = 'uploads/tinymce/' . $fileTime;
        $path = ImageManager::imagick()->read($imag)->save($new_path);

        return json_encode(['location'=>asset('uploads/tinymce/' . $fileTime)]);
    }
}
