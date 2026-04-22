@section('title')
Donor Transactions
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="min-h-screen bg-gray-50 py-10 px-4 sm:px-6 lg:px-8">

   

    <!-- Card -->
    <div class="mx-4 bg-white rounded mb-3 shadow-lg p-6">

        <!-- Donor Info -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 border-b pb-4">
            <div>
                <h2 class="text-xl font-bold text-gray-800">Donor: {{$user->name}}</h2>
                <p class="text-gray-500">Email: {{$user->email}}</p>
                <p class="text-gray-500">Phone: {{$user->phone}}</p>
            </div>
            <div class="mt-4 md:mt-0">
                <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                    Total Donated: ₹{{$user->donations_sum_amount}}
                </span>
            </div>
        </div>

    
    </div>

    <!-- Transactions Table -->
        <div class="mx-4 p-6 mb-4 bg-white overflow-x-auto shadow-lg  ">
            <table id="studentTable" class="display stripe hover w-full  text-sm border border-gray-200 rounded-lg">
                <thead class="bg-blue-500 text-white ">
                    <tr>
                        <th class=" px-3 py-2">Serial No</th>
                        <th class="border px-3 py-2">Name</th>
                        <th class="border px-3 py-2">Donor ID</th>
                        <th class="border px-3 py-2">Email</th>
                        <th class="border px-4 py-2">Contact</th>
                        <th class="border px-4 py-2">Date</th>
                        <th class="border px-4 py-2">Total Donation</th>

                        <th class="border px-4 py-2 hidden">Total Donation</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $index => $row)
                        <tr class="hover:bg-gray-50">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>D{{ str_pad($row->donor->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->contact }}</td>
                            <td>{{ $row->payment_date }}</td>
                            <td>Rs. {{ number_format($row->amount) }}</td>
                            <td class="hidden">Rs. {{ number_format($row->amount) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection
