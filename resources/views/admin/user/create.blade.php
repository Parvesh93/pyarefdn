@section('title')
    Create Staff
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="pf-admin-page pf-admin-content-page" data-admin-module="user">

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


    <div class="mx-10 p-6  mb-10 bg-white overflow-x-auto shadow-lg  ">



        <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 lg:grid-cols-2 gap-3">
            @csrf


            <div>
                <label for="staff_id" class="block text-sm font-medium text-gray-700 mb-1">Staff ID <span
                        class="text-red-500">*</span></label>
                <input type="text" name="staff_id"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ old('staff_id') }}" placeholder="Enter staff ID" required />
            </div>

            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name <span
                        class="text-red-500">*</span></label>
                <input type="text" name="first_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ old('first_name') }}" placeholder="Enter first name" required />
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name
                </label>
                <input type="text" name="last_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ old('last_name') }}" placeholder="Enter last name" />
            </div>

            <div>
                <label for="father_name" class="block text-sm font-medium text-gray-700 mb-1">Father Name
                </label>
                <input type="text" name="father_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ old('father_name') }}" placeholder="Enter father name"  />
            </div>

            <div>
                <label for="mother_name" class="block text-sm font-medium text-gray-700 mb-1">Mother Name
                </label>
                <input type="text" name="mother_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ old('mother_name') }}" placeholder="Enter mother name"  />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span
                        class="text-red-500">*</span></label>
                <input type="email" name="email"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ old('email') }}" placeholder="Enter email" required />
            </div>



            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Gender <span
                        class="text-red-500">*</span></label>
                <select name="gender"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600"
                    required>
                    <option value="">{{ __('select') }}</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Other</option>

                </select>
            </div>


            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Role <span class="text-red-500">*</span></label>
                <select name="roles[]"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600"
                    required>
                    <option value="">{{ __('select') }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @if (old('roles') == $role->id) selected @endif>
                            {{ $role->name }}</option>
                    @endforeach



                </select>
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

                        <input id="attach" name="attach" type="file" class="hidden" onchange="previewImage(event)" />
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
            <br />

            <div>
                <button type="submit"
                    class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-check mr-2"></i> Create
                </button>
            </div>


        </form>
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
