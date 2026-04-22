@section('title')
    Pradhan Mantri Jan Aushadhi Kendra
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">PRADHAN MANTRI JAN AUSHADHI KENDRA</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Pradhan Mantri Jan Aushadhi Kendra</span>
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
                        Pradhan Mantri Jan Aushadhi Kendra
                    </h2>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">✔</span>
                            <span>Licence No: UA-RDR-109329, UA-RDR-109330</span>
                        </li>

                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">✔</span>
                            <span>Opening Date: 17th Feb, 2020</span>
                        </li>

                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">✔</span>
                            <span>Address: Aunkareshwar ward no. 03, Ukhimath, Rudraprayag</span>
                        </li>

                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">✔</span>
                            <span>We also celebrated Pradhan Mantri Jan Aushadhi Diwas on 7th
                                March, 2020</span>
                        </li>

                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">✔</span>
                            <span>Our center is at the remote location, hence, it is declared as
                                Mitra Kendra by PMO in 2021</span>
                        </li>
                    </ul>
                </div>

                <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/pmjk/image_2.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="aushadhi kendra2">
                                    <img src={{ asset('uploads/pmjk/image_2.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/pmjk/image_6.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="aushadhi kendra">
                                    <img src={{ asset('uploads/pmjk/image_6.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/pmjk/image_4.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="aushadhi kendra4">
                                    <img src={{ asset('uploads/pmjk/image_4.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/pmjk/image_3.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="aushadhi kendra3">
                                    <img src={{ asset('uploads/pmjk/image_3.jpg') }} alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/pmjk/image_5.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="aushadhi kendra5">
                                    <img src={{ asset('uploads/pmjk/image_5.jpg') }} alt="Training 1"
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


                <!-- card 1 -->
                <div class="max-w-7xl mx-auto my-3">
                    <!-- Heading -->
                    <h2 class="text-2xl pt-5 md:text-3xl font-bold text-gray-900 mb-6">
                        PMJAK one week program directed by PMO
                    </h2>

                    <div class="grid md:grid-rows-2 gap-6  bg-gray-50 rounded-lg overflow-hidden shadow items-center">
                        <!-- Left side (Image) -->
                        <div class="mx-4 mt-4">
                            <img src="{{ asset('uploads/pmjk/image_6.jpg') }}" alt="PMJAK Program"
                                class="w-full h-56 sm:h-64 md:h-80 object-cover" />
                        </div>

                        <!-- Right side (Content) -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900">
                                FIRST DAY INAUGURAL OF HEALTH CAMP OF WEEKLY PROGRAM DIRECTED BY
                                PMO
                            </h3>
                            <p class="text-orange-600 font-semibold mt-2">1st March, 2021</p>
                            <p class="text-gray-700 mt-4 leading-relaxed text-justify">
                                Our PMJAK was at extreme location in Uttarakhand, therefore, it
                                was declared as a
                                <span class="font-semibold">“MITRA KENDRA”</span> by PMO. Hence a
                                one week program needed to be organised by us and on first day of
                                inauguration, a medical camp was organized in the auditorium of
                                Block Ukhimath, District Rudraprayag, Uttarakhand on March 01,
                                2021 as directed by Hon’ble Prime Minister, Shri Narendra Modi’s
                                office, in which many villagers participated in large numbers.
                                Apart from Pyare Foundation Team, Ukhimath Medical Officer, Dr.
                                Renu Shah was also present in the camp. The motive of the camp was
                                to spread awareness of health in the society and among the people.
                                They were also told about various medical schemes and facilities
                                which everyone is supposed to be aware of in case of necessity.
                                The main objective was to make the public aware of the Prime
                                Minister’s, Jan Aushadhi Kendra. A daily report was also submitted
                                to PM Office.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->


                <div class="max-w-7xl mx-auto my-3">
                    <div class="grid md:grid-rows-2 gap-6 bg-gray-50 rounded-lg overflow-hidden shadow items-center">
                        <!-- Left side (Image) -->
                        <div class="mx-4 mt-4">
                            <img src="{{ asset('uploads/pmjk/image_7.jpg') }}" alt="PMJAK Program"
                                class="w-full h-56 sm:h-64 md:h-80 object-cover" />
                        </div>

                        <!-- Right side (Content) -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900">
                                HEALTH DISCUSSION PROGRAM
                            </h3>
                            <p class="text-orange-600 font-semibold mt-2">2nd March, 2021</p>
                            <p class="text-gray-700 mt-4 leading-relaxed text-justify">
                                On the second day of weekly program of Pradhan Mantri Jan Aushadhi
                                Kendra, Pyare Foundation organized a health discussion program at
                                Shri Uttarakhand Ayurvedic Bhaishajya Kalpak (Pharmacist) and
                                Panchakarma Sahayak (Panchakarma Technician) Training Institute
                                Vidyapeeth on March 2, 2021, as directed by the office of Hon’ble
                                Prime Minister Shri Narendra Modi Ji. The motive of the discussion
                                was to spread awareness of health in the society and the
                                institution as well. They were also told about various medical
                                schemes and facilities which everyone is supposed to be aware of.
                                The main objective was to make the public aware of the Prime
                                Minister’s Jan Aushadhi Kendra.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="max-w-7xl mx-auto my-3">
                    <div class="grid md:grid-rows-2 gap-6 bg-gray-50 rounded-lg overflow-hidden shadow items-center">
                        <!-- Left side (Image) -->
                        <div class="mx-4 mt-4">
                            <img src="{{ asset('uploads/pmjk/image_8.jpg') }}" alt="PMJAK Program"
                                class="w-full h-56 sm:h-64 md:h-80 object-cover" />
                        </div>

                        <!-- Right side (Content) -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900">
                                THIRD DAY PROGRAM “JAN JAN TAK JAN AUSHADHI
                            </h3>
                            <p class="text-orange-600 font-semibold mt-2">3rd March, 2021</p>
                            <p class="text-gray-700 mt-4 leading-relaxed text-justify">
                                As per the instructions of Hon’ble Prime Minister, Shri Narendra
                                Modi Ji, the third day program “Jan Jan Tak Jan Jan Aushadhi” was
                                also completed successfully on 3rd March 2021. The program was
                                organized by the Pyare Foundation at Government Inter Mediate
                                College, Ukhimath in which the college’s teachers and students
                                were made aware of the Prime Minister’s Jan Aushadhi Kendra. These
                                efforts of the Pyare Foundation are dedicated for the revolution
                                in health status of the society. These efforts will carry on with
                                positive hope.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- card 4 -->
                <div class="max-w-7xl mx-auto my-3">
                    <div class="grid md:grid-rows-2 gap-6 bg-gray-50 rounded-lg overflow-hidden shadow items-center">
                        <!-- Left side (Image) -->
                        <div class="mx-4 mt-4">
                            <img src="{{ asset('uploads/pmjk/image_9.jpg') }}" alt="PMJAK Program"
                                class="w-full h-56 sm:h-64 md:h-80 object-cover" />
                        </div>

                        <!-- Right side (Content) -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900">
                                HEALTH ESSAY WRITING COMPETITION
                            </h3>
                            <p class="text-orange-600 font-semibold mt-2">4th March, 2021</p>
                            <p class="text-gray-700 mt-4 leading-relaxed text-justify">
                                On March 4, 2021, “Health Essay Writing Competition” was
                                successfully concluded on the fourth day of Jan Jan Tak Jan
                                Aushadhi Awareness Week program organized by Pyare Foundation. The
                                competition was organized at the “Saraswati Vidya Mandir,
                                Ukhimath, Rudraprayag”, whose main objective was to make the
                                public aware of the Prime Minister’s Jan Aushadhi Kendra. Many
                                students participated in this competition and essays of some
                                students were also selected for further selection. Competition was
                                fruitful for the students and also they get aware of the Prime
                                Minister’s Jan Aushadhi Kendra.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="max-w-7xl mx-auto my-3">
                    <div class="grid md:grid-rows-2 gap-6 bg-gray-50 rounded-lg overflow-hidden shadow items-center">
                        <!-- Left side (Image) -->
                        <div class="mx-4 mt-4">
                            <img src="{{ asset('uploads/pmjk/image_10.jpg') }}" alt="PMJAK Program"
                                class="w-full h-56 sm:h-64 md:h-80 object-cover" />
                        </div>

                        <!-- Right side (Content) -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900">
                                GIFT AND SANITARY PAD DISTRIBUTION
                            </h3>
                            <p class="text-orange-600 font-semibold mt-2">5th March, 2021</p>
                            <p class="text-gray-700 mt-4 leading-relaxed text-justify">
                                On March 5, 2021, “Gift and Sanitary pad distribution program was
                                organized in Government Senior Secondary Girls School, Ukhimath
                                Rudraprayag” on the fifth day of Jan Jan Tak Jan Aushadhi
                                Awareness Week program organized by Pyare Foundation. Its main
                                purpose was to encourage students and make people aware of health
                                and hygiene. People were also informed about the Prime Minister’s
                                Jan Aushadhi Kendra. This distribution program hoped that positive
                                wave of awareness could be spread in Society. A very important
                                issue of sanitary pad was discussed with the hope that awareness
                                can be spread in the society and change can be brought.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="max-w-7xl mx-auto my-3">
                    <div class="grid md:grid-rows-2 gap-6 bg-gray-50 rounded-lg overflow-hidden shadow items-center">
                        <!-- Left side (Image) -->
                        <div class="mx-4 mt-4">
                            <img src="{{ asset('uploads/pmjk/image_11.jpg') }}" alt="PMJAK Program"
                                class="w-full h-full sm:h-64 md:h-80 object-cover" />
                        </div>

                        <!-- Right side (Content) -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900">
                                6TH DAY OF JAN JAN TAK JAN AUSADHI AWARENESS WEEK PROGRAM
                            </h3>
                            <p class="text-orange-600 font-semibold mt-2">6th March, 2021</p>
                            <p class="text-gray-700 mt-4 leading-relaxed text-justify">
                                On 6th day of Jan Jan Tak Jan Aushadhi Awareness Week program
                                organized by Pyare Foundation on March 6, 2021, “Students of
                                Government Girls Senior Secondary School Ukhimath, Rudraprayag
                                participated in health padayatra organized by Pyare Foundation and
                                made people aware of Pradhan Mantri Jan Aushadhi Kendra. This
                                Padayatra was very effective and fruitful. A positive wave of
                                awareness was the only motive of the Padyatra. Students made
                                people aware about health and its importance with the help of
                                various method. Foundation will not stop until a revolution will
                                come in the society for health and hygiene.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="max-w-7xl mx-auto my-3">
                    <div class="grid md:grid-rows-2 gap-6 bg-gray-50 rounded-lg overflow-hidden shadow items-center">
                        <!-- Left side (Image) -->
                        <div class="mx-4 mt-4">
                            <img src="{{ asset('uploads/pmjk/image_12.jpg') }}" alt="PMJAK Program"
                                class="w-full h-full sm:h-64 md:h-64 object-cover" />
                        </div>

                        <!-- Right side (Content) -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900">
                                FINAL DAY OF JAN JAN TAK JAN AUSADHI PROGRAM - JAN AUSHADHI DIWAS
                            </h3>
                            <p class="text-orange-600 font-semibold mt-2">7th March, 2021</p>
                            <p class="text-gray-700 mt-4 leading-relaxed text-justify">
                                A seven-day program organized by the Pyare Foundation, Jan Jan Tak
                                Jan Aushadhi was completed on 07 March 2021 on Jan Aushadhi Diwas
                                with the address of Hon’ble Prime Minister, Shri Narendra Modi and
                                59 naunihals were awarded with certificates in the block
                                auditorium of Ukhimath. This seven-day program was full of
                                enthusiasm and energy and the organisation aims to bring awareness
                                in the society related to Medical Health and Hygiene. Pyare
                                foundation will come up with more awareness as well as medical
                                support program.
                            </p>
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

                        <input type="hidden" name="campaign" id="campaign"
                            value="Pradhan Mantri Jan Aushadhi Kendra" />

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
