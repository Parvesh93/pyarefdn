@section('title')
{{ $title }}
@endsection

@extends('admin.layouts.master')
@section('adminContent')
    <div class="max-w-7xl mx-4 my-4  p-6 bg-white shadow-lg ">
        <!-- Heading -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">{{ $title }} List</h2>


        <!-- Buttons -->
        <div class="flex gap-3 mb-6">
            <button
                class="px-5 py-2.5 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 hover:scale-105 transition">
                <a href="{{ route($route . '.create') }}"><i class="fa-regular fa-plus"></i> Add New</a>
            </button>

            <button
                class="px-5 py-2.5 bg-teal-500 text-white rounded-lg shadow hover:bg-teal-600 hover:scale-105 transition flex items-center gap-2">

                <a href="{{ route($route . '.index') }}"><i class="fa-solid fa-rotate"></i> Refresh</a>
            </button>
        </div>
    </div>



    @isset($rows)
        <div class="mx-4 p-6 mb-4 bg-white overflow-x-auto shadow-lg  ">
            <table id="studentTable" class="display stripe hover w-full  text-sm border border-gray-200 rounded-lg">
                <thead class="bg-blue-500 text-white ">
                    <tr>
                        <th class=" px-3 py-2">Serial No</th>
                        <th class="border px-3 py-2">Name</th>
                        <th class="border px-3 py-2">Volunteer ID</th>
                        <th class="border px-3 py-2">Email</th>
                        <th class="border px-4 py-2">Contact</th>
                        <th class="border px-4 py-2">City</th>
                        <th class="border px-4 py-2">State</th>

                        <th class=" px-3 py-2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $index => $row)
                        <tr class="hover:bg-gray-50">

                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>V{{ str_pad($row->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->city }}</td>
                            <td>{{ $row->state }}</td>



                            <td class="flex gap-1">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    @can($access . '-view')
                                        <a href="{{ route($route . '.show', $row->id) }}"><i class="fa-solid fa-eye"></i></a>
                                    @endcan
                                </button>
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    @can($access . '-edit')
                                        <a href="{{ route($route . '.edit', $row->id) }}">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
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



        {{-- <div class="mx-4 p-6 mb-4 bg-white shadow-lg rounded-lg">

            <!-- Desktop Table -->
            <div class="overflow-x-auto hidden md:block">
                <table id="studentTable" class="min-w-full border-collapse border border-gray-200 text-sm">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="px-3 py-2">Serial No</th>
                            <th class="px-3 py-2">Name</th>
                            <th class="px-3 py-2">Amount</th>
                            <th class="px-3 py-2">Email</th>
                            <th class="px-3 py-2">Campaign</th>
                            <th class="px-3 py-2">Payment Date</th>
                            <th class="px-3 py-2">Payment ID</th>
                            <th class="px-3 py-2">Payment Method</th>
                            <th class="px-3 py-2">Status</th>
                            <th class="px-3 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $index => $row)
                            <tr class="hover:bg-gray-50">
                                <td class="px-3 py-2">{{ $index + 1 }}</td>
                                <td class="px-3 py-2">{{ $row->first_name }} {{ $row->last_name }}</td>
                                <td class="px-3 py-2">{{ $row->amount }}</td>
                                <td class="px-3 py-2">{{ $row->email }}</td>
                                <td class="px-3 py-2">{{ $row->campaign }}</td>
                                <td class="px-3 py-2">{{ $row->payment_date }}</td>
                                <td class="px-3 py-2">{{ $row->payment_id }}</td>
                                <td class="px-3 py-2">{{ $row->payment_method }}</td>
                                <td class="px-3 py-2">{{ $row->payment_status }}</td>
                                <td class="px-3 py-2 flex gap-2">
                                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                        <i class="fas fa-edit"></i>
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

            <!-- Mobile Card View -->
            <div class="space-y-4 md:hidden">
                @foreach ($rows as $index => $row)
                    <div class="bg-white shadow rounded-lg p-4 border border-gray-200">
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-700">Name:</span>
                            <span>{{ $row->first_name }} {{ $row->last_name }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-700">Amount:</span>
                            <span>{{ $row->amount }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-700">Email:</span>
                            <span>{{ $row->email }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-700">Campaign:</span>
                            <span>{{ $row->campaign }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-700">Payment Date:</span>
                            <span>{{ $row->payment_date }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-700">Status:</span>
                            <span>{{ $row->payment_status }}</span>
                        </div>
                        <div class="flex gap-2 mt-3">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="openModal('deleteModal-{{ $row->id }}')"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            @include('admin.common.delete')
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}
    @endisset








@endsection
