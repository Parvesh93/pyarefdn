@section('title')
    Edit Founder Story
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="max-w-4xl mx-auto my-6 bg-white shadow-md rounded p-6">
    <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-4">
        <h5 class="pl-1 text-lg font-semibold">Edit Founder Story</h5>
    </div>

    <form action="{{ route('admin.founder-stories.update', $story->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ old('title', $story->title) }}" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Title" required>

        <input type="text" name="slug" value="{{ old('slug', $story->slug) }}" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Slug">

        <input type="text" name="source_name" value="{{ old('source_name', $story->source_name) }}" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Source name">

        <input type="date" name="story_date" value="{{ old('story_date', $story->story_date ? $story->story_date->format('Y-m-d') : '') }}" class="w-full px-2 py-2 bg-blue-50 border-b-2">

        <input type="text" name="founder_name" value="{{ old('founder_name', $story->founder_name) }}" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Founder name">

        <input type="number" name="sort_order" value="{{ old('sort_order', $story->sort_order) }}" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Sort order">

        <textarea name="excerpt" rows="4" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Short excerpt">{{ old('excerpt', $story->excerpt) }}</textarea>

        <textarea name="content" rows="8" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Full story content">{{ old('content', $story->content) }}</textarea>

        <div>
            <label class="block text-sm font-medium mb-1">Story Image</label>
            <input type="file" name="story_image" class="w-full">
            @if($story->story_image)
                <img src="{{ asset('uploads/founder-stories/' . $story->story_image) }}" class="w-32 mt-2 rounded">
            @endif
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Original Scan</label>
            <input type="file" name="original_scan" class="w-full">
            @if($story->original_scan)
                <img src="{{ asset('uploads/founder-stories/' . $story->original_scan) }}" class="w-32 mt-2 rounded">
            @endif
        </div>

        <div class="flex items-center gap-2">
            <input type="checkbox" name="is_featured" value="1" id="is_featured"
                {{ old('is_featured', $story->is_featured) ? 'checked' : '' }}>
            <label for="is_featured">Featured</label>
        </div>

        <div class="flex items-center gap-2">
            <input type="checkbox" name="status" value="1" id="status"
                {{ old('status', $story->status) ? 'checked' : '' }}>
            <label for="status">Active</label>
        </div>

        <button type="submit" class="px-5 py-2 bg-green-600 text-white rounded">
            Update Story
        </button>
    </form>
</div>
@endsection