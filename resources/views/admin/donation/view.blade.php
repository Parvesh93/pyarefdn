@section('title')
    Donation Details
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-5xl bg-white rounded-xl shadow-lg p-8 md:p-12">

        <!-- Header -->
        <div class="flex items-center justify-between border-b pb-4 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-2">
                💳 <span>Donation Details</span>
            </h2>
            
        </div>

        <!-- Details Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-sm">

            <!-- Name -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Donor Name</p>
                <p class="font-medium text-gray-900 text-lg">{{ $donation->name }}</p>
            </div>

            <!-- Amount -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Amount</p>
                <p class="font-bold text-green-600 text-xl">{{ $donation->currency }} {{$donation->amount}}</p>
            </div>

            <!-- Email -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Email</p>
                <p class="font-medium text-gray-900">{{ $donation->email }}</p>
            </div>

            <!-- Campaign -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Campaign</p>
                <p class="font-medium text-gray-900">Education for All</p>
            </div>

            <!-- Payment Date -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Payment Date</p>
                <p class="font-medium text-gray-900"> {{ date('d M Y, h:i A', strtotime($donation->payment_date)) }}</p>
            </div>

            <!-- Payment ID -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Payment ID</p>
                <p class="font-mono text-gray-800">{{ $donation->payment_id }}</p>
            </div>

            <!-- Payment Method -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Payment Method</p>
                <p class="font-medium text-gray-900">{{ $donation->payment_method }}</p>
            </div>

            <!-- Status -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Status</p>
                <span class="inline-block px-4 py-1.5 rounded-full text-sm font-semibold 
                             bg-green-100 text-green-700 shadow-sm">
                    ✅ {{ ucfirst($donation->payment_status) }}
                </span>
            </div>
        </div>

        <!-- Footer Button -->
        <div class="mt-10 flex justify-end">
            <a href="{{ route('admin.donation.index') }}"
               class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow transition">
                ← Back to Donations
            </a>
        </div>
    </div>
</div>

@endsection
