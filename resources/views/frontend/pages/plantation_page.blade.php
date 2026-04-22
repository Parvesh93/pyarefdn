@section('title')
    Planation
@endsection

@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl mx-auto px-6">
            <h2 class="md:text-2xl text-2xl font-bold">PLANTATION PROJECT</h2>

            <!-- Breadcrumbs -->
            <nav class="mt-3 text-sm">
                <a href="/" class="text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-2 text-gray-200">/</span>
                <span class="text-gray-300">About Organisation</span>
            </nav>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                <!-- Left Side - Text Content -->
                <div class="space-y-8 min-h-[350px]">
                    <!-- Title with Icon -->
                    <div class="flex items-center gap-3">
                        <h2 class="text-2xl font-bold text-gray-900">
                            Plantation Drive
                        </h2>

                    </div>

                    <!-- Main Description -->
                    <p class="text-gray-600 leading-relaxed text-justify">
                        An initiative started by Pyare Foundation and the
                        Hindustan Scouts & Guides with the target of 5000
                        saplings to be planted by June, 2022. The teams from
                        both organizations will also make sure that the
                        planted saplings will get adequate care. This
                        initiative reaches significant areas, and people
                        from various cities and towns join this program.
                        Organizing a plantation drive is equivalent to
                        working on the nearby community’s development. Such
                        an initiative will help secure the indigenous nature
                        of the nearby areas. Counting in environmental
                        issues like global warming, soil erosion, water
                        scarcity, increasing particulate matter in the air,
                        ozone depletion, etc., we have concluded conducting
                        and promoting plantation drives in specific areas.
                    </p>
                </div>

                <!-- Right Side - Image -->
                <div class="relative">
                    <div class="h-50 rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Person planting seedlings in soil with gardening tools nearby"
                            class="w-full h-full object-cover" />
                    </div>
                </div>
            </div>

            <!-- Content Below Image -->
            <div class="mt-8 space-y-4">
                <p class="text-gray-600 leading-normal text-justify">
                    Hindustan Scouts & Guides is a non-profit organisation
                    that has been active in India for many years, and its
                    volunteers participate in a variety of activities and
                    events. This time, members of HSG, in collaboration with
                    Pyare Foundation, pledged to plant 5000 trees over the
                    course of a year, from June 5, 2021 to June 5, 2022.
                    They are grateful for the opportunity they had of
                    working with the nice and hardworking members of HSG.
                    Around 80 people signed the pledge, planting up to 50
                    plants thus far. Pyare Foundation joins them in planting
                    trees for a healthier environment, they encourage others
                    to do the same.
                </p>

                <p class="text-gray-600 leading-normal text-justify">
                    We proudly announce that we have been able to plant more
                    than 5000 saplings until now, increasing the number. The
                    team of Hindustan Scout Guides and Pyare Foundation
                    worked tirelessly for the project to make it a success.
                    With utmost delight, we are celebrating the completion
                    of our plantation drive. We here are grateful that our
                    small contribution will surely add some improvements to
                    our surroundings. The following plantation drive has
                    taught us the awe of nature and the beautiful process of
                    implanting samplings and gracing them until they bloom
                    out.
                </p>

                <p class="text-gray-600 leading-normal text-justify">
                    The plantation drive took place in Delhi, Bihar, Uttar
                    Pradesh and Rajasthan. The varieties of plants, the day
                    of plantation, the growth of plant, the benefits of
                    plants all were recorded for the good of cause. The aim
                    was to practically get benefitted from plantation drive
                    and thus the team members were advised and cautioned to
                    make complete summary and have data ready for
                    complication and presentation. The pressure was mounted
                    in order to ensure worthiness of plantation drive. The
                    plants have now grown and some will yield fruits as
                    well. There are chances some may come up as trees and
                    provide shelter and cool oxygen naturally in hot places.
                </p>
            </div>
            <div class="relative w-full py-6">
                <!-- Swiper Container -->
                <div class="swiper shambhooSwiper2">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/images/events/projectss1.png') }}" alt="Training 1"
                                class="w-full rounded-md object-cover" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/images/events/projectss2.png') }}" alt="Training 2"
                                class="w-full rounded-md object-cover" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/images/events/projectss3.png') }}" alt="Training 3"
                                class="w-full rounded-md object-cover" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/images/events/projectss4.png') }}" alt="Training 4"
                                class="w-full rounded-md object-cover" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/images/events/projectss5.png') }}" alt="Training 5"
                                class="w-full rounded-md object-cover" />
                        </div>
                    </div>
                </div>

                <!-- Custom Arrows -->
                <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                    <div
                        class="swiper-button-prev-2 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                </div>

                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                    <div
                        class="swiper-button-next-2 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>



        </div>

        <!-- Donate form -->
        <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST">

            @csrf
            <section class="w-full py-12 bg-white">
                <div class="max-w-screen-xl mx-auto ">
                    <div class="bg-white border border-gray-200 shadow-lg rounded-lg px-6 py-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">DONATE NOW</h2>

                        <!-- Give Once / Monthly -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <button type="button" id="onceBtn" data-type="one-time"
                                class="donation-btn bg-[#FEB201] text-black text-sm font-semibold py-3 px-4 rounded w-full">
                                GIVE ONCE
                            </button>
                            <button type="button" id="monthlyBtn" data-type="monthly"
                                class="donation-btn bg-gray-100 text-sm font-semibold py-3 px-4 rounded w-full">
                                GIVE MONTHLY
                            </button>
                        </div>

                        <!-- Hidden input to store selected type -->
                        <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />

                        <!-- Choose Amount -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Choose Amount to Donate</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <button type="button"
                                    class="amount-btn bg-[#FEB201] text-black text-sm font-semibold py-3 px-4 rounded w-full"
                                    data-value="500">500 RS</button>
                                <button type="button"
                                    class="amount-btn bg-gray-100 text-sm font-semibold py-3 px-4 rounded w-full"
                                    data-value="1000">1000 RS</button>
                                <button type="button"
                                    class="amount-btn bg-gray-100 text-sm font-semibold py-3 px-4 rounded w-full"
                                    data-value="2000">2000 RS</button>
                                <button type="button"
                                    class="amount-btn bg-gray-100 text-sm font-semibold py-3 px-4 rounded w-full"
                                    data-value="3000">3000 RS</button>
                            </div>
                        </div>

                        <!-- Custom Amount -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Custom Amount</label>
                            <div class="flex items-center">
                                <span class="bg-[#FEB201] px-4 py-3 rounded-l text-sm font-bold">₹</span>
                                <input id="customAmount" name="amount" type="text"
                                    class="bg-gray-100 text-sm font-semibold py-3 px-4 rounded-r w-full placeholder-black"
                                    placeholder="CUSTOM AMOUNT" required />
                            </div>
                        </div>


                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">

                        <input type="hidden" name="given_method_id" id="given_method_id" value="">
                        <!-- Name -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                                <input name="firstName" type="text" placeholder="FIRST NAME"
                                    class="w-full border px-4 py-3 rounded text-sm" required />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                                <input name="lastName" type="text" placeholder="LAST NAME"
                                    class="w-full border px-4 py-3 rounded text-sm" required />
                            </div>
                        </div>

                        <!-- Email & Contact -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                <input name="email" type="email" placeholder="EMAIL"
                                    class="w-full border px-4 py-3 rounded text-sm" required />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Contact *</label>
                                <input name="contact" type="text" placeholder="+91"
                                    class="w-full border px-4 py-3 rounded text-sm" />
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Address *</label>
                            <input name="address" type="text" placeholder="ADDRESS"
                                class="w-full border px-4 py-3 rounded text-sm" required />
                        </div>

                        <!-- Submit -->
                        <button type="submit" id="pay-button"
                            class="w-full bg-[#12163f] text-white font-semibold py-3 px-6 rounded text-sm">
                            PROCEED TO DONATE
                        </button>
                    </div>
                </div>
            </section>
        </form>

        <!-- Wrapper -->

    </section>
    <!-- Donate form -->
@endsection
