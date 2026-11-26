@extends('frontend.layouts.master')

@section('title')
    Pyare Foundation Pathology Lab
@endsection

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<section class="relative py-6 bg-cover bg-center overflow-hidden text-white">
    <div class="absolute inset-0 bg-[#0f1240]"></div>

    <div class="relative max-w-screen-xl md:mx-8 px-6">
        <h2 class="md:text-2xl text-2xl font-bold">PYARE FOUNDATION PATHOLOGY LAB</h2>

        <nav class="mt-3 text-sm">
            <i class="fa-sharp-duotone fa-solid fa-house"></i>
            <a href="{{ route('home') }}" class="text-[16px] text-orange-400 font-semibold hover:underline">
                Home
            </a>
            <span class="mx-1 text-gray-200">/</span>
            <span class="text-[16px] text-gray-300">Pathology Lab</span>
        </nav>
    </div>
</section>

<section class="w-full py-10 bg-white">
    <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">

        <!-- Left Content -->
        <div class="w-full lg:w-2/3">

            <!-- Pathology Lab Gallery -->
<div class="mb-10">

    <div class="swiper pathologySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="{{ asset('resources/views/frontend/images/pathology-1.jpeg') }}"
                     alt="Pathology Lab"
                     class="w-full aspect-[3/4] object-cover rounded-xl">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('resources/views/frontend/images/pathology-2.jpeg') }}"
                     alt="Pathology Lab"
                     class="w-full aspect-[3/4] object-cover rounded-xl">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('resources/views/frontend/images/pathology-3.jpg') }}"
                     alt="Pathology Lab"
                     class="w-full aspect-[3/4] object-cover rounded-xl">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('resources/views/frontend/images/pathology-4.jpg') }}"
                     alt="Pathology Lab"
                     class="w-full aspect-[3/4] object-cover rounded-xl">
            </div>

            <!--<div class="swiper-slide">-->
            <!--    <img src="{{ asset('frontend/images/pathology-5.jpg') }}"-->
            <!--         alt="Pathology Lab"-->
            <!--         class="w-full aspect-[3/4] object-cover rounded-xl">-->
            <!--</div>-->

        </div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination mt-4"></div>

    </div>

</div>

            <!-- Intro -->
            <div class="space-y-5 text-gray-700 leading-relaxed">
                <h1 class="text-3xl md:text-4xl font-bold text-[#11144a]">
                    Pyare Foundation Pathology Lab
                </h1>

                <p class="text-justify">
                    Inaugurated on <strong>20th May 2026</strong>, the Pyare Foundation Pathology Lab
                    was established with the aim of making reliable and affordable diagnostic services
                    accessible to the people of Ukhimath and nearby rural communities.
                </p>

                <p class="text-justify">
                    The lab supports timely diagnosis through essential blood tests and basic health
                    checkups, helping individuals take better healthcare decisions at the right time.
                    With modern equipment, hygienic sample collection, and patient-focused service,
                    the laboratory is a step towards strengthening rural healthcare access.
                </p>
            </div>
            
            <!-- Laboratory Services -->
<div class="mt-6 bg-blue-50 border-l-4 border-blue-500 p-5 rounded-lg">
    <h3 class="text-xl font-bold text-[#11144a] mb-2">
        Laboratory Services
    </h3>
    <p class="text-gray-700">
        Diagnostic laboratory services at the Pyare Foundation are
        provided by <strong>Shanta Bansi Diagnostic Lab</strong>, ensuring high-quality,
        accurate, and reliable diagnostic testing for the community.
    </p>
</div>

            <!-- Mission Box -->
            <div class="mt-8 bg-[#fff7e6] border-l-4 border-orange-400 p-6 rounded-lg">
                <h2 class="text-2xl font-bold text-[#11144a] mb-3">Our Mission</h2>
                <p class="text-gray-700 text-justify">
                    To provide accurate, affordable, and accessible diagnostic services that support
                    early detection, timely treatment, and better health outcomes for the community.
                </p>
            </div>

            <!-- Tests -->
<div class="mt-10">
    <h2 class="text-2xl sm:text-3xl font-bold text-[#11144a] mb-6">
        Diagnostic Tests Available
    </h2>

    @php
        $tests = [
            'Complete Blood Count (CBC)',
            'Kidney Function Test (KFT)',
            'Liver Function Test (LFT)',
            'Lipid Profile',
            'Blood Sugar Test',
            'Thyroid Profile',
            'Vitamin Tests',
            'Uric Acid Test'
        ];
    @endphp

    <div class="grid grid-cols-2 lg:grid-cols-2 gap-3 sm:gap-4">

        @foreach($tests as $test)
            <div class="flex flex-col sm:flex-row items-center text-center sm:text-left gap-2 sm:gap-3 bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4 hover:shadow-md transition">

                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-orange-100 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-vial text-orange-500 text-sm sm:text-base"></i>
                </div>

                <p class="font-medium text-gray-700 text-sm sm:text-base leading-snug">
                    {{ $test }}
                </p>

            </div>
        @endforeach

    </div>
</div>

<!-- Basic Checkups -->
<div class="mt-10">
    <h2 class="text-2xl sm:text-3xl font-bold text-[#11144a] mb-6">
        Basic Health Checkups
    </h2>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">

        <div class="bg-[#11144a] text-white rounded-xl p-4 sm:p-6 text-center flex flex-col items-center justify-center min-h-[120px] sm:min-h-[170px]">
            <i class="fa-solid fa-heart-pulse text-2xl sm:text-4xl text-orange-400 mb-3"></i>
            <h3 class="font-bold text-sm sm:text-lg">BP Checkup</h3>
        </div>

        <div class="bg-[#11144a] text-white rounded-xl p-4 sm:p-6 text-center flex flex-col items-center justify-center min-h-[120px] sm:min-h-[170px]">
            <i class="fa-solid fa-lungs text-2xl sm:text-4xl text-orange-400 mb-3"></i>
            <h3 class="font-bold text-sm sm:text-lg">Oxygen Level</h3>
        </div>

        <div class="bg-[#11144a] text-white rounded-xl p-4 sm:p-6 text-center flex flex-col items-center justify-center min-h-[120px] sm:min-h-[170px]">
            <i class="fa-solid fa-weight-scale text-2xl sm:text-4xl text-orange-400 mb-3"></i>
            <h3 class="font-bold text-sm sm:text-lg">Weight</h3>
        </div>

    </div>
</div>

            <!-- Why Choose -->
            <div class="mt-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-[#11144a] mb-6">
                    Why Choose Pyare Foundation Pathology Lab?
                </h2>

                <div class="space-y-4">
                    @php
                        $points = [
                            'Affordable diagnostic services for local communities',
                            'Accurate and reliable test reports',
                            'Hygienic sample collection and safe testing process',
                            'Essential tests available under one roof',
                            'Convenient location near Omkareshwar Mandir',
                            'Open every day from 8:00 AM to 7:00 PM'
                        ];
                    @endphp

                    @foreach($points as $point)
                        <div class="flex gap-3">
                            <i class="fa-solid fa-circle-check text-orange-500 mt-1"></i>
                            <p class="text-gray-700">{{ $point }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Location -->
            <div class="mt-10 bg-gray-50 border border-gray-200 rounded-xl p-6">
                <h2 class="text-2xl font-bold text-[#11144a] mb-4">Location & Timings</h2>

                <p class="text-gray-700 mb-3">
                    <strong>Address:</strong> Near Omkareshwar Mandir, Ukhimath, Asama,
                    Uttarakhand - 246469
                </p>

                <p class="text-gray-700 mb-3">
                    <strong>Opening Hours:</strong> 8:00 AM – 7:00 PM
                </p>

                <p class="text-gray-700">
                    <strong>Open:</strong> Monday to Sunday
                </p>
            </div>

            <!-- CTA -->
            <div class="mt-10 rounded-xl bg-[#fee09c] p-8 text-center">
                <h2 class="text-2xl font-bold text-[#11144a] mb-3">
                    Get Reliable Health Testing Near You
                </h2>
                <p class="text-gray-700 mb-5">
                    Visit Pyare Foundation Pathology Lab for affordable diagnostic tests and basic health checkups.
                </p>
                <a href="https://www.google.com/maps?gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQIRigATIHCAIQIRigATIHCAMQIRiPAtIBCTEwNTk5ajBqN6gCCLACAfEFMvF2Am7rmQA&um=1&ie=UTF-8&fb=1&gl=in&sa=X&geocode=KZe_TB5ONQg5MbL6ys2nVFbW&daddr=near+Omkareshwar+Mandir,+Ukhimath,+Asama,+Uttarakhand+246469"
                   target="_blank"
                   class="inline-block bg-[#11144a] text-white px-6 py-3 rounded font-semibold">
                    Get Directions
                </a>
            </div>

        </div>

        <!-- Right Donate Form -->
        <div class="w-full lg:w-1/3 h-fit sticky top-4">
            <div class="shadow-lg rounded p-6 bg-white border border-gray-200">
                <h3 class="text-md font-semibold text-gray-800 mb-4">DONATE NOW</h3>

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

                <button class="amount-btn w-full bg-yellow-400 text-sm font-bold py-2 px-4 rounded mb-2" data-value="500">
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

                <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST" class="space-y-2">
                    @csrf

                    <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time">
                    <input type="hidden" name="campaign" id="campaign" value="Pathology Lab">

                    <input type="text" name="firstName" placeholder="FIRST NAME" class="w-full border px-4 py-2 rounded text-sm">
                    <input type="text" name="lastName" placeholder="LAST NAME" class="w-full border px-4 py-2 rounded text-sm">
                    <input id="customAmount" type="text" name="amount" placeholder="AMOUNT" class="w-full border px-4 py-2 rounded text-sm">
                    <input type="email" name="email" placeholder="EMAIL" class="w-full border px-4 py-2 rounded text-sm">
                    <input type="text" name="contact" placeholder="+91" class="w-full border px-4 py-2 rounded text-sm">
                    <input type="text" name="address" placeholder="ADDRESS" class="w-full border px-4 py-2 rounded text-sm">

                    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                    <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                    <input type="hidden" name="razorpay_signature" id="razorpay_signature">

                    <button type="submit" id="pay-button"
                        class="w-full bg-gray-900 text-white font-semibold py-2 px-4 rounded">
                        PROCEED TO DONATE
                    </button>
                </form>

                <div class="relative overflow-hidden rounded-xl bg-[#fee09c] px-6 py-6 mt-6 text-center">
                    <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4">
                        Volunteers are the heart of our foundation. Sign up today and be a part of something bigger.
                    </p>
                    <a href="{{ route('volunteer-member') }}"
                       class="inline-block bg-[#11144a] text-white text-sm font-semibold py-2 px-6 rounded">
                        BECOME VOLUNTEER
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    const amountButtons = document.querySelectorAll(".amount-btn");
    const amountInput = document.getElementById("customAmount");

    amountButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            amountButtons.forEach((b) => {
                b.classList.remove("bg-yellow-400", "text-black", "font-bold");
                b.classList.add("bg-gray-100");
            });

            btn.classList.add("bg-yellow-400", "text-black", "font-bold");
            btn.classList.remove("bg-gray-100");

            amountInput.value = btn.dataset.value;
        });
    });

    amountInput.addEventListener("input", () => {
        if (amountInput.value.trim() !== "") {
            amountButtons.forEach((b) => {
                b.classList.remove("bg-yellow-400", "text-black", "font-bold");
                b.classList.add("bg-gray-100");
            });
        }
    });
    
</script>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.pathologySwiper', {
        slidesPerView: 3,
        spaceBetween: 24,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });
});
</script>

@endsection