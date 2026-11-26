@section('title')
    Donors
@endsection

@extends('admin.layouts.master')
@section('adminContent')
<div class="pf-admin-page" data-admin-module="donar">

    <div class="max-w-7xl mx-4 my-4  p-6 bg-white shadow-lg ">
        <!-- Heading -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Donors List</h2>
    </div>

    @isset($rows)
        <div class="mx-4 p-6 mb-4 bg-white overflow-x-auto shadow-lg  ">
            <table id="studentTable" class="display stripe hover w-full  text-sm border border-gray-200 rounded-lg">
                <thead class="bg-blue-500 text-white ">
                    <tr>
                        <th class=" px-3 py-2">Serial No</th>
                        <th class="border px-3 py-2">Name</th>
                        <th class="border px-3 py-2">Donor ID</th>
                        <th class="border px-3 py-2">Email</th>
                        <th class="border px-4 py-2">Contact</th>
                        <th class="border px-4 py-2">Transactions</th>
                        <th class="border px-4 py-2">Total Donation</th>

                        <th class=" px-3 py-2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $index => $row)
                        <tr class="hover:bg-gray-50">

                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>D{{ str_pad($row->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->successful_donations_count }}</td>
                            <td>Rs. {{ number_format($row->successful_donations_sum) }}</td>



                            <td class="flex gap-2">

                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    @can($access . '-view')
                                        <a href="{{ route($route . '.show', $row->id) }}"><i class="fa-solid fa-eye"></i></a>
                                    @endcan
                                </button>
                                <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-700">
                                    @can($access . '-password-print')
                                        <a href="{{ route($route . '.print.password', $row->id) }}" target="_blank"><i
                                                class="fa-solid fa-print"></i></a>
                                    @endcan
                                </button>

                                <button type="button"
                                    onclick="document.getElementById('printPasswordModel-{{ $row->id }}').classList.remove('hidden')"
                                    class="px-3 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
                                    <i class="fa-solid fa-lock"></i>
                                </button>
                                @include($view . '.view_password')

                                <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-700">
                                    @can($access . '-password-send')
                                        <a href="{{ route($route . '.send.password', $row->id) }}"><i
                                                class="fa-solid fa-paper-plane"></i></a>
                                    @endcan
                                </button>

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
