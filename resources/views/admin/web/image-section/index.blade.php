@section('title')
    {{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')
    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
        <!-- Left Form -->
        <div class="col-span-1 ml-3 my-3 ">
            <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-3 bg-white shadow-md rounded p-6">
                @csrf
                <div>
                    <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-4">
                        <h5 class="pl-1 text-lg font-semibold mb-4">Create {{ $title }}</h5>
                    </div>
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="title"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        value="{{ old('title') }}" placeholder="Enter title" required />
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description <span
                            class="text-red-500">*</span></label>
                    <textarea id="description" name="description" rows="4"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        placeholder="Write description...">{{ old('description') }}</textarea>

                </div>



                <button type="submit"
                    class="w-full py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-check mr-2"></i> Save
                </button>
            </form>
        </div>

        <!-- Right Table -->
        <div class="col-span-2 my-3 mr-3 bg-white overflow-x-auto shadow-lg">
            <div class="bg-white  p-6">
                <div class="bg-white shadow-sm border-l-4 border-blue-500">
                    <h5 class="pl-1 text-lg font-semibold  mb-4">{{ trans_choice('module_image_section', 2) }}
                        {{ __('list') }}</h5>
                </div>

                <div class="overflow-x-auto">
                    <table id="basic-table" class="display stripe hover w-full  text-sm border border-gray-200 ">
                        <thead class="bg-blue-500 text-white ">
                            <tr>
                                <th class="px-4 py-2 text-left font-medium ">#</th>
                                <th class="px-4 py-2 text-left font-medium ">Title</th>
                                <th class="px-4 py-2 text-left font-medium ">Status</th>
                                <th class="px-4 py-2 text-left font-medium ">Action</th>
                            </tr>
                        </thead>
                        @isset($imageSections)
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($imageSections as $index => $row)
                                    <tr>
                                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2">{{ $row->title }}</td>


                                        <td>
                                            @if ($row->status == 1)
                                                <span
                                                    class="px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white">
                                                    {{ 'Active' }}
                                                </span>
                                            @else
                                                <span
                                                    class="px-3 py-1 text-xs font-semibold rounded-full bg-red-500 text-white">
                                                    {{ 'Inactive' }}
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2 flex  space-x-2">
                                            <button class="px-3 py-2 bg-green-500 hover:bg-green-600 text-white rounded shadow">
                                                <i class="fas fa-eye"></i>
                                            </button>

                                            <button type="button"
                                                onclick="document.getElementById('editModal-{{ $row->id }}').classList.remove('hidden')"
                                                class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                                <i class="far fa-edit"></i>
                                            </button>
                                            @include($view . '.edit')


                                            <button onclick="openModal('deleteModal-{{ $row->id }}')"
                                                class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-700 shadow">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            @include('admin.common.delete')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @endisset
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
