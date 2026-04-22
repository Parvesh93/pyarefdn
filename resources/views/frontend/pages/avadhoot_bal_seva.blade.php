@section('title')
    Avadhoot Bal Seva
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">AVADHOOT BAL SEVA</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Avadhoot Bal Seva</span>
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
                    <p class="text-justify ">
                        Pyare Foundation unveiled a new educational, awareness, and
                        character-building initiative for children in grades 10 through 12.
                        The plan is to have numerous workshops every Sunday that would aid
                        many pupils in better comprehending topics and enhancing their
                        personalities. The project began on July 4th and will finish on
                        December 5th, 2021, spanning a total of 22 Sundays. The first
                        meeting cum session was held on July 4th itself, with many students
                        in attendance at our Dilshad Garden communication centre
                    </p>
                    <p class="text-justify mt">
                        Academic session covered all the subjects and school homework which
                        was followed by lunch. After lunch, extra-curricular activities were
                        performed like mental exercises, entertainment exercises, dance,
                        poems etc. In the evening, children were served with snacks. At 5 O
                        clock, all the activities were winded up with prayer. The breakfast,
                        lunch and evening snacks were under check of nutrition value. It was
                        really a wonderful, overwhelming and an amazing time for Pyare
                        Foundation.
                    </p>
                    <p class="text-justify">
                        In the future, we will plan and work on such kind of programs with
                        dedication.
                    </p>
                </div>

                <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/avadhoot/image_2.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot2">
                                    <img src={{ asset('uploads/avadhoot/image_2.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_3.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot3">
                                    <img src={{ asset('uploads/avadhoot/image_3.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_4.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot4">
                                    <img src={{ asset('uploads/avadhoot/image_4.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_5.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot5">
                                    <img src={{ asset('uploads/avadhoot/image_5.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_6.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot6">
                                    <img src={{ asset('uploads/avadhoot/image_6.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>

                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_7.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot7">
                                    <img src={{ asset('uploads/avadhoot/image_7.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_8.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot8">
                                    <img src={{ asset('uploads/avadhoot/image_8.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_9.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot9">
                                    <img src={{ asset('uploads/avadhoot/image_9.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_10.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot10">
                                    <img src={{ asset('uploads/avadhoot/image_10.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_11.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot11">
                                    <img src={{ asset('uploads/avadhoot/image_11.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_12.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot12">
                                    <img src={{ asset('uploads/avadhoot/image_12.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_13.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot13">
                                    <img src={{ asset('uploads/avadhoot/image_13.jpeg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/avadhoot/image_14.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="avadhoot14">
                                    <img src={{ asset('uploads/avadhoot/image_14.jpeg') }} alt="Training 1"
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
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

                        <input type="hidden" name="campaign" id="campaign" value="Avadhoot Bal Seva" />

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
        // Toggle Give Once / Monthly
        // const onceBtn = document.getElementById('onceBtn');
        // const monthlyBtn = document.getElementById('monthlyBtn');

        // [onceBtn, monthlyBtn].forEach(btn => {
        //     btn.addEventListener('click', () => {
        //         [onceBtn, monthlyBtn].forEach(b => {
        //             b.classList.remove('bg-[#FEB201]', 'text-black');
        //             b.classList.add('bg-gray-100');
        //         });

        //         btn.classList.add('bg-[#FEB201]', 'text-black');
        //         btn.classList.remove('bg-gray-100');
        //     });


        // });

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
                const value = btn.dataset.amount;
                if (value !== "custom") {
                    amountInput.value = value;
                } else {
                    amountInput.value = "";
                    amountInput.focus();
                }
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
