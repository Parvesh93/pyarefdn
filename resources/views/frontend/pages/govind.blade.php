@section('title')
    Project Govind Leela
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">PROJECT GOVIND LEELA</h2>
            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Project Govind Leela</span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">
            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">

                <!-- Title -->
                <h2 class="text-3xl font-bold mb-6">Village Hudu</h2>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Valley:</span> Tungnath
                            Valley
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Block:</span> Ukhimath
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">State:</span>
                            Uttarakhand
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Tehsil:</span> Ukhimath
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">District:</span>
                            Rudraprayag
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Date of opening:</span>
                            3rd October, 2016
                        </p>
                    </div>
                </div>

                <!-- Paragraphs -->
                <div class="space-y-5 text-gray-700 leading-relaxed">
                    <p class="text-justify">
                        Hudu gram sabha villages are Hudu and Karndhar, where
                        approximately 65 families are staying, totaling about
                        350 members. The distance from Delhi to Ukhimath is
                        around 427.2 km. The distance from Ukhimath to Hudu is
                        12 km; hence the total distance from Delhi to Hudu or
                        vice versa becomes 439.2 km. Therefore, Pyare Foundation
                        is giving care and medical support to 350 members of the
                        Hudu Gram Sabha.
                    </p>

                    <p class="text-justify">
                        The process from inception of roots till the
                        inauguration of the dispensary consists of many steps
                        such as visits, surveys, meetings in the village,
                        permission from DM, CMO, village Thana, Mandir Samiti,
                        and appointment of pharmacists and allotment of
                        medicines and necessary medical health equipment. The
                        entire process takes approximately six days, and the
                        team Pyare Foundation visits these villages for six days
                        to complete the process. Pradhan Anil lal, Asha, Rekha
                        Rawat, Ashish a villager and pharmacist Arjun Singh were
                        responsible persons to take care the unit.
                    </p>

                    <p class="text-justify">
                        Hudu connects these villages: Usada (80 families, 320
                        members), Kanda (35 families, 140 members), Daida (45
                        families, 180 members), Semar (35 families, 140
                        members), and Bringali (30 families, 120 members).
                        Hence, the total beneficiary families are 290 and 1250
                        members.
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


                                <a href="{{ asset('uploads/images/govind/image_2.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind2">
                                    <img src="{{ asset('uploads/images/govind/image_2.jpg') }}" alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_3.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind3">

                                    <img src="{{ asset('uploads/images/govind/image_3.jpg') }}" alt="Training 2"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_4.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind4">

                                    <img src="{{ asset('uploads/images/govind/image_4.jpg') }}" alt="Training 3"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_5.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind5">

                                    <img src="{{ asset('uploads/images/govind/image_5.jpg') }}" alt="Training 4"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_6.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind6">
                                    <img src="{{ asset('uploads/images/govind/image_6.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_7.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind7">
                                    <img src="{{ asset('uploads/images/govind/image_7.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_8.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind8">
                                    <img src="{{ asset('uploads/images/govind/image_8.jpg') }}" alt="Training 5"
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

                <!-- Title -->
                <h2 class="text-3xl font-bold mb-6">Gadgu Village</h2>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Valley:</span>
                            Madmaheshwar Valley
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Block:</span> Ukhimath
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">State:</span>
                            Uttarakhand
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Tehsil:</span> Ukhimath
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">District:</span>
                            Rudraprayag
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Date of opening:</span>
                            22nd November, 2016
                        </p>
                    </div>
                </div>

                <!-- Paragraphs -->
                <div class="space-y-5 text-gray-700 leading-relaxed">
                    <p class="text-justify">
                        The foundation established its second dispensary at
                        Gadgu Village, District Rudraprayag, Uttarakhand, on 22
                        November 2016.The distance from Delhi to Ukhimath is
                        427.2 km. and from Ukhimath to gadgu the Distance is 13
                        km. There are about 110 – 120 families (around 600
                        members) in Gadgu. The village is also one of the remote
                        areas of Uttarakhand where residents used to travel very
                        long distances for medical treatment by spending a lot
                        of money and effort. In many cases, when the environment
                        is unfavorable, the patients have to lose their life due
                        to the unavailability of transportation facilities.
                        Keeping all these issues, the foundation created a team
                        of six members and a pharmacist responsible for the
                        maintenance and work of the dispensary on the village
                        level. The foundation regularly monitors the
                        dispensaries’ work and provide necessary support,
                        guidance, and medicines. Village Pradhan Mrs. Sarita
                        Devi, Asha Mrs. Geeta Devi, Pharmacist Mr. Sudeep singh
                        were the responsible persons to take care of the
                        dispensary.
                    </p>

                    <p class="text-justify">
                        Gadgu connects these villages: Gair (100 families, 480
                        members), Giriya (80 families, 400 members), Mansoona
                        (250 families, 1000 members), Burua (50 families, 220
                        members). Hence, the total beneficiary families are 590
                        and 2700 members.
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
                                <a href="{{ asset('uploads/images/govind/image_37.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind37">
                                    <img src="{{ asset('uploads/images/govind/image_37.jpg') }}" alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_10.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind10">

                                    <img src="{{ asset('uploads/images/govind/image_10.jpg') }}" alt="Training 2"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_38.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind38">

                                    <img src="{{ asset('uploads/images/govind/image_38.jpg') }}" alt="Training 3"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_12.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind12">
                                    <img src="{{ asset('uploads/images/govind/image_12.jpg') }}" alt="Training 4"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_37.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind37">
                                    <img src="{{ asset('uploads/images/govind/image_37.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_14.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind14">
                                    <img src="{{ asset('uploads/images/govind/image_14.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_15.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind15">
                                    <img src="{{ asset('uploads/images/govind/image_15.jpg') }}" alt="Training 5"
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



                <!-- Title -->
                <h2 class="text-3xl font-bold mb-6">Gaundar Village</h2>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Valley:</span>
                            Madmaheshwar Valley
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Block:</span> Ukhimath
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">State:</span>
                            Uttarakhand
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Tehsil:</span> Ukhimath
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">District:</span>
                            Rudraprayag
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Date of opening:</span>
                            17th May, 2017
                        </p>
                    </div>
                </div>

                <!-- Paragraphs -->
                <div class="space-y-5 text-gray-700 leading-relaxed">
                    <p class="text-justify">
                        The foundation established its third dispensary at
                        Gondar Village, District Rudraprayag, Uttarakhand, on 17
                        May 2017.No adjacent village are near Gondar. It’s the
                        last village There are about 40 – 50 families (around
                        160 – 200 members) in Gondar. The village is also one of
                        the remote areas of Uttarakhand where residents used to
                        travel very long distances for medical treatment by
                        spending a lot of money and effort. The distance from
                        Delhi to Ukhimath is 427.2 km. and from Ukhimath to
                        gondar the Distance is 21 km and 6 km by foot.
                    </p>

                    <p class="text-justify">
                        Pradhan Mr. virender singh, pharmacis t Ms. Rajni
                        panwar, Mr.Shiv singh negi were the responsible persons
                        to take care of the unit
                    </p>
                </div>
                <!-- Wrapper -->
                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_39.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind39">

                                    <img src="{{ asset('uploads/images/govind/image_39.jpg') }}" alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_40.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind40">

                                    <img src="{{ asset('uploads/images/govind/image_40.jpg') }}" alt="Training 2"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_41.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind41">

                                    <img src="{{ asset('uploads/images/govind/image_41.jpg') }}" alt="Training 3"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_42.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind42">
                                    <img src="{{ asset('uploads/images/govind/image_42.jpg') }}" alt="Training 4"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_20.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind20">

                                    <img src="{{ asset('uploads/images/govind/image_20.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_21.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind21">
                                    <img src="{{ asset('uploads/images/govind/image_21.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_22.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind22">
                                    <img src="{{ asset('uploads/images/govind/image_22.jpg') }}" alt="Training 5"
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

                <!-- Title -->
                <h2 class="text-3xl font-bold mb-6">Thapli Village</h2>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Valley:</span> Badrinath
                            Valley
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Block:</span>
                            Karnaprayag
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">State:</span>
                            Uttarakhand
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Tehsil:</span>
                            Karnaprayag
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">District:</span> Chamoli
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-indigo-900 text-lg">⬤</span>
                        <p>
                            <span class="font-semibold">Date of opening:</span>
                            11th January, 2018
                        </p>
                    </div>
                </div>

                <!-- Paragraphs -->
                <div class="space-y-5 text-gray-700 leading-relaxed">
                    <p class="text-justify">
                        The team established a fourth dispensary in the Thapli
                        village, district Chamoli on 12 January 2018. The
                        distance from Delhi to karnprayag is 436.6 km. and from
                        karnprayag to Thapli the Distance is 13.1 km. There are
                        about 20 families (around 80 members) in Thapli. Mr.
                        Suman Dimri inaugurated the dispensary in the presence
                        of villagers, and written documents were exchanged.
                        Record slips were gathered, and medicines were
                        distributed in large quantities.
                    </p>

                    <p class="text-justify">
                        Village Pradhan Shri Suman Dimri, Smt Anita, Asha,Vinod
                        thapliyal and Birender thapliyal are the resposible
                        persons to take care of the unit Thapli connects these
                        villages: Siri (45 families, 180 members), Sirpa (25
                        families, 100 members), Salyana (25 families, 100
                        members), Kulsaun (30 families, 120 members), Bagoli (50
                        families, 200 members), Bangaon (40 families, 160
                        members), Khankar (15 families, 60 members), Koti (50
                        families, 200 members), and Erwadi (50 families, 200
                        members). Hence, the total beneficiary families are 350
                        and 1400 members.
                    </p>
                </div>

                <!-- Wrapper -->
                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_32.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind32">

                                    <img src="{{ asset('uploads/images/govind/image_32.jpg') }}" alt="Training 1"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_24.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind24">
                                    <img src="{{ asset('uploads/images/govind/image_24.jpg') }}" alt="Training 2"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_25.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind25">

                                    <img src="{{ asset('uploads/images/govind/image_25.jpg') }}" alt="Training 3"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_26.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind26">
                                    <img src="{{ asset('uploads/images/govind/image_26.jpg') }}" alt="Training 4"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_27.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind27">
                                    <img src="{{ asset('uploads/images/govind/image_27.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_28.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind28">
                                    <img src="{{ asset('uploads/images/govind/image_28.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_29.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind29">
                                    <img src="{{ asset('uploads/images/govind/image_29.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_30.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind30">
                                    <img src="{{ asset('uploads/images/govind/image_30.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_43.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind43">
                                    <img src="{{ asset('uploads/images/govind/image_43.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_44.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind44">
                                    <img src="{{ asset('uploads/images/govind/image_44.jpg') }}" alt="Training 5"
                                        class="w-full h-[320px] md:h-[320px] rounded-md object-cover" />

                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/images/govind/image_45.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="govind45">
                                    <img src="{{ asset('uploads/images/govind/image_45.jpg') }}" alt="Training 5"
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

                        <input type="hidden" name="campaign" id="campaign" value="Project Govind Leela" />

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
