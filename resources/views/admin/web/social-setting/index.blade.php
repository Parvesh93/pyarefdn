@section('title')
    Social Settings
@endsection

@extends('admin.layouts.master')

@section('adminContent')
    <div class="max-w-3xl mt-4 ml-4 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold text-gray-800 border-l-4 border-blue-500 pl-3 mb-6">
            {{ __('btn_update') }} Social Setting
        </h2>

        <form action="{{ route('admin.social-settings.store') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Email & Student Phone Number -->
            <input name="id" type="hidden" value="{{ isset($row->id) ? $row->id : -1 }}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Facebook Url <span
                            class="text-red-500">*</span></label>
                    <input type="url" name="facebook"
                        value="{{ isset($row->facebook) ? $row->facebook : '' }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Twitter Url <span
                            class="text-red-500">*</span></label>
                    <input type="url" name="twitter" value="{{ isset($row->twitter) ? $row->twitter : '' }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Instagram Url <span
                            class="text-red-500">*</span></label>
                    <input type="url" name="instagram"
                        value="{{ isset($row->instagram) ? $row->instagram : '' }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">LinkedIn Url <span
                            class="text-red-500">*</span></label>
                    <input type="url" name="linkedin"
                        value="{{ isset($row->linkedin) ? $row->linkedin : '' }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Youtube Url <span
                            class="text-red-500">*</span></label>
                    <input type="url" name="youtube" value="{{ isset($row->youtube) ? $row->youtube : '' }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Telegram Url <span
                            class="text-red-500">*</span></label>
                    <input type="url" name="telegram"
                        value="{{ isset($row->telegram) ? $row->telegram : '' }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
                </div>

            </div>

            <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">WhatsApp Url <span
                            class="text-red-500">*</span></label>
                    <input type="url" name="whatsapp"
                        value="{{ isset($row->whatsapp) ? $row->whatsapp : '' }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50">
                </div>






            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-2 rounded-md flex items-center gap-2 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
