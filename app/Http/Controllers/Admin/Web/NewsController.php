<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use FileUploader;

    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_news', 1);
        $this->route     = 'admin.news';
        $this->view      = 'admin.web.news';
        $this->path      = 'news';
        $this->access    = 'news';

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

        $data['news'] = News::where('status', '1')->orderBy('id', 'asc')->get();

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
            'title'  => 'required|string|max:255',
            'attach' => 'nullable|image',
        ]);

        $news = new News();
        $news->title = $request->title;
        

        if ($request->hasFile('attach')) {
           

            $news->attach = $this->uploadMedia($request, 'attach', $this->path);
        }

        $news->save();

        return redirect()
            ->route($this->route . '.index')
            ->with([
                'message'    => 'News created successfully!',
                'alert-type' => 'success',
            ]);
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
            'title'  => 'required|string|max:255',
            'attach' => 'nullable|image',
        ]);

        $news = News::findOrFail($id);

        $news->title = $request->title;

       

        // ✅ Default width/height when file uploaded but no custom dimensions
        if ($request->hasFile('attach')) {
                
            
         $news->attach = $this->updateMultiMedia($request, 'attach', $this->path, $news, 'attach');
        }
        

        $news->save();

        return redirect()->back()->with([
            'message' => 'News updated successfully!',
            'alert-type' => 'success',
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $news);

        //Delete Data
        $news->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
