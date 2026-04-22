<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FounderStory;

class FounderStoryController extends Controller
{
    public function index()
    {
        $stories = FounderStory::where('status', 1)
            ->orderBy('sort_order', 'asc')
            ->orderBy('story_date', 'desc')
            ->paginate(9);

        return view('frontend.pages.founder_stories.index', compact('stories'));
    }

    public function show($slug)
    {
        $story = FounderStory::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $relatedStories = FounderStory::where('status', 1)
            ->where('id', '!=', $story->id)
            ->orderBy('story_date', 'desc')
            ->take(3)
            ->get();

        return view('frontend.pages.founder_stories.show', compact('story', 'relatedStories'));
    }
}