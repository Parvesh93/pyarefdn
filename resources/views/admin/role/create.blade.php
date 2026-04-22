@section('title')
    Add Roles and Permission
@endsection

@extends('admin.layouts.master')
@section('adminContent')
    <div class="py-6">
        <div class="max-w-5xl  px-4">
            <div class="bg-white shadow rounded-lg">
                <!-- Card Header -->
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">{{ __('modal_add') }} {{ $title }}</h2>
                </div>

                <!-- Action Buttons -->
                <div class="px-6 py-4 space-x-3">
                    <a href="{{ route($route . '.index') }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700">
                        <i class="fas fa-arrow-left mr-2"></i> {{ __('btn_back') }}
                    </a>
                    <a href="{{  route($route.'.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-indigo-500 text-white text-sm font-medium rounded hover:bg-indigo-600">
                        <i class="fas fa-sync-alt mr-2"></i> {{ __('btn_refresh') }}
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data"
                    novalidate class="px-6 pb-6">
                    @csrf
                   

                    <!-- Name Field -->
                    <div class="mb-4">


                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('field_title') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="text" value="{{ old('name') }}" id="name" name="name"
                                class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                            <div class="text-sm text-red-600 mt-1 hidden">
                                {{ __('required_field') }} {{ __('field_title') }}
                            </div>
                        </div>

                    </div>

                    @php $separation = '0'; @endphp

                    <!-- Permissions Group -->
                    @foreach ($permission as $value)
                        @if ($separation != $value->group_name)
                            <hr class="my-4 border-gray-300">
                            <h3 class="text-lg font-semibold text-indigo-600 mt-4">{{ $value->group_name }}</h3>
                        @endif

                        <div class="inline-block mr-6 my-2">
                            <label class="inline-flex items-center cursor-pointer group">
                                <input type="checkbox" id="checkbox-{{ $value->id }}" name="permission[]"
                                    value="{{ $value->id }}"
                                    class="w-5 h-5 text-indigo-600 bg-white border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 transition duration-150 ease-in-out"
                                    checked>
                                <span class="ml-2 text-sm text-gray-800 group-hover:text-indigo-700">
                                    {{ $value->title }}
                                </span>


                            </label>
                        </div>


                        @php $separation = $value->group_name; @endphp
                    @endforeach

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2 bg-green-600 text-white text-sm font-medium rounded hover:bg-green-700">
                            <i class="fas fa-check mr-2"></i>  {{ __('btn_save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
