<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\Comment;

class BlogController extends Controller
{

    public function blog()
    {
        $data['blogs'] = Blog::where('status', '1')->orderBy('id', 'asc')->get();
        $data['categories'] = BlogCategory::where('status', '1')->orderBy('id', 'asc')->get();
        $data['years'] = range(now()->year, 2000);
        $data['months'] = [
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ];
        return view('frontend.pages.blog', $data);
    }

    public function blogDetails($id, $slug)
    {
        // Get the current blog
        $blog = Blog::where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();

        // Get related blogs by similar slug keyword or category (example: first word in slug)
        $slugKeyword = explode('-', $slug)[0]; // Gets the first word of the slug
        // ->where('slug', 'LIKE', '%' . $slugKeyword . '%') - Example of using slug keyword
        $relatedBlogs = Blog::where('id', '!=', $id)
            ->where('blog_category_id', $blog->blogCategory->id)
            ->where('status', '1')
            ->inRandomOrder()
            ->take(3)
            ->get();



      $recentComment = Comment::where('blog_id',$id)->where('status','1')->get();    



        // Return to view with data
        return view('frontend.pages.single_blog', [
            'blog' => $blog,
            'relatedBlogs' => $relatedBlogs,
            'recentComments' => $recentComment,
        ]);
    }

    public function filterBlog(Request $request)
    {

        $query = Blog::query();

        // Year Filter
        if ($request->filled('year') && $request->year !== 'All') {
            $query->whereYear('created_date', $request->year);
        }

        // Month Filter
        if ($request->filled('month') && $request->month !== 'All') {
            $query->whereMonth('created_date', $request->month);
        }

        // Category Filter
        if ($request->filled('category') && $request->category !== 'All') {
            $query->where('blog_category_id', $request->category);
        }

        // Get filtered blogs
        $blogs = $query->latest('created_date')->get();

        // Reuse year, month, and category data for dropdowns
        $years = range(now()->year, 2000);
        $months = [
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ];
        $categories = BlogCategory::where('status', '1')->orderBy('id', 'asc')->get();

        return view('frontend.pages.blog', compact('blogs', 'years', 'months', 'categories'));
    }
}
