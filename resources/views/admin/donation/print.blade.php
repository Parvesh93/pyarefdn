<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @if (isset($setting))
        <title>Print Donation | {{ $setting->meta_title ?? '' }}</title>

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
<body class="bg-gray-100 p-6 printable">

    <div class="max-w-2xl mx-auto bg-white  rounded-lg p-8">
        <!-- Logo & Title -->
        <div class="flex items-center justify-center mb-6">
            <img src="{{ asset('uploads/settings/' . $setting->favicon_path) }}" alt="Logo" class="w-14 h-14 mr-3">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800">PYARE FOUNDATION</h1>
                <p class="text-gray-600">The promoter of society, culture and heritage</p>
            </div>
        </div>

        <!-- Donation Title -->
        <div class="text-center mb-6">
            <h2 class="text-green-600 font-semibold text-xl">Donation Receipt</h2>
            <p class="text-gray-500">Thank you for your generous contribution 💚</p>
        </div>

        <!-- Donor Info -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-t pt-6">
            <div>
                <p class="font-semibold text-gray-700">Donor Name</p>
                <p class="text-gray-600">{{$donation->name}}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-700">Payment Method</p>
                <p class="text-gray-600">{{$donation->payment_method}}</p>
            </div>

            <div>
                <p class="font-semibold text-gray-700">Payment ID</p>
                <p class="text-gray-600">{{$donation->payment_id}}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-700">Amount</p>
                <p class="text-green-600 font-bold">₹{{$donation->amount}}</p>
            </div>

            <div>
                <p class="font-semibold text-gray-700">Email</p>
                <p class="text-gray-600">{{$donation->email}}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-700">Phone No</p>
                <p class="text-gray-600">{{$donation->contact}}</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 border-t pt-4">
            <p class="text-sm text-gray-500">This receipt is system generated and valid without signature.</p>
        </div>

        <!-- Print Button -->
        {{-- <div class="text-center mt-6">
            <button onclick="window.print()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow">
                Print Receipt
            </button>
        </div> --}}
    </div>



</body>

 <script type="text/javascript">
        $(document).ready(function() {
            "use strict";
            $.print(".printable");
        });
    </script>
</html>
