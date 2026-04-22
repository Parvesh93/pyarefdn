@section('title')
    Admin Dashboard
@endsection

@extends('admin.layouts.master')
@section('adminContent')
    <!-- Dashboard Section -->
    <main class="p-6 bg-[#f6f7fb] overflow-y-auto flex-1">
        <div class=" mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Dashboard Overview
            </h1>


        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total Donations</p>
                <h3 class="text-xl font-bold text-black">{{ $setting->currency_symbol }}{{ $total_donations->sum('amount') }}
                </h3>
                <p class="text-sm mt-1 
        {{ $percentageChangeDonation >= 0 ? 'text-green-500' : 'text-red-500' }}">
                    {{ $percentageChangeDonation >= 0 ? '↑' : '↓' }}
                    {{ abs($percentageChangeDonation) }}%
                    {{ $percentageChangeDonation >= 0 ? 'Up' : 'Down' }} from last month
                </p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total Donors</p>
                <h3 class="text-xl font-bold text-black">{{ $total_donors->count() }}+</h3>
                <p class="text-sm mt-1 
        {{ $donorPercentageChange >= 0 ? 'text-green-500' : 'text-red-500' }}">
                    {{ $donorPercentageChange >= 0 ? '↑' : '↓' }}
                    {{ abs($donorPercentageChange) }}%
                    {{ $donorPercentageChange >= 0 ? 'Up' : 'Down' }} from last year
                </p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total Volunteers</p>
                <h3 class="text-xl font-bold text-black">{{ $total_volunteers->count() }}+</h3>
                <p class="text-sm mt-1 
        {{ $volunteerPercentageChange >= 0 ? 'text-green-500' : 'text-red-500' }}">
                    {{ $volunteerPercentageChange >= 0 ? '↑' : '↓' }}
                    {{ abs($volunteerPercentageChange) }}%
                    {{ $volunteerPercentageChange >= 0 ? 'Up' : 'Down' }} from last year
                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total Campaigns</p>
                <h3 class="text-xl font-bold text-black">100+</h3>
                <p class="text-sm text-green-500 mt-1">
                    ↑ 20% Up from last month
                </p>
            </div>
        </div>

        <!-- Donations Chart Section -->
        <section class="mt-10 bg-white p-6 rounded-xl shadow">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <p class="text-xs text-gray-500 font-medium">DONATIONS</p>
                    <h2 class="text-xl font-bold text-gray-800">
                        {{ $setting->currency }} {{ number_format($totalDonations) }}
                    </h2>
                    <p class="text-sm font-medium {{ $percentageChange >= 0 ? 'text-green-500' : 'text-red-500' }}">
                        {{ $percentageChange >= 0 ? '↑' : '↓' }}
                        {{ abs($percentageChange) }}% vs last month
                    </p>
                    <p class="text-xs text-gray-400 mt-1">
                        Donation from 1–{{ $daysInMonth }} {{ $monthName }}
                    </p>
                </div>
                {{-- <div>
                    <button
                        class="bg-gray-100 px-4 py-2 rounded-md text-sm font-medium text-gray-600 shadow-sm hover:bg-gray-200">
                        {{ $monthName }} ▼
                    </button>
                </div> --}}


                <div>
                    <form method="GET" action="{{ route('admin.dashboard.index') }}">
                        <select name="month" onchange="this.form.submit()"
                            class="bg-gray-100 px-4 py-2 rounded-md text-sm font-medium text-gray-600 shadow-sm hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-400">

                            @foreach ($months as $value => $label)
                                <option value="{{ $value }}" {{ $selectedMonth == $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>

            <div class="h-64 w-full">
                <canvas id="donationChart" class="w-full h-full"></canvas>
            </div>
        </section>



        <!-- Campaign-wise + Quick Links Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
            <!-- Campaign-wise Pie Chart -->
            <div class="bg-white p-6 rounded-xl shadow">
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <p class="text-sm font-semibold text-gray-700">
                            Campaign-wise
                        </p>
                        <p class="text-xs text-gray-500">Donation Breakdown</p>
                    </div>
                    <button class="bg-gray-100 px-4 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-200">
                        April 2025 ▼
                    </button>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-48 h-48 mb-4">
                        <canvas id="pieChart"></canvas>
                    </div>
                    <div class="w-full">
                        <table class="w-full text-sm text-gray-700">
                            <thead>
                                <tr class="text-xs text-gray-500">
                                    <th class="text-left pb-1">TOP CHANNELS</th>
                                    <th class="text-right pb-1">VALUE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="flex items-center gap-2 py-1">
                                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>Education
                                    </td>
                                    <td class="text-right">Rs. 40,000</td>
                                </tr>
                                <tr>
                                    <td class="flex items-center gap-2 py-1">
                                        <span class="w-2 h-2 rounded-full bg-purple-600"></span>Health Care
                                    </td>
                                    <td class="text-right">Rs. 30,000</td>
                                </tr>
                                <tr>
                                    <td class="flex items-center gap-2 py-1">
                                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>Food Distribution
                                    </td>
                                    <td class="text-right">Rs. 28,000</td>
                                </tr>
                                <tr>
                                    <td class="flex items-center gap-2 py-1">
                                        <span class="w-2 h-2 rounded-full bg-gray-500"></span>Other
                                    </td>
                                    <td class="text-right">Rs. 10,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="bg-white p-6 rounded-xl shadow h-fit">
                <p class="text-sm font-semibold text-gray-700 mb-4">
                    Quick Links
                </p>
                <div class="flex flex-col sm:flex-row justify-around items-center gap-6">
                    <button
                        class="w-32 h-32 rounded-full text-white bg-purple-500 hover:bg-purple-600 font-semibold text-center shadow-md relative">
                        Add <br />
                        Campaign
                        <span
                            class="absolute -bottom-1 left-0 right-0 w-full h-full border-2 border-purple-200 rounded-full"></span>
                    </button>
                    <button
                        class="w-32 h-32 rounded-full text-white bg-cyan-400 hover:bg-cyan-500 font-semibold text-center shadow-md relative">
                        View <br />
                        Reports
                        <span
                            class="absolute -bottom-1 left-0 right-0 w-full h-full border-2 border-cyan-200 rounded-full"></span>
                    </button>
                    <button
                        class="w-32 h-32 rounded-full text-white bg-orange-400 hover:bg-orange-500 font-semibold text-center shadow-md relative">
                        Create <br />
                        Event
                        <span
                            class="absolute -bottom-1 left-0 right-0 w-full h-full border-2 border-orange-200 rounded-full"></span>
                    </button>
                </div>
            </div>
        </div>
    </main>




    <script src="{{ asset('backend/chart/js/chart.js') }}"></script>
    <script>
        const ctx = document.getElementById("donationChart").getContext("2d");
        new Chart(ctx, {
            type: "line",
            data: {
                labels: @json($labels),
                datasets: [{
                    label: "Donations",
                    data: @json($donationData),
                    borderColor: "#059669",
                    backgroundColor: "rgba(16, 185, 129, 0.1)",
                    tension: 0.3,
                    fill: true,
                    pointRadius: 4,
                    pointBackgroundColor: "#059669",
                    borderWidth: 2,
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                },
                scales: {
                    y: {
                        ticks: {
                            callback: (value) => "Rs. " + value,
                            color: "#6B7280",
                            font: {
                                size: 12
                            },
                        },
                        grid: {
                            color: "#E5E7EB"
                        },
                    },
                    x: {
                        ticks: {
                            color: "#6B7280",
                            font: {
                                size: 12
                            }
                        },
                        grid: {
                            color: "#F3F4F6"
                        },
                    },
                },
            },
        });
    </script>
@endsection
