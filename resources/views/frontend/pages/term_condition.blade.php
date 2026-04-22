@section('title')
    Terms & Conditions
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl mx-auto px-6">
            <h2 class="md:text-2xl text-2xl font-bold">Terms & Conditions
            </h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Terms & Conditions
                </span>
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
                        Welcome to the website and services of Pyare Foundation (“we”, “us”, “our”). By accessing
                        [www.pyarefoundation.org
                        ] (the “Site”) or donating, registering for events, volunteering, or purchasing merchandise
                        (collectively, the “Services”), you agree to these Terms.

                    </p>
                </div>




                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">1) About Pyare Foundation
                    </p>
                    Pyare Foundation is a non-profit [Trust/Society/Section 8 Company – choose one] registered in India
                    (Registration No.: [●]). Donations support programs in Health, Education, and Environment.

                    </p>
                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">2) Use of the Site
                    </p>
                    You agree to use the Site for lawful purposes only.


                    </p>



                    <p class="text-justify">
                        You shall not attempt to disrupt or gain unauthorized access to the Site, data, or payment systems.


                    </p>



                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">3) Donations & Receipts

                    </p>
                    Donations are voluntary and non-refundable (see Cancellation & Refunds).
                    </p>
                    <p>
                        Digital receipts are issued to the email you provide.

                    </p>
                    <p>
                        If applicable, [80G/12A] benefits are subject to prevailing law and accurate donor details. We are
                        not responsible for tax advice.

                    </p>

                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">4) Recurring Donations

                    </p>
                    By opting in, you authorize periodic charges until you cancel (see Cancellation & Refunds).

                    </p>
                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">5) Events & Programs
                    </p>
                    We may modify event agendas, speakers, or venues when needed. Our liability is limited to the fee paid
                    for the affected event.

                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">6) Merchandise (if applicable)

                    </p>
                    Orders, shipping, returns, and warranties are governed by our Shipping and Cancellation & Refunds
                    policies.
                    </p>

                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">7) Content & Intellectual Property
                    </p>
                    All text, images, logos, and media on the Site are owned by or licensed to Pyare Foundation and
                    protected by law.
                    </p>
                    <p>
                        You may not copy, modify, or use content without prior written consent, except for personal,
                        non-commercial use with attribution.

                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">8) Third-Party Services
                    </p>
                    We use third-party tools (e.g., [Razorpay/PayU/Paytm/Stripe], email/SMS providers). Their terms and
                    privacy policies apply when you interact with them.
                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">9) Limitation of Liability
                    </p>
                    To the maximum extent permitted by law, Pyare Foundation will not be liable for any indirect,
                    incidental, or consequential damages arising from your use of the Site/Services.

                    </p>

                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">10) Indemnity
                    </p>
                    You agree to indemnify and hold Pyare Foundation harmless from claims arising out of your misuse of the
                    Site/Services or breach of these Terms.
                    </p>

                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">11) Changes

                    </p>
                    We may update these Terms at any time. Continued use after changes constitutes acceptance.

                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">12) Governing Law

                    </p>
                    These Terms are governed by the laws of India, with courts at [New Delhi/Your City] having exclusive
                    jurisdiction.

                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">13) Contact

                    </p>
                    Pyare Foundation
                    </p>
                    <p>
                        Email: info@pyarefoundation.org

                    </p>
                    <p>
                        Phone: +91-98114 09367
                    </p>

                </div>

            </div>

            <!-- Right Donate Form -->



        </div>
    </section>
@endsection
