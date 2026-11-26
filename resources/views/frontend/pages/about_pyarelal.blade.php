@section('title')
    Pyare Lal
@endsection

@extends('frontend.layouts.master')

@section('content')
    <section class="relative py-6 bg-cover bg-center overflow-hidden text-white">

        <!-- Dark Overlay -->
        <div class="absolute inset-0"></div>

        <!-- Grainy/Blur Texture Overlay -->
        <div class="absolute inset-0  mix-blend-overlay pointer-events-none bg-[#0f1240]"
            >
        </div>

        <!-- Content -->
        <div class="relative md:px-14 px-4 mx-auto px-6">
            <h2 class="md:text-2xl text-2xl font-bold tracking-wide uppercase">ABOUT FOUNDER</h2>

            <!-- Breadcrumbs -->
            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">About Founder</span>
            </nav>
        </div>
    </section>


    <!-- Pyare lal Hero Section -->
    <section class="bg-white py-16">
        <div class="md:px-14 px-4 mx-auto
              grid md:grid-cols-2 gap-10 items-stretch"><!-- items-stretch -->

            <!-- Left: Image + Text Overlay -->
            <div class="relative rounded-2xl overflow-hidden shadow-md h-full min-h-[380px]">
                <img src="{{ asset('uploads/images/organisation/pyarelal.png') }}" alt="Founder"
                    class="absolute inset-0 w-full h-full object-cover" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-6
                  flex flex-col justify-end">
                    <p class="text-orange-500 font-semibold text-sm mb-1">Meet Our Founder</p>
                    <h2 class="text-white text-2xl md:text-3xl font-bold mb-2">SH. PYARE LAL KAUL</h2>
                    <!--<p class="text-gray-200 text-sm leading-relaxed text-justify">-->
                    <!--    Lorem Ipsum is simply dummy text of the printing and typesetting-->
                    <!--    industry. Lorem Ipsum has been the industry's standard dummy text-->
                    <!--    ever since the 1500s, when an unknown printer took a galley of-->
                    <!--    type and scrambled it to make a type specimen book.-->
                    <!--</p>-->
                </div>


            </div>



            <!-- Right: Life Background Cards -->
            <div
                class="bg-gradient-to-b from-black to-[#1a1a1a] rounded-2xl text-white px-6 py-8
                h-full min-h-[380px] flex flex-col">
                <!-- h-full + min-h + flex -->
                <h3 class="text-center text-xl font-bold mb-8">LIFE BACKGROUND</h3>

                <div class="space-y-6 mt-auto mb-auto"><!-- centers list nicely if short -->
                    <!-- Point 1 -->
                    <div class="bg-white text-black rounded shadow p-4 flex items-start gap-4">
                        <div
                            class="bg-orange-500 text-white font-bold w-8 h-8 rounded-full flex items-center justify-center text-sm">
                            1</div>
                        <p class="text-sm">Was truly, even literally, J&amp;K State’s Socialist Stalwart.</p>
                    </div>
                    <!-- Point 2 -->
                    <div class="bg-white text-black rounded shadow p-4 flex items-start gap-4">
                        <div
                            class="bg-orange-500 text-white font-bold w-8 h-8 rounded-full flex items-center justify-center text-sm">
                            2</div>
                        <p class="text-sm">A fearless freedom fighter, intellectual par excellence.</p>
                    </div>
                    <!-- Point 3 -->
                    <div class="bg-white text-black rounded shadow p-4 flex items-start gap-4">
                        <div
                            class="bg-orange-500 text-white font-bold w-8 h-8 rounded-full flex items-center justify-center text-sm">
                            3</div>
                        <p class="text-sm">Jammu &amp; Kashmir’s top-most constitutional lawyer.</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-[#f8f8f8] py-16">
    <div class="md:px-14 px-4 mx-auto">
        <div class="flex flex-wrap justify-between items-end gap-4 mb-8">
            <div>
                <p class="text-orange-500 font-semibold uppercase tracking-wide text-sm">
                    Legacy & Archive
                </p>
                <h2 class="text-3xl font-bold text-gray-900">
                    Stories & Media Archive
                </h2>
                <p class="text-gray-600 mt-2 max-w-2xl">
                    A curated collection of newspaper reports, public records, and archival
                    stories connected to the life and work of Shri Pyare Lal Kaul.
                </p>
            </div>

            <a href="{{ route('founder-stories.index') }}"
               class="inline-flex items-center px-5 py-2 rounded-full border border-orange-400 text-orange-500 hover:bg-orange-50 transition">
                View All Stories
            </a>
        </div>

        @if(isset($stories) && $stories->count())
            <div class="mx-auto relative">
                <div class="swiper founderStoriesSwiper">
                    <div class="swiper-wrapper">
                        @foreach($stories as $story)
                            <div class="swiper-slide !h-auto">
                                <article class="h-full flex flex-col bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition duration-300 border border-gray-100">
                                    <a href="{{ route('founder-stories.show', $story->slug) }}" class="block">
                                        <div class="relative h-[200px] bg-gray-100 overflow-hidden">
                                            <img
                                                src="{{ asset('uploads/founder-stories/' . $story->story_image) }}"
                                                alt="{{ $story->title }}"
                                                class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                            >
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>

                                            @if($story->story_date)
                                                <span class="absolute top-4 left-4 bg-white/90 text-gray-900 text-xs font-semibold px-3 py-1 rounded-full">
                                                    {{ $story->story_date->format('d M Y') }}
                                                </span>
                                            @endif
                                        </div>
                                    </a>

                                    <div class="p-6 flex flex-col flex-grow">
                                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                                            <a href="{{ route('founder-stories.show', $story->slug) }}">
                                                {{ $story->title }}
                                            </a>
                                        </h3>

                                        @if($story->excerpt)
                                            <p class="text-gray-600 text-sm leading-6 mb-4 line-clamp-3 flex-grow">
                                                {{ $story->excerpt }}
                                            </p>
                                        @endif

                                        <a href="{{ route('founder-stories.show', $story->slug) }}"
                                           class="inline-flex items-center text-orange-500 font-semibold hover:text-orange-600 mt-auto">
                                            Read Story
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination mt-6"></div>
                </div>
            </div>
        @else
            <div class="bg-white rounded-2xl shadow p-8 text-center text-gray-500">
                Stories will be added soon.
            </div>
        @endif
    </div>
</section>

        <!--<div class="relative md:px-14 px-4  w-full py-6">-->
            <!-- Swiper Container -->
        <!--    <div class="swiper shambhooSwiper2">-->
        <!--        <div class="swiper-wrapper">-->
                    <!-- Slides -->


        <!--            <div class="swiper-slide mb-2">-->

        <!--                <div class="w-full max-w rounded-2xl overflow-hidden shadow-lg border border-transparent">-->
                            <!-- Image (replace src with your image path) -->
        <!--                    <div class="relative">-->
        <!--                        <img src="{{ asset('uploads/images/events/event3.png') }}" alt="mountains"-->
        <!--                            class="w-full h-48 object-cover" />-->
                                <!-- thin orange separator to mimic the design -->
        <!--                        <div class="absolute left-0 right-0 bottom-0 h-1 bg-orange-400"></div>-->
        <!--                    </div>-->

                            <!-- Card content -->
        <!--                    <div class="bg-white p-6 text-center">-->
        <!--                        <p class="text-xs uppercase text-amber-200 tracking-widest mb-2">travel</p>-->
        <!--                        <h1 class="font-serif text-2xl sm:text-3xl font-semibold text-gray-900 mb-3">-->
        <!--                            Mountains-->
        <!--                        </h1>-->

        <!--                        <p class="text-sm text-gray-600 leading-relaxed mb-6">-->
        <!--                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labor e fugit-->
        <!--                            facere numquam tempora eveniet repellat.-->
        <!--                        </p>-->

        <!--                        <button-->
        <!--                            class="inline-block px-6 py-2 border rounded-full border-orange-300 text-orange-500 text-sm font-medium hover:bg-orange-50 transition">-->
        <!--                            Read more-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->



        <!--            <div class="swiper-slide  mb-2">-->

        <!--                <div class="card-w w-full max-w rounded-2xl overflow-hidden shadow-lg border border-transparent">-->
                            <!-- Image (replace src with your image path) -->
        <!--                    <div class="relative">-->
        <!--                        <img src="{{ asset('uploads/plantation/p2.webp') }}" alt="mountains"-->
        <!--                            class="w-full h-48 object-cover" />-->
                                <!-- thin orange separator to mimic the design -->
        <!--                        <div class="absolute left-0 right-0 bottom-0 h-1 bg-orange-400"></div>-->
        <!--                    </div>-->

                            <!-- Card content -->
        <!--                    <div class="bg-white p-6 text-center">-->
        <!--                        <p class="text-xs uppercase text-amber-200 tracking-widest mb-2">travel</p>-->
        <!--                        <h1 class="font-serif text-2xl sm:text-3xl font-semibold text-gray-900 mb-3">-->
        <!--                            Mountains-->
        <!--                        </h1>-->

        <!--                        <p class="text-sm text-gray-600 leading-relaxed mb-6">-->
        <!--                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labor e fugit-->
        <!--                            facere numquam tempora eveniet repellat.-->
        <!--                        </p>-->

        <!--                        <button-->
        <!--                            class="inline-block px-6 py-2 border rounded-full border-orange-300 text-orange-500 text-sm font-medium hover:bg-orange-50 transition">-->
        <!--                            Read more-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->


        <!--            <div class="swiper-slide mb-2">-->

        <!--                <div class="card-w w-full max-w rounded-2xl overflow-hidden shadow-lg border border-transparent">-->
                            <!-- Image (replace src with your image path) -->
        <!--                    <div class="relative">-->
        <!--                        <img src="{{ asset('uploads/plantation/p3.webp') }}" alt="mountains"-->
        <!--                            class="w-full h-48 object-cover" />-->
                                <!-- thin orange separator to mimic the design -->
        <!--                        <div class="absolute left-0 right-0 bottom-0 h-1 bg-orange-400"></div>-->
        <!--                    </div>-->

                            <!-- Card content -->
        <!--                    <div class="bg-white p-6 text-center">-->
        <!--                        <p class="text-xs uppercase text-amber-200 tracking-widest mb-2">travel</p>-->
        <!--                        <h1 class="font-serif text-2xl sm:text-3xl font-semibold text-gray-900 mb-3">-->
        <!--                            Mountains-->
        <!--                        </h1>-->

        <!--                        <p class="text-sm text-gray-600 leading-relaxed mb-6">-->
        <!--                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labor e fugit-->
        <!--                            facere numquam tempora eveniet repellat.-->
        <!--                        </p>-->

        <!--                        <button-->
        <!--                            class="inline-block px-6 py-2 border rounded-full border-orange-300 text-orange-500 text-sm font-medium hover:bg-orange-50 transition">-->
        <!--                            Read more-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->



        <!--            <div class="swiper-slide mb-2">-->

        <!--                <div class="card-w w-full max-w rounded-2xl overflow-hidden shadow-lg border border-transparent">-->
                            <!-- Image (replace src with your image path) -->
        <!--                    <div class="relative">-->
        <!--                        <img src="{{ asset('uploads/plantation/p4.webp') }}" alt="mountains"-->
        <!--                            class="w-full h-48 object-cover" />-->
                                <!-- thin orange separator to mimic the design -->
        <!--                        <div class="absolute left-0 right-0 bottom-0 h-1 bg-orange-400"></div>-->
        <!--                    </div>-->

                            <!-- Card content -->
        <!--                    <div class="bg-white p-6 text-center">-->
        <!--                        <p class="text-xs uppercase text-amber-200 tracking-widest mb-2">travel</p>-->
        <!--                        <h1 class="font-serif text-2xl sm:text-3xl font-semibold text-gray-900 mb-3">-->
        <!--                            Mountains-->
        <!--                        </h1>-->

        <!--                        <p class="text-sm text-gray-600 leading-relaxed mb-6">-->
        <!--                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labor e fugit-->
        <!--                            facere numquam tempora eveniet repellat.-->
        <!--                        </p>-->

        <!--                        <button-->
        <!--                            class="inline-block px-6 py-2 border rounded-full border-orange-300 text-orange-500 text-sm font-medium hover:bg-orange-50 transition">-->
        <!--                            Read more-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->




        <!--            <div class="swiper-slide mb-2">-->

        <!--                <div class="card-w w-full max-w rounded-2xl overflow-hidden shadow-lg border border-transparent">-->
                            <!-- Image (replace src with your image path) -->
        <!--                    <div class="relative">-->
        <!--                        <img src="{{ asset('uploads/plantation/p4.webp') }}" alt="mountains"-->
        <!--                            class="w-full h-48 object-cover" />-->
                                <!-- thin orange separator to mimic the design -->
        <!--                        <div class="absolute left-0 right-0 bottom-0 h-1 bg-orange-400"></div>-->
        <!--                    </div>-->

                            <!-- Card content -->
        <!--                    <div class="bg-white p-6 text-center">-->
        <!--                        <p class="text-xs uppercase text-amber-200 tracking-widest mb-2">travel</p>-->
        <!--                        <h1 class="font-serif text-2xl sm:text-3xl font-semibold text-gray-900 mb-3">-->
        <!--                            Mountains-->
        <!--                        </h1>-->

        <!--                        <p class="text-sm text-gray-600 leading-relaxed mb-6">-->
        <!--                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labor e fugit-->
        <!--                            facere numquam tempora eveniet repellat.-->
        <!--                        </p>-->

        <!--                        <button-->
        <!--                            class="inline-block px-6 py-2 border rounded-full border-orange-300 text-orange-500 text-sm font-medium hover:bg-orange-50 transition">-->
        <!--                            Read more-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->


        <!--            <div class="swiper-slide mb-2">-->

        <!--                <div class="card-w w-full max-w rounded-2xl overflow-hidden shadow-lg border border-transparent">-->
                            <!-- Image (replace src with your image path) -->
        <!--                    <div class="relative">-->
        <!--                        <img src="{{ asset('uploads/plantation/p5.webp') }}" alt="mountains"-->
        <!--                            class="w-full h-48 object-cover" />-->
                                <!-- thin orange separator to mimic the design -->
        <!--                        <div class="absolute left-0 right-0 bottom-0 h-1 bg-orange-400"></div>-->
        <!--                    </div>-->

                            <!-- Card content -->
        <!--                    <div class="bg-white p-6 text-center">-->
        <!--                        <p class="text-xs uppercase text-amber-200 tracking-widest mb-2">travel</p>-->
        <!--                        <h1 class="font-serif text-2xl sm:text-3xl font-semibold text-gray-900 mb-3">-->
        <!--                            Mountains-->
        <!--                        </h1>-->

        <!--                        <p class="text-sm text-gray-600 leading-relaxed mb-6">-->
        <!--                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labor e fugit-->
        <!--                            facere numquam tempora eveniet repellat.-->
        <!--                        </p>-->

        <!--                        <button-->
        <!--                            class="inline-block px-6 py-2 border rounded-full border-orange-300 text-orange-500 text-sm font-medium hover:bg-orange-50 transition">-->
        <!--                            Read more-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->




        <!--            <div class="swiper-slide mb-2">-->

        <!--                <div class="card-w w-full max-w rounded-2xl overflow-hidden shadow-lg border border-transparent">-->
                            <!-- Image (replace src with your image path) -->
        <!--                    <div class="relative">-->
        <!--                        <img src="{{ asset('uploads/plantation/p6.webp') }}" alt="mountains"-->
        <!--                            class="w-full h-48 object-cover" />-->
                                <!-- thin orange separator to mimic the design -->
        <!--                        <div class="absolute left-0 right-0 bottom-0 h-1 bg-orange-400"></div>-->
        <!--                    </div>-->

                            <!-- Card content -->
        <!--                    <div class="bg-white p-6 text-center">-->
        <!--                        <p class="text-xs uppercase text-amber-200 tracking-widest mb-2">travel</p>-->
        <!--                        <h1 class="font-serif text-2xl sm:text-3xl font-semibold text-gray-900 mb-3">-->
        <!--                            Mountains-->
        <!--                        </h1>-->

        <!--                        <p class="text-sm text-gray-600 leading-relaxed mb-6">-->
        <!--                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labor e fugit-->
        <!--                            facere numquam tempora eveniet repellat.-->
        <!--                        </p>-->

        <!--                        <button-->
        <!--                            class="inline-block px-6 py-2 border rounded-full border-orange-300 text-orange-500 text-sm font-medium hover:bg-orange-50 transition">-->
        <!--                            Read more-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->


        <!--            <div class="swiper-slide mb-2">-->

        <!--                <div class="card-w w-full max-w rounded-2xl overflow-hidden shadow-lg border border-transparent">-->
                            <!-- Image (replace src with your image path) -->
        <!--                    <div class="relative">-->
        <!--                        <img src="{{ asset('uploads/plantation/p6.webp') }}" alt="mountains"-->
        <!--                            class="w-full h-48 object-cover" />-->
                                <!-- thin orange separator to mimic the design -->
        <!--                        <div class="absolute left-0 right-0 bottom-0 h-1 bg-orange-400"></div>-->
        <!--                    </div>-->

                            <!-- Card content -->
        <!--                    <div class="bg-white p-6 text-center">-->
        <!--                        <p class="text-xs uppercase text-amber-200 tracking-widest mb-2">travel</p>-->
        <!--                        <h1 class="font-serif text-2xl sm:text-3xl font-semibold text-gray-900 mb-3">-->
        <!--                            Mountains-->
        <!--                        </h1>-->

        <!--                        <p class="text-sm text-gray-600 leading-relaxed mb-6">-->
        <!--                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labor e fugit-->
        <!--                            facere numquam tempora eveniet repellat.-->
        <!--                        </p>-->

        <!--                        <button-->
        <!--                            class="inline-block px-6 py-2 border rounded-full border-orange-300 text-orange-500 text-sm font-medium hover:bg-orange-50 transition">-->
        <!--                            Read more-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

            <!-- Custom Arrows -->
        <!--    <div class="absolute md:px-14 px-4 left-0 top-1/2 transform -translate-y-1/2 z-10">-->
        <!--        <div-->
        <!--            class="swiper-button-prev-2 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">-->
        <!--            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"-->
        <!--                viewBox="0 0 24 24" stroke="currentColor">-->
        <!--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />-->
        <!--            </svg>-->
        <!--        </div>-->
        <!--    </div>-->

        <!--    <div class="absolute md:px-14 px-4 right-0 top-1/2 transform -translate-y-1/2 z-10">-->
        <!--        <div-->
        <!--            class="swiper-button-next-2 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">-->
        <!--            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"-->
        <!--                viewBox="0 0 24 24" stroke="currentColor">-->
        <!--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />-->
        <!--            </svg>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->



    </section>


    <!-- Kashmir Book section  -->
    <section class="bg-[#f8e7c4] py-10">
        <div class="md:mx-9 px-4 sm:px-6 lg:px-6">
            <div class="flex flex-col lg:flex-row items-center gap-10">
                <!-- Text -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-2xl md:text-3xl font-bold text-black mb-4">
                        FAMOUS BOOKS BY HIM
                    </h2>
                    <p class="text-sm text-black leading-relaxed text-justify">
                        Some of his prominent published books are “Kashmir War or peace”,
                        “Crisis in Kashmir”, “Kashmir Trail and Travail” and,
                        “Kashmir-Ke-Shab-e-Roz”. (This book was written in Urdu) His last
                        two books “Twenty Years in Exile” and “Fire and Fury” were left
                        incomplete.
                    </p>
                </div>

                <!-- Swiper on top for mobile -->
                <div class="w-full lg:w-1/2 order-1 lg:order-none">
                    <div class="relative w-full py-6">
                        <div class="swiper shambhooSwiper">
                            <div class="swiper-wrapper">
                                <!-- Slide -->

                                <div class="swiper-slide">
                                    <a href="{{ asset('uploads/images/books/book1.jpeg') }}" data-fancybox="books"
                                        data-caption="Project Rudra">
                                        <img src={{ asset('uploads/images/books/book1.jpeg') }} alt="Training 2"
                                            class="w-full h-[415px] md:h-[350px] rounded-md object-cover"
                                            loading="lazy" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">
                                    <a href="{{ asset('uploads/images/books/book2.jpeg') }}" data-fancybox="books"
                                        data-caption="Project Rudra">
                                        <img src={{ asset('uploads/images/books/book2.jpeg') }} alt="Training 2"
                                            class="w-full h-[415px] md:h-[350px] rounded-md object-cover"
                                            loading="lazy" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">
                                    <a href="{{ asset('uploads/images/books/book3.jpeg') }}" data-fancybox="books"
                                        data-caption="Project Rudra">
                                        <img src={{ asset('uploads/images/books/book3.jpeg') }} alt="Training 2"
                                            class="w-full h-[415px] md:h-[350px] rounded-md object-cover"
                                            loading="lazy" />
                                    </a>

                                </div>
                                
                               

                            </div>

                            <!-- Arrows -->
                            <div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Political section -->
    <section class="bg-white py-16">
        <div class="md:mx-9 px-4">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Political Background -->
                <div class="bg-gradient-to-b from-black to-[#1a1a1a] rounded-2xl text-white px-6 py-8">
                    <h3 class="text-center text-xl font-bold mb-8">
                        POLITICAL BACKGROUND
                    </h3>

                    <div class="space-y-6">
                        <!-- Point 1 -->
                        <div class="bg-white text-black rounded shadow p-4 relative">
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                                1
                            </div>
                            <p class="text-sm mt-4 text-center ">
                                Served as the General Secretary of Janata Party and Janata Dal
                                in state J&K with which India’s top socialist leaders like Jai
                                Prakash Narayan, Madhu Dandwate and Mr. Patwardhan were
                                associated.
                            </p>
                        </div>

                        <!-- Point 2 -->
                        <div class="bg-white text-black rounded shadow p-4 relative">
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                                2
                            </div>
                            <p class="text-sm mt-4 text-center">
                                Peasantry class party was headed by Chaudhary Charan Singh and
                                Pyare Lal Kaul was the Vice President of the party in the
                                State of J&K.
                            </p>
                        </div>

                        <!-- Point 3 -->
                        <div class="bg-white text-black rounded shadow p-4 relative">
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                                3
                            </div>
                            <p class="text-sm mt-4 text-center">
                                Founded his own party National struggle front in 1997.
                            </p>
                        </div>

                        <!-- Point 4 -->
                        <div class="bg-white text-black rounded shadow p-4 relative">
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                                4
                            </div>
                            <p class="text-sm mt-4 text-center">
                                Chairman of the joint council of Kashmiri Pandits in 2001.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Famous Court Cases -->
                <div class="bg-gradient-to-b from-black to-[#1a1a1a] rounded-2xl text-white px-6 py-8">
                    <h3 class="text-center text-xl font-bold mb-8">
                        FAMOUS COURT CASES
                    </h3>

                    <div class="space-y-6">
                        <!-- Point 1 -->
                        <div class="bg-white text-black rounded shadow p-4 relative">
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                                1
                            </div>
                            <p class="text-sm mt-4 text-center">
                                Filed a writ petition in the Supreme Court against the J&K
                                government praying for the scrapping of Article 370.
                            </p>
                        </div>

                        <!-- Point 2 -->
                        <div class="bg-white text-black rounded shadow p-4 relative">
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                                2
                            </div>
                            <p class="text-sm mt-4 text-center">
                                Ban on Vishwa Hindu Parishad in J&K.
                            </p>
                        </div>

                        <!-- Point 3 -->
                        <div class="bg-white text-black rounded shadow p-4 relative">
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                                3
                            </div>
                            <p class="text-sm mt-4 text-center">
                                PIL against Greater Autonomy of J&K state in the Supreme
                                Court.
                            </p>
                        </div>

                        <!-- Point 4 -->
                        <div class="bg-white text-black rounded shadow p-4 relative">
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                                4
                            </div>
                            <p class="text-sm mt-4 text-center">
                                Genocide of Kashmiri Pandit before National Human Right
                                Commission, Delhi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recognization and award -->
    <section class="bg-white py-16 -mt-16">
        <div class="md:mx-9 px-4">
            <div class="bg-gradient-to-b from-black to-[#1a1a1a] rounded-2xl text-white px-6 py-8">
                <h3 class="text-center text-xl font-bold mb-8">
                    RECOGNITION AND AWARDS
                </h3>

                <div class="space-y-6">
                    <!-- Award 1 -->
                    <div class="bg-white text-black rounded shadow p-4 relative">
                        <div
                            class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                            1
                        </div>
                        <p class="text-sm mt-4 text-center">
                            Shaheed Prem Nath Bhat Memorial Trust.
                        </p>
                    </div>

                    <!-- Award 2 -->
                    <div class="bg-white text-black rounded shadow p-4 relative">
                        <div
                            class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                            2
                        </div>
                        <p class="text-sm mt-4 text-center">
                            Fair and frank journalist award by CM of Delhi Sahib Singh
                            Verma.
                        </p>
                    </div>

                    <!-- Award 3 -->
                    <div class="bg-white text-black rounded shadow p-4 relative">
                        <div
                            class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                            3
                        </div>
                        <p class="text-sm mt-4 text-center">
                            A citation was given by Mr. P.L. Handoo (Law and parliamentary
                            affair minister J&K).
                        </p>
                    </div>

                    <!-- Award 4 -->
                    <div class="bg-white text-black rounded shadow p-4 relative">
                        <div
                            class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center text-xs">
                            4
                        </div>
                        <p class="text-sm mt-4 text-center">
                            Recognized by Kashmiri Samiti at the international Kashmiri
                            Pandit conference in Delhi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.founderStoriesSwiper', {
            loop: true,
            spaceBetween: 24,
            grabCursor: true,

            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },

            pagination: {
                el: '.founderStoriesSwiper .swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.founderStoriesSwiper .swiper-button-next',
                prevEl: '.founderStoriesSwiper .swiper-button-prev',
            },

            breakpoints: {
                0: {
                    slidesPerView: 1.2
                },
                640: {
                    slidesPerView: 1.2
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    });
</script>
@endsection
