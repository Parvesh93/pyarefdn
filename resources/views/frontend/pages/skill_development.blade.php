@section('title')
    Skill Development Program
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">SKILL DEVELOPMENT PROGRAM</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Skill Development Program</span>
            </nav>
        </div>
    </section>


    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">
            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">

                <!-- Paragraphs -->
                <div class="space-y-5 text-gray-700 leading-relaxed">
                    <p class="text-justify">
                        Pyare Foundation unveiled a new educational, awareness, and
                        character-building initiative for children in grades 10 through 12.
                        The plan is to have numerous workshops every Sunday that would aid
                        many pupils in better comprehending topics and enhancing their
                        personalities. The project began on July 4th and will finish on
                        December 5th, 2021, spanning a total of 22 Sundays. The first
                        meeting cum session was held on July 4th itself, with many students
                        in attendance at our Dilshad Garden communication centre
                    </p>
                </div>
                <!-- Person 1 -->
                <div>
                    <h3 class="font-bold text-lg">Mr. Kumar Amlendu</h3>
                    <p class="text-gray-700">
                        Artist, Graphic Designer, Animator, Founder of Artcozy institute of
                        fine art and craft
                    </p>
                    <hr class="my-3 border-black" />
                    <p class="text-gray-600 text-justify">
                        Mr Kumar Amlendu placed sessions of Graphic Design for 3 weeks in
                        which he explained about Graphic Design and took a quick session on
                        Adobe Photoshop.
                    </p>
                </div>

                <!-- Person 2 -->
                <div>
                    <h3 class="font-bold text-lg">Mrs Ritu Gupta</h3>
                    <p class="text-gray-700">
                        Experienced Corporate Trainer, Spoken English Teacher, Founder at
                        Stepping Minds and Herbalspume
                    </p>
                    <hr class="my-3 border-black" />
                    <p class="text-gray-600 text-justify">
                        Mrs Ritu Thapliyal took 3 sessions on Spoken English for 3 weeks for
                        the people who were eager to learn English language. She also took
                        doubts from a number of people in those sessions.
                    </p>
                </div>

                <!-- Person 3 -->
                <div>
                    <h3 class="font-bold text-lg">Mr Atul</h3>
                    <p class="text-gray-700">
                        Calisthenics & Fitness Trainer, Calisthenics Instructor with 4+
                        years of experience
                    </p>
                    <hr class="my-3 border-black" />
                    <p class="text-gray-600 text-justify">
                        Mr Atul has 4+ years of experience as Calisthenics & Fitness
                        Trainer. He disclosed all about fitness during his 3 weeks session
                        to all the fitness freaks.
                    </p>
                </div>

                <!-- Person 4 -->
                <div>
                    <h3 class="font-bold text-lg">Dr. Anjali Thapliyal Kaul</h3>
                    <p class="text-gray-700">
                        President at Pyare Foundation, More than 10 years of teaching
                        experience, Founder of Shivpriyarudrani
                    </p>
                    <hr class="my-3 border-black" />
                    <p class="text-gray-600 text-justify">
                        Dr Anjali Thapliyal Kaul, president at Pyare Foundation took career
                        couselling sessions for young minds. She motivated and guided
                        students from various fields in her 3 weeks sessions.
                    </p>
                </div>
                <!-- Person 5 -->
                <div>
                    <h3 class="font-bold text-lg">Mr. Rajesh Kaul</h3>
                    <p class="text-gray-700 text-justify">
                        Secretary at Pyare Foundation, Author, Editor in Chief of Journal of
                        Interdisciplinary Approaches
                    </p>
                    <hr class="my-3 border-black" />
                    <p class="text-gray-600 text-justify">
                        Mr Rajesh Kaul, secretary at Pyare Foundation took meditation and
                        Yoga classes in his 3 weeks sessions. He motivated and guided all
                        the participants during the sessions.
                    </p>
                </div>
                <!-- Person 6 -->
                <div>
                    <h3 class="font-bold text-lg">
                        Mr. Gaurav Thapliyal and Mrs Sushma Thapliyal
                    </h3>
                    <p class="text-gray-700">
                        Clinical Psychologist, Center for Special Education, Muscat
                    </p>
                    <hr class="my-3 border-black" />
                    <p class="text-gray-600 text-justify">
                        Mr Gaurav Thapliyal and Mrs Sushma Thapliyal jointly took 3 week
                        sessions on mental health. They disclosed plenty of knowlegable and
                        useful information to the participants.
                    </p>
                </div>
                <!-- Person 7 -->
                <div>
                    <h3 class="font-bold text-lg">Dr. Reena Chikara</h3>
                    <p class="text-gray-700 text-justify">
                        President at Abhyudaya Charitable Trust, Reiki Healer, Acupressure
                        Therapist
                    </p>
                    <hr class="my-3 border-black" />
                    <p class="text-gray-600 text-justify">
                        Dr. Reena Chikara, a Reiki healer and Acupressure therapist, took 3
                        weeks sessions on Acupressure and healing
                    </p>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold">Impact</h2>
                <p class="text-justify text-gray-600">
                    The entire program went very well, and we were able to organize 22
                    sessions with experts from various fields. During tenure, people from
                    different age groups joined the sessions and got a beneficial learning
                    experience. Skills are an essential requirenment for almost everyone.
                    Some aspire to learn it for professiiional purposes, some just for
                    knowledge and experimentation, while some for their passion. However,
                    insufficient resources stand out as a significant problem in learners’
                    paths. Therefore we withhh our initatiiive have tried to cover up the
                    gap and educate India for its enlightenment and innovations.
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
                    <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST" class="space-y-2">
                        @csrf
                        <input type="text" placeholder="FIRST NAME" class="w-full border px-4 py-2 rounded text-sm"
                            name="firstName" />

                        <!-- Hidden input to store selected type -->
                        <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />


                        <input type="hidden" name="campaign" id="campaign" value="Skill Development Program" />

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
