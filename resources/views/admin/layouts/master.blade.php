<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @php
        use Illuminate\Support\Str;
    @endphp

    @if (isset($setting))
        <title>@yield('title') | {{ $setting->meta_title ?? '' }}</title>

        <meta name="description" content="{!! Str::limit(strip_tags($setting->meta_description), 160, ' ...') !!}">
        <meta name="keywords" content="{!! strip_tags($setting->meta_keywords) !!}">

        @if (is_file('uploads/settings/' . $setting->favicon_path))
            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('uploads/settings/' . $setting->favicon_path) }}"
                type="image/x-icon">
        @endif
    @endif

    @include('admin.layouts.common.header_script')
  

</head>

<body class="bg-gray-100 text-gray-800">
    <div class="flex min-h-screen">

        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        <div class="flex-1 md:ml-64 flex flex-col overflow-hidden">
            <!-- Navbar Include -->
            @include('admin.layouts.menu')


            @yield('adminContent')


        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    @include('admin.layouts.common.footer_script')


</body>

</html>
