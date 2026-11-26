@section('tittle')
    Edit Donation
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="pf-admin-page" data-admin-module="donation">

    <section>

        <div class="max-w-6xl mx-auto p-5">
            <!-- Header Section -->
            <div class="bg-white  shadow-md p-5 mb-5">

                <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-6">
                    <div class="px-5 py-2">
                        <h1 class="text-xl font-medium text-gray-800">Edit Donation</h1>
                    </div>
                    <!-- Action Buttons -->

                </div>
                

                <div class="mb-6 flex gap-3">
                    <button
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                        <a href="{{route($route . '.index') }}"><i class="fas fa-arrow-left"></i> Back</a>
                    </button>
                    <button
                        class="bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                        <a href="{{ route($route . '.edit', $donation->id) }}"><i class="fas fa-sync-alt"></i>
                            Refresh</a>
                    </button>
                </div>
            </div>

            <!-- Form Container -->
            <div class="bg-white  shadow-md p-8">
                <form id="" action="{{ route($route . '.update', $donation->id) }}" method="POST"
                    class="space-y-6">
                    @csrf
                    @method('PUT')
                    <!-- Registration Details Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="paymentId" class="block text-sm font-semibold text-gray-600">
                                Payment Id <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="paymentId" name="paymentId" value="{{ $donation->payment_id }}"
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        </div>
                        <div class="space-y-2">
                            <label for="paymentMethod" class="block text-sm font-semibold text-gray-600">
                                Payment Method <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="paymentMethod" name="paymentMethod"
                                value="{{ $donation->payment_method }}"
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        </div>
                    </div>


                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                       
                        <div class="space-y-2">
                            <label for="paymentDate" class="block text-sm font-semibold text-gray-600">
                                Payment Date <span class="text-red-500">*</span>
                            </label>
                            <input type="date" id="paymentDate" name="payment_date"
                                value="{{ $donation->payment_date }}"
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        </div>

                        <div class="space-y-2">
                            <label for="amount" class="block text-sm font-semibold text-gray-600">
                                Amount <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="amount" name="amount" value="{{ $donation->amount }}" required
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        </div>
                    </div>

                    <!-- Basic Information Row -->
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div class="space-y-2">
                            <label for="firstName" class="block text-sm font-semibold text-gray-600">
                                Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="firstName" name="name" value="{{ $donation->name }}" required
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        </div>

                        

                    </div>

                    <!-- Contact Information Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="contact" class="block text-sm font-semibold text-gray-600">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="contact" name="contact" value="{{ $donation->contact }}" required
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-semibold text-gray-600">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" value="{{ $donation->email }}" required
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        </div>
                    </div>


                    <!-- Foundation Details Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div class="space-y-2">
                            <label for="foundationType" class="block text-sm font-semibold text-gray-600">
                                Payment Status <span class="text-red-500">*</span>
                            </label>
                            <select id="foundationType" name="payment_status" required
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                                <option value="">Select Payment status</option>
                                <option value="Completed"{{ $donation->payment_status == 'Completed' ? ' selected' : '' }}>
                                    Completed</option>
                                <option value="Failed"{{ $donation->payment_status == 'Failed' ? ' selected' : '' }}>Failed
                                </option>
                                <option value="Pending"{{ $donation->payment_status == 'Pending' ? ' selected' : '' }}>
                                    Pending</option>
                                <option value="Refunded"{{ $donation->payment_status == 'Refunded' ? ' selected' : '' }}>
                                    Refunded</option>
                                <option
                                    value="Chargeback"{{ $donation->payment_status == 'Chargeback' ? ' selected' : '' }}>
                                    Chargeback</option>

                            </select>
                        </div>
                        <!-- Campaign & Financial Row -->
                        <div class="space-y-2">
                            <label for="currentCampaign" class="block text-sm font-semibold text-gray-600">
                                Current Campaign <span class="text-red-500">*</span>
                            </label>
                            <select id="currentCampaign" name="campaign" required
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                                <option value="">Select Campaign</option>
                                <option value="General"{{ $donation->campaign == 'General' ? ' selected' : '' }}>General
                                </option>
                                <option
                                    value="education_for_all"{{ $donation->campaign == 'education_for_all' ? ' selected' : '' }}>
                                    Education for All</option>
                                <option value="clean_water"{{ $donation->campaign == 'clean_water' ? ' selected' : '' }}>
                                    Clean Water Initiative</option>
                                <option
                                    value="food_security"{{ $donation->campaign == 'food_security' ? ' selected' : '' }}>
                                    Food Security Program</option>
                                <option
                                    value="healthcare_access"{{ $donation->campaign == 'healthcare_access' ? ' selected' : '' }}>
                                    Healthcare Access</option>
                                <option
                                    value="skill_development"{{ $donation->campaign == 'skill_development' ? ' selected' : '' }}>
                                    Skill Development</option>
                                <option
                                    value="emergency_relief"{{ $donation->campaign == 'emergency_relief' ? ' selected' : '' }}>
                                    Emergency Relief</option>
                            </select>
                        </div>
                    </div>




                    <!-- Financial Details Row -->
                    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="totalAmount" class="block text-sm font-semibold text-gray-600">
                            Total Amount Raised <span class="text-red-500">*</span>
                        </label>
                        <input type="number" id="totalAmount" name="totalAmount" value="2500000" step="0.01" readonly
                               class="w-full px-3 py-3 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 bg-gray-50">
                    </div>
                    <div class="space-y-2">
                        <label for="targetAmount" class="block text-sm font-semibold text-gray-600">
                            Target Amount
                        </label>
                        <input type="number" id="targetAmount" name="targetAmount" value="5000000" step="0.01"
                               class="w-full px-3 py-3 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-colors">
                    </div>
                </div> --}}

                    <!-- Location Details Row -->
                    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="state" class="block text-sm font-semibold text-gray-600">
                            State <span class="text-red-500">*</span>
                        </label>
                        <select id="state" name="state" required
                                class="w-full px-3 py-3 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-colors cursor-pointer">
                            <option value="">Select State</option>
                            <option value="bihar" selected>Bihar</option>
                            <option value="delhi">Delhi</option>
                            <option value="maharashtra">Maharashtra</option>
                            <option value="karnataka">Karnataka</option>
                            <option value="tamil_nadu">Tamil Nadu</option>
                            <option value="west_bengal">West Bengal</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label for="district" class="block text-sm font-semibold text-gray-600">
                            District <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="district" name="district" value="PATNA" required
                               class="w-full px-3 py-3 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-colors">
                    </div>
                </div> --}}

                    <!-- Full Width Address -->
                    <div class="space-y-2">
                        <label for="address" class="block text-sm font-semibold text-gray-600">
                            Complete Address <span class="text-red-500">*</span>
                        </label>
                        <textarea id="address" name="address" required rows="3"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">{{ $donation->address }}</textarea>
                    </div>

                    <!-- Status & Date Row -->
                    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="status" class="block text-sm font-semibold text-gray-600">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select id="status" name="status" required
                                class="w-full px-3 py-3 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-colors cursor-pointer">
                            <option value="">Select Status</option>
                            <option value="active" selected>Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="pending">Pending Approval</option>
                            <option value="suspended">Suspended</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label for="registrationDate" class="block text-sm font-semibold text-gray-600">
                            Registration Date <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="registrationDate" name="registrationDate" value="2023-01-15" required
                               class="w-full px-3 py-3 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-colors">
                    </div>
                </div> --}}

                    <!-- Full Width Description -->
                    {{-- <div class="space-y-2">
                    <label for="description" class="block text-sm font-semibold text-gray-600">
                        Foundation Description
                    </label>
                    <textarea id="description" name="description" rows="4"
                              class="w-full px-3 py-3 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-colors resize-y">Hope Foundation is dedicated to providing quality education to underprivileged children in rural areas of Bihar. We focus on building schools, training teachers, and providing educational materials to ensure every child has access to basic education.</textarea>
                </div> --}}

                    <!-- Update Button -->
                    <div class="flex justify-end pt-4">
                        <button type="submit"
                            class="flex items-center gap-2 px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors duration-300 font-medium">
                            <i class="fas fa-sync-alt"></i> {{ __('btn_update') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>



    </section>

</div>
@endsection
