@section('title')
{{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="pf-admin-page pf-admin-content-page" data-admin-module="role-condition">


<!-- Start Content-->

<div class="max-w-5xl px-4 py-6">
    <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded p-6 space-y-6">
        @csrf
        <input name="id" type="hidden" value="{{ isset($row->id) ? $row->id : -1 }}">

        <h2 class="text-2xl font-semibold text-gray-700 border-b pb-2">
            {{__('btn_update') }} Role Condition
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Example Field -->
            <div>
                <label for="super_admin_id" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ "Super Admin Id" }} <span class="text-red-500">*</span>
                </label>
                <select name="super_admin_id" id="super_admin_id" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                    <option value="">{{ __('select') }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @if(isset($row->super_admin_id) && $row->super_admin_id == $role->id) selected @endif>{{ $role->name }}</option>
                        
                    @endforeach
                </select>
            </div>

            {{-- <div hidden>
                <label for="admin_id" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ "Admin Id" }} <span class="text-red-500">*</span>
                </label>
                <select name="admin_id" id="admin_id" 
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                    <option value="">{{ __('select') }}</option>
                    @foreach ($users as $role)
                        <option value="{{ $role->id }}" @if(isset($row->admin_id) && $row->admin_id == $role->id) selected @endif>{{ $role->name }}</option>
                        
                    @endforeach
                </select>
            </div> --}}

             <div>
                <label for="manager_id" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ "Manager Id" }} <span class="text-red-500">*</span>
                </label>
                <select name="manager_id" id="manager_id" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                    <option value="">{{ __('select') }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @if(isset($row->manager_id) && $row->manager_id == $role->id) selected @endif>{{ $role->name }}</option>
                        
                    @endforeach
                </select>
            </div>

             <div>
                <label for="author_id" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ "Author Id" }} <span class="text-red-500">*</span>
                </label>
                <select name="author_id" id="author_id" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                    <option value="">{{ __('select') }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @if(isset($row->author_id) && $row->author_id == $role->id) selected @endif>{{ $role->name }}</option>
                        
                    @endforeach
                </select>
            </div>

        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 shadow-md transition">
                <i class="fas fa-check mr-2"></i>{{ __('btn_update') }}
            </button>
        </div>
    </form>
</div>

<!-- End Content-->


</div>
@endsection