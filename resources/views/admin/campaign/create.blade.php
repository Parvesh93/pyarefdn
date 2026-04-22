@section('title')
    Create Campaign
@endsection

@extends('admin.layouts.master')

@section('adminContent')
    <div class="max-w-7xl mx-10 my-4  p-6 bg-white shadow-lg ">
        <div class="bg-white shadow-sm border-l-4 border-blue-500 mb-6">
            <div class="px-5 py-2">
                <h1 class="text-xl font-medium text-gray-800">Create Campaign</h1>
            </div>
            <!-- Action Buttons -->

        </div>


        <div class="mb-6 flex gap-3">
            <button
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                <a href="{{ route($route . '.index') }}"><i class="fas fa-arrow-left"></i> Back</a>
            </button>
            <button
                class="bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                <a href="{{ route($route . '.create') }}"><i class="fas fa-sync-alt"></i> Refresh</a>
            </button>
        </div>
    </div>

    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-1 md:grid-cols-1  items-start">
        <!-- Left Form -->
        <div class="col-span-1 mx-10 my-5   ">
            <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-3 bg-white shadow-md rounded p-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="title"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('title') }}" placeholder="Enter title" required />
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Sub Title <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="sub_title"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('sub_title') }}" placeholder="Enter sub title" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="rises_amount" class="block text-sm font-medium text-gray-700 mb-1">Rises Amount <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="rises_amount"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('rises_amount') }}" placeholder="Enter rises amount" required />
                    </div>

                    <div>
                        <label for="goal_amount" class="block text-sm font-medium text-gray-700 mb-1">Goal Amount <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="goal_amount"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('goal_amount') }}" placeholder="Enter goal amount" required />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Start Date <span
                                class="text-red-500">*</span></label>
                        <input type="date" name="start_date"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('start_date') }}" placeholder="Enter start date" required />
                    </div>
                    <div>
                        <label for="end_date" class="block text-sm font-medium text-gray-700 mb-1">End Date <span
                                class="text-red-500">*</span></label>
                        <input type="date" name="end_date"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                            value="{{ old('end_date') }}" placeholder="Enter end date" required />
                    </div>

                </div>




                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <!-- Label -->
                        <label for="attach" class="block text-sm font-medium text-gray-700 mb-1">
                            Image
                            <span class="text-sm text-gray-500">(Height: auto, Width: 500px)</span>
                            <span class="text-red-500">*</span>
                        </label>

                        <!-- Custom File Input -->
                        <div
                            class="flex items-center w-full px-2 py-0 bg-blue-50 border-0 border-b-2   focus:outline-none focus:ring-0 focus:border-blue-400">
                            {{-- w-full px-2 py-2 bg-blue-50 border-0 border-b-2 border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-600 --}}
                            <!-- Choose File Button -->
                            <label for="attach"
                                class="px-4 py-1 bg-gray-200 text-gray-700 cursor-pointer hover:bg-gray-300 rounded-l">
                                Choose File
                            </label>

                            <!-- Hidden Input -->
                            <input id="attach" name="attach" type="file" class="hidden"
                                onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'No file chosen'" />

                            <!-- File Name Placeholder -->
                            <span id="file-name" class="px-3 py-2 text-gray-500 flex-1">No file chosen</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status"
                            class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-600">
                            <option value="">{{ 'All' }}</option>
                            <option value="1">Complete</option>
                            <option value="0">InComplete</option>

                        </select>
                    </div>



                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description <span
                            class="text-red-500">*</span></label>
                    <textarea id="texteditor" name="description" rows="4"
                        class="w-full textarea px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                        placeholder="Write description..." required>{{ old('description') }}</textarea>

                </div>






                <button type="submit"
                    class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow">
                    <i class="fas fa-check mr-2"></i> Create
                </button>
            </form>
        </div>




    </div>
@endsection
