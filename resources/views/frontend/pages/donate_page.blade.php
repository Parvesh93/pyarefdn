@section('title')
    Donate
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->
    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">DONATE</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Donate</span>
            </nav>
        </div>
    </section>


    <!-- Donate form -->
    <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST">

        @csrf
        <section class="w-full py-12 bg-white">
            <div class="md:mx-11 px-4">
                <div class="bg-white border border-gray-200 shadow-lg rounded-lg px-6 py-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">DONATE NOW</h2>

                    <!-- Give Once / Monthly -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <button type="button" id="onceBtn" data-type="one-time"
                            class="donation-btn bg-[#FEB201] text-black text-sm font-semibold py-3 px-4 rounded w-full">
                            GIVE ONCE
                        </button>
                        <button type="button" id="monthlyBtn" data-type="monthly"
                            class="donation-btn bg-gray-100 text-sm font-semibold py-3 px-4 rounded w-full">
                            GIVE MONTHLY
                        </button>
                    </div>

                    <!-- Hidden input to store selected type -->
                    <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />

                    <!-- Choose Amount -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Choose Amount to Donate</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button type="button"
                                class="amount-btn bg-[#FEB201] text-black text-sm font-semibold py-3 px-4 rounded w-full"
                                data-value="500">{{$setting->currency_symbol}} 500 </button>
                            <button type="button"
                                class="amount-btn bg-gray-100 text-sm font-semibold py-3 px-4 rounded w-full"
                                data-value="1000">{{$setting->currency_symbol}} 1000 </button>
                            <button type="button"
                                class="amount-btn bg-gray-100 text-sm font-semibold py-3 px-4 rounded w-full"
                                data-value="2000">{{$setting->currency_symbol}} 2000 </button>
                            <button type="button"
                                class="amount-btn bg-gray-100 text-sm font-semibold py-3 px-4 rounded w-full"
                                data-value="3000">{{$setting->currency_symbol}} 3000 </button>
                        </div>
                    </div>

                    <!-- Custom Amount -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Custom Amount</label>
                        <div class="flex items-center">
                            <span class="bg-[#FEB201] px-4 py-3 rounded-l text-sm font-bold">₹</span>
                            <input id="customAmount" name="amount" type="text"
                                class="bg-gray-100 text-sm font-semibold py-3 px-4 rounded-r w-full placeholder-black"
                                placeholder="CUSTOM AMOUNT" required />
                        </div>
                    </div>


                    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">

                    <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                    <input type="hidden" name="razorpay_signature" id="razorpay_signature">

                    <!-- Name -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                            <input name="firstName" type="text" placeholder="FIRST NAME"
                                class="w-full border px-4 py-3 rounded text-sm" required />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                            <input name="lastName" type="text" placeholder="LAST NAME"
                                class="w-full border px-4 py-3 rounded text-sm" required />
                        </div>
                    </div>

                    <!-- Email & Contact -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                            <input name="email" type="email" placeholder="EMAIL"
                                class="w-full border px-4 py-3 rounded text-sm" required />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Contact *</label>
                            <input name="contact" type="text" placeholder="+91"
                                class="w-full border px-4 py-3 rounded text-sm" />
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address *</label>
                        <input name="address" type="text" placeholder="ADDRESS"
                            class="w-full border px-4 py-3 rounded text-sm" required />
                    </div>

                    <!-- Submit -->
                    <button type="submit" id="pay-button"
                        class="w-full bg-[#12163f] text-white font-semibold py-3 px-6 rounded text-sm">
                        PROCEED TO DONATE
                    </button>
                </div>
            </div>
        </section>
    </form>
@endsection
