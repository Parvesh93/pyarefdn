<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @if (isset($setting))
        <title>Password Print | {{ $setting->meta_title ?? '' }}</title>

        <meta name="description" content="{!! Str::limit(strip_tags($setting->meta_description), 160, ' ...') !!}">
        <meta name="keywords" content="{!! strip_tags($setting->meta_keywords) !!}">

        @if (is_file('uploads/settings/' . $setting->favicon_path))
            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('uploads/settings/' . $setting->favicon_path) }}"
                type="image/x-icon">
        @endif
    @endif
    <!-- ✅ Tailwind CSS CDN -->
    <script src="{{ asset('backend/tailwind-css/js/3.4.17') }}"></script>

    <!-- jQuery & Print Plugin -->
    <script src="{{ asset('backend/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{asset('backend/print/js/jQuery.print.min.js')}}"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6 print_password">

    <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-6">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Staff Password Information
        </h2>

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-1">Email:</label>
            <div class="w-full px-4 py-2 border rounded-lg bg-gray-50 text-gray-800">
                {{ $user->email ?? 'donor@example.com' }}
            </div>
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label class="block text-gray-600 font-medium mb-1">Password:</label>
            <div class="w-full px-4 py-2 border rounded-lg bg-gray-50 text-gray-800">
                {{ Crypt::decryptString(@$user->password_text) ?? '********' }}
            </div>
        </div>

        <!-- Back / Action Buttons -->
        {{-- <div class="flex justify-between">
            <a href="{{ url('/') }}" 
               class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg">
               Back
            </a>
            <a href="{{ route('donor.edit', $donor->id ?? 1) }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
               Edit Info
            </a>
        </div> --}}
    </div>

</body>

<script type="text/javascript">
        $(document).ready(function() {
            "use strict";
            $.print(".print_password");
        });
</script>
</html>
