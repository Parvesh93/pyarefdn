@section('title')
    Privacy Policy
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl mx-auto px-6">
            <h2 class="text-2xl sm:text-3xl font-bold">Privacy Policy</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Privacy Policy</span>
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
                        Pyare Foundation respects your privacy. This Policy explains how we collect, use, share, and protect
                        personal data, in line with the Digital Personal Data Protection Act, 2023 (India) and good-faith
                        global practices.
                    </p>
                </div>




                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">1) What We Collect</p>
                    Identity & Contact: name, email, phone, address.
                    </p>



                    <p class="text-justify">
                        Donation & Transaction: amount, mode, transaction IDs (handled by payment gateways).
                    </p>

                    <p class="text-justify">
                        Event/Volunteer Data: registrations, preferences, availability, ID proofs (if required by law).
                    </p>
                    <p class="text-justify">
                        Website Data: cookies, IP, device/browser info, pages visited, and interactions (for security and
                        analytics).
                    </p>
                    <p class="text-justify">
                        User-generated content: messages, feedback, photos/testimonials you choose to share.
                    </p>
                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">2) How We Use Data</p>
                    Process donations, issue receipts, manage recurring donations.

                    </p>



                    <p class="text-justify">
                        Run programs, events, and volunteer coordination.

                    </p>

                    <p class="text-justify">
                        Send confirmations, updates, impact reports, and limited fundraising appeals (you can opt out).

                    </p>
                    <p class="text-justify">
                        Improve Site security and user experience; comply with legal and audit requirements.

                    </p>

                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">3) Legal Basis/Consent
                    </p>
                    We rely on your consent, legitimate charitable interest, and legal obligations. You can withdraw consent
                    for non-essential communications at any time.


                    </p>

                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">4) Sharing

                    </p>
                    With trusted service providers: payment gateways, email/SMS platforms, couriers, cloud/IT
                    providers—bound by confidentiality and data-protection obligations.
                    </p>

                    </p>
                    With government/tax authorities as required by law.
                    </p>

                    </p>
                    We do not sell your personal data.
                    </p>


                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">5) Cookies & Analytics

                    </p>
                    We use essential cookies for security and functionality, and optional analytics/marketing cookies (e.g.,
                    [Google Analytics]). You can manage preferences via your browser or our cookie banner (where enabled).



                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">6) Data Security & Retention

                    </p>
                    We use reasonable technical and organizational measures to protect data.



                    </p>
                    <p>
                        We retain data only as long as necessary for the purposes stated or as required by law (e.g.,
                        donation records for statutory audits).

                    </p>

                </div>


                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">7) Your Rights


                    </p>
                    Subject to law, you may access, correct, update, or request deletion of your data; and opt out of
                    marketing. Write to info@pyarefoundation.org
                    We’ll respond within 30 days.




                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">8) Cross-Border Transfers


                    </p>
                    If data is processed outside India by our providers, we ensure appropriate safeguards and contracts are
                    in place.




                    </p>

                </div>
                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">9) Children’s Data


                    </p>
                    We do not knowingly collect data from children under 18 without parental/guardian consent.




                    </p>

                </div>

                <div class="space-y-1  leading-relaxed">
                    {{-- <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2> --}}
                    <p class="text-justify">
                    <p class="font-bold text-lg">10) Updates



                    </p>
                    We may update this Privacy Policy periodically. Material changes will be notified on this page or by
                    email where appropriate.




                    </p>

                </div>













            </div>

            <!-- Right Donate Form -->


        </div>
    </section>
@endsection
