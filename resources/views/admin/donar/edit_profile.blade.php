@section('title')
    EditProfile
@endsection

@extends('admin.layouts.master')

@section('adminContent')
    <div class="max-w-7xl mx-10 my-4  p-6 bg-white shadow-lg ">
        <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-6">
            <div class="px-5 py-2">
                <h1 class="text-xl font-medium text-gray-800">Edit Profile</h1>
            </div>
            <!-- Action Buttons -->

        </div>



    </div>
    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-1  items-start">
        <!-- Left Form -->
        <div class="col-span-1 mx-10 my-5   ">
            <form action="{{ route('admin.donor.updateProfile', $user->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-3 bg-white shadow-md rounded p-6">
                @csrf
                @method('PUT')

                <!-- Profile Image Display -->
                <div class="flex justify-center mb-6">
                    @if ($user->attach)
                        <img src="{{ asset('uploads/user/' . $user->attach) }}" alt="Profile Image"
                            class="w-40 h-40 rounded-full object-cover shadow-md">
                    @else
                        <img src="{{ asset('default-avatar.png') }}" alt="Default Image"
                            class="w-40 h-40 rounded-full object-cover shadow-md">
                    @endif
                </div>




                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="name"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $user->name }}" placeholder="Enter name" required />
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Email <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="email"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $user->email }}" placeholder="Enter email" required />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="contact" class="block text-sm font-medium text-gray-700 mb-1">Contact <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="contact"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ $user->contact }}" placeholder="Enter contact" required />
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

                </div>


                <!-- Description -->

                <button type="submit"
                    class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-sync-alt"></i> Update
                </button>
            </form>
        </div>




    </div>
@endsection
