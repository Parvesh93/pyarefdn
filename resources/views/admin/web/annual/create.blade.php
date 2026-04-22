@section('title')
Create {{$title}}
@endsection

@extends('admin.layouts.master')
@section('adminContent')
    <!-- Header -->
    <div class="max-w-7xl mx-10 my-4  p-6 bg-white shadow-lg ">
        <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-6">
            <div class="px-5 py-2">
                <h1 class="text-xl font-medium text-gray-800">Create {{$title}}</h1>
            </div>
            <!-- Action Buttons -->

        </div>


        <div class="mb-6 flex gap-3">
            <button
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                <a href="{{ route($route.'.index') }}"><i class="fas fa-arrow-left"></i> Back</a>
            </button>
            <button
                class="bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                <a href="{{ route($route.'.create') }}"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>
    </div>



    <!-- Form Container -->


    <div class="mx-10 p-6  mb-10 bg-white overflow-x-auto shadow-lg  ">
        <form action="{{ route($route.'.store') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-2 gap-3">

            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    First Name <span class="text-red-500">*</span>
                </label>
                <input type="text" value="{{ old('first_name') }}" name="first_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Last Name <span class="text-red-500">*</span>
                </label>
                <input type="text" value="{{ old('last_name') }}" name="last_name"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>





            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" value="{{ old('email') }}" name="email"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <!-- Contact -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Contact <span class="text-red-500">*</span>
                </label>
                <input type="text" value="{{ old('contact') }}" name="contact"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <!-- DOB -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Date of Birth <span class="text-red-500">*</span>
                </label>
                <input type="date" value="{{ old('dob') }}" name="dob"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

           
            <!-- City -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    City <span class="text-red-500">*</span>
                </label>
                <input type="text" value="{{ old('city') }}" name="city"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <!-- State -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    State <span class="text-red-500">*</span>
                </label>
                <select
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    name="state">

                    <option value="">Select State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh
                    </option>
                    <option value="Arunachal Pradesh">Arunachal
                        Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh
                    </option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal
                        Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh
                    </option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh
                    </option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </div>

            <!-- Gender -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Gender <span class="text-red-500">*</span>
                </label>
                <select name="gender"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                    <option value="">Select Gender</option>
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                    <option value="OTHER">OTHER</option>
                </select>
            </div>

             <!-- Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Address <span class="text-red-500">*</span>
                </label>

                <textarea name="address"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">{{ old('address') }}</textarea>
            </div>


            <!-- Previous Experience -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Any Previous Experience <span class="text-red-500">*</span>
                </label>
                <textarea name="experience"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">{{ old('experience') }}</textarea>
            </div>

            <!-- Why Do You Want to Join -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Why Do you Want Join <span class="text-red-500">*</span>
                </label>
                <textarea name="join"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">{{ old('join') }}</textarea>
            </div>

            <!-- Update Button -->
            <div>
                <div class="mt-14 w-full flex justify-end">
                    <button
                        class="bg-cyan-500 hover:bg-cyan-600 text-white px-6 py-2  rounded flex items-center gap-2 transition-colors font-medium">
                        <i class="fas fa-sync-alt"></i>
                        Create
                    </button>
                </div>
            </div>


        </form>
    </div>
    <script>
        // Add any interactive functionality here
        document.addEventListener('DOMContentLoaded', function() {
            console.log('NGO Foundation form loaded');
        });
    </script>
@endsection
