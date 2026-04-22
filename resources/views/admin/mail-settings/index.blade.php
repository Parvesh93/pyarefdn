@section('title')
{{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')

<!-- Start Content-->

<div class="max-w-5xl px-4 py-6">
    <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded p-6 space-y-6">
        @csrf
        <input name="id" type="hidden" value="{{ isset($row->id) ? $row->id : -1 }}">

        <h2 class="text-2xl font-semibold text-gray-700 border-b pb-2">
            {{__('btn_update') }} Mail Setting
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Example Field -->
            <div>
                <label for="driver" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ __('field_mail_driver') }} <span class="text-red-500">*</span>
                </label>
                <select name="driver" id="driver" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                    <option value="smtp" @if(isset($row->driver) && $row->driver == 'smtp') selected @endif>{{ __('SMTP') }}</option>
                    <option value="sendmail" @if(isset($row->driver) && $row->driver == 'sendmail') selected @endif>{{ __('SendMail') }}</option>
                </select>
            </div>

            <!-- Mail Host -->
            <div>
                <label for="host" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ __('field_mail_host') }} <span class="text-red-500">*</span>
                </label>
                <input type="text" name="host" id="host" value="{{ $row->host ?? '' }}" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <!-- Mail Port -->
            <div>
                <label for="port" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ __('field_mail_port') }} <span class="text-red-500">*</span>
                </label>
                <input type="text" name="port" id="port" value="{{ $row->port ?? '' }}" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <!-- Mail Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ __('field_mail_username') }} <span class="text-red-500">*</span>
                </label>
                <input type="text" name="username" id="username" value="{{ $row->username ?? '' }}" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <!-- Mail Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ __('field_mail_password') }} <span class="text-red-500">*</span>
                </label>
                <input type="password" name="password" id="password" value="{{ $row->password ?? '' }}" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <!-- Mail Encryption -->
            <div>
                <label for="encryption" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ __('field_mail_encryption') }} <span class="text-red-500">*</span>
                </label>
                <select name="encryption" id="encryption" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                    <option value="">{{ __('select') }}</option>
                    <option value="ssl" @if(isset($row->encryption) && $row->encryption == 'ssl') selected @endif>{{ __('SSL') }}</option>
                    <option value="tls" @if(isset($row->encryption) && $row->encryption == 'tls') selected @endif>{{ __('TLS') }}</option>
                </select>
            </div>

            <!-- Sender Email -->
            <div>
                <label for="sender_email" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ __('field_mail_sender_email') }} <span class="text-red-500">*</span>
                </label>
                <input type="email" name="sender_email" id="sender_email" value="{{ $row->sender_email ?? '' }}" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>

            <!-- Sender Name -->
            <div>
                <label for="sender_name" class="block text-sm font-medium text-gray-700 mb-1">
                    {{ __('field_mail_sender_name') }} <span class="text-red-500">*</span>
                </label>
                <input type="text" name="sender_name" id="sender_name" value="{{ $row->sender_name ?? '' }}" required
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
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

@endsection