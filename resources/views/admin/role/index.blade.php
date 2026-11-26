@section('title')
Roles and Permission
@endsection

@extends('admin.layouts.master')
@section('adminContent')
<div class="pf-admin-page pf-admin-content-page" data-admin-module="role">

    <div class="max-w-7xl mx-4 my-4  p-6 bg-white shadow-lg ">
        <!-- Heading -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">{{ $title }} List</h2>

        <!-- Buttons -->
        <div class="flex gap-3 mb-6">
            @can($access . '-create')
                <button
                    class="px-5 py-2.5 bg-blue-600 text-black rounded-lg shadow hover:bg-blue-700 hover:scale-105 transition">
                    <a href="{{ route($route . '.create') }}" class="text-white"><i class="fa-regular fa-plus"></i> Add New</a>
                </button>
            @endcan
            <button
                class="px-5 py-2.5 bg-teal-500 text-black rounded-lg shadow hover:bg-teal-600 hover:scale-105 transition flex items-center gap-2">

                <a href="{{ route($route . '.index') }}" class="text-white"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>


    </div>

    @isset($roles)
        <div class="mx-4 p-6 mb-4 bg-white overflow-x-auto shadow-lg  ">
            <table id="studentTable" class="display stripe hover w-full  text-sm border border-gray-200 rounded-lg">
                <thead class="bg-blue-500 text-white ">
                    <tr>
                        <th>#</th>
                        <th>{{ __('field_title') }}</th>
                        <th>{{ __('field_action') }}</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($roles as $key => $row)
                        <tr class="hover:bg-gray-50">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>

                                <button class="px-3 py-2 bg-green-500 hover:bg-green-600 text-white rounded shadow">
                                    <a href="{{ route($route . '.show', $row->id) }}"><i class="fa-solid fa-eye"></i></a>
                                </button>


                                {{-- @can($access . '-edit') --}}
                                    <button class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                        <a href="{{ route($route . '.edit', $row->id) }}"><i class="fas fa-edit"></i></a>
                                    </button>
                                {{-- @endcan --}}

                                @can($access . '-delete')
                                    @php
                                        $roles_slug = [
                                            'super-admin',
                                            'admin',
                                            'accountant',
                                            'librarian',
                                            'receptionist',
                                            'teacher',
                                        ];
                                    @endphp
                                    @if (in_array($row->slug, $roles_slug))
                                    @else
                                        <button onclick="openModal('deleteModal-{{ $row->id }}')"
                                            class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-700 shadow">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <!-- Include Delete modal -->
                                        @include('admin.common.delete')
                                    @endif
                                @endcan
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endisset


</div>
@endsection
