@section('title') Topbar  Settings @endsection

@extends('admin.layouts.master')

@section('adminContent')

 <div class="max-w-3xl mt-4 ml-4 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold text-gray-800 border-l-4 border-blue-500 pl-3 mb-6">
        {{__('btn_update')}} {{$title}}
    </h2>

    <form action="{{ route('admin.topbar-settings.store') }}" method="POST" class="space-y-6">
        @csrf
         <input name="id" type="hidden" value="{{ (isset($row->id))?$row->id:-1 }}">
        <!-- Email & Student Phone Number -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email" value="{{ isset($row->email)?$row->email:'' }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number <span class="text-red-500">*</span></label>
                <input type="tel" name="phone" value="{{ isset($row->phone)?$row->phone:'' }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
            </div>
        </div>

        <!-- Address -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Address <span class="text-red-500">*</span></label>
            <input type="text" name="address" value="{{ isset($row->address)?$row->address:'' }}"
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
        </div>

        <!-- Social Status -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Social Status <span class="text-red-500">*</span></label>
            <div class="flex items-center gap-6">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="social_status" value="1" 
                        class="text-emerald-400 focus:ring-emerald-300" @if( isset($row->social_status) && $row->social_status == 1 ) checked @endif required>
                    <span class="text-gray-700">Show</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="social_status" value="0"
                        class="text-gray-400 focus:ring-gray-300" @if( isset($row->social_status) && $row->social_status == 0 ) checked @endif required>
                    <span class="text-gray-700">Hide</span>
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-2 rounded-md flex items-center gap-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                {{__('btn_update')}}
            </button>
        </div>
    </form>
</div>


@endsection