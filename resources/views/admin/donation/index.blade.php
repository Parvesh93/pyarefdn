@section('title')
    Donation
@endsection

@extends('admin.layouts.master')
@section('adminContent')
<div class="pf-admin-page" data-admin-module="donation">

    <div class="max-w-7xl mx-4 my-4  p-6 bg-white shadow-lg ">
        <!-- Heading -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">{{$title}} {{__('list')}}</h2>

        <!-- Buttons -->
        <div class="flex gap-3 mb-6">
            <button
                class="px-5 py-2.5 bg-blue-600 text-black rounded-lg shadow hover:bg-blue-700 hover:scale-105 transition">
               <a href="{{ route($route . '.create') }}" class="text-white"><i class="fa-regular fa-plus"></i> Add New</a> 
            </button>
            <button
                class="px-5 py-2.5 bg-teal-500 text-black rounded-lg shadow hover:bg-teal-600 hover:scale-105 transition flex items-center gap-2">
                
                <a href="{{ route($route . '.index') }}" class="text-white"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>

        <!-- Filter Row -->
        <form method="GET" action="{{ route($route . '.index') }}">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">


                <!-- Campaigns -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Campaigns</label>
                    <select name="campaign"
                        class="w-full px-2 py-2  bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600">
                        <option value="">{{ 'All' }}</option>
                        <option value="General" @if ($selected_campaign == 'General') selected @endif>General</option>
                        <option value="second" @if ($selected_campaign == 'health') selected @endif>Health</option>
                        <option value="third" @if ($selected_campaign == 'education') selected @endif>Education</option>
                    </select>
                </div>

                <!-- Status -->

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select name="status"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600">
                        <option value="">{{ 'All' }}</option>
                        <option value="complete" @if ($selected_status == 'complete') selected @endif>Complete</option>
                        <option value="failed" @if ($selected_status == 'failed') selected @endif>Failed</option>

                    </select>
                </div>

                <!-- From Date -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">From Date</label>
                    <input type="date" name="start_date"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600"
                        value="{{ $selected_start_date }}" />
                </div>

                <!-- To Date -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">To Date</label>
                    <input type="date" name="end_date"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600"
                        value="{{ $selected_end_date }}" />
                </div>


                <!-- Search Button -->
                <div class="flex items-center mt-6">
                    <!-- Search Button -->
                    <button type="submit"
                        class="h-[42px] px-6 bg-blue-500 text-white rounded-md shadow hover:bg-blue-600 hover:scale-105 flex items-center justify-center gap-2">
                        Search
                    </button>
                </div>


            </div>
        </form>

    </div>

    @isset($rows)
        <div class="mx-4 p-6 mb-4 bg-white overflow-x-auto shadow-lg  ">
            <table id="studentTable" class="display stripe hover w-full  text-sm border border-gray-200 rounded-lg">
                <thead class="bg-blue-500 text-white ">
                    <tr>
                        <th class="px-3 py-2">Serial No</th>
                        <th class="border px-3 py-2">Name</th>
                        <th class="border px-3 py-2">Donor ID</th>
                        <th class="border px-3 py-2">Amount</th>
                        <th class="border px-3 py-2">Email</th>
                        <th class="border px-3 py-2">Campaign</th>
                        <th class="border px-3 py-2">Payment Date</th>
                        <th class="border px-3 py-2">Payment ID</th>
                        <th class="border px-3 py-2">Payment Method</th>
                        <th class="border px-3 py-2">Status</th>
                        <th class="px-3 py-2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $index => $row)
                        <tr class="hover:bg-gray-50">

                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>D{{ str_pad($row->donor_id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td>Rs. {{ $row->amount }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->campaign }}</td>
                            <td>{{ $row->payment_date }}</td>
                            <td>{{ $row->payment_id }}</td>
                            <td>{{ $row->payment_method }}</td>
                            <td>{{ $row->payment_status }}</td>

                            <td class="flex gap-2">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    <a href="{{ route('admin.donation.show', $row->id) }}"><i class="fa-solid fa-eye"></i></a>
                                </button>
                                 <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    <a  href="{{ route('admin.print.donation', $row->id) }}" target="_blank"><i class="fa-solid fa-print"></i></a>
                                </button>
                             
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                   <a href="{{ route('admin.donation.edit', $row->id) }}"><i class="fas fa-edit"></i></a>
                                </button>
                                <!-- Delete Button -->

                                <button onclick="openModal('deleteModal-{{ $row->id }}')"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                @include('admin.common.delete')

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endisset


</div>
@endsection
