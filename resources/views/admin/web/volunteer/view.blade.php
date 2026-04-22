@section('title')
    Volunteer Details
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-5xl bg-white rounded shadow-lg p-8 md:p-12">

        <!-- Header -->
        <div class="flex items-center justify-between border-b pb-4 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-2">
                🙋 <span>Volunteer Details</span>
            </h2>
            
        </div>

        <!-- Details Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-sm">

            <!-- Name -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Full Name</p>
                <p class="font-medium text-gray-900 text-lg">{{ $volunteer->name }}</p>
            </div>

            <!-- Email -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Email</p>
                <p class="font-medium text-gray-900">{{ $volunteer->email }}</p>
            </div>

            <!-- Phone -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Phone</p>
                <p class="font-medium text-gray-900">{{ $volunteer->phone ?? 'N/A' }}</p>
            </div>

            <!-- Role -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Role</p>
                <p class="font-medium text-gray-900">{{ ucfirst($volunteer->role ?? 'Volunteer') }}</p>
            </div>

            <!-- Status -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Status</p>
                <span class="inline-block px-4 py-1.5 rounded-full text-sm font-semibold 
                             {{ $volunteer->status == 1 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }} shadow-sm">
                    {{ $volunteer->status == 1 ? 'Active' : 'Inactive' }}
                </span>
            </div>

            <!-- Joining Date -->
            <div class="bg-gray-100 rounded-lg p-4">
                <p class="text-gray-500">Joined On</p>
                <p class="font-medium text-gray-900">{{ $volunteer->created_at->format('d M Y, h:i A') }}</p>
            </div>

             <!-- Bio -->
            <div class="bg-gray-100 rounded-lg p-4 ">
                <p class="text-gray-500">Gender</p>
                <p class="font-medium text-gray-900">{{ $volunteer->gender ?? 'Not Provided' }}</p>
            </div>

            <div class="bg-gray-100 rounded-lg p-4 ">
                <p class="text-gray-500">Experience</p>
                <p class="font-medium text-gray-900">{{ $volunteer->experience ?? 'No experience available' }}</p>
            </div>

             <div class="bg-gray-100 rounded-lg p-4 ">
                <p class="text-gray-500">State</p>
                <p class="font-medium text-gray-900">{{ $volunteer->state ?? 'Not Provided' }}</p>
            </div>
             <div class="bg-gray-100 rounded-lg p-4 ">
                <p class="text-gray-500">Volunteer Id</p>
                <p class="font-medium text-gray-900">V{{ str_pad($volunteer->id, 4, '0', STR_PAD_LEFT) }}</p>
            </div>


            <!-- Address -->
            <div class="bg-gray-100 rounded-lg p-4 md:col-span-2">
                <p class="text-gray-500">Address</p>
                <p class="font-medium text-gray-900">{{ $volunteer->address ?? 'Not Provided' }}</p>
            </div>

           
        </div>

        <!-- Footer Button -->
        <div class="mt-10 flex justify-end">
            <a href="{{ route('admin.volunteer.index') }}"
               class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow transition">
                ← Back to Volunteers
            </a>
        </div>
    </div>
</div>
@endsection
