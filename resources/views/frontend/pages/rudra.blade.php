@section('title')
    Rudra Project
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">PROJECT RUDRA</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Project Rudra</span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">
            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">

                <!-- Title -->
                <h2 class="text-3xl font-bold mb-6">PROJECT RUDRA</h2>
                <!-- Project Intro -->
                <div class="text-gray-800 text-md leading-relaxed mb-6">
                    <p class="text-justify">
                        We are reviving ancient POND (KUND) and temple surrounding in
                        Ukhimath, Rudraprayag, Uttarakhand. The temple premise is near
                        Omkareshwar Temple of Ukhimath, Uttarakhand which needs urgent
                        reemergence and reorientation. The temple has many small temple
                        structures left vacant and uncared. A pond is also drying for years
                        in the premise which could fulfil the water needs of the villagers.
                        The most fascinating fact of the pond is that the water has immense
                        MEDICINAL PROPERTIES as it directly comes from the upper Himalayan
                        region into the pond.
                    </p>
                </div>

                <!-- Project Activities -->
                <div class="mb-6">
                    <h3 class="text-base font-bold text-black mb-2">
                        Project Activities Are Carried Out In Three Phases
                    </h3>
                    <ul class="list-disc list-inside text-md text-gray-800">
                        <li>
                            Survey of the villages - Identifying the need of center in the
                            village
                        </li>
                        <li>Collection of books and necessary stationery</li>
                        <li>Establishment of education and resource center.</li>
                        <li>First Education and Resource Center</li>
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
                                <a href="{{ asset('uploads/rudra/rudra4.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra4.jpg') }} alt="Training 2"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra3.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra3.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra2.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra"><img src={{ asset('uploads/rudra/rudra2.jpg') }}
                                        alt="Training 3" class="w-full h-[350px] md:h-[350px] rounded-md object-cover"
                                        loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra1.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra1.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>

                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra6.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra6.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra7.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra7.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra12.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra12.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra9.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra9.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra10.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra10.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra11.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra11.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra12.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra12.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra13.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra13.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
                                </a>

                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('uploads/rudra/rudra14.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Project Rudra">
                                    <img src={{ asset('uploads/rudra/rudra14.jpg') }} alt="Training 3"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" loading="lazy" />
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

                <div>
                    <!-- Text Content -->
                    <div>
                        <h2 class="text-base font-bold text-black mb-2">
                            Join the campaign with Dr. Anjali Thapliyal Kaul
                        </h2>
                        <p class="text-gray-700 mb-4 text-justify">
                            Project “Rudra” is related to the cultural and heritage promotion
                            of the state. It is not only related with the rejuvenation,
                            conservation and preservation of the building or structures but
                            the basic aim of the project is also to make people understand
                            cultural civilization and how they can carry forward the
                            traditional ideas.
                        </p>
                        <p class="text-gray-700 mb-4 text-justify">
                            The old structures and pious setups along with traditional ideas
                            are highly sound in terms of outreach and significance as every
                            ancient site has its own multi-dimensional and elemental value.
                        </p>
                        <p class="text-gray-700 text-justify">
                            By understanding this concept we are going to launch this project
                            named
                            <span class="font-semibold">‘RUDRA’</span>.
                        </p>
                    </div>

                    <!-- Video Embed -->
                    <div class="w-full my-2 aspect-w-16 aspect-h-9">
                        <iframe class="w-full" height="315"
                            src="https://www.youtube.com/embed/yoaUuIuTlx8?si=4FYIZYZ4bwxXZuEr"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>


                    <!-- Second Resource Center -->
                    <div class="text-md text-gray-800 mb-10">
                        <h3 class="text-base font-bold text-black mb-2">
                            Second Education And Resource Center - 15th July, 2019
                        </h3>
                        <p class="text-justify text-md">
                            Team Pyare Foundation managed to start another Educational center
                            (Center 2) under project Shambhoo Leela at Dilshad Garden. The
                            message was spread to the nearby areas and hence many students and
                            volunteers came forward to join the initiative. Classes were held
                            at regular intervals with expert teachers and professionals.
                        </p>
                    </div>

                    <p class="text-gray-700 mb-4 text-justify">
                        By understanding this concept we are going to launch this project
                        named ‘RUDRA’. Although we have been working on the same project for
                        many years at a very small and individual level, this time we are
                        going to launch the project on a bigger scale.
                    </p>

                    <p class="text-gray-700 mb-4 text-justify">
                        Majority of people know Uttarakhand for Badrinath, Kedarnath, Gangotri
                        and Yamunotri but there are thousands of places which are of the same
                        spiritual and vibrational importance like the above given Char Dhams.
                        The project is near Omkareshwar Temple (winter residing place of
                        Bhagwan Kedarnath) in the Kedarnath valley”s Ukhimath block of
                        district Rudraprayag,
                    </p>

                    <!-- Section Title -->
                    <h2 class="text-base font-bold text-black mb-4">
                        Scientific relevance
                    </h2>

                    <!-- Bullet List -->
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>
                                A powerful, strong and very high technology technique is used in
                                that pond and if we built this kind of structure now it will be of
                                very high budget and instead of that we are not able to match the
                                quality.
                            </p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>
                                The water supply connected with that pond comes from the upper
                                Himalayan region which is of very high quality and having strong
                                medicinal and mineral values.
                            </p>
                        </li>

                        <li class="flex items-start">

                            <p><span class="text-blue-600 mt-1 mr-3">★</span>
                                The medicinal value added water will help humans to maintain their
                                healthy life as every second person has gas and acidity problems
                                there.
                            </p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>
                                The water will add an extraordinary effect on life because more
                                than 70% is water inside us. If that 70% element is maintained
                                then just imagine the effect of that on humans.
                            </p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>It also fulfills the
                                water demand
                                of the valley.</p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify "><span class="text-blue-600 mt-1 mr-3">★</span>
                                With no high expenses we will get an effective water storage
                                structure of multiple usage.
                            </p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>
                                Beautification of that divine place increases the vibration of
                                that place.
                            </p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>
                                We want to promote it for tourism to generate livelihood resources
                                for the localities.
                            </p>
                        </li>
                    </ul>

                    <h2 class="text-base font-bold text-black  mt-6 mb-4">
                        Spiritual relevance
                    </h2>

                    <!-- Bullet List -->
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>We get spiritual growth
                                by serving
                                kedarnath valley.</p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>
                                We are benefited by donating water to that divine place (जल दान
                                महादान )।
                            </p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>
                                As we serve and contribute unconditionally it will expand our
                                Heart or Anahat chakra.
                            </p>
                        </li>

                        <li class="flex items-start">

                            <p class="text-justify"><span class="text-blue-600 mt-1 mr-3">★</span>
                                This place is not only related with lord Shiva but it is related
                                with lord Krishna also.The grandson of Krishna named Anirudh
                                married here with Usha and that is why this place is known as
                                Ukhimath and is a sacred destination.
                            </p>
                        </li>
                    </ul>

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

                        <input type="hidden" name="campaign" id="campaign" value="Project Rudra" />

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
