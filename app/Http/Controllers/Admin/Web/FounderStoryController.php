<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\FounderStory;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FounderStoryController extends Controller
{
    use FileUploader;

    function __construct()
    {
        $this->title  = 'Founder Story';
        $this->route  = 'admin.founder-stories';
        $this->view   = 'admin.web.founder-stories';
        $this->path   = 'founder-stories';
        $this->access = 'founder-stories';
    }

    public function index()
    {
        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['stories'] = FounderStory::orderBy('sort_order', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        return view($this->view . '.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'slug'          => 'nullable|string|max:255|unique:founder_stories,slug',
            'excerpt'       => 'nullable|string',
            'content'       => 'nullable|string',
            'source_name'   => 'nullable|string|max:255',
            'story_date'    => 'nullable|date',
            'story_image'   => 'nullable|image',
            'original_scan' => 'nullable|image',
        ]);

        $story = new FounderStory();
        $story->title = $request->title;
        $story->slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->title) . '-' . strtolower(Str::random(5));
        $story->excerpt = $request->excerpt;
        $story->content = $request->content;
        $story->source_name = $request->source_name;
        $story->story_date = $request->story_date;
        $story->founder_name = $request->founder_name ?? 'Pyare Lal Kaul';
        $story->is_featured = $request->has('is_featured') ? 1 : 0;
        $story->sort_order = $request->sort_order ?? 0;
        $story->status = $request->status ?? 1;

        if ($request->hasFile('story_image')) {
            $story->story_image = $this->uploadMedia($request, 'story_image', $this->path);
        }

        if ($request->hasFile('original_scan')) {
            $story->original_scan = $this->uploadMedia($request, 'original_scan', $this->path);
        }

        $story->save();

        return redirect()->back()->with([
            'message' => 'Founder story created successfully!',
            'alert-type' => 'success',
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'slug'          => 'nullable|string|max:255|unique:founder_stories,slug,' . $id,
            'excerpt'       => 'nullable|string',
            'content'       => 'nullable|string',
            'source_name'   => 'nullable|string|max:255',
            'story_date'    => 'nullable|date',
            'story_image'   => 'nullable|image',
            'original_scan' => 'nullable|image',
        ]);

        $story = FounderStory::findOrFail($id);

        $story->title = $request->title;
        $story->slug = $request->slug ? Str::slug($request->slug) : $story->slug;
        $story->excerpt = $request->excerpt;
        $story->content = $request->content;
        $story->source_name = $request->source_name;
        $story->story_date = $request->story_date;
        $story->founder_name = $request->founder_name ?? 'Pyare Lal Kaul';
        $story->is_featured = $request->has('is_featured') ? 1 : 0;
        $story->sort_order = $request->sort_order ?? 0;
        $story->status = $request->status ?? 1;

        if ($request->hasFile('story_image')) {
            $story->story_image = $this->updateMultiMedia($request, 'story_image', $this->path, $story, 'story_image');
        }

        if ($request->hasFile('original_scan')) {
            $story->original_scan = $this->updateMultiMedia($request, 'original_scan', $this->path, $story, 'original_scan');
        }

        $story->save();

        return redirect()->back()->with([
            'message' => 'Founder story updated successfully!',
            'alert-type' => 'success',
        ]);
    }

    public function destroy(string $id)
    {
        $story = FounderStory::findOrFail($id);
        $this->deleteMedia($this->path, $story);
        $story->delete();

        return redirect()->back()->with([
            'message' => 'Founder story deleted successfully!',
            'alert-type' => 'success',
        ]);
    }

    public function edit(string $id)
{
    $story = FounderStory::findOrFail($id);
    return view('admin.web.founder-stories.edit', compact('story'));
}

}