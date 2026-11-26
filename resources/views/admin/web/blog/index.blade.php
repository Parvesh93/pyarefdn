@section('title')
    {{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="pf-admin-page pf-admin-content-page" data-admin-module="blog">


    <div class="max-w-7xl mx-4 my-4  p-6 bg-white shadow-lg ">
        <!-- Heading -->
        <div class="bg-white  border-l-4 border-blue-500">
            <h2 class="text-2xl ml-1 font-bold text-gray-800 mb-6 border-b pb-3">{{ trans_choice('module_blog', 2) }}
                {{ __('list') }}</h2>
        </div>

        <!-- Buttons -->
        <div class="flex gap-3 mb-6">
            <button
                class="px-5 py-2.5 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 hover:scale-105 transition">
                <a href="{{ route($route . '.create') }}"><i class="fa-regular fa-plus"></i> Add New</a>
            </button>

            <button
                class="px-5 py-2.5 bg-teal-500 text-white rounded-lg shadow hover:bg-teal-600 hover:scale-105 transition flex items-center gap-2">

                <a href="{{ route($route . '.index') }}"> <i class="fa-solid fa-rotate"></i> Refresh</a>
            </button>
        </div>


        <!-- Filter Row -->
        <form method="GET" action="{{ route($route . '.index') }}">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <!-- Categories -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select name="blog_category"
                        class="w-full px-2 py-2  bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600">
                        <option value="">{{ 'All' }}</option>
                        @foreach ($blogCategories as $category)
                            <option value="{{ $category->id }}" @if ($selected_blog_category == $category->id) selected @endif>
                                {{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>


                <!-- Status -->
                @if (Auth::user()->role_id == $roleCondition->super_admin_id ||
                        Auth::user()->role_id == $roleCondition->admin_id ||
                        Auth::user()->role_id == $roleCondition->manager_id)
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600">
                            <option value="">{{ 'All' }}</option>
                            <option value="1" @if ($selected_status == '1') selected @endif>Active</option>
                            <option value="0" @if ($selected_status == '0') selected @endif>InActive</option>

                        </select>
                    </div>
                @elseif (Auth::user()->role_id == $roleCondition->author_id)
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600">
                            <option value="">{{ 'All' }}</option>
                            <option value="0" @if ($selected_status == '0') selected @endif>InActive</option>

                        </select>
                    </div>
                @endif

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Create Date</label>
                    <input type="date" name="created_date"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600"
                        value="{{ $selected_created_date }}" />
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
    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-1  items-start">


        <!-- Right Table -->
        <div class="col-span-2 my-3 mr-3 mx-4 mt-3 bg-white overflow-x-auto shadow-lg">
            <div class="bg-white  p-6">
                {{-- <div class="bg-white shadow-sm border-l-4 border-blue-500">
                    <h5 class="pl-1 text-lg font-semibold  mb-4">Project </h5>
                </div> --}}

                <div class="overflow-x-auto">
                    <table id="basic-table" class="display stripe hover w-full  text-sm border border-gray-200 ">
                        <thead class="bg-blue-500 text-white ">
                            <tr>
                                <th class="px-4 py-2 text-left font-medium ">#</th>
                                <th class="px-4 py-2 text-left font-medium ">Title</th>
                                <th class="px-4 py-2 text-left font-medium ">Sub Title</th>
                                <th class="px-4 py-2 text-left font-medium ">Author</th>
                                <th class="px-4 py-2 text-left font-medium ">Category</th>
                                <th class="px-4 py-2 text-left font-medium ">Created At</th>
                                <th class="px-4 py-2 text-left font-medium ">Updated At</th>
                                <th class="px-4 py-2 text-left font-medium ">Image</th>
                                <th class="px-4 py-2 text-left font-medium ">Status</th>
                                <th class="px-4 py-2 text-left font-medium ">Action</th>
                            </tr>
                        </thead>
                        @php use Illuminate\Support\Str; @endphp
                        @isset($blogs)
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($blogs as $index => $row)
                                    <tr>
                                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2">{{ $row->title }}</td>
                                        
                                        <td class="px-4 py-2">{{ Str::limit($row->sub_title, 50, '...') }}</td>
                                        <td class="px-4 py-2">{{ $row->author->name }}</td>
                                        <td class="px-4 py-2">{{ $row->blogCategory->title ?? '' }}</td>
                                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($row->created_date)->format('d F Y') }}</td>
                                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($row->updated_date)->format('d F Y') }}</td>

                                        <td class="px-4 py-2">
                                            <img class="w-20 h-10 rounded" src="{{ asset('uploads/blog/' . $row->attach) }}"
                                                alt="">
                                        </td>
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
                                            <button onclick="openModal('showModal-{{ $row->id }}')"
                                                class="px-3 py-2 bg-green-500 hover:bg-green-600 text-white rounded shadow">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            @include('admin.web.blog.view')

                                            <button type="button"
                                                class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                                <a href="{{ route($route . '.edit', $row->id) }}"><i
                                                        class="far fa-edit"></i></a>
                                            </button>



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


    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const previewContainer = document.getElementById("preview-container");
                const previewImage = document.getElementById("preview-image");

                previewImage.src = URL.createObjectURL(file);
                previewContainer.classList.remove("hidden");
            }
        }
    </script>

</div>
@endsection
