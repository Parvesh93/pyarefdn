<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_blog_comment', 1);
        $this->route     = 'admin.comment';
        $this->view      = 'admin.comment';
        $this->path      = 'comment';
        $this->access    = 'post-comment';

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


        $data['comments'] = Comment::orderBy('id', 'desc')->get();

        //   dd($comments);
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
        //
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



        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['comment'] = Comment::findOrFail($id);
        $data['blogs'] = Blog::where('status', 1)->get();

        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email'],
            'comment' => 'nullable|string',
        ]);

        try {
            $comment = Comment::findOrFail($id);

            $comment->name = $request->name;
            $comment->blog_id = $request->blog_id;
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->status = $request->status;

            $comment->save();
            return redirect()->back()->with(['message' => 'Post comment update successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Post Comment updation failed", 'alert-type' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        //Delete Data
        $comment->delete();

        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
