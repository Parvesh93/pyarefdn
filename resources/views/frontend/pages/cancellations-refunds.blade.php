@section('title')
    Cancellation & Refunds Policy
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl mx-auto px-6">
            <h2 class="md:text-2xl text-2xl font-bold">Cancellation & Refunds Policy</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Cancellation & Refunds Policy</span>
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
                        Pyare Foundation (“we”, “us”) is a not-for-profit organization. Most contributions support our
                        charitable programs and are non-commercial in nature. This policy explains when cancellations and
                        refunds may apply.

                    </p>
                </div>




                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">1) One-time Donations
                    </p>
                    Donations made voluntarily are non-refundable.


                    </p>



                    <p class="text-justify">
                        If you made a donation by mistake or a duplicate payment, email [info@pyarefoundation.org
                        ] within 48 hours with the transaction ID, amount, and date. After verification, we may issue a
                        refund at our discretion.


                    </p>
                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">2) Monthly/Recurring Donations</p>
                    You can cancel future charges anytime by emailing [info@pyarefoundation.org
                    ] at least 3 working days before the next billing date.

                    </p>
                    <p>
                        Amounts already charged are non-refundable, except in cases of proven technical error or duplicate
                        charge.

                    </p>

                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">3) Event/Workshop Registrations


                    </p>
                    Cancellations 7+ days before the event: 100% refund.

                    </p>

                    <p>
                        3–6 days before: 50% refund.


                    </p>
                    <p>
                        Within 2 days / No-show: No refund.

                    </p>
                    <p>
                        If Pyare Foundation postpones or cancels an event, you may choose a full refund or free transfer to
                        a future event.


                    </p>

                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">4) Merchandise (if applicable)
                    </p>
                    Eligible for return/exchange within 7 days of delivery if damaged/defective or wrong item received.

                    </p>

                    </p>
                    Email an unboxing photo/video and order details to [info@pyarefoundation.org
                    ] within 48 hours of delivery.

                    </p>
                    <p>
                        Items must be unused, with tags and original packaging.

                    </p>
                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">5) Processing Refunds

                    </p>
                    Approved refunds are initiated within 7–10 working days to the original payment method. Bank/Payment
                    gateway timelines may vary.

                    </p>

                </div>



                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">6) Contact
                    </p>
                    Pyare Foundation
                    </p>

                    <p href="#">
                        370-D J&K Pocket Dilshad Garden, New Delhi - 110095


                    </p>

                    <a>
                        Email: info@pyarefoundation.org, pyarefdn@gmail.com
                    </a>

                    <p>
                        Phone: ‪+91-9811409367‬

                    </p>

                </div>


            </div>




        </div>
    </section>
@endsection
