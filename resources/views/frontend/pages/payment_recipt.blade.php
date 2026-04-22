<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
    <script src="{{ asset('backend/tailwind-css/js/3.4.17') }}"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div id="receipt" class="bg-white shadow-2xl rounded-2xl p-10 max-w-2xl w-full">

        <!-- Header with Logo -->
        <div class="text-center border-b pb-6">
            <img src="{{asset('uploads/images/logo/logo.webp')}}" alt="Foundation Logo"
                class="mx-auto w-auto h-24 mb-4  shadow">
            {{-- <h1 class="text-3xl font-bold text-green-600">Pyare Foundation</h1> --}}
            <p class="font-bold text-green-600">Donation Receipt</p>
            <p class="text-gray-500">Thank you for your generous contribution 💚</p>
        </div>

        <!-- Donor Info -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p class="text-gray-600 text-sm">Donor Name</p>
                <p class="font-semibold text-gray-800">{{$receiptData->name}}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Payment Method</p>
                <p class="font-semibold text-gray-800">{{$receiptData->payment_method}}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Payment ID</p>
                <p class="font-semibold text-gray-800">{{$receiptData->payment_id}}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Amount</p>
                <p class="font-semibold text-green-600 text-lg">₹{{$receiptData->amount}}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Email</p>
                <p class="font-semibold text-gray-800">{{$receiptData->email}}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Phone No</p>
                <p class="font-semibold text-gray-800">{{$receiptData->contact}}</p>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t my-6"></div>

        
    </div>
   
     <script src="{{asset('backend/jquery/jquery-3.6.0.min.js')}}"></script>
    <!-- html2pdf CDN -->
    <script src="{{asset('frontend/pdf/js/html2pdf.bundle.min.js')}}"></script>

    <script type="text/javascript">
        "use strict";

        const element = document.getElementById("receipt");
        // element.classList.remove("hidden"); // show temporarily

        const options = {
            margin: 0.5,
            filename: 'Donation_Receipt.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'a4',
                orientation: 'portrait'
            }
        };

         html2pdf(element, options);

        // html2pdf().set(opt).from(element).save().then(() => {
        //     element.classList.add("hidden"); // hide again after download
        // });
    </script>

</body>

</html>
