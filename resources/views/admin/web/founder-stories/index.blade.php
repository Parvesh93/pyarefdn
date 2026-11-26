@section('title')
    {{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="pf-admin-page pf-admin-content-page" data-admin-module="founder-stories">

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-start">
    <div class="col-span-1 ml-3 my-3">
        <form action="{{ route($route.'.store') }}" method="POST" enctype="multipart/form-data"
              class="space-y-3 bg-white shadow-md rounded p-6">
            @csrf

            <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-4">
                <h5 class="pl-1 text-lg font-semibold">Create {{ $title }}</h5>
            </div>

            <input type="text" name="title" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Title" required>
            <input type="text" name="slug" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Slug (optional)">
            <input type="text" name="source_name" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Source name">
            <input type="date" name="story_date" class="w-full px-2 py-2 bg-blue-50 border-b-2">
            <input type="text" name="founder_name" value="Pyare Lal Kaul" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Founder name">
            <input type="number" name="sort_order" value="0" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Sort order">

            <textarea name="excerpt" rows="4" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Short excerpt"></textarea>
            <textarea name="content" rows="8" class="w-full px-2 py-2 bg-blue-50 border-b-2" placeholder="Full story content"></textarea>

            <div>
                <label class="block text-sm font-medium mb-1">Story Image</label>
                <input type="file" name="story_image" class="w-full">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Original Scan</label>
                <input type="file" name="original_scan" class="w-full">
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" name="is_featured" value="1" id="is_featured">
                <label for="is_featured">Featured</label>
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" name="status" value="1" checked id="status">
                <label for="status">Active</label>
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-green-600 hover:bg-green-700 text-white rounded-lg shadow">
                Save
            </button>
        </form>
    </div>

    <div class="col-span-2 my-3 mr-3 bg-white overflow-x-auto shadow-lg">
        <div class="p-6">
            <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-4">
                <h5 class="pl-1 text-lg font-semibold">Founder Stories List</h5>
            </div>

            <table class="display stripe hover w-full text-sm border border-gray-200">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Featured</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stories as $index => $row)
                        <tr>
                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2">{{ $row->title }}</td>
                            <td class="px-4 py-2">
                                @if($row->story_image)
                                    <img class="w-24 h-16 rounded object-cover" src="{{ asset('uploads/founder-stories/' . $row->story_image) }}" alt="">
                                @endif
                            </td>
                            <td class="px-4 py-2">{{ $row->story_date ? $row->story_date->format('d M Y') : '' }}</td>
                            <td class="px-4 py-2">{{ $row->is_featured ? 'Yes' : 'No' }}</td>
                            <td class="px-4 py-2">{{ $row->status ? 'Active' : 'Inactive' }}</td>
                            <td class="px-4 py-2">
    <div class="flex items-center gap-2">
        <a href="{{ route('admin.founder-stories.edit', $row->id) }}"
           class="px-3 py-1 bg-blue-500 text-white rounded text-sm">
            Edit
        </a>

        <form action="{{ route('admin.founder-stories.destroy', $row->id) }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete this story?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded text-sm">
                Delete
            </button>
        </form>
    </div>
</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection