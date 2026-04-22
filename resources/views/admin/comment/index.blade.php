@section('title')
    {{ $title }}
@endsection

@extends('admin.layouts.master')
@section('adminContent')
    <div class="max-w-7xl mx-4 my-4  p-6 bg-white shadow-lg ">
        <!-- Heading -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">{{ trans_choice('module_blog_comment', 2) }}
            {{ __('list') }}</h2>
    </div>


    <div class="mx-4 p-6 mb-4 bg-white overflow-x-auto shadow-lg  ">
        <table id="studentTable" class="display stripe hover w-full  text-sm border border-gray-200 rounded-lg">
            <thead class="bg-blue-500 text-white ">
                <tr>
                    <th class=" px-3 py-2">Serial No</th>
                    <th class="border px-3 py-2">Name</th>
                    <th class="border px-3 py-2">Email</th>
                    <th class="border px-3 py-2">Blog</th>
                    <th class="border px-3 py-2">Comment</th>

                    <th class="px-4 py-2 text-left font-medium ">Status</th>
                    <th class=" px-3 py-2">Action</th>

                </tr>
            </thead>
            @isset($comments)
                <tbody>
                    @foreach ($comments as $index => $row)
                        <tr class="hover:bg-gray-50">

                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ Str::limit($row->blog->title, 50, '...') }}</td>
                            <td>{{ Str::limit($row->comment, 50, '...') }}</td>

                            <td>
                                @if ($row->status == 1)
                                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white">
                                        {{ 'Active' }}
                                    </span>
                                @else
                                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-500 text-white">
                                        {{ 'Inactive' }}
                                    </span>
                                @endif
                            </td>



                            <td class="flex gap-2">

                                <button onclick="openModal('showModal-{{ $row->id }}')"
                                    class="px-3 py-2 bg-green-500 hover:bg-green-600 text-white rounded shadow">
                                    <i class="fas fa-eye"></i>
                                </button>
                                @include('admin.comment.view')


                                <button type="button"
                                    class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                    <a href="{{ route($route . '.edit', $row->id) }}"><i class="far fa-edit"></i></a>
                                </button>


                                <button onclick="openModal('deleteModal-{{ $row->id }}')"
                                    class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-700 shadow">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                @include('admin.common.delete')


                            </td>

                        </tr>
                    @endforeach
                </tbody>
            @endisset
        </table>
    </div>



@endsection
