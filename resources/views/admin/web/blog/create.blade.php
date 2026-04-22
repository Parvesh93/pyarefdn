@section('title')
    Create {{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')
    <div class="max-w-7xl mx-10 my-4  p-6 bg-white shadow-lg ">
        <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-6">
            <div class="px-5 py-2">
                <h1 class="text-xl font-medium text-gray-800">Create {{ $title }}</h1>
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
                <a href="{{ route($route . '.create') }}"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>
    </div>

    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-1  items-start">
        <!-- Left Form -->
        <div class="col-span-1 mx-10 my-5   ">
            <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-3 bg-white shadow-md rounded p-6">
                @csrf


                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="title"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('title') }}" placeholder="Enter title" required />
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Sub Title </label>
                        <input type="text" name="sub_title"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('sub_title') }}" placeholder="Enter sub title" />
                    </div>



                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="button_more" class="block text-sm font-medium text-gray-700 mb-1">Button More </label>
                        <input type="text" name="button_more"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('button_more') }}" placeholder="Enter button more" />
                    </div>

                    <div>
                        <label for="button_link" class="block text-sm font-medium text-gray-700 mb-1">Button Link </label>
                        <input type="text" name="button_link"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('button_link') }}" placeholder="Enter button link" />
                    </div>

                </div>



                <div class="grid grid-cols-1 md:grid-cols-1">

                    <div>
                        <label for="blog_category" class="block text-sm font-medium text-gray-700 mb-1">Blog Category <span
                                class="text-red-500">*</span>
                        </label>
                        <select name="blog_category"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400" required>
                            <option value="">Select a category</option>
                            @foreach ($blogCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>


                    

                </div>



                 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        
                        <label for="created_date" class="block text-sm font-medium text-gray-700 mb-1">Created At <span
                                class="text-red-500">*</span></label>
                        <input type="date" name="created_date"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('created_date') }}" placeholder="Enter created at" />
                    
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
                                <option value="{{ $user->id }}" @if (old('author') == $user->id) selected @endif>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>




                


                <div>
                    <label for="attach" class="block text-sm font-medium text-gray-700 mb-1">
                        Photo
                        <span class="text-xs text-gray-500">(300px width)</span>
                        <span class="text-red-500">*</span>
                    </label>

                    <div class="flex flex-col items-center justify-center w-full">
                        <!-- Upload Box -->
                        <label for="attach"
                            class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-slate-50 hover:bg-slate-100 transition duration-200 ease-in-out">

                            <!-- Upload Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16V4m0 0l-4 4m4-4l4 4m6 8h-6a2 2 0 01-2-2V4m8 4h2a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V10a2 2 0 012-2h2" />
                            </svg>

                            <!-- Text -->
                            <p class="mt-2 text-sm text-gray-500">
                                <span class="font-medium text-blue-600">Click to upload</span> or drag & drop
                            </p>
                            <p class="text-xs text-gray-400">PNG, JPG (max 500px width)</p>

                            <input id="attach" name="attach" type="file" class="hidden"
                                onchange="previewImage(event)" />
                        </label>

                        <!-- Preview Box -->
                        <div id="preview-container" class="mt-4 hidden w-full">
                            <p class="text-xs text-gray-700 mb-1">Preview:</p>
                            <div class="w-full max-h-80 overflow-hidden rounded-lg shadow-md border">
                                <img id="preview-image" src="" alt="Uploaded Image Preview"
                                    class="w-full h-[130px] object-cover" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description <span
                            class="text-red-500">*</span></label>
                    <textarea id="texteditor" name="editor2" rows="4"
                        class="w-full textarea px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        placeholder="Write description...">{{ old('description') }}</textarea>

                </div>


                <button type="submit"
                    class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-check mr-2"></i> Create
                </button>
            </form>
        </div>




    </div>


    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const previewContainer = document.getElementById("preview-container");
                const previewImage = document.getElementById("preview-image");

                previewImage.src = URL.createObjectURL(file);
                previewContainer.classList.remove("hidden");
            }
        }
    </script>
@endsection
