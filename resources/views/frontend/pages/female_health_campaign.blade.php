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
            <h2 class="md:text-2xl text-2xl font-bold">Intensive Care For Female Health Camps</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Supported by GAIL (India Limited)</span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">

            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">

                <!-- Paragraphs -->
                <div class="space-y-4  leading-relaxed">
                    <h2 class="md:text-3xl font-bold text-2xl">
                        Overview
                    </h2>
                    <p class="text-justify">
                        In partnership with GAIL (India) Limited, Pyare Foundation successfully organized a series of
                        “Intensive Care For Female Health Camps” from December 2023 to March 2024. The objective of these
                        health camps was to comprehensively address the health needs of females in the community, focusing
                        on areas such as menstrual hygiene, overall well-being, and personalized health insights.
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

                                <a href="{{ asset('uploads/images/campaign/image_2.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_2.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_3.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_3.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_4.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_4.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_5.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_5.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_6.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_6.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_7.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_7.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_8.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_8.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_9.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_9.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_10.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_10.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_11.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_11.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_12.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_12.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_13.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_13.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_14.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_14.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_15.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_15.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_16.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_16.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_17.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_17.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_18.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_18.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_19.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_19.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_20.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_20.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_21.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_21.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_22.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_22.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_23.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_23.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_24.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_24.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_25.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_25.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_26.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_26.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_26.jpg') }}"
                                    data-fancybox="rugra-gallery" data-caption="Health Campaigns">
                                    <img src={{ asset('uploads/images/campaign/image_27.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
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

                <div class="space-y-5  leading-relaxed">
                    <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2>
                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Needs Assessment and Planning:</span> Before the initiation of
                        each
                        health camp, a thorough needs assessment was conducted to identify specific health challenges within
                        the community. This information guided the planning process, ensuring that the interventions were
                        tailored to the unique health needs of the female population.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Venue Selection: </span> Careful consideration was given to the
                        selection of venues for each health camp to ensure accessibility for the target population.
                    </p>
                </div>






                <div class="">
                    <h2 class="md:text-xl sm:text-3xl pb-4">
                        List of Team Members involved in the entire project
                    </h2>
                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Team Members</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Position</th>

                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Anjali Thapliyal Kaul</td>
                                    <td class="px-4 py-2 border border-black">President</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Mrs Pushpa Thapliyal</td>
                                    <td class="px-4 py-2 border border-black">Deputy Secretary</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Mr. Parvesh</td>
                                    <td class="px-4 py-2 border border-black">Operations Head</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        a. Lab Technician to take blood samples during health camps and Asha for providing helping hands
                    </h2>

                    <div class="max-w-full  overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Name</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Position</th>

                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Mr. Parash Kumar</td>
                                    <td class="px-4 py-2 border border-black">DMLT, BSc. MLT Final Year</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Mrs Meena Devi</td>
                                    <td class="px-4 py-2 border border-black">Asha</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>


                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        b. Available Doctors to perform online video conferencing in entire project
                    </h2>

                    <div class="max-w-full  overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Doctor’s Name</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Reg. No</th>

                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Dr Pradeep Kumar – MBBS - Orthopedic/ Neuro
                                        Surgery/ TBCD</td>
                                    <td class="px-4 py-2 border border-black">UPMCI26828</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Rajesh Mishra – MBBS - Demonstrator
                                        Respiratory Medicine</td>
                                    <td class="px-4 py-2 border border-black">UPMCI97894</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat – MBBS - Demonstrator
                                        Cardiology Department</td>
                                    <td class="px-4 py-2 border border-black">UPMCI80120</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Vikrant Goswami - MBBS - Demonstrator
                                        Biochemistry Department</td>
                                    <td class="px-4 py-2 border border-black">UPMCI89469</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Sanjiv Jha – MBBS</td>
                                    <td class="px-4 py-2 border border-black">UPMCI108363</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Sneha Mishra – MBBS, MS – Obs Gyn.</td>
                                    <td class="px-4 py-2 border border-black">UPMCI108368</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - MBBS</td>
                                    <td class="px-4 py-2 border border-black">UPMCI86872</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh, MBBS</td>
                                    <td class="px-4 py-2 border border-black">UPMCI86921</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="text-justify py-4">
                    <span class="font-bold text-lg">3. Venue Selection: </span> Careful consideration was given to the
                    selection of venues for each health camp to ensure accessibility for the target population.
                </p>
                <p class="italic text-justify py-4 font-bold">As per the CMO recommendation follow-up camps were also
                    organised along with health camps, therefore, there are 34 health camps in total including follow-up
                    camps.</p>


                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        a. Health Camps Details
                    </h2>

                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Month</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Location/ Venue</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Date of HC</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="5">December</td>
                                    <td class="px-4 py-2 border border-black">Shri Gangadhar Maithani Rajkiye Mahavidyalaya
                                        Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">18th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Government Girls High School, Ukhimath,
                                        Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">20th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Atal Utkrisht GIC, Ukhimath, Rudraprayag,
                                        Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">21st Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Swami Pranavanand Vidya Mandir Ukhimath</td>
                                    <td class="px-4 py-2 border border-black">23rd Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Village Giriya, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">26th Dec 2023</td>
                                </tr>


                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">January</td>
                                    <td class="px-4 py-2 border border-black">Village Gadgu, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">17th Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Village Kalimath, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20rd Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Shri Uttarakhand Ayurved Bhaishajya Kalp
                                        (Pharmacist) Prashikshan Vidyalay, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">23rd Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">9.</td>
                                    <td class="px-4 py-2 border border-black">Village Rayari, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">24th Jan 2024</td>
                                </tr>


                                <tr>
                                    <td class="px-4 py-2 border border-black">10.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">February</td>
                                    <td class="px-4 py-2 border border-black">Village Arkhund, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">14th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">11.</td>
                                    <td class="px-4 py-2 border border-black">Village Kandara, Agastyamuni, Rudraprayag
                                    </td>
                                    <td class="px-4 py-2 border border-black">15th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">12.</td>
                                    <td class="px-4 py-2 border border-black">Village Ransi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">13.</td>
                                    <td class="px-4 py-2 border border-black">Government Degree College, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">21st Feb 2024</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">14.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">March</td>
                                    <td class="px-4 py-2 border border-black">Village Dankot, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">10th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">15.</td>
                                    <td class="px-4 py-2 border border-black">Village Uchhola, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">11th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">16.</td>
                                    <td class="px-4 py-2 border border-black">Gauri Memorial Public School, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">12th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">17.</td>
                                    <td class="px-4 py-2 border border-black">Village Dangwadi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">15th March 2024</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        b. Followup Camps Details
                    </h2>

                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Month</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Location/ Venue</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Date of HC</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="5">December</td>
                                    <td class="px-4 py-2 border border-black">Shri Gangadhar Maithani Rajkiye Mahavidyalaya
                                        Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">27th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Government Girls High School, Ukhimath,
                                        Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">24th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Atal Utkrisht GIC, Ukhimath, Rudraprayag,
                                        Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">28th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Swami Pranavanand Vidya Mandir Ukhimath</td>
                                    <td class="px-4 py-2 border border-black">30th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Village Giriya, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">31st Dec 2023</td>
                                </tr>


                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">January</td>
                                    <td class="px-4 py-2 border border-black">Village Gadgu, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">21st Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Village Kalimath, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">22nd Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Shri Uttarakhand Ayurved Bhaishajya Kalp
                                        (Pharmacist) Prashikshan Vidyalay, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">29th Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">9.</td>
                                    <td class="px-4 py-2 border border-black">Village Rayari, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">30th Jan 2024</td>
                                </tr>


                                <tr>
                                    <td class="px-4 py-2 border border-black">10.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">February</td>
                                    <td class="px-4 py-2 border border-black">Village Arkhund, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">17th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">11.</td>
                                    <td class="px-4 py-2 border border-black">Village Kandara, Agastyamuni, Rudraprayag
                                    </td>
                                    <td class="px-4 py-2 border border-black">18th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">12.</td>
                                    <td class="px-4 py-2 border border-black">Village Ransi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">23rd Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">13.</td>
                                    <td class="px-4 py-2 border border-black">Government Degree College, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">22nd Feb 2024</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">14.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">March</td>
                                    <td class="px-4 py-2 border border-black">Village Dankot, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">13th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">15.</td>
                                    <td class="px-4 py-2 border border-black">Village Uchhola, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">14th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">16.</td>
                                    <td class="px-4 py-2 border border-black">Gauri Memorial Public School, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">13th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">17.</td>
                                    <td class="px-4 py-2 border border-black">Village Dangwadi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">16th March 2024</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="space-y-5  leading-relaxed">



                    <p class="text-justify">
                        <span class="font-bold text-lg">a. Health Assessments and Sample Collection:</span> A significant
                        component of the health camps was the comprehensive health assessments, including the collection of
                        blood samples. This proactive approach allowed for a deeper understanding of individual health needs
                        and laid the groundwork for personalized health insights and interventions.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">b. Menstrual Hygiene Promotion: </span> Distribution of sanitary
                        pads during each health camp addressed a critical aspect of female health—menstrual hygiene. This
                        initiative aimed to eliminate barriers to access and promote healthy menstrual practices,
                        contributing to the overall reproductive health of women in the community.
                    </p>


                    <p class="text-justify">
                        <span class="font-bold text-lg">c. Supplement Distribution:</span> The provision of supplements
                        during the health camps was a proactive measure to support overall well-being. This step aligned
                        with the program’s holistic approach, addressing not only immediate health concerns but also
                        promoting preventive healthcare practices for a healthier community.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">d. Online Doctor Sessions: </span> Leveraging technology, online
                        sessions with experienced healthcare professionals, including Dr. Pradeep Kumar, Dr. Arshi Shafat,
                        and Dr. Rajesh Mishra, Dr. Siddharth Singh, Dr. Ipsita Singh etc. were conducted. These sessions
                        served as platforms for disseminating valuable health information, empowering women with knowledge,
                        and fostering a sense of community well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">e. Installation of Sanitary Pad Incinerator: </span> Sanitary Pads
                        Incinerator was given to this school. Receiving from Principal was already attached with December
                        report. The machine was successfully installed in the school in the month of March, 2024 after
                        reaching the electricity connection in the school. Photographs and videos will be shared through
                        email
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">f. Gratitude and Acknowledgment: </span> A key element of the
                        program process involved expressing gratitude to GAIL (India) Limited for their steadfast support.
                        This acknowledgment highlighted the importance of collaborative efforts and reinforced the shared
                        commitment to improving female health within the community.
                    </p>


                    <p class="text-justify">
                        The success of the “Intensive Care For Female Health Camps” can be attributed to the systematic and
                        thoughtful execution of this program process. Each step was intricately woven to create a holistic
                        and impactful healthcare experience for the women served.
                    </p>



                </div>

                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        5. Health Camp Wise Doctor’s Conferencing
                    </h2>

                    <div class="max-w-full  overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Location/ Venue</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Date of HC</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Doctor</th>
                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Shri Gangadhar Maithani Rajkiye Mahavidyalaya
                                        Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">18th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr Pradeep Kumar - UPMCI26828</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Government Girls High School, Ukhimath,
                                        Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">20th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Atal Utkrisht GIC, Ukhimath, Rudraprayag,
                                        Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">21st Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr. Rajesh Mishra - UPMCI97894</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Swami Pranavanand Vidya Mandir Ukhimath</td>
                                    <td class="px-4 py-2 border border-black">23rd Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr. Rajesh Mishra - UPMCI97894</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Village Giriya, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">26th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black">Village Gadgu, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">17th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Village Kalimath, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Shri Uttarakhand Ayurved Bhaishajya Kalp
                                        (Pharmacist) Prashikshan Vidyalay, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">23rd Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">9.</td>
                                    <td class="px-4 py-2 border border-black">Village Rayari, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">24th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">10.</td>
                                    <td class="px-4 py-2 border border-black">Village Arkhund, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">14th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh - UPMCI86921</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">11.</td>
                                    <td class="px-4 py-2 border border-black">Village Kandara, Agastyamuni, Rudraprayag
                                    </td>
                                    <td class="px-4 py-2 border border-black">15th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">12.</td>
                                    <td class="px-4 py-2 border border-black">Village Ransi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh - UPMCI86921</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">13.</td>
                                    <td class="px-4 py-2 border border-black">Government Degree College, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">21st Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">14.</td>
                                    <td class="px-4 py-2 border border-black">Village Dankot, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">10th March 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">15.</td>
                                    <td class="px-4 py-2 border border-black">Village Uchhola, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">11th March 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh - UPMCI86921</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">16.</td>
                                    <td class="px-4 py-2 border border-black">Gauri Memorial Public School, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">12th March 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">17.</td>
                                    <td class="px-4 py-2 border border-black">Village Dangwadi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">15th March 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh - UPMCI86921</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>




                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        6. Health Outcomes
                    </h2>

                    <div class="max-w-full  overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Location/ Venue</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Date of HC</th>
                                    <th class="px-4 py-2 border border-black font-semibold">No of Participants</th>

                                    <th class="px-4 py-2 border border-black font-semibold">No of Sample Collection</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Sanitary Pads</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Vitamins & Supplements</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Doctors’ Sessions</th>


                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Shri Gangadhar Maithani Rajkiye Mahavidyalaya
                                        Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">18th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">60</td>
                                    <td class="px-4 py-2 border border-black">20</td>
                                    <td class="px-4 py-2 border border-black">300 packets</td>
                                    <td class="px-4 py-2 border border-black">1800 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Government Girls High School, Ukhimath,
                                        Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">20th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">39</td>
                                    <td class="px-4 py-2 border border-black">15</td>
                                    <td class="px-4 py-2 border border-black">150 packets</td>
                                    <td class="px-4 py-2 border border-black">780 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Atal Utkrisht GIC, Ukhimath, Rudraprayag,
                                        Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">21st Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">69</td>
                                    <td class="px-4 py-2 border border-black">20</td>
                                    <td class="px-4 py-2 border border-black">345 packets</td>
                                    <td class="px-4 py-2 border border-black">2070 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Swami Pranavanand Vidya Mandir Ukhimath</td>
                                    <td class="px-4 py-2 border border-black">23rd Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">39</td>
                                    <td class="px-4 py-2 border border-black">15</td>
                                    <td class="px-4 py-2 border border-black">150 packets</td>
                                    <td class="px-4 py-2 border border-black">780 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Village Giriya, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">26th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">150</td>
                                    <td class="px-4 py-2 border border-black">55</td>
                                    <td class="px-4 py-2 border border-black">275 packets</td>
                                    <td class="px-4 py-2 border border-black">5100 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black">Village Gadgu, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">17th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">175</td>
                                    <td class="px-4 py-2 border border-black">73</td>
                                    <td class="px-4 py-2 border border-black">400 packets</td>
                                    <td class="px-4 py-2 border border-black">10500 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Village Kalimath, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">150</td>
                                    <td class="px-4 py-2 border border-black">81</td>
                                    <td class="px-4 py-2 border border-black">350 packets</td>
                                    <td class="px-4 py-2 border border-black">9000 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Shri Uttarakhand Ayurved Bhaishajya Kalp
                                        (Pharmacist) Prashikshan Vidyalay, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">23rd Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">43</td>
                                    <td class="px-4 py-2 border border-black">43</td>
                                    <td class="px-4 py-2 border border-black">86 packets</td>
                                    <td class="px-4 py-2 border border-black">2580 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">9.</td>
                                    <td class="px-4 py-2 border border-black">Village Rayari, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">24th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">204</td>
                                    <td class="px-4 py-2 border border-black">99</td>
                                    <td class="px-4 py-2 border border-black">410 packets</td>
                                    <td class="px-4 py-2 border border-black">12240 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">10.</td>
                                    <td class="px-4 py-2 border border-black">Village Arkhund, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">14th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">82</td>
                                    <td class="px-4 py-2 border border-black">22</td>
                                    <td class="px-4 py-2 border border-black">246 packets & 28 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">4920 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">11.</td>
                                    <td class="px-4 py-2 border border-black">Village Kandara, Agastyamuni, Rudraprayag
                                    </td>
                                    <td class="px-4 py-2 border border-black">15th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">69</td>
                                    <td class="px-4 py-2 border border-black">15</td>
                                    <td class="px-4 py-2 border border-black">207 packets& 28 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">4140 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">12.</td>
                                    <td class="px-4 py-2 border border-black">Village Ransi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">45</td>
                                    <td class="px-4 py-2 border border-black">10</td>
                                    <td class="px-4 py-2 border border-black">135 packets & 24 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">2700 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">13.</td>
                                    <td class="px-4 py-2 border border-black">Government Degree College, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">21st Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">168</td>
                                    <td class="px-4 py-2 border border-black">284</td>
                                    <td class="px-4 py-2 border border-black">504 packets & 28 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">14112 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">14.</td>
                                    <td class="px-4 py-2 border border-black">Village Dankot, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">10th March 2024</td>
                                    <td class="px-4 py-2 border border-black">55</td>
                                    <td class="px-4 py-2 border border-black">11</td>
                                    <td class="px-4 py-2 border border-black">165 packets & 27 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">3300 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">15.</td>
                                    <td class="px-4 py-2 border border-black">Village Uchhola, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">11th March 2024</td>
                                    <td class="px-4 py-2 border border-black">168</td>
                                    <td class="px-4 py-2 border border-black">2</td>
                                    <td class="px-4 py-2 border border-black">504 packets & 27 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">10080 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">16.</td>
                                    <td class="px-4 py-2 border border-black">Gauri Memorial Public School, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">12th March 2024</td>
                                    <td class="px-4 py-2 border border-black">68</td>
                                    <td class="px-4 py-2 border border-black">28</td>
                                    <td class="px-4 py-2 border border-black">204 packets & 27 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">4080 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">17.</td>
                                    <td class="px-4 py-2 border border-black">Village Dangwadi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">15th March 2024</td>
                                    <td class="px-4 py-2 border border-black">63</td>
                                    <td class="px-4 py-2 border border-black">9</td>
                                    <td class="px-4 py-2 border border-black">219 packets & 27 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">4380 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black align-center font-bold" colspan="3">Total
                                    </td>
                                    <td class="px-4 py-2 border border-black">1657</td>
                                    <td class="px-4 py-2 border border-black">1657</td>
                                    <td class="px-4 py-2 border border-black">4846 packets</td>
                                    <td class="px-4 py-2 border border-black">92562</td>
                                    <td class="px-4 py-2 border border-black">48</td>

                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>


                <p class="text-justify py-2 font-bold">a. Some patients come out to be anaemic and polycythemia</p>

                <p class="text-justify py-2 font-bold">b. Many medicines were distributed as per the doctor’s consultation
                    on video conferencing</p>



                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        b. Followup Camps Details
                    </h2>

                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>

                                    <th class="px-4 py-2 border border-black font-semibold" hidden>HGB</th>
                                    <th class="px-4 py-2 border border-black font-semibold" hidden>RBC</th>
                                    <th class="px-4 py-2 border border-black font-semibold" hidden>WBC</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>

                                    <td class="px-4 py-2 border border-black text-white align-center bg-[#0A0A3C]"
                                        rowspan="3">HGB</td>
                                    <td class="px-4 py-2 border border-black">Number of Patients with Hemoglobin More than
                                        Normal Value</td>
                                    <td class="px-4 py-2 border border-black">2</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with Hemoglobin Less than
                                        Normal Value</td>
                                    <td class="px-4 py-2 border border-black">138</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with Hemoglobin in Normal
                                        Range</td>
                                    <td class="px-4 py-2 border border-black">460</td>
                                </tr>


                                <tr>

                                    <td class="px-4 py-2 border border-black text-white align-center bg-[#0070C0]"
                                        rowspan="3">RBC</td>
                                    <td class="px-4 py-2 border border-black">Number of Patients with RBCs More than Normal
                                        Value</td>
                                    <td class="px-4 py-2 border border-black">22</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with RBCs Less than Normal
                                        Value</td>
                                    <td class="px-4 py-2 border border-black">43</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with RBCs in Normal Range
                                    </td>
                                    <td class="px-4 py-2 border border-black">535</td>
                                </tr>


                                <tr>

                                    <td class="px-4 py-2 border border-black text-white align-center bg-[#0A0A3C]"
                                        rowspan="3">WBC</td>
                                    <td class="px-4 py-2 border border-black">Number of Patients with WBCs More than Normal
                                        Value</td>
                                    <td class="px-4 py-2 border border-black">230</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with WBCs Less than Normal
                                        Value</td>
                                    <td class="px-4 py-2 border border-black">15</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with WBCs in Normal Range
                                    </td>
                                    <td class="px-4 py-2 border border-black">355</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>



                <h2 class="md:text-2xl font-bold sm:text-3xl py-4">
                    COMMUNITY ENGAGEMENT AND OUTREACH
                </h2>


                <div class="space-y-5  leading-relaxed">



                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Community Needs Assessment: </span> The program commenced with a
                        thorough assessment of community needs, conducted through collaborative efforts with local leaders,
                        community representatives, and healthcare professionals. This participatory approach allowed for a
                        nuanced understanding of the specific health challenges faced by women in the community.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">2. Stakeholder Collaboration: </span> Strategic collaboration with
                        local stakeholders, including educational institutions, community leaders, and women’s groups,
                        played a pivotal role in ensuring widespread community participation. By engaging with key
                        influencers, the program gained credibility and fostered a sense of ownership within the community.


                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Promotional Campaigns:</span> Prior to each health camp,
                        extensive promotional campaigns were conducted through various channels, including local media,
                        community bulletin boards, and social media platforms. These campaigns effectively communicated the
                        purpose, date, and location of the health camps, generating anticipation and interest within the
                        community.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">4. Engagement Through Education: </span> Beyond the health
                        assessments, a series of educational initiatives were integrated into the health camps. Interactive
                        sessions, workshops, and informative materials were utilized to educate women on various health
                        topics, promoting a culture of health awareness and empowerment.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">5. Continuous Feedback Loop: </span> Throughout the program, a
                        continuous feedback loop was established to gauge community responses and gather insights for future
                        improvements. Open channels of communication facilitated dialogue, allowing the program to evolve in
                        response to the dynamic needs of the community.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">6. Post-Event Follow-Up: </span> Following each health camp,
                        post-event follow-up mechanisms were implemented to ensure sustained impact. This included the
                        distribution of educational materials, contact information for healthcare resources, and information
                        on local health services, encouraging ongoing health-conscious behaviors.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">7. Social and Cultural Sensitivity: </span> Recognizing the
                        diversity of the community, efforts were made to approach health issues with sensitivity to social
                        and cultural norms. Tailored communication strategies were employed to ensure that health messages
                        resonated with the cultural context of the community.


                    <p class="text-justify">
                        <span class="font-bold text-lg">8. Gratitude and Recognition: </span> Expressing gratitude to
                        community members for their active participation and support was a key element of the outreach
                        strategy. Recognizing the community’s role in the success of the health camps fostered a sense of
                        collective achievement and strengthened the bond between the program organizers and the community.
                    </p>



                </div>

                <h2 class="md:text-2xl font-bold sm:text-3xl py-4">
                    CHALLENGES FACED
                </h2>


                <div class="space-y-5  leading-relaxed">
                    <p class="text-justify">
                        The execution of the “Intensive Care For Female Health Camps” brought to light various challenges,
                        each offering valuable lessons that have informed our understanding and approach towards future
                        initiatives. This section outlines the challenges encountered from this collaborative health
                        program.
                    </p>


                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Logistical Coordination: </span> Coordinating logistics for
                        multiple health camps across diverse locations posed logistical challenges. Ensuring the timely
                        availability of resources, healthcare professionals, and support staff required meticulous planning
                        and coordination.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">2. Weather-related Constraints: </span> The outdoor nature of some
                        health camp venues exposed the program to weather-related constraints. Unpredictable weather
                        conditions, especially during the winter season, affected attendance and required adaptations to
                        ensure the safety and well-being of participants.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Communication Barriers:</span> Despite efforts to promote
                        inclusivity, language and communication barriers were encountered. Tailoring health messages to
                        diverse linguistic preferences and ensuring effective communication with non-native speakers
                        presented ongoing challenges.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">4. Limited Technological Access: </span> Some participants faced
                        challenges accessing online sessions due to limited technological resources. Bridging the digital
                        divide in certain communities became crucial to ensuring equal participation and engagement during
                        virtual doctor sessions.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">5. Community Sensitivities: </span> Addressing health issues,
                        particularly those related to reproductive health, required careful consideration of cultural
                        sensitivities. Balancing the need for open discussion.

                    </p>





                </div>


                <h2 class="md:text-2xl font-bold sm:text-3xl py-4">
                    STORIES OF IMPACT
                </h2>


                <div class="space-y-5  leading-relaxed">
                    <p class="text-justify">
                        Amidst the challenges and lessons learned from the “Intensive Care For Female Health Camps,” the
                        initiative has generated profound stories of impact that illuminate the positive transformations
                        within the community. These anecdotes reflect the tangible and intangible changes experienced by
                        individuals, showcasing the meaningful outcomes of the health camps.
                    </p>


                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Mrs Anita Jagwan (Head Teacher – Government Girls High School,
                            Ukhimath) – </span> Our school community is immensely grateful for the efforts put forth by
                        Pyare Foundation and the dedicated team involved in orchestrating this impactful health initiative.
                        The commitment and enthusiasm displayed during the health camp left an indelible mark on both the
                        students and staff.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">2. Dr PS Jagwan – Principal of Shri Gangadhar Maithani Rajkiye
                            Mahavidyalaya Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand </span> As the Principal of Shri
                        Gangadhar Maithani Rajkiye Mahavidyalaya Guptakashi Vidyapeeth, I am deeply appreciative of the
                        positive impact that this health camp has had on our college community. The collaboration between
                        Pyare Foundation and GAIL (India) Limited has contributed significantly to the health and well-being
                        of our female students and staff.

                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Mr. DS Thapliyal, Principal of Atal Utkrisht Government Inter
                            College, Ukhimath – </span> Despite efforts to promote
                        inclusivity, language and communication barriers were encountered. Tailoring health messages to
                        diverse linguistic preferences and ensuring effective communication with non-native speakers
                        presented ongoing challenges.
                    </p>

                    <p class="text-justify">
                        Dr. Rajesh Mishra’s expert session added an invaluable dimension to the health camp, providing our
                        students with expert insights and fostering a culture of health awareness. The engaging nature of
                        the session facilitated meaningful discussions and empowered our students with knowledge that
                        extends beyond the immediate health interventions.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">4. Swami Mahishanand, Manager, Administration of Swami Pravananand
                            Vidya Mandir, Ukhimath, Rudraprayag, Uttarakhand – </span>
                        The As the Manager of Administration at Swami Pranavanand Vidya Mandir, I extend my heartfelt
                        appreciation for the positive impact that this health camp has had on our school community. The
                        collaboration between Pyare Foundation and GAIL (India) Limited has not only addressed immediate
                        health needs but has also contributed significantly to the awareness and empowerment of our female
                        students.
                    </p>



                    <p class="text-justify">
                        The health camp, with its focus on individual health assessments, has provided valuable insights
                        that go beyond the immediate interventions. It lays the foundation for a sustained and holistic
                        approach to health and well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">5. Mr Vikram Singh (Pradhan of village Gadgu, Ukhimath) – </span>
                        As the Pradhan of Village Gadgu, I am deeply grateful for the positive impact of the health camp on
                        our community. The collaboration between Pyare Foundation and GAIL (India) Limited has been
                        instrumental in addressing our health needs and promoting overall well-being.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">6. Dr. HB Bainjwal, Principal of Shri Uttarakhand Ayurved
                            Bhaishajya Kalp (Pharmacist) Prashikshan Vidyalay, Rudraprayag – </span>
                        The health camp has not only provided essential health services but has also raised awareness about
                        health issues and encouraged healthy practices among our students. The dedication and commitment of
                        the Pyare Foundation’s team has been exemplary, and we are grateful for their efforts in improving
                        the health of our community.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">7. Mr Gajpal Singh, Pradhan of village Kalimath, Ukhimath – </span>
                        The health camp has not only provided essential health services but has also strengthened the sense
                        of community and solidarity among our residents. The care and support extended by the organizers
                        have been commendable, and we are committed to continuing the health practices promoted during the
                        camp.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">8. Mrs. Sushma Pradhan of vilage Rayari, Jhakholi – </span>
                        In conclusion, I commend the Pyare Foundation team for their dedication, compassion, and commitment
                        to improving the health and well-being of our community. We look forward to continued collaborations
                        that benefit our village and its residents.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">9. Mrs Sarla Devi (Pradhan of Village Arkhund, Jakholi,
                            Rudraprayag) –</span>
                        As the Pradhan of Village Arkhund, I am deeply grateful for the positive impact of the health camp
                        on our community. The collaboration between Pyare Foundation and GAIL (India) Limited has been
                        instrumental in addressing our health needs and promoting overall well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">10. Dr. Dalip Singh, Principal of Government Degree College,
                            Agastyamuni, Rudraprayag – </span>
                        The health camp has not only provided essential health services but has also raised awareness about
                        health issues and encouraged healthy practices among our students. The dedication and commitment of
                        the Pyare Foundation’s team has been exemplary, and we are grateful for their efforts in improving
                        the health of our community.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">11. Mrs Jyoti Negi, Pradhan of Village Kandara, Agastyamuni,
                            Rudraprayag – </span>
                        The health camp has not only provided essential health services but has also strengthened the sense
                        of community and solidarity among our residents. The care and support extended by the organizers
                        have been commendable, and we are committed to continuing the health practices promoted during the
                        camp.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">12. Mrs. Kunti Devi Pradhan of Village Ransi, Ukhimath, Rudraprayag
                            – </span>
                        In conclusion, I commend the Pyare Foundation team for their dedication, compassion, and commitment
                        to improving the health and well-being of our community. We look forward to continued collaborations
                        that benefit our village and its residents.
                    </p>
                    <p class="text-justify">

                        These stories of impact exemplify the transformative potential of community-centered health
                        interventions. Beyond the immediate health outcomes, they underscore the lasting changes in
                        awareness, behavior, and community dynamics fostered by the “Intensive Care For Female Health
                        Camps.”
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">13. Mrs Sumati Devi (Mahila Mangal Dal Adhyaksh )– </span>
                        In my role as the Pradhan of Village Dankot, I express
                        profound gratitude for the positive impact of the health camp on our community. The collaboration
                        between Pyare Foundation and GAIL (India) Limited has played a crucial role in addressing our health
                        needs and promoting overall well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">14. Mr. Vijendra Singh Panwar, Pradhan of Village Uchhola, Jakholi,
                            Rudraprayag – </span>
                        In my capacity as the Pradhan of Village Ucchola, I extend heartfelt gratitude for the significant
                        impact of the health camp on our community. The collaboration between Pyare Foundation and GAIL
                        (India) Limited has been pivotal in addressing our health needs and promoting overall well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">15. Mr. Vijay Chamola, Principal of Gauri Memorial Public Inter
                            College, Agastyamuni, Rudraprayag – </span>
                        The health camp has not only delivered crucial health services but has also heightened awareness
                        about health issues and promoted healthy practices among our students. The Pyare Foundation’s team
                        has shown exceptional dedication and commitment, and we deeply appreciate their endeavors to enhance
                        the health of our community.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">16. Mrs Arti Shaiv – Mahila Mangal Dal Adhyaksh Village Dangwadi,
                            Ukhimath, Rudraprayag –</span>
                        I applaud the Pyare Foundation team for their dedication, compassion, and steadfast commitment to
                        enhancing the health and well-being of our community. We eagerly anticipate further collaborations
                        that will positively impact our village and its residents.
                    </p>








                </div>


                <h2 class="md:text-2xl font-bold sm:text-3xl py-4">
                    MEDIA AND PROMOTION
                </h2>


                <div class="space-y-5  leading-relaxed">
                    <p class="text-justify">
                        Pyare Foundation recognizes the importance of effective media and promotion strategies to maximize
                        the reach and impact of our health camps. Our approach involves utilizing various channels to create
                        awareness and disseminate information about the upcoming events. The promotion plan for the January
                        health camps includes the following key components:
                    </p>


                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Social Media Engagement: </span> We will leverage our active
                        presence on popular social media platforms, including but not limited to Facebook, LinkedIn and
                        Instagram, to promote the health camps. Regular posts, updates, and engaging content are being
                        shared to create awareness and encourage community participation.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">2. Website Content: </span> Detailed information about the health
                        camps, including dates, locations, and services offered, will be prominently featured on our
                        organization’s official website. The website will serve as a central hub for individuals seeking
                        information about the upcoming events.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Newspaper Publications:</span>
                        Our health camps are extensively covered in leading newspapers to reach a wider audience. We have
                        established collaborations with prominent publications such as Amar Ujala, Dainik Bhaskar, Jan
                        Lahar, Journey of Success, Abitfar – News without noise and Akhand Bharat TV. Press releases and
                        articles will be strategically submitted to these newspapers to ensure comprehensive coverage.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">4. Posters and Flyers: </span> Physical promotional materials, such
                        as posters and flyers, were strategically placed in key locations within the targeted villages and
                        surrounding areas. This traditional approach complements our digital efforts and ensures a
                        multi-channel promotional strategy.
                    </p>
                    <p class="text-justify">
                        Through this comprehensive media and promotion plan, Pyare Foundation aims to reach diverse segments
                        of the community and maximize participation in the health camps. We believe that a well-rounded
                        promotional strategy is essential for creating awareness, fostering community engagement, and
                        ultimately achieving the desired impact on the health and well-being of the residents of
                        Rudraprayag.


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
                    <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST"
                        class="space-y-2">
                        @csrf
                        <input type="text" placeholder="FIRST NAME" class="w-full border px-4 py-2 rounded text-sm"
                            name="firstName" />

                        <!-- Hidden input to store selected type -->
                        <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />

                        <input type="hidden" name="campaign" id="campaign" value="Female health and campaign" />

                        <input type="text" placeholder="LAST NAME"
                            class="w-full border px-4 py-2 rounded text-sm" name="lastName" />

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
        const amountInput = document.getElementById("customAmount1");

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

                // // Fill input if not custom
                // const value = btn.dataset.amount;
                // // var right=value?100:200
                // if (value !== "custom") {
                //     amountInput.value = value;

                // } else {
                //     amountInput.value = "100";
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
