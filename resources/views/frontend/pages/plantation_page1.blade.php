@section('title')
    Plantation Project
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->

    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0  mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">PLANTATION PROJECT</h2>

            <!-- Breadcrumbs -->
            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Plantation Project</span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11  flex flex-col lg:flex-row gap-10 px-4">
            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                    <!-- Left Side - Text Content -->
                    <div class="space-y-8 min-h-[350px]">
                        <!-- Title with Icon -->
                        <div class="flex items-center gap-3">
                            <h2 class="text-2xl font-bold text-gray-900">
                                Plantation Drive
                            </h2>
                        </div>

                        <!-- Main Description -->
                        <p class="text-gray-600 leading-relaxed text-justify">
                            An initiative started by Pyare Foundation and the
                            Hindustan Scouts & Guides with the target of 5000
                            saplings to be planted by June, 2022. The teams from
                            both organizations will also make sure that the
                            planted saplings will get adequate care. This
                            initiative reaches significant areas, and people
                            from various cities and towns join this program.
                            Organizing a plantation drive is equivalent to
                            working on the nearby community’s development. Such
                            an initiative will help secure the indigenous nature
                            of the nearby areas. Counting in environmental
                            issues like global warming, soil erosion, water
                            scarcity, increasing particulate matter in the air,
                            ozone depletion, etc., we have concluded conducting
                            and promoting plantation drives in specific areas.
                        </p>
                    </div>

                    <!-- Right Side - Image -->
                    <div class="relative mt-20">
                        <div class="h-80 rounded-2xl overflow-hidden shadow-xl">
                            <img src="{{ asset('uploads/plantation/p5.webp') }}"
                                alt="Person planting seedlings in soil with gardening tools nearby"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>

                <!-- Content Below Image -->
                <div class="mt-8 space-y-4">
                    <p class="text-gray-600 leading-normal text-justify">
                        Hindustan Scouts & Guides is a non-profit organisation
                        that has been active in India for many years, and its
                        volunteers participate in a variety of activities and
                        events. This time, members of HSG, in collaboration with
                        Pyare Foundation, pledged to plant 5000 trees over the
                        course of a year, from June 5, 2021 to June 5, 2022.
                        They are grateful for the opportunity they had of
                        working with the nice and hardworking members of HSG.
                        Around 80 people signed the pledge, planting up to 50
                        plants thus far. Pyare Foundation joins them in planting
                        trees for a healthier environment, they encourage others
                        to do the same.
                    </p>
                    <div class="flex items-center gap-3">
                        <h2 class="text-2xl font-bold text-gray-900">
                            Conclusion
                        </h2>
                    </div>

                    <p class="text-gray-600 leading-normal text-justify">
                        We proudly announce that we have been able to plant more
                        than 5000 saplings until now, increasing the number. The
                        team of Hindustan Scout Guides and Pyare Foundation
                        worked tirelessly for the project to make it a success.
                        With utmost delight, we are celebrating the completion
                        of our plantation drive. We here are grateful that our
                        small contribution will surely add some improvements to
                        our surroundings. The following plantation drive has
                        taught us the awe of nature and the beautiful process of
                        implanting samplings and gracing them until they bloom
                        out.
                    </p>

                    <p class="text-gray-600 leading-normal text-justify">
                        The plantation drive took place in Delhi, Bihar, Uttar
                        Pradesh and Rajasthan. The varieties of plants, the day
                        of plantation, the growth of plant, the benefits of
                        plants all were recorded for the good of cause. The aim
                        was to practically get benefitted from plantation drive
                        and thus the team members were advised and cautioned to
                        make complete summary and have data ready for
                        complication and presentation. The pressure was mounted
                        in order to ensure worthiness of plantation drive. The
                        plants have now grown and some will yield fruits as
                        well. There are chances some may come up as trees and
                        provide shelter and cool oxygen naturally in hot places.
                    </p>
                </div>

                <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/plantation/p.webp') }}" data-fancybox="rugra-gallery"
                                    data-caption="plantation">
                                    <img src="{{ asset('uploads/plantation/p.webp') }}" alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" loading="lazy" />

                                </a>

                            </div>
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/plantation/p2.webp') }}" data-fancybox="rugra-gallery"
                                    data-caption="plantation2">
                                    <img src="{{ asset('uploads/plantation/p2.webp') }}" alt="Training 2"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/plantation/p3.webp') }}" data-fancybox="rugra-gallery"
                                    data-caption="plantation3">
                                    <img src="{{ asset('uploads/plantation/p3.webp') }}" alt="Training 3"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/plantation/p4.webp') }}" data-fancybox="rugra-gallery"
                                    data-caption="plantation4">
                                    <img src="{{ asset('uploads/plantation/p4.webp') }}" alt="Training 4"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/plantation/p5.webp') }}" data-fancybox="rugra-gallery"
                                    data-caption="plantation5">
                                    <img src="{{ asset('uploads/plantation/p5.webp') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/plantation/p6.webp') }}" data-fancybox="rugra-gallery"
                                    data-caption="plantation6">

                                    <img src="{{ asset('uploads/plantation/p6.webp') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/plantation/p1.webp') }}" data-fancybox="rugra-gallery"
                                    data-caption="plantation1">

                                    <img src="{{ asset('uploads/plantation/p1.webp') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Custom Arrows -->
                    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                        <div
                            class="swiper-button-prev-custom bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </div>
                    </div>

                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                        <div
                            class="swiper-button-next-custom bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
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
                    <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST"
                        class="space-y-2">
                        @csrf
                        <input type="text" placeholder="FIRST NAME" class="w-full border px-4 py-2 rounded text-sm"
                            name="firstName" />

                        <!-- Hidden input to store selected type -->
                        <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />

                        <input type="hidden" name="campaign" id="campaign" value="Plantation Drive" />

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
