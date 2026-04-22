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
                <a href="{{ route($route . '.edit', $blog->id) }}"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>
    </div>
    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-1  items-start">
        <!-- Left Form -->
        <div class="col-span-1 mx-10 my-5   ">
            <form action="{{ route($route . '.update', $blog->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-3 bg-white shadow-md rounded p-6">
                @csrf
                @method('PUT')



                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="title"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $blog->title }}" placeholder="Enter name" required />
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Sub Title <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="sub_title"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $blog->sub_title }}" placeholder="Enter sub title" required />
                    </div>



                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="button_more" class="block text-sm font-medium text-gray-700 mb-1">Button More </label>
                        <input type="text" name="button_more"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $blog->button_more }}" placeholder="Enter button more" />
                    </div>

                    <div>
                        <label for="button_link" class="block text-sm font-medium text-gray-700 mb-1">Button Link </label>
                        <input type="text" name="button_link"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $blog->button_link }}" placeholder="Enter button link" />
                    </div>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="created_date" class="block text-sm font-medium text-gray-700 mb-1">Created At </label>
                        <input type="date" name="created_date"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $blog->created_date }}" placeholder="Enter created at" />
                    </div>

                    <div>
                        <label for="updated_date" class="block text-sm font-medium text-gray-700 mb-1">Updated At </label>
                        <input type="date" name="updated_date"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $blog->updated_date }}" placeholder="Enter updated at" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="blog_category" class="block text-sm font-medium text-gray-700 mb-1">Blog Category <span
                                class="text-red-500">*</span>
                        </label>
                        <select name="blog_category"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            id="blog_category" required>
                            <option value="">Select a category</option>
                            @foreach ($blogCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $blog->blog_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                     <div>
                        <label for="author" class="block text-sm font-medium text-gray-700 mb-1">
                            Authors <span class="text-red-500">*</span>
                        </label>
                        <select name="author"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            required>
                            <option value="">{{ __('select') }}</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" @if ($blog->user_id == $user->id) selected @endif>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <!-- Label -->
                        <label for="attach" class="block text-sm font-medium text-gray-700 mb-1">
                            Image
                            <span class="text-sm text-gray-500">(Height: auto, Width: 500px)</span>
                            <span class="text-red-500">*</span>
                        </label>

                        <!-- Custom File Input -->
                        <div class="flex items-center w-full  border border-gray-300 bg-gray-50 rounded">
                            <!-- Choose File Button -->
                            <label for="attach"
                                class="px-4 py-2 bg-gray-200 text-gray-700 cursor-pointer hover:bg-gray-300 rounded-l">
                                Choose File
                            </label>

                            <!-- Hidden Input -->
                            <input id="attach" name="attach" type="file" class="hidden"
                                onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'No file chosen'" />

                            <!-- File Name Placeholder -->
                            <span id="file-name" class="px-3 py-2 text-gray-500 flex-1">No file chosen</span>
                        </div>
                    </div>



                    @if (Auth::user()->role_id == $roleCondition->super_admin_id ||
                            Auth::user()->role_id == $roleCondition->admin_id ||
                            Auth::user()->role_id == $roleCondition->manager_id)
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Select Status
                            </label>
                            <select name="status"
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                                id="status">
                                <option value="">{{ 'All' }}</option>
                                <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>
                                    {{ __('status_active') }}
                                </option>
                                <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>
                                    {{ __('status_inactive') }}
                                </option>

                            </select>
                        </div>
                    @endif




                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description </label>
                    <textarea id="texteditor" name="description" rows="4"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        placeholder="Write description...">{{ $blog->description }}</textarea>

                </div>





                <button type="submit"
                    class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-sync-alt"></i> Update
                </button>
            </form>
        </div>




    </div>
@endsection
