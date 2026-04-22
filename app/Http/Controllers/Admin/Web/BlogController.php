<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\RoleCondition;
use App\Models\User;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class BlogController extends Controller
{

    use FileUploader;

    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_blog', 1);
        $this->route     = 'admin.blog';
        $this->view      = 'admin.web.blog';
        $this->path      = 'blog';
        $this->access    = 'blog';

        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
        $this->middleware('permission:' . $this->access . '-condition', ['only' => ['ImageCondition']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $roleCondition = RoleCondition::where('status', '1')->first();

        // dd(Auth::user()->id);

        if (Auth::user()->role_id == $roleCondition->super_admin_id || Auth::user()->role_id == $roleCondition->admin_id || Auth::user()->role_id == $roleCondition->manager_id) {

            if (!empty($request->blog_category) || $request->blog_category != null) {
                $data['selected_blog_category'] = $blog_category = $request->blog_category;
            } else {
                $data['selected_blog_category'] = $blog_category = Null;
            }

            if (!empty($request->status) || $request->status != null) {
                $data['selected_status'] = $status = $request->status;
            } else {
                $data['selected_status'] = $status = Null;
            }


            if (!empty($request->created_date) || $request->created_date != null) {
                $data['selected_created_date'] = $created_date = $request->created_date;
            } else {
                $data['selected_created_date'] = $created_date = date('Y-m-d', strtotime(Carbon::today()));
            }

            $data['blogCategories'] = BlogCategory::where('status', '1')->orderBy('id', 'asc')->get();



            if (isset($request->blog_category) || isset($request->status) || isset($request->created_date)) {
                //  dd($request->created_date);
                $blogs = Blog::whereIn('status', [0, 1]);


                if (!empty($request->blog_category)) {
                    $blogs->where('blog_category_id', $blog_category);
                }

                if (!empty($request->status)) {
                    $blogs->where('status', $status);
                }
                if (!empty($request->created_date)) {
                    $blogs->whereDate('created_date', '<=', $created_date);
                }

                

                // dd($blogs);

                $data['blogs'] = $blogs->orderBy('id', 'desc')->get();
            }
            // else{
            //     $data['blogs']=Blog::whereIn('status', [0, 1])->orderBy('id', 'desc')->get();;
            // }

            $data['roleCondition'] = $roleCondition;


            return view($this->view . '.index', $data);
        } elseif (Auth::user()->role_id == $roleCondition->author_id) {

            if (!empty($request->blog_category) || $request->blog_category != null) {
                $data['selected_blog_category'] = $blog_category = $request->blog_category;
            } else {
                $data['selected_blog_category'] = $blog_category = Null;
            }

            if (!empty($request->status) || $request->status != null) {
                $data['selected_status'] = $status = $request->status;
            } else {
                $data['selected_status'] = $status = Null;
            }

            if (!empty($request->created_date) || $request->created_date != null) {
                $data['selected_created_date'] = $created_date = $request->created_date;
            } else {
                $data['selected_created_date'] = $created_date = date('Y-m-d', strtotime(Carbon::today()));
            }

            $data['blogCategories'] = BlogCategory::where('status', '1')->orderBy('id', 'asc')->get();


            // dd($request->from_date);
            if (isset($request->blog_category) || isset($request->status) || isset($request->created_date)) {
                // dd('s');
                $blogs = Blog::where('status', 0);

                if (!empty($request->blog_category)) {
                    $blogs->where('blog_category_id', $blog_category);
                }

                if (!empty($request->status)) {
                    $blogs->where('status', $status);
                }
                if (!empty($request->created_date)) {
                    $blogs->whereDate('created_date', '<=', $created_date);
                }
                $data['blogs'] = $blogs->orderBy('id', 'desc')->get();
            }

            $data['roleCondition'] = $roleCondition;

            return view($this->view . '.index', $data);
        } else {
            $data['blogs'] = Blog::where('status', 0)->orderBy('id', 'asc')->get();
            return view($this->view . '.index', $data);
        }
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

        $data['blogCategories'] = BlogCategory::where('status', '1')->orderBy('id', 'asc')->get();

        $data['users'] = User::where('status', 1)->get();



        return view($this->view . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_category' => 'required',
            'author' => 'required',
            'sub_title' => 'nullable|string',
            'description' => 'nullable|string',
            'attach' => 'nullable|image',
        ]);

        $roleCondition = RoleCondition::where('status', '1')->first();

        try {
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title, '-');
            $blog->blog_category_id = $request->blog_category;
            $blog->user_id = $request->author;
            $blog->sub_title = $request->sub_title;
            $blog->button_more = $request->button_more;
            $blog->button_link = $request->button_link;
            $blog->created_date = $request->created_date;




            if (Auth::user()->role_id == $roleCondition->super_admin_id) {
                $blog->status = 1; // Active
            } elseif (Auth::user()->role_id == $roleCondition->admin_id) {
                $blog->status = 1; // Active
            } elseif (Auth::user()->role_id == $roleCondition->manager_id) {
                $blog->status = 1; // Inactive
            } elseif (Auth::user()->role_id == $roleCondition->author_id) {
                $blog->status = 0; // Inactive
            } else {
                $blog->status = 0; // Inactive
            }


            $blog->description = $request->description;


            if ($request->hasFile('attach')) {
                $blog->attach = $this->uploadImage($request, 'attach', $this->path, 450, 320);
            }


            $blog->save();
            return redirect()->route($this->route . '.index')->with(['message' => 'Blog created successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Blog creation failed", 'alert-type' => 'error']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);

        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;
        $data['blog'] = $blog;

        $data['roleCondition'] = RoleCondition::where('status', '1')->first();
        $data['blogCategories'] = BlogCategory::orderBy('id', 'asc')->get();
        $data['users'] = User::where('status', 1)->get();

        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_category' => 'required',
            'author' => 'required',
            'sub_title' => 'nullable|string',
            'description' => 'nullable|string',
            'attach' => 'nullable|image',
        ]);

        $roleCondition = RoleCondition::where('status', '1')->first();

        try {
            $blog = Blog::findOrFail($id);

            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title, '-');
            $blog->blog_category_id = $request->blog_category;
            $blog->user_id = $request->author;
            $blog->sub_title = $request->sub_title;
            $blog->button_more = $request->button_more;

            $blog->button_link = $request->button_link;
            $blog->created_date = $request->created_date;
            $blog->updated_date = $request->updated_date;



            if (Auth::user()->role_id == $roleCondition->super_admin_id) {
                $blog->status = $request->status == 1 ? 1 : 0; // Active
            } elseif (Auth::user()->role_id == $roleCondition->admin_id) {
                $blog->status = $request->status == 1 ? 1 : 0; // Active
            } elseif (Auth::user()->role_id == $roleCondition->manager_id) {
                $blog->status = $request->status == 1 ? 1 : 0; // Inactive
            } elseif (Auth::user()->role_id == $roleCondition->author_id) {
                $blog->status = 0; // Inactive
            } else {
                $blog->status = 0; // Inactive
            }


            if ($request->hasFile('attach')) {
                $blog->attach = $this->updateImage($request, 'attach', $this->path, 450, 320, $blog, 'attach');
            }

            $blog->description = $request->description;
            $blog->created_at = $request->created_at;
            $blog->updated_at = $request->updated_at;

            $blog->update();
            return redirect()->back()->with(['message' => 'Blog updated successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Blog updation failed", 'alert-type' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $blog = Blog::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $blog);

        //Delete Data
        $blog->delete();

        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
