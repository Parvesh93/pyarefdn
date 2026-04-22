@section('title')
    Payment Page
@endsection

@extends('frontend.layouts.master')

@section('content')
    <div class="max-w-sm mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Amount Section -->
        <div class="px-6 py-6 bg-gray-50 border-b border-gray-200">
            <p class="text-lg font-semibold text-gray-800">Total Amount: ₹{{ $donation->amount }}</p>
        </div>

        <!-- Image Section -->
        <div class="h-48 bg-gradient-to-br from-green-100 to-green-200 relative overflow-hidden">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.5 2.5L19 4"></path>
                        </svg>
                    </div>
                    <p class="text-sm text-gray-700 font-medium">Farming Support</p>
                </div>
            </div>
        </div>

        <!-- Payment Section -->
        <div class="px-6 py-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-5">
                Select a payment method
            </h2>

            <!-- Razorpay Payment Option -->
            <form id="payment-form" action="{{ route('admin.payment.razorpay',$donation->id) }}" method="POST">
                @csrf

                <input type="text" value="{{ $donation->id }}" name="donation_id" hidden>
                <input type="number" value="{{ $donation->amount }}" name="price" id="amount-input" hidden>
                <input type="email" value="{{ $donation->email }}" name="email" hidden>
                <input type="text" value="{{ $donation->first_name }} {{ $donation->last_name }}" name="name" hidden>
                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">


                <div
                    class="border-2 border-gray-300 rounded-lg p-4 cursor-pointer transition-all duration-200 hover:border-razorpay-blue hover:bg-blue-50 hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 group">
                    <div class="flex items-center justify-center">
                        <button class="flex items-center gap-2" id="pay-button">
                            <span class="text-2xl">⚡</span>
                            <span class="text-2xl font-bold text-razorpay-blue">Razorpay</span>
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>


    <!-- Razorpay Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.getElementById('pay-button').onclick = function(e) {
            e.preventDefault();

            var amount = document.getElementById('amount-input').value; // Get Amount from Form
            var amountInPaise = amount * 100; // Convert to Paise

            var options = {
                "key": "{{ config('razorpay.key') }}",
                "amount": amountInPaise, // Amount in paisa
                "currency": "INR",
                "name": "Test Payment",
                "description": "Donation Payment",

                "prefill": {
                    "name": document.querySelector('input[name="name"]').value,
                    "email": document.querySelector('input[name="email"]').value
                },
                "theme": {
                    "color": "#ff7529"
                },
                // यह success callback है
                "handler": function(response) {
                    // Razorpay से मिला payment_id form में डालो
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    // अब form submit करो
                    document.getElementById('payment-form').submit();
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    </script>
@endsection
