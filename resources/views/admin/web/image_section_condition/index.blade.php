@section('title')
    Image Section Condition
@endsection

@extends('admin.layouts.master')

@section('adminContent')
    <div class="max-w-7xl mx-10 my-4  p-6 bg-white shadow-lg ">
        <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-6">
            <div class="px-5 py-2">
                <h1 class="text-xl font-medium text-gray-800">Update Image Section Condition</h1>
            </div>
            <!-- Action Buttons -->

        </div>
    </div>

    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-1  items-start">
        <!-- Left Form -->
        <div class="col-span-1 mx-10 my-5   ">
            <form action="{{ route('admin.condition-image-apply.store') }}" method="POST"
                class="space-y-3 bg-white shadow-md rounded p-6">
                @csrf


                <input name="id" type="hidden" value="{{ isset($row->id) ? $row->id : -1 }}">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Project Govind Leela <span class="text-red-500">*</span></label>
                        <select name="govind_leela"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600" required>
                            <option value="">{{ 'All' }}</option>
                            @foreach ($imageSections as $imageSection)
                                <option value="{{ $imageSection->id }}"
                                    {{ @$row->govind_leela === $imageSection->id ? 'selected' : '' }}>
                                    {{ $imageSection->title }}</option>
                            @endforeach

                        </select>
                    </div>


                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Gallery <span class="text-red-500">*</span></label>
                        <select name="gallery"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600" required>
                            <option value="">{{ 'All' }}</option>
                            @foreach ($imageSections as $imageSection)
                                <option value="{{ $imageSection->id }}"
                                    {{ @$row->gallery === $imageSection->id ? 'selected' : '' }}>
                                    {{ $imageSection->title }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>




                <button type="submit"
                    class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-check mr-2"></i> Update
                </button>
            </form>
        </div>
    </div>
@endsection
