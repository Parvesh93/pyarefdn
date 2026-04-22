<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    

    public function comment(Request $request )
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email'],
            'comment' => 'nullable|string',
        ]);



        try {
            $comment = new Comment();
            
            $comment->name=$request->name;
            $comment->blog_id=$request->blog_id;
            $comment->email=$request->email;
            $comment->comment=$request->comment;

            $comment->save();
            return redirect()->back()->with(['message' => 'Post comment sent successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Post Comment failed", 'alert-type' => 'error']);
        }

    }
}
