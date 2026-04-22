@section('title')
    All Events
@endsection

@extends('frontend.layouts.master')

@section('content')
    <section class="relative py-6 bg-cover bg-center overflow-hidden text-white">

        <!--Dark Overlay -->
        <div class="absolute inset-0"></div>

        <!--Grainy/Blur Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>


        <!--Content -->
        <div class="relative md:px-12 px-4 mx-auto px-6">
            <h2 class="md:text-2xl text-2xl font-bold tracking-wide uppercase">RECENT EVENTS 2025-26</h2>
            <!--Breadcrumbs -->
            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Recent Events 2025-26</span>
            </nav>
        </div>
    </section>


    <!--Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-9 flex flex-col lg:flex-row gap-10 px-4">
            <!--Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">
                
                
                <div class="mr-1 ml-1">
                    <div
                        class="max-w-6xl w-full bg-white shadow-lg rounded overflow-hidden flex flex-col md:flex-row transform transition duration-500 hover:scale-[1.0] hover:shadow-xl">

                        <!--Image Section -->
                        <div class="md:w-1/3">
                            <img src="{{ asset('uploads/images/events/event41.jpeg') }}" alt="Independence"
                                class="w-full h-full object-cover">
                        </div>

                        <!--Content Section -->
                        <div class="md:w-2/3 p-8 flex flex-col justify-center">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Independence Day Program</h2>
                            <p class="text-orange-600 font-semibold mb-4">15th August, 2025</p>
                            <p class="text-gray-600 leading-relaxed text-justify">
                               Pyare Foundation organized an Independence Day program at its office, focusing on education, values, and national development. The session highlighted the importance of holistic learning and academic awareness.
                            </p>
                        </div>
                    </div>

                </div>
                
                
                <div class="mr-1 ml-1 mt-3">
                    <div
                        class="max-w-6xl w-full bg-white shadow-lg rounded overflow-hidden flex flex-col md:flex-row transform transition duration-500 hover:scale-[1.0] hover:shadow-xl">

                        <!--Image Section -->
                        <div class="md:w-1/3">
                            <img src="{{ asset('uploads/images/events/event5.jpeg') }}" alt="Sobhit University"
                                class="w-full h-full object-cover">
                        </div>

                        <!--Content Section -->
                        <div class="md:w-2/3 p-8 flex flex-col justify-center">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Gurukul Education & Academic Guidance Session</h2>
                            <p class="text-orange-600 font-semibold mb-4">25th November, 2025</p>
                            <p class="text-gray-600 leading-relaxed text-justify">
                                An academic session was conducted in collaboration with Sobhit University to promote Gurukul-based education integrated with science and technology. Dr. Anjali Thapliyal Kaul, President of Pyare Foundation, delivered a keynote address on numerology and academics.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="mr-1 ml-1 mt-3">
                    <div
                        class="max-w-6xl w-full bg-white shadow-lg rounded overflow-hidden flex flex-col md:flex-row transform transition duration-500 hover:scale-[1.0] hover:shadow-xl">

                        <!--Image Section -->
                        <div class="md:w-1/3">
                            <img src="{{ asset('uploads/images/events/Yoga-Day-2.webp') }}" alt="Donor"
                                class="w-full h-full object-cover">
                        </div>

                        <!--Content Section -->
                        <div class="md:w-2/3 p-8 flex flex-col justify-center">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Yoga Day Celebration</h2>
                            <p class="text-orange-600 font-semibold mb-4">21st June, 2022</p>
                            <p class="text-gray-600 leading-relaxed text-justify">
                                Yoga Day was celebrated at Ayyappa Temple on 21st June on the eve of International Yoga Day. The team of Pyare Foundation joined the event and performed various Asanas. The committee of Ayyappa recognized our president on the stage. The event was attended by a few more reputed people from different departments.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="mt-3 mr-1 ml-1">
                    <div
                        class="max-w-6xl w-full bg-white shadow-lg rounded overflow-hidden flex flex-col md:flex-row transform transition duration-500 hover:scale-[1.0] hover:shadow-xl">

                        <!--Image Section -->
                        <div class="md:w-1/3">
                            <img src="{{ asset('uploads/images/events/Applause-to-the-real-heroes_2.webp') }}" alt="Donor"
                                class="w-full h-full object-cover">
                        </div>

                        <!--Content Section -->
                        <div class="md:w-2/3 p-8 flex flex-col justify-center">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Applause to the Real Heroes</h2>
                            <p class="text-orange-600 font-semibold mb-4">12th June, 2022</p>
                            <p class="text-gray-600 leading-relaxed text-justify">
                               Pyare Foundation organized an event “Applause to the real heroes” on 12th June, 2022, for those who have contributed to society and still very few people know them. We are thankful to all the special guests who attended the event and supported the organization.
                            </p>
                            <p class="text-gray-600 leading-relaxed text-justify mt-4">
                              <span class="font-bold">Chief Guest:</span>  Padmashree Dr Jitender Singh Shunty Ji
                             
                            </p>
                            <p class="text-gray-600 leading-relaxed text-justify">
                    
                              <span class="font-bold">Other Prominent Guests:</span>   Sh. Rakesh Mishra (Under Secretary – Ministry of Petrolium and Natural Gas), Sh. DS Bhandari (Higher Official at ONGC), Sh. Sanjay Kashyap (Independent Director at GAIL), Sh. Sachidanand Sharma (Former Minister, U.P.).
                            </p>
                            <p class="text-gray-600 leading-relaxed text-justify mt-4">
                                Two official announcements were also made, <span class="font-bold">Mr. Deepak Aggarwal is elected as Regional Head, Uttar Pradesh and Mr. Paras Thakur as Regional Head, Delhi.</span> 
                            </p>
                        </div>
                    </div>
                </div>


                <div class="mt-3 mr-1 ml-1">
                    <div
                        class="max-w-6xl w-full bg-white shadow-lg rounded overflow-hidden flex flex-col md:flex-row transform transition duration-500 hover:scale-[1.0] hover:shadow-xl">

                        <!--Image Section -->
                        <div class="md:w-1/3">
                            <img src="{{ asset('uploads/images/events/Water-to-birds-2.webp') }}" alt="Donor"
                                class="w-full h-full object-cover">
                        </div>

                        <!--Content Section -->
                        <div class="md:w-2/3 p-8 flex flex-col justify-center">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Water to Birds</h2>
                            <p class="text-orange-600 font-semibold mb-4">9th May, 2022</p>
                            <p class="text-gray-600 leading-relaxed text-justify">
                               In this initiative, Pyare Foundation distributed and installed pots at various places and on different occasions. Dr. Divesh Gupta (An Academician) donated 100 pots.
                            </p>
                        </div>
                    </div>
                </div>
                
                
                <div class="mt-3 mr-1 ml-1">
                    <div
                        class="max-w-6xl w-full bg-white shadow-lg rounded overflow-hidden flex flex-col md:flex-row transform transition duration-500 hover:scale-[1.0] hover:shadow-xl">

                        <!--Image Section -->
                        <div class="md:w-1/3">
                            <img src="{{ asset('uploads/images/events/Independence-Day.webp') }}" alt="Donor"
                                class="w-full h-full object-cover">
                        </div>

                        <!--Content Section -->
                        <div class="md:w-2/3 p-8 flex flex-col justify-center">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Independence Day Celebration</h2>
                            <p class="text-orange-600 font-semibold mb-4">15th August, 2022</p>
                            <p class="text-gray-600 leading-relaxed text-justify">
                               Our forefathers bought our freedom with their hard work and sacrifice. Now we must work hard to create a better nation for generations that follow. Happy Independence Day!
75th Independence Day celebration by Pyare Foundation at Dilshad Garden with kids.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-3 mr-1 ml-1">
                    <div
                        class="max-w-6xl w-full bg-white shadow-lg rounded overflow-hidden flex flex-col md:flex-row transform transition duration-500 hover:scale-[1.0] hover:shadow-xl">

                        <!--Image Section -->
                        <div class="md:w-1/3">
                            <img src="{{ asset('uploads/images/events/First-AID-2.webp') }}" alt="Donor"
                                class="w-full h-full object-cover">
                        </div>

                        <!--Content Section -->
                        <div class="md:w-2/3 p-8 flex flex-col justify-center">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">First Aid Workshop</h2>
                            <p class="text-orange-600 font-semibold mb-4">9th April, 2022</p>
                            <p class="text-gray-600 leading-relaxed text-justify">
                                On 9th April 2022 Pyare Foundation organized a 4 hrs. long Free First Aid workshop. The workshop was conducted with the help of Dr. Rashmi Malhotra (BAMS. Master trainer Red cross Delhi branch). Snacks and lunch were provided by the organization at their premises in Dilshad Garden.
                            </p>
                        </div>
                    </div>
                </div>
                
                
             
                
                
                <!--<div class="mt-3 mr-1 ml-1">-->
                <!--    <div-->
                <!--        class="max-w-6xl w-full bg-white shadow-lg rounded overflow-hidden flex flex-col md:flex-row transform transition duration-500 hover:scale-[1.0] hover:shadow-xl">-->

                        <!--Image Section -->
                <!--        <div class="md:w-1/3">-->
                <!--            <img src="{{ asset('uploads/images/events/event.webp') }}" alt="Donor"-->
                <!--                class="w-full h-full object-cover">-->
                <!--        </div>-->

                        <!--Content Section -->
                <!--        <div class="md:w-2/3 p-8 flex flex-col justify-center">-->
                <!--            <h2 class="text-2xl font-bold text-gray-800 mb-2">Thanking for donation.</h2>-->
                <!--            <p class="text-orange-600 font-semibold mb-4">11th March 2023.</p>-->
                <!--            <p class="text-gray-600 leading-relaxed text-justify">-->
                <!--                Mr. Sharad Tyagi, an attorney, made a generous donation of Rs. 2100 towards the Govind Leela-->
                <!--                project,-->
                <!--                which is aimed at improving the lives of underprivileged children in the community.-->
                <!--                The Pyare Foundation recognizes and appreciates Mr. Tyagi’s contribution towards their-->
                <!--                cause,-->
                <!--                which will go a long way in providing education and other opportunities to children in need.-->
                <!--            </p>-->
                <!--            <p class="text-gray-600 leading-relaxed text-justify mt-4">-->
                <!--                The Foundation also encourages everyone to step forward and support their cause to help them-->
                <!--                reach their goal of raising Rs. 20 lakhs (project cost) to improve the lives of even more-->
                <!--                children.-->
                <!--                The Pyare Foundation recognizes that it takes a collective effort to bring about change in-->
                <!--                society,-->
                <!--                and they are grateful for the support of individuals like Mr. Tyagi who share their vision-->
                <!--                and contribute to their mission.-->
                <!--            </p>-->
                            
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <div class=" px-4 md:px-8 py-6 mb-2 flex justify-center mx-auto">
                    <div>
                        <button
                            class="bg-orange-500 hover:bg-orange-600 px-5 py-2 text-white font-semibold rounded shadow-md">
                            <a href="{{ route('annual-report') }}">Refer our Annaul Reports for previous years events</a>
                        </button>
                    </div>
                </div>

            </div>

            <!--Right Donate Form -->

            <div class="w-full lg:w-1/3 h-fit sticky top-0">
                <div class="shadow-lg rounded p-6 bg-white border border-gray-200">
                    <h3 class="text-md font-semibold text-gray-800 mb-4">DONATE NOW</h3>

                    <!--Give Type -->
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

                    <!--Amount Buttons-->
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

                    <!--Donation Form -->
                    <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST" class="space-y-2">
                        @csrf
                        <input type="text" placeholder="FIRST NAME" class="w-full border px-4 py-2 rounded text-sm"
                            name="firstName" />

                        <!--Hidden input to store selected type-->
                        <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />

                        <input type="hidden" name="campaign" id="campaign" value="General" />

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

                        <!--Hidden input for payment_id-->
                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
                        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                        <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                        
                        
                        <button type="submit" id="pay-button"
                            class="w-full bg-gray-900 text-white font-semibold py-2 px-4 rounded">
                            PROCEED TO DONATE
                        </button>
                    </form>

                    <!--Volunteer Box -->
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

                    <!--Annual Member Box -->
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
@endsection
