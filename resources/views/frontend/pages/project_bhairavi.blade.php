@section('title')
    Project Bhairavi
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->

    <section class="relative py-6 bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">Project Bhairavi </h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Project Bhairavi</span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">

            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">


                <div class="flex justify-center items-center mb-6">

                    <div class="bg-white rounded-2xl shadow-lg border border-orange-200 overflow-hidden  w-full">

                        <!--Top Section -->
                        <div class="p-6 flex flex-col md:flex-row md:items-center justify-between gap-6">

                            <!--Circular Progress -->
                            <div class="flex items-center gap-4">
                                <div class="relative w-28 h-28">
                                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="45" stroke="#ddd" stroke-width="10"
                                            fill="none" />
                                        <circle cx="50" cy="50" r="45" stroke="#22c55e" stroke-width="10"
                                            fill="none" stroke-dasharray="282.6" stroke-dashoffset="98.9"
                                            stroke-linecap="round" />
                                    </svg>
                                    <span
                                        class="absolute inset-0 flex items-center justify-center text-xl md:text-2xl font-bold">{{ $percentage }}%</span>
                                </div>

                                <!--Raised Info -->
                                <div>
                                    <p class="text-xl font-semibold">Raised</p>
                                    <p class="text-orange-600 font-bold text-lg  md:text-2xl">
                                        Rs.{{ $campaign->rises_amount }} <span
                                            class="text-gray-600 font-medium text-lg md:text-lg">of
                                            Rs.{{ $campaign->goal_amount }}</span></p>
                                    <span
                                        class="inline-block mt-2 bg-yellow-400 text-black font-semibold px-4 py-1 rounded">521
                                        Supporters</span>
                                </div>
                                <div class="-mt-20 sm:-mt-6 text-orange-500 hover:text-orange-600">
                                    <i
                                        class="fa-regular block md:hidden fa-share-from-square text-2xl hover:text-orange-500 cursor-pointer"></i>
                                </div>

                            </div>

                            <!--End Date + Share Button -->
                            <div class="flex flex-col items-end ">
                                <button class="text-orange-500 hover:text-orange-600">

                                    <i
                                        class="fa-regular fa-share-from-square hidden md:inline-block text-2xl hover:text-orange-500 cursor-pointer"></i>


                                </button>
                                <p class="text-gray-800 font-semibold md:mt-10">End Date:
                                    {{ \Carbon\Carbon::parse($campaign->end_date)->format('d-m-Y') }}</p>
                            </div>

                        </div>

                        <!--Bottom Section -->
                        <div
                            class="bg-orange-500 text-white p-6 flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <p class="text-lg font-semibold text-center md:text-left">
                                Support Project Bhairavi to Empower Women With Menstrual Health & Dignity
                            </p>
                            <a href="#donationForm" class="mx-auto md:mx-0">
                                <button
                                    class="bg-yellow-400 text-black font-bold px-6 py-3 rounded-lg hover:bg-yellow-300">DONATE
                                    NOW</button>
                            </a>
                        </div>

                    </div>

                </div>



                <div class="space-y-4 mt-6">

                    <p class="md:text-2xl font-bold text-2xl italic">
                        Official Progress Summary (2025–2026)
                    </p>
                    <p class="my-2">
                        Phase III of the <strong>Bhairavi Project</strong> represents a decisive shift from strategic
                        planning to
                        full-scale on-ground execution. This phase focused on strengthening women-led leadership, delivering
                        structured
                        health and wellness programs, and deepening community engagement across the selected project
                        location in Delhi.
                    </p>



                    <p class="font-bold text-lg">April 2025 – Concept Development</p>
                    <p class="my-2">The phase commenced with the development of a comprehensive concept for the Delhi
                        initiative. Clear
                        objectives, target communities, and implementation frameworks were defined in alignment with the
                        core mission of
                        the Bhairavi Project.</p>

                    <p class="font-bold text-lg">May 2025 – Strategic Planning</p>
                    <p class="my-2">A detailed strategy plan was completed, outlining program goals, timelines, roles, and
                        execution
                        mechanisms to ensure structured and sustainable impact.</p>


                    <p class="font-bold text-lg">June 2025 – Resource Mapping & Shortlisting</p>
                    <p class="my-2">Resource mapping was undertaken to identify key human resources, local support
                        systems, and
                        suitable project locations. Shortlisted locations were evaluated based on accessibility, need, and
                        community
                        readiness.</p>


                    <p class="font-bold text-lg">July 2025 – Project Location Finalization</p>
                    <p class="my-2">Action steps were initiated as per the approved plan. Preparatory groundwork,
                        stakeholder
                        coordination, and execution readiness were achieved during this period.</p>

                    <p class="font-bold text-lg">August 2025 – Action Plan Initiation</p>
                    <p class="my-2">A detailed strategy plan was completed, outlining program goals, timelines, roles, and
                        execution
                        mechanisms to ensure structured and sustainable impact.</p>

                    <p class="font-bold text-lg">September 2025 – Full Execution</p>
                    <p class="my-2">The Bhairavi Project entered the full execution phase, with active on-ground
                        implementation of
                        planned initiatives focused on women’s physical well-being and empowerment.</p>




                    <p class="font-bold text-lg">October 2025 – Leadership Appointment & Program Implementation:</p>
                    <ul class="list-disc list-inside space-y-2 mx-3 mb-2">
                        <li>Appointment of <strong>two Bhairavi Leaders – Devi and Geeta,</strong> responsible for community
                            coordination and program facilitation</li>
                        <li><strong>Supervisor appointed: </strong><strong>Jagmohan Kashyap</strong>, overseeing
                            implementation and
                            field execution</li>
                        <li>
                            Completion of <strong>three Physical Well-Being Programs</strong>
                        </li>
                        <li>
                            <strong>Program Date: 10<sup class="text-xs relative -top-1">th</sup> October 2025</strong>
                        </li>
                    </ul>



                    <!-- Slider 1 -->
                    <!-- Swiper Section -->

                    <div class="relative w-full py-6">
                        <!-- Swiper Container -->
                        <div class="swiper shambhooSwiper">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage1.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage1.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage2.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage2.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage3.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage3.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage4.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage4.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage5.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage5.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage6.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage6.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage7.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage7.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage8.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage8.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage9.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage9.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage10.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage10.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage11.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage11.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage12.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage12.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage13.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage13.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage14.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage14.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage15.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage15.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage16.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage16.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage17.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage17.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage18.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage18.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage19.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage19.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage20.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage20.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage21.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage21.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage22.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage22.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage23.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage23.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage24.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage24.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage25.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage25.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage26.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage26.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage27.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage27.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage28.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage28.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage29.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage29.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage30.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage30.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase31.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase31.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase32.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase32.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase33.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase33.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase35.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase35.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase36.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase36.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase37.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase37.jpeg') }}
                                            alt="Training 1"
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>



                    <p class="md:text-2xl font-bold text-2xl">
                        Survey & Data Collection
                    </p>
                    
                    
                    <!-- Slider 1 -->
                    <!-- Swiper Section -->

                    <div class="relative w-full py-6">
                        <!-- Swiper Container -->
                        <div class="swiper shambhooSwiper4">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage2/phage2_1.jpg') }}"
                                        data-fancybox="Phase2" data-caption="Phase2">
                                        <img src={{ asset('uploads/images/bhairavi/phage2/phage2_1.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage2/phage2_2.jpg') }}"
                                        data-fancybox="Phase2" data-caption="Phase2">
                                        <img src={{ asset('uploads/images/bhairavi/phage2/phage2_2.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage2/phage2_3.jpg') }}"
                                        data-fancybox="Phase2" data-caption="Phase2">
                                        <img src={{ asset('uploads/images/bhairavi/phage2/phage2_3.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                            </div>
                        </div>

                        <!-- Custom Arrows -->
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                            <div
                                class="swiper-button-prev-custom-4 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </div>
                        </div>

                        <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                            <div
                                class="swiper-button-next-custom-4 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="font-bold text-lg">November 2025 – Community Engagement & Recognition:</p>
                    <ul class="list-disc list-inside space-y-2 mx-3 mb-2">
                        <li>Launch of a structured <strong>field survey</strong> to assess impact and community feedback
                        </li>
                        <li>Conduct of a <strong>major Bhairavi community program</strong></li>
                        <li>
                            <strong>Bhairavi Samman 2025</strong> awarded to <strong>Snehi</strong> and
                            <strong>Anita</strong> for their
                            significant contributions
                        </li>
                        <li>
                            <strong>Program Date: 11<sup class="text-xs relative -top-1">th</sup> November 2025</strong>
                        </li>
                    </ul>


                    <!-- Slider 1 -->
                    <!-- Swiper Section -->

                    <div class="relative w-full py-6">
                        <!-- Swiper Container -->
                        <div class="swiper shambhooSwiper">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_1.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_1.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_2.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_2.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_3.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_3.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_4.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_4.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_5.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_5.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_6.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_6.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_7.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_7.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_8.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_8.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_9.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_9.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_10.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_10.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_11.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_11.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_12.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_12.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_13.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_13.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_14.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_14.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_15.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_15.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_16.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_16.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_18.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_18.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_19.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_19.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_20.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_20.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_21.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_21.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_22.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_22.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_23.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_23.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_24.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_24.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_25.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_25.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_26.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_26.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_27.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_27.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_28.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_28.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_29.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_29.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_30.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_30.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_31.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_31.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_32.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_32.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_33.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_33.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_34.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_34.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_35.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_35.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_36.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_36.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_37.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_37.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_38.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_38.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_39.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_39.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_40.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_40.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_41.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_41.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_42.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_42.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_43.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_43.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_44.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_44.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_45.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_45.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_46.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_46.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_47.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_47.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_48.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_48.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_49.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_49.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_50.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_50.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_51.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_51.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_52.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_52.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_53.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_53.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_54.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_54.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_55.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_55.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_56.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_56.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_57.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_57.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_58.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_58.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_59.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_59.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_60.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_60.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_61.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_61.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_62.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_62.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_63.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_63.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_64.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_64.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_65.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_65.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_66.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_66.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>




                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_67.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_67.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_671.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_671.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_68.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_68.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_69.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_69.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_70.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_70.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_71.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_71.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_72.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_72.jpeg') }}
                                            alt="Training 1"
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    

                    <p class="font-bold text-lg">December 2025 – Annual Wellness Activities:</p>
                    <ul class="list-disc list-inside space-y-2 mx-3 mb-2">
                        <li>Continued engagement through annual activities</li>
                        <li>Implementation of the <strong>Yoga B.P. (Blood Pressure) Program,</strong> promoting preventive
                            health and
                            lifestyle awareness</li>
                        <li>
                            <strong>Program Date: 12<sup class="text-xs relative -top-1">th</sup> December 2025</strong>
                        </li>

                    </ul>
                    
                    
                    
                    <!-- Slider 1 -->
                    <!-- Swiper Section -->

                    <div class="relative w-full py-6">
                        <!-- Swiper Container -->
                        <div class="swiper shambhooSwiper3">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_1.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_1.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_2.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_2.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_3.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_3.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_4.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_4.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_5.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_5.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_6.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_6.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_7.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_7.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_8.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_8.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_9.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_9.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                            </div>
                        </div>

                        <!-- Custom Arrows -->
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                            <div
                                class="swiper-button-prev-custom-3 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </div>
                        </div>

                        <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                            <div
                                class="swiper-button-next-custom-3 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <p class="font-bold text-lg">January 2026 – Collective Program:</p>
                    <ul class="list-disc list-inside space-y-2 mx-3 mb-2">
                        <li><strong>Collective Bhairavi Program will be conducted on 1 January 2026,</strong> bringing
                            together
                            community members, leaders, and facilitators to reinforce shared goals and ongoing commitment
                        </li>


                    </ul>

                    <p class="font-bold text-lg">Overall Impact</p>
                    <p class="my-2">Phase III strengthened the Bhairavi Project’s foundation through structured
                        leadership, timely
                        program execution, and consistent community participation. The integration of women leaders,
                        supervised
                        implementation, and health-focused initiatives has laid a strong pathway for future growth and
                        sustained impact.
                    </p>
                </div>


            </div>

            <!-- Right Donate Form -->

            <div class="w-full lg:w-1/3 h-fit sticky top-0">
                <div id="donationForm" class="shadow-lg rounded p-6 bg-white border border-gray-200">
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

                        <input type="hidden" name="campaign" id="campaign" value="Project Bhairavi" />

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
