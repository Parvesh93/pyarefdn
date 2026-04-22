@section('title')
    Female health and hygiene
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">FEMALE HEALTH AND HYGIENE</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Female Health And Hygiene</span>
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
                        Female health and hygiene workshop - 13th Dec, 2021
                    </h2>
                    <p class="text-justify">
                        A Female Health and Hygiene Awareness Workshop was held at Dr.
                        Jacques Vigne National School in Guptkashi Rudraprayag on December
                        13th, 2021. The workshop was attended by Pradhans, Locals, and
                        Government officials, with Shaili Prajapati and Deepika Kandpal
                        representing the District Magistrate as the primary guests.
                        Attendees were given mementos and shawls as a token for their
                        enthusiasm and devotion towards the cause. Finally, organization
                        members provided sanitary pads, hand sanitizers, and face masks to
                        everyone. Lunch was also organised for 250 people at end. A
                        reimbursement of Rs 24, 500 for Lunch was made by DM, Rudraprayag.
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


                                <a href="{{ asset('uploads/female-health/image_2.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health2">
                                    <img src={{ asset('uploads/female-health/image_2.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_3.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health3">
                                    <img src={{ asset('uploads/female-health/image_3.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_4.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health4">
                                    <img src={{ asset('uploads/female-health/image_4.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_5.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health5">
                                    <img src={{ asset('uploads/female-health/image_5.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_6.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health6">
                                    <img src={{ asset('uploads/female-health/image_6.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>

                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_7.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health7">
                                    <img src={{ asset('uploads/female-health/image_7.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_8.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health8">
                                    <img src={{ asset('uploads/female-health/image_8.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_9.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health9">
                                    <img src={{ asset('uploads/female-health/image_9.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_10.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health10">
                                    <img src={{ asset('uploads/female-health/image_10.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_11.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health11">
                                    <img src={{ asset('uploads/female-health/image_11.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_12.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health12">
                                    <img src={{ asset('uploads/female-health/image_12.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_13.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health13">
                                    <img src={{ asset('uploads/female-health/image_13.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_14.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health14">
                                    <img src={{ asset('uploads/female-health/image_14.jpg') }} alt="Training 1"
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

                <h2 class="text-2xl sm:text-3xl font-bold mb-2">
                    Female health and hygiene workshop - 10th Dec, 2018
                </h2>
                <p class="text-justify">
                    The workshop was designed to discuss and deliberate about female
                    health of the villages and reach consensus for the female health
                    issues and concerns. The aim and objective was to serve females and
                    award female leaders by introducing them to talks and comments of
                    experts, experienced professionals, wise achievers and activists.
                    Many influential personalities were invited in the workshop to
                    highlight major health issues that women face in such areas so that
                    final conclusion could be made on the basis of the discussion.
                    Doctors, Female activists, successful Pradhans & school and college
                    teachers, heads and owners spoke in the venue. The female Pradhans
                    of various wards had face to face interaction and this helped to
                    relate better and retrieve well, the hard lessons in health and
                    hygiene maintenance and sustenance. The meet helped to recognise the
                    input, contribution and trust worthy work of female pradhans in the
                    Rudraprayag district to come out with concrete solutions. The
                    pharmacists and ashas associated with Pyare foundation were tested
                    about their role and action in health pursuits.
                </p>
                <p class="text-justify mt-4">
                    The workshop was held on 10th December, 2018 in collaboration with <span
                        class="text-black font-bold">Gandhi Smriti and Darshan Samiti</span> in the block Sabhagar,
                    Ukhimath,
                    Rudraprayag, Uttarakhand in which influential personalities were
                    invited along with female pradahns from 35 Gram Panchayats to
                    highlight the health issues among people and to motivate them in
                    favour to such issues. Dr Sachin Chaubey (Deputy CMO, Rudraprayag,
                    Uttarakhand) addressed the issues and suggested us to expand more
                    and to reach more people. He also appreciated the working towards
                    society.
                </p>
                <p class="text-justify mt-4">
                    Pradhans from different villages put forward their viewpoint in the
                    society and how some of them fought against the society and stood
                    themselves on their own foot. They shared their stories with other
                    females to motivate them.
                </p>

                <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_15.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health15">
                                    <img src={{ asset('uploads/female-health/image_15.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_16.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health16">
                                    <img src={{ asset('uploads/female-health/image_16.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_17.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health17">
                                    <img src={{ asset('uploads/female-health/image_17.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>

                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_18.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health18">
                                    <img src={{ asset('uploads/female-health/image_18.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_19.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health19">
                                    <img src={{ asset('uploads/female-health/image_19.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_20.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health20">
                                    <img src={{ asset('uploads/female-health/image_20.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_21.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health21">
                                    <img src={{ asset('uploads/female-health/image_21.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_22.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health22">
                                    <img src={{ asset('uploads/female-health/image_22.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_23.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health23">
                                    <img src={{ asset('uploads/female-health/image_23.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/female-health/image_24.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="health24">
                                    <img src={{ asset('uploads/female-health/image_24.jpg') }} alt="Training 1"
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


                <h2 class="text-2xl sm:text-3xl mt-2 mb-2 font-bold">
                    Results and Conclusion
                </h2>
                <p class="text-justify">
                    The workshop concluded with the great success in which social activists,
                    female leaders, pradhans, ashaas and other villagers took active
                    participation. There was a healthy discussion among all the participants
                    on the issue of health and hygiene in which Dr Sachin Chaubey (Deputy
                    CMO) spoke and shared all the facts on health and hygiene issues. Many
                    leaders also motivated all the female participants in the workshop with
                    the real life examples.
                </p>
                <p class="mt-4 mb-4 text-justify">
                    The major personalities in the workshop also suggested to implement
                    other campaigns that could help females in some way to secure good
                    future. 17 female and male social activists were awarded with the
                    achievers award that motivated other population as well.
                </p>
                <p class="mt-4 mb-4 text-justify">
                    At the end, the workshop was a great success and Pyare Foundation is
                    committed to implement all the suggestions and feedbacks that is
                    provided at the moment in future.
                </p>


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

                        <input type="hidden" name="campaign" id="campaign" value="Female health and hygiene" />

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
