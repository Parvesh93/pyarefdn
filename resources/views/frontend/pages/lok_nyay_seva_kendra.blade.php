@section('title')
    Lok Nyay Seva Kendra
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">Lok Nyay Seva Kendra</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Lok Nyay Seva Kendra </span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">

            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">
                <h2 class="md:text-3xl font-bold text-2xl mb-4">
                    “Nyay Aapke Dwaar; Adhikaar Aapke Saath”
                </h2>
                <!-- Paragraphs -->
                <div class="space-y-4  leading-relaxed">
                    <h2 class="md:text-2xl font-bold text-2xl">
                        About the Initiative
                    </h2>
                    <p class="text-justify">
                        Lok Nyay Seva Kendra is a <strong>legal aid cell of Pyare Foundation,</strong> established
                        <strong>on 3rd August 2025
                            (Sunday)</strong> with the objective of spreading <strong>legal awareness</strong> among
                        students, citizens, and economically
                        weaker sections of society.
                    </p>
                    <p class="text-justify">
                        The initiative aims to make justice <strong>accessible, inclusive, and compassionate,</strong>
                        ensuring that every
                        individual is aware of their rights and empowered to uphold them.
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

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize1.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize1.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize2.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize2.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize3.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize3.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize4.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize4.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize5.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize5.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize6.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize6.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>



                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize7.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize7.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize8.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize8.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize9.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize9.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize10.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize10.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize11.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize11.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize12.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize12.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize13.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize13.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize14.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize14.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize15.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize15.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize16.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize16.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize17.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize17.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize18.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize18.jpeg') }} alt="Training 1"
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

                <div class="space-y-4  leading-relaxed mb-4">
                    <h2 class="md:text-2xl font-bold text-2xl">
                        Our Vision
                    </h2>
                    <p class="text-justify">
                        To build an <strong>inclusive society</strong> where every individual, regardless of socio-economic
                        status,<strong>enjoys
                            equal and unhindered access to justice, legal empowerment, healthcare,</strong> and
                        the<strong>means to live with
                            dignity and security.</strong>
                    </p>

                </div>


                <div class="space-y-3  leading-relaxed">
                    <h2 class="md:text-2xl font-bold text-2xl">
                        Our Mission
                    </h2>
                    <p class="text-justify">
                        To ensure <strong>simple and secure access to justice </strong> for all sections of society,
                        especially the <strong> poor and marginalized communities.</strong>

                    </p>

                </div>


                <div>
                    <p class="text-justify py-4">
                        <span class="font-bold text-lg">Lok Nyay Seva Kendra strives to: </span>
                    </p>
                    <ul class="list-disc list-inside space-y-2 mx-3">
                        <li>Provide <strong>free legal advice and support</strong></li>
                        <li>Offer <strong>quality representation </strong>through dedicated legal professionals</li>
                        <li>Conduct <strong>legal awareness and educational programs </strong>for citizens</li>
                    </ul>
                </div>


                <div>
                    <p class="text-justify py-4">
                        <span class="font-bold text-lg">Key Activities: </span>
                    </p>
                    <ul class="list-disc list-inside space-y-2 mx-3">
                        <li><strong>Awareness Campaigns </strong> on laws and social issues including POCSO, POSH, Juvenile
                            Justice, and Menstrual Health</li>
                        <li><strong>Workshops and Interactive Sessions </strong>in both online and offline formats</li>
                        <li><strong>Free Legal Aid & Counseling </strong>for individuals in need</li>
                        <li><strong>Collaboration </strong>with law schools, social organizations, and professionals</li>
                        <li>And many more initiatives that promote <strong>justice and empowerment</strong></li>
                    </ul>
                </div>



                <div class="">
                    <p class="text-justify py-4">
                        <span class="font-bold text-2xl">Project Team Structure </span>
                    </p>
                    <p class="font-bold text-lg">
                        1. Legal Cell
                    </p>
                    <p class="my-2">
                        Acts as the <strong>frontline unit</strong> providing direct legal support and awareness programs.
                    </p>
                    <div class="">
                    <h2 class="md:text-xl sm:text-3xl pb-4">
                        Members:
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
                                    <td class="px-4 py-2 border border-black">Mayank Upadhyay</td>
                                    <td class="px-4 py-2 border border-black">President</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Prateek Saxena</td>
                                    <td class="px-4 py-2 border border-black">Secretary</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Rishabh Malhotra</td>
                                    <td class="px-4 py-2 border border-black">Treasurer</td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                 </div>
                    
                </div>

                <div>

                    <p class="font-bold text-lg mt-3">
                        2. Managerial Cell
                    </p>
                    <p class="my-2">
                        
                         The <strong>operational and coordination unit</strong> ensuring the smooth functioning of all
                        initiatives.
                        
                    </p>
                    
                    
                    <div class="">
                    <h2 class="md:text-xl sm:text-3xl pb-4">
                        Members:
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
                                    <td class="px-4 py-2 border border-black">Krish</td>
                                    <td class="px-4 py-2 border border-black">President</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Jagmohan Kashyap</td>
                                    <td class="px-4 py-2 border border-black">Secretary</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Gulashan</td>
                                    <td class="px-4 py-2 border border-black">Management Incharge</td>
                                </tr>
                                
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Anmol</td>
                                    <td class="px-4 py-2 border border-black">Media Incharge</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                 </div>
                    
                    
                </div>


                <div>

                    <p class="font-bold text-lg mt-3">
                        3. Advisory Board
                    </p>
                    <p class="my-2">
                        Guiding the mission and strategy of Lok Nyay Seva Kendra.
                    </p>
                   
                    <div class="">
                    <h2 class="md:text-xl sm:text-3xl pb-4">
                        Members:
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
                                    <td class="px-4 py-2 border border-black">President & Founder, Pyare Foundation</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Neha Bahl</td>
                                    <td class="px-4 py-2 border border-black">Professor, DME Law School</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Advocate Vivek Sharma</td>
                                    <td class="px-4 py-2 border border-black">Legal Expert</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                 </div>
                </div>


                <div class="space-y-4  leading-relaxed">

                    <h2 class="md:text-2xl font-bold text-2xl mt-4">
                        Workshops & Training Programs
                    </h2>
                    <p class="font-bold text-lg">
                        1. Workshop on POSH Act, 2013
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">Venue: </span> Rajkiya Kanya Mahavidyalaya, Kharkhoda, Meerut, U.P.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">Date & Day: </span> 18th October 2025 (Saturday)
                    </p>


                    <p class="text-justify">
                        Lok Nyay Seva Kendra (a legal aid cell of Pyare Foundation) successfully organized an <strong>
                            enlightening
                            workshop on “Prevention of Sexual Harassment (POSH) Act, 2013”</strong> at Government Girls
                        School,
                        Kharkhoda.
                    </p>
                    
                      <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok1.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok1.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok2.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok2.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok4.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok4.jpg') }} alt="Training 1"
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



                    <p class="text-justify">
                        The program began with a warm welcome by <strong>Mrs. Neelam Singh,</strong> the school’s Principal,
                        followed by an
                        interactive session by <strong>Dr. Anjali Thapliyal Kaul,</strong> Chairperson and Founder of Pyare
                        Foundation.
                        <strong>Rishabh Raj Malhotra</strong> (Treasurer) introduced Pyare Foundation and Dr. Anjali, while
                        <strong>Mayank Upadhyay</strong>
                        (President) spoke on the Indian philosophy of <i>“Vasudhaiva Kutumbakam”</i> and explained the
                        objectives
                        of the Kendra.


                    </p>
                    <p class="text-justify">
                        <strong>Prateek Saxena</strong> (Secretary) and <strong>Paras Kaul</strong> (Delhi Head, Pyare
                        Foundation) managed media and
                        coordination duties. A fun <strong>Rapid-Fire Quiz</strong> on general knowledge was conducted by
                        Mayank and Rishabh,
                        engaging the students actively.
                    </p>



                    <p class="text-justify">
                        After a short break, <strong>Dr. Ashish Kumar Kulshreshtha,</strong> Advocate – Supreme Court of
                        India, delivered a
                        deeply insightful session on the POSH Act, the role of Internal Complaints Committees, and
                        constitutional aspects.
                    </p>


                    <p class="text-justify">
                        <strong>Advocate Seema Kulshreshtha</strong> also shared her valuable thoughts during the session.
                    </p>

                    <p>
                        The workshop concluded with <strong>Dr. Anjali Thapliyal Kaul distributing free sanitary
                            napkins</strong> to students
                        who answered quiz questions correctly.
                    </p>

                    <p>
                        This workshop was an <strong>inspiring step toward women empowerment and legal awareness.</strong>
                    </p>



                </div>



                <div class="space-y-4  leading-relaxed">


                    <p class="font-bold text-lg mt-4">
                        2. Online Workshop on POSH Act, 2013
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">Date & Day: </span> 18th October 2025 (Saturday)
                    </p>


                    <p class="text-justify">
                        Lok Nyay Seva Kendra also organized an <strong>online certificate training program</strong> on “POSH
                        Act, 2013,”
                        featuring <strong>Dr. Ashish Kulshreshtha,</strong> Advocate – Supreme Court of India, Ph.D., as the
                        <strong>guest speaker.</strong>
                    </p>
                    
                      <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok5.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok5.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok7.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok7.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok6.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok6.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok8.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok8.jpg') }} alt="Training 1"
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



                    <p class="text-justify">
                        The session was highly <strong>interactive and informative,</strong> where Dr. Ashish explained the
                        <strong>key provisions of
                            the POSH Act</strong> and how individuals can handle such situations effectively. Students
                        participated
                        enthusiastically, asking questions and sharing insights throughout the session.
                    </p>
                    <p class="text-justify">
                        This virtual workshop expanded the outreach of Pyare Foundation’s legal initiatives, ensuring
                        <strong>awareness beyond geographical boundaries.</strong>
                    </p>


                </div>



                <div class="space-y-4  leading-relaxed">


                    <p class="font-bold text-2xl mt-4">
                        Join the Cause
                    </p>




                    <p class="text-justify">
                        Lok Nyay Seva Kendra welcomes <strong>law students, advocates, and social enthusiasts</strong> to
                        join hands in this
                        mission.
                    </p>



                    <p class="text-justify">
                        Together, let’s build a society where <strong>justice, awareness, and dignitys</strong> reach every
                        individual.
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

                        <input type="hidden" name="campaign" id="campaign" value="Lok Nyay Seva Kendra" />

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
