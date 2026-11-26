@section('title')
{{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="pf-admin-page pf-admin-content-page" data-admin-module="focus">

    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
        <!-- Left Form -->
        <div class="col-span-1 ml-3 my-3 ">
            <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-3 bg-white shadow-md rounded p-6">
                @csrf
                <div>
                    <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-4">
                        <h5 class="pl-1 text-lg font-semibold mb-4">Create Focused Item</h5>
                    </div>
                </div>


                <!-- Title -->
                {{-- <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="title" name="title"
                        class="mt-1 p-2 block w-full text-sm text-gray-700 bg-slate-100 border rounded-lg cursor-pointer focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-500"
                        placeholder="Enter title" required>

                </div> --}}

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="title"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        value="{{ old('title') }}" placeholder="Enter title" required />
                </div>

                <!-- Icon -->
                <div>
                    <label for="project_heading" class="block text-sm font-medium text-gray-700">Project heading <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="project_heading" name="project_heading"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        value="{{ old('project_heading') }}" placeholder="Enter project heading">
                </div>

                <div>
                    <label for="background_color" class="block text-sm font-medium text-gray-700">Background Color</label>
                    <input type="text" id="background_color" name="background_color"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        value="{{ old('background_color') }}" placeholder="Enter background color">
                </div>


                <div>
                    <label for="attach" class="block text-sm font-medium text-gray-700 mb-1">
                        Photo
                        <span class="text-xs text-gray-500">(400px width)</span>
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
                    <textarea id="description" name="description" rows="4"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        placeholder="Write description..." required>{{ old('description') }}</textarea>

                </div>

                <button type="submit"
                    class="w-full py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-check mr-2"></i> Save
                </button>
            </form>
        </div>

        <!-- Right Table -->
        <div class="col-span-2 my-3 mr-3 bg-white overflow-x-auto shadow-lg">
            <div class="bg-white  p-6">
                <div class="bg-white shadow-sm border-l-4 border-blue-500">
                    <h5 class="pl-1 text-lg font-semibold  mb-4">{{ trans_choice('module_focus', 2) }} {{ __('list') }}</h5>
                </div>

                <div class="overflow-x-auto">
                    <table id="basic-table" class="display stripe hover w-full  text-sm border border-gray-200 ">
                        <thead class="bg-blue-500 text-white ">
                            <tr>
                                <th class="px-4 py-2 text-left font-medium ">#</th>
                                <th class="px-4 py-2 text-left font-medium ">Title</th>
                                <th class="px-4 py-2 text-left font-medium ">Project Title</th>
                                <th class="px-4 py-2 text-left font-medium ">Image</th>
                                <th class="px-4 py-2 text-left font-medium ">Status</th>
                                <th class="px-4 py-2 text-left font-medium ">Action</th>
                            </tr>
                        </thead>
                        @isset($focuses)
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($focuses as $index => $row)
                                    <tr>
                                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2">{{ $row->title }}</td>
                                        <td class="px-4 py-2">{{ $row->heading }}</td>
                                        <td class="px-4 py-2">
                                            <img class="w-20 h-10 rounded" src="{{ asset('uploads/focus/' . $row->attach) }}"
                                                alt="">
                                        </td>
                                        <td>
                                            @if ($row->status == 1)
                                                <span
                                                    class="px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white">
                                                    {{ 'Active' }}
                                                </span>
                                            @else
                                                <span
                                                    class="px-3 py-1 text-xs font-semibold rounded-full bg-red-500 text-white">
                                                    {{ 'Inactive' }}
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2 flex  space-x-2">
                                            <button
                                                class="px-3 py-2 bg-green-500 hover:bg-green-600 text-white rounded shadow">
                                                <i class="fas fa-eye"></i>
                                            </button>

                                            <button type="button"
                                                onclick="document.getElementById('editModal-{{ $row->id }}').classList.remove('hidden')"
                                                class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                                <i class="far fa-edit"></i>
                                            </button>
                                            @include($view.'.edit')


                                            <button onclick="openModal('deleteModal-{{ $row->id }}')"
                                                class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-700 shadow">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            @include('admin.common.delete')
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>
                        @endisset

                    </table>
                </div>
            </div>
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

</div>
@endsection
