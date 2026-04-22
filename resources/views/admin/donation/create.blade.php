@section('title')
    Create Donation
@endsection

@extends('admin.layouts.master')
@section('adminContent')
    <!-- Header -->
    <div class="max-w-7xl mx-10 my-4  p-6 bg-white shadow-lg ">
        <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-6">
            <div class="px-5 py-2">
                <h1 class="text-xl font-medium text-gray-800">Add New Donation</h1>
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



    <!-- Form Container -->


    <div class="mx-10 p-6  mb-10 bg-white overflow-x-auto shadow-lg  ">
        <form id="payment-form" action="{{ route($route.'.store') }}" method="POST" class="space-y-3">

            @csrf

            <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">

            <!-- Name -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <!-- Email -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 ">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" value="{{ old('email') }}" name="email"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                </div>

                <!-- Contact -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 ">
                        Contact <span class="text-red-500">*</span>
                    </label>
                    <input type="text" value="{{ old('contact') }}" name="contact"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">



                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 ">
                        Payment Date <span class="text-red-500">*</span>
                    </label>
                    <input type="date" value="{{ old('payment_date') }}" name="payment_date"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                </div>

                <!-- City -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 ">
                        Amount <span class="text-red-500">*</span>
                    </label>
                    <input type="text" value="{{ old('amount') }}" id="customAmount" name="amount"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- <div class="space-y-2">
                    <label for="foundationType" class="block text-sm font-semibold text-gray-600">
                        Payment Status <span class="text-red-500">*</span>
                    </label>
                    <select id="foundationType" name="payment_status" required
                        class="w-full px-3 py-2 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 ">
                        <option value="">Select Payment status</option>
                        <option value="Completed">
                            Completed</option>
                        <option value="Failed">Failed</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Pending">Pending</option>
                        <option value="Refunded">Refunded</option>
                        <option value="Chargeback">
                            Chargeback</option>

                    </select>
                </div> --}}
                <!-- Campaign & Financial Row -->
                <div class="space-y-2">
                    <label for="currentCampaign" class="block text-sm font-semibold text-gray-600">
                        Current Campaign <span class="text-red-500">*</span>
                    </label>
                    <select id="currentCampaign" name="campaign" required
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        <option value="">Select Campaign</option>
                        <option value="General">General
                        </option>
                        <option value="education_for_all">
                            Education for All</option>
                        <option value="clean_water">
                            Clean Water Initiative</option>
                        <option value="food_security">
                            Food Security Program</option>
                        <option value="healthcare_access">
                            Healthcare Access</option>
                        <option value="skill_development">
                            Skill Development</option>
                        <option value="emergency_relief">
                            Emergency Relief</option>
                    </select>
                </div>


                <!-- Address -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 ">
                        Address <span class="text-red-500">*</span>
                    </label>

                    <textarea name="address"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">{{ old('address') }}</textarea>
                </div>
            </div>


            <!-- Update Button -->
            
                <div class="mt-2 w-full flex justify-end">
                    <button id="pay-button" type="submit"
                        class="bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2  rounded flex items-center gap-2 transition-colors font-medium">
                        <i class="fas fa-sync-alt"></i>
                        Add Donation
                    </button>
                </div>
            


        </form>
    </div>

   
@endsection
