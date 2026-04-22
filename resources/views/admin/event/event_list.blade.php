@section('title')
{{ $title }} List
@endsection

@extends('admin.layouts.master')
@section('adminContent')
    <div class="max-w-7xl mx-4 my-4  p-6 bg-white shadow-lg ">
        <!-- Heading -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">{{ $title }} List</h2>
    </div>

    @isset($rows)
        <div class="mx-4 p-6 mb-4 bg-white overflow-x-auto shadow-lg  ">
            <table id="studentTable" class="display stripe hover w-full  text-sm border border-gray-200 rounded-lg">
                <thead class="bg-blue-500 text-white ">
                    <tr>
                        <th class=" px-3 py-2">Serial No</th>
                        <th class="border px-3 py-2">Event Title</th>
                        <th class="border px-3 py-2">Date</th>
                        <th class="border px-3 py-2">Location</th>
                        <th class="border px-4 py-2">Image</th>
                        

                        <th class=" px-3 py-2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $index => $row)
                        <tr class="hover:bg-gray-50">

                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->title }}</td>
                            <td>{{ date('j F Y', strtotime($row->start_date)) }}</td>
                            <td>{{ $row->location }}</td>
                            <td><img class="w-20 h-10 rounded" src="{{ asset('uploads/event/' . $row->attach) }}"
                                            alt=""></td>
                            <td class="flex gap-2">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-sky-700">
                                   <a href="{{ route($route.'.edit', $row->id) }}"><i class="fas fa-edit"></i></a>
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
