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
                 <a href="{{ route($route.'.create') }}"><i class="fa-regular fa-plus"></i> Add New</a>
            </button>

            <button
                class="px-5 py-2.5 bg-teal-500 text-white rounded-lg shadow hover:bg-teal-600 hover:scale-105 transition flex items-center gap-2">

                <a href="{{ route($route.'.index') }}"> <i class="fa-solid fa-rotate"></i> Refresh</a>
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
                        <th class="border px-3 py-2">Annual ID</th>
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
                            <td>A{{ str_pad($row->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->city }}</td>
                            <td>{{ $row->state }}</td>



                            <td class="flex gap-1">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    @can($access . '-view')
                                        <a href="{{ route($route.'.show', $row->id) }}"><i class="fa-solid fa-eye"></i></a>
                                    @endcan
                                </button>
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                    @can($access . '-edit')
                                        <a href="{{ route($route.'.edit', $row->id) }}">
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

    @endisset








@endsection
