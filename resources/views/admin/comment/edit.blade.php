@section('title')
    Edit {{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')
    <div class="max-w-7xl mx-10 my-4  p-6 bg-white shadow-lg ">
        <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-6">
            <div class="px-5 py-2">
                <h1 class="text-xl font-medium text-gray-800">Edit {{ $title }}</h1>
            </div>
            <!-- Action Buttons -->

        </div>


        <div class="mb-6 flex gap-3">
            <button
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                <a href="{{ route($route . '.index') }}"><i class="fas fa-arrow-left"></i> Back</a>
            </button>
            <button
                class="bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                <a href="{{ route($route . '.edit', $comment->id) }}"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>
    </div>
    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-1  items-start">
        <!-- Left Form -->
        <div class="col-span-1 mx-10 my-5   ">
            <form action="{{ route($route . '.update', $comment->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-3 bg-white shadow-md rounded p-6">
                @csrf
                @method('PUT')



                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="name"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $comment->name }}" placeholder="Enter name" required />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span
                                class="text-red-500">*</span></label>
                        <input type="email" name="email"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $comment->email }}" placeholder="Enter email" required />
                    </div>



                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="blog_id" class="block text-sm font-medium text-gray-700 mb-1">Blog Category <span
                                class="text-red-500">*</span>
                        </label>
                        <select name="blog_id"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            id="blog_id" required>
                            <option value="">Select a blog</option>
                            @foreach ($blogs as $blog)
                                <option value="{{ $blog->id }}" {{ $comment->blog_id == $blog->id ? 'selected' : '' }}>
                                    {{ $blog->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Select Status
                        </label>
                        <select name="status"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            id="status">
                            <option value="">{{ 'All' }}</option>
                            <option value="1" {{ $comment->status == 1 ? 'selected' : '' }}>
                                {{ __('status_active') }}
                            </option>
                            <option value="0" {{ $comment->status == 0 ? 'selected' : '' }}>
                                {{ __('status_inactive') }}
                            </option>

                        </select>
                    </div>



                </div>



                <!-- Description -->
                <div>
                    <label for="comment" class="block text-sm font-medium text-gray-700">Comment </label>
                    <textarea id="comment" name="comment" rows="4"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        placeholder="Write comment...">{{ $comment->comment }}</textarea>

                </div>





                <button type="submit"
                    class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-sync-alt"></i> Update
                </button>
            </form>
        </div>




    </div>
@endsection
