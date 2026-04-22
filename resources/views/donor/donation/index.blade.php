@section('title')
  Donor  Donation
@endsection

@extends('donor.layouts.master')
@section('donorContent')
    <div class="max-w-7xl mx-4 my-4  p-6 bg-white shadow-lg ">
        <!-- Heading -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Donations List</h2>

        <!-- Buttons -->
        <div class="flex gap-3 mb-6">
           
            <button
                class="px-5 py-2.5 bg-teal-500 text-black rounded-lg shadow hover:bg-teal-600 hover:scale-105 transition flex items-center gap-2">
                
                <a href="{{ route('donor.donation.index') }}" class="text-white"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>
    </div>

@isset($rows)
        <div class="mx-4 p-6 mb-4 bg-white overflow-x-auto shadow-lg  ">
            <table id="studentTable" class="display stripe hover w-full  text-sm border border-gray-200 rounded-lg">
                <thead class="bg-blue-500 text-white ">
                    <tr>
                        <th class="px-3 py-2">Serial No</th>
                        <th class="border px-3 py-2">Name</th>
                        <th class="border px-3 py-2">User ID</th>
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
                            <td>{{ $row->user_id }}</td>
                            <td>Rs. {{ $row->amount }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->campaign }}</td>
                            <td>{{ $row->payment_date }}</td>
                            <td>{{ $row->payment_id }}</td>
                            <td>{{ $row->payment_method }}</td>
                            <td>{{ $row->payment_status }}</td>

                            <td class="flex gap-2">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    <a href="{{ route('donor.donation.show', $row->id) }}"><i class="fa-solid fa-eye"></i></a>
                                </button>

                                 <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    <a  href="{{ route('donor.print.donation', $row->id) }}" target="_blank"><i class="fa-solid fa-print"></i></a>
                                </button>
                             
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endisset

@endsection
