<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{



    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_blog_category', 1);
        $this->route     = 'admin.category';
        $this->view      = 'admin.blog.category';
        $this->path      = 'blog-category';
        $this->access    = 'blog-category';

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

        $data['blogCategories'] = BlogCategory::orderBy('id', 'asc')->get();

        return view($this->view . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

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

            $blogCategory = new BlogCategory();
            $blogCategory->title = $request->title;
            $blogCategory->slug = Str::slug($request->title, '-');
            $blogCategory->description = $request->description;
            $blogCategory->save();

            return redirect()->route($this->route . '.index')->with(['message' => 'Blog category created successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to create blog category.',
                'alert-type' => 'error'
            ]);
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

            $blogCategory = BlogCategory::findOrFail($id);
            $blogCategory->title = $request->title;
            $blogCategory->slug = Str::slug($request->title, '-');
            $blogCategory->description = $request->description;
            $blogCategory->status = $request->status;
            $blogCategory->save();

            return redirect()->route($this->route . '.index')->with(['message' => 'Blog category updated successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to update blog category.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try {
            $blogCategory = BlogCategory::findOrFail($id);
            $blogCategory->delete();

            return redirect()->back()->with([
                'message' => 'Blog category deleted successfully!',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to delete blog category.',
                'alert-type' => 'error'
            ]);
        }
    }
}
