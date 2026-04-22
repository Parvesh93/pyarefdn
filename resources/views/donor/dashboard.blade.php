@section('title')
    Donor Dashboard
@endsection

@extends('donor.layouts.master')
@section('donorContent')
    <!-- Dashboard Section -->
    <main class="p-6 bg-[#f6f7fb] overflow-y-auto flex-1">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Dashboard Overview
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total Donations</p>
                <h3 class="text-xl font-bold text-black">{{ $setting->currency_symbol }}{{ $total_donations->sum('amount') }}
                </h3>
            </div>
        </div>
    </main>
@endsection
