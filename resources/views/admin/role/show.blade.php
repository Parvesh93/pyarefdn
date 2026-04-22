@section('title')
{{ $title }}
@endsection

@extends('admin.layouts.master')
@section('adminContent')

<div class="py-6">
    <div class="max-w-4xl  px-4">
        <!-- Card Start -->
        <div class="bg-white shadow rounded-lg">
            <!-- Card Header -->
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">
                    {{ __('modal_view') }} {{ $title }}
                </h2>
            </div>

            <!-- Action Buttons -->
            <div class="px-6 py-4 space-x-3">
                <a href="{{ route($route.'.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700">
                    <i class="fas fa-arrow-left mr-2"></i> {{ __('btn_back') }}
                </a>

                <a href="{{ route($route.'.show', $role->id) }}"
                   class="inline-flex items-center px-4 py-2 bg-indigo-500 text-white text-sm font-medium rounded hover:bg-indigo-600">
                    <i class="fas fa-sync-alt mr-2"></i> {{ __('btn_refresh') }}
                </a>
            </div>

            <!-- Card Body -->
            <div class="px-6 py-4">
                <!-- Role Title -->
                <h4 class="text-lg font-semibold mb-2">
                    <mark class="bg-blue-100 text-blue-800 px-2 py-1 rounded">
                        {{ __('field_title') }}:
                    </mark>
                    <span class="ml-2 text-gray-800">{{ $role->name }}</span>
                </h4>

                <hr class="my-4 border-gray-300">

                <!-- Role Permissions -->
                @if(!empty($rolePermissions))
                    @php $separation = '0'; @endphp

                    @foreach($rolePermissions as $value)

                        @if($separation != $value->group_name)
                            <hr class="my-4 border-gray-200">
                            <h3 class="text-md font-semibold text-indigo-600 mt-4 mb-2">
                                {{ $value->group_name }}
                            </h3>
                        @endif

                        <span class="inline-block bg-gray-200 text-gray-800 text-sm font-medium px-3 py-1 rounded-full mr-2 mb-2">
                            {{ $value->title }}
                        </span>

                        @php $separation = $value->group_name; @endphp

                    @endforeach
                @endif
            </div>
        </div>
        <!-- Card End -->
    </div>
</div>

@endsection
