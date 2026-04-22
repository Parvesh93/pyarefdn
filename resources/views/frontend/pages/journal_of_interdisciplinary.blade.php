@section('title')
    Journal of interdisciplinary approaches
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0  mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">JOURNAL OF INTERDISCIPLINARY APPROACHES</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Journal of Interdisciplinary Approaches</span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">
            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">

                <!-- Paragraphs -->
                <div class="space-y-3 leading-relaxed">
                    <h2 class="text-2xl sm:text-3xl font-bold">
                        Journal of Interdisciplinary Approaches
                    </h2>
                    <p class="text-justify">
                        Journal of Interdisciplinary Approaches (JIA), (2015-2016) is a
                        research brand of Pyare Foundation: Promoter of Art Culture and
                        Heritage. It is to inform you that by the grace of Almighty, the
                        first volume of the journal has launched in the month of March 2016.
                        It is Biannual, Bilingual and interdisciplinary theme based with RNI
                        Reference number- 1284709 and Title code – DELBIL11466 . The ISSN of
                        the journal is 24554359
                    </p>
                    <p class="text-justify">
                        The first edition of ‘Journal of Interdisciplinary Approaches’ is
                        all set to see light of the day after initial struggle to establish
                        the foundation, after the name of legendary nationalist, Pyare Lal
                        Kaul, three years ago in the year 2012 December. The foundation was
                        formed to work in the direction of education and social service. The
                        eagerness for education was to enable inner mindset to have right
                        credentials and correct platform for holistic and ingenuous growth.
                        The social service for poor, marginalized and backward people is a
                        top agenda. We have tried to pay tributes to the departed leader in
                        many ways, by collecting the manuscript and giving the form of book;
                        keeping rest of the written manuscript stored; making a website in
                        his name; endorsing the foundation through social networking sites
                        and paid sites; featuring important content through papers and
                        magazines; starting outlet of in-house produced item to raise funds
                        and use them for the purpose mentioned above; prepare volunteers to
                        work for the organization by enabling them substance of labor;
                        distribute clothes, stationary stuff and eatables and finally give
                        shape to the journal.
                    </p>
                </div>

            </div>

            <!-- Right Donate Form -->

            <div class="w-full lg:w-1/3 h-fit sticky top-0">
                <div class="shadow-lg rounded p-6 bg-white border border-gray-200">
                    <h3 class="text-md font-semibold text-gray-800 mb-4">DONATE NOW</h3>

                    <!-- Give Type -->
                    <button id="onceBtn" data-type="one-time"
                        class="donation-btn give-type w-full bg-gray-100 text-sm font-bold py-2 px-4 rounded mb-2">
                        GIVE ONCE
                    </button>
                    <button id="monthlyBtn" data-type="monthly"
                        class="donation-btn give-type w-full bg-gray-100 text-sm py-2 px-4 rounded mb-4">
                        GIVE MONTHLY
                    </button>

                    <h4 class="text-sm font-semibold text-gray-700 mb-2">
                        Choose Amount to Donate
                    </h4>

                    <!-- Amount Buttons -->
                    <button class="amount-btn w-full bg-yellow-400 text-sm font-bold py-2 px-4 rounded mb-2"
                        data-value="500">
                        ₹500
                    </button>
                    <button class="amount-btn w-full bg-gray-100 text-sm py-2 px-4 rounded mb-2" data-value="1000">
                        ₹1000
                    </button>
                    <button class="amount-btn w-full bg-gray-100 text-sm py-2 px-4 rounded mb-2" data-value="2000">
                        ₹2000
                    </button>
                    <button class="amount-btn w-full bg-gray-100 text-sm py-2 px-4 rounded mb-4" data-value="3000">
                        ₹3000
                    </button>
                    <button id="customBtn" class="amount-btn w-full bg-gray-100 text-sm py-2 px-4 rounded mb-6"
                        data-value="">
                        ₹ CUSTOM AMOUNT
                    </button>

                    <!-- Donation Form -->
                    <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST" class="space-y-2">
                        @csrf
                        <input type="text" placeholder="FIRST NAME" class="w-full border px-4 py-2 rounded text-sm"
                            name="firstName" />

                        <!-- Hidden input to store selected type -->
                        <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />

                        <input type="hidden" name="campaign" id="campaign"
                            value="Journal of Interdisciplinary Approaches" />

                        <input type="text" placeholder="LAST NAME" class="w-full border px-4 py-2 rounded text-sm"
                            name="lastName" />

                        <input id="customAmount" type="text" placeholder="AMOUNT"
                            class="w-full border px-4 py-2 rounded text-sm" name="amount" />
                        <input type="email" placeholder="EMAIL" class="w-full border px-4 py-2 rounded text-sm"
                            name="email" />
                        <input type="text" placeholder="+91" class="w-full border px-4 py-2 rounded text-sm"
                            name="contact" />

                        <input type="text" placeholder="ADDRESS" class="w-full border px-4 py-2 rounded text-sm"
                            name="address" />

                        <!-- Hidden input for payment_id -->
                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
                        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                        <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                        
                        <button type="submit" id="pay-button"
                            class="w-full bg-gray-900 text-white font-semibold py-2 px-4 rounded">
                            PROCEED TO DONATE
                        </button>
                    </form>

                    <!-- Volunteer Box -->
                    <div
                        class="relative overflow-hidden rounded-xl bg-[#fee09c] px-6 py-6 min-h-[200px] flex flex-col justify-center items-center text-center mt-6 mb-6">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Volunteers are the heart of our foundation. Sign up today and
                                be a part of something bigger.
                            </p>
                            <button class="bg-[#11144a] text-white text-sm font-semibold py-2 px-6 rounded"><a
                                    href="{{ route('volunteer-member') }}">BECOME VOLUNTEER</a>

                            </button>
                        </div>
                    </div>

                    <!-- Annual Member Box -->
                    <div
                        class="relative overflow-hidden rounded-xl bg-[#fee09c] px-6 py-6 min-h-[220px] flex flex-col justify-center items-center text-center">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Join a community committed to long-term change. Your annual
                                membership fuels year-round impact — supporting education,
                                environment, and empowerment.
                            </p>
                            <button class="bg-[#11144a] text-white text-sm font-semibold py-2 px-6 rounded"><a
                                    href="{{ route('annual-member') }}">BECOME ANNUAL MEMBER</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- JS Logic -->
    <script>
        // Handle amount button selection
        const amountButtons = document.querySelectorAll(".amount-btn");
        const amountInput = document.getElementById("customAmount");

        amountButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                // Reset all
                amountButtons.forEach((b) => {
                    b.classList.remove("bg-yellow-400", "text-black", "font-bold");
                    b.classList.add("bg-gray-100");
                });

                // Highlight current
                btn.classList.add("bg-yellow-400", "text-black", "font-bold");
                btn.classList.remove("bg-gray-100");

                // Fill input if not custom
                // const value = btn.dataset.amount;
                // if (value !== "custom") {
                //     amountInput.value = value;
                // } else {
                //     amountInput.value = "";
                //     amountInput.focus();
                // }
            });
        });

        // If user types manually, unselect all buttons
        amountInput.addEventListener("input", () => {
            if (amountInput.value.trim() !== "") {
                amountButtons.forEach((b) => {
                    b.classList.remove("bg-yellow-400", "text-black", "font-bold");
                    b.classList.add("bg-gray-100");
                });
            }
        });
    </script>
@endsection
