@section('title')
    Shipping Policy
@endsection

@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->
    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay --> 
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl mx-auto px-6">
            <h2 class="md:text-2xl text-2xl font-bold">Shipping Policy</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Shipping Policy</span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-10 px-4">
            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full overflow-y-auto space-y-2">
                <!-- Project Intro -->
                <div class="text-gray-800 text-lg leading-relaxed mb-6">
                    <p class="text-justify">
                        Shipping Policy (Donor Receipts & Merchandise)

                    </p>
                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">1) Digital Donation Receipts

                    </p>
                    E-receipts are emailed instantly/within 24 hours to the donor email provided.

                    </p>



                    <p class="text-justify">
                        If you do not receive a receipt, contact [support@pyarefoundation.org
                        ] with your transaction ID.

                    </p>
                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">2) Physical Acknowledgements (if issued)
                    </p>
                    Certificates/letters may be dispatched within 7–10 working days via [India Post/Courier]. Delivery
                    timelines vary by location.
                    </p>

                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">3) Merchandise Orders (if applicable)

                    </p>
                    Processing time: 2–4 working days after order confirmation.
                    </p>

                    <p>
                        Transit time (India): 3–7 working days; remote locations may take longer.

                    </p>
                    <p>
                        Tracking: A tracking link will be shared by email/SMS once shipped.

                    </p>
                    <p>
                        Delivery attempts: Couriers typically make 2–3 attempts. If undelivered due to incorrect address or
                        unavailability, re-shipping charges may apply.

                    </p>

                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">4) Shipping Fees & Regions
                    </p>
                    Shipping charges (if any) are shown at checkout.
                    </p>

                    </p>
                    We currently ship to [India only / India & select countries: list].
                    </p>
                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">5) Damaged/Incorrect Items
                    </p>
                    Report within 48 hours of delivery with an unboxing photo/video at [info@pyarefoundation.org
                    ]. We will arrange a replacement or refund as per our Cancellation & Refunds policy.
                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">6) Address Changes
                    </p>
                    For unshipped orders, email [info@pyarefoundation.org
                    ] with the correct address. We’ll confirm if the update is possible.

                    </p>
                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">7) Contact
                    </p>
                    Pyare Foundation
                    </p>

                    <p href="#">
                        Email: info@pyarefoundation.org

                    </p>
                    <p>
                        Phone: +91-98114 09367
                    </p>

                </div>


            </div>
        </div>
    </section>
@endsection
