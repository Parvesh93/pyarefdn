@section('title')
    Edit Staff
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
                <a href="{{ route($route . '.edit', $user->id) }}"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>
    </div>


    <div class="mx-10 p-6  mb-10 bg-white overflow-x-auto shadow-lg  ">



        <form action="{{ route($route . '.update', $user->id) }}" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 lg:grid-cols-2 gap-3">
            @csrf
            @method('PUT')


            <div>
                <label for="staff_id" class="block text-sm font-medium text-gray-700 mb-1">Staff ID <span
                        class="text-red-500">*</span></label>
                <input type="text" name="staff_id"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ $user->staff_id }}" placeholder="Enter staff ID" required />
            </div>

            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name <span
                        class="text-red-500">*</span></label>
                <input type="text" name="first_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ $user->first_name }}" placeholder="Enter first name" required />
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name
                </label>
                <input type="text" name="last_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ $user->last_name }}" placeholder="Enter last name" />
            </div>

            <div>
                <label for="father_name" class="block text-sm font-medium text-gray-700 mb-1">Father Name
                </label>
                <input type="text" name="father_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ $user->father_name }}" placeholder="Enter father name"  />
            </div>

            <div>
                <label for="mother_name" class="block text-sm font-medium text-gray-700 mb-1">Mother Name
                </label>
                <input type="text" name="mother_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ $user->mother_name }}" placeholder="Enter mother name"  />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span
                        class="text-red-500">*</span></label>
                <input type="email" name="email"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ $user->email }}" placeholder="Enter email" required />
            </div>



            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Gender <span
                        class="text-red-500">*</span></label>
                <select name="gender"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600"
                    required>
                    <option value="">{{ __('select') }}</option>
                    <option value="1" @if ($user->gender == 1) selected @endif>Male</option>
                    <option value="2" @if ($user->gender == 2) selected @endif>Female</option>
                    <option value="3" @if ($user->gender == 3) selected @endif>Other</option>

                </select>
            </div>


            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Role <span class="text-red-500">*</span></label>
                <select name="roles[]"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600"
                    required>
                    <option value="">{{ __('select') }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" {{ in_array($role->id, $userRoles) ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                    @endforeach



                </select>
            </div>



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
            <br />

            <div>
                <button type="submit"
                    class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-check mr-2"></i> Update
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
@endsection
