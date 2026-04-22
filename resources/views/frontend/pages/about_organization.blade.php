@section('title')
    About
@endsection

@extends('frontend.layouts.master')

@section('content')
    <section class="relative py-6 bg-cover bg-center overflow-hidden text-white">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 "></div>

        <!-- Grainy/Blur Texture Overlay -->
        <div class="absolute inset-0  mix-blend-overlay pointer-events-none  bg-[#0f1240]">
        </div>

        <!-- Content -->
        <div class="relative md:px-8 px-4 md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold tracking-wide uppercase">ABOUT ORGANISATION</h2>

            <!-- Breadcrumbs -->
            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">About Organisation</span>
            </nav>
        </div>
    </section>



    <!-- Hero section -->
    <!--<section class="py-12 bg-white">-->
    <!--    <div class="max-w-screen-xl mx-auto px-6">-->
    <!--        <div class="relative rounded-2xl overflow-hidden">-->
    <!-- Responsive Image Height -->
    <!--            <img src={{ asset('uploads/images/organisation/aboutus.png') }} alt="About Us"-->
    <!--                class="w-full h-[220px] sm:h-[300px] md:h-[400px] lg:h-[500px] object-cover object-center" />-->

    <!-- Gradient Overlay -->
    <!--            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>-->

    <!-- Text Overlay -->
    <!--            <div class="absolute bottom-6 left-6">-->
    <!--                <h2 class="text-white text-2xl sm:text-3xl font-bold">ABOUT US</h2>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- intruduction Section -->
    <!--<section class="py-12 bg-white">-->
    <!--    <div class="md:px-8 px-4 mx-auto px-6">-->
    <!--        <div class="flex flex-col lg:flex-row rounded-2xl overflow-hidden">-->
    <!-- Left Image -->
    <!--            <div class="w-full lg:w-1/2">-->
    <!--                <img src={{ asset('uploads/images/events/aboutUsI.png') }} alt="Introduction"-->
    <!--                    class="w-full h-full object-cover" />-->
    <!--            </div>-->

    <!-- Right Text Section with background / bg-[url('/images/organisation/projectbackgroundImg.png')] -->
    <!--            <div class="w-full lg:w-1/2 bg-[#ffe4a3] bg-cover bg-center px-6 py-8 text-black">-->
    <!-- INTRODUCTION -->
    <!--                <h2 class="text-2xl font-bold mb-4">INTRODUCTION</h2>-->
    <!--                <p class="text-sm mb-8 leading-relaxed text-justify">-->
    <!--                    Pyare Foundation is a multi dimensional group in the sector of-->
    <!--                    human service and knowledge concern to represent and present-->
    <!--                    skills, methods, procedure and approach that are primarily tailor-->
    <!--                    made to fill the gaps of realignment/ delinquency. This group has-->
    <!--                    experience to furnish the rights of self actualization and-->
    <!--                    realization. The services would follow till shadow is removed and-->
    <!--                    light transcends through written, psychological, presentable and-->
    <!--                    consented manner. The foundation is equipped with latest and-->
    <!--                    finest tools to overcome the difficulty in being geared and linked-->
    <!--                    up to make the difference count towards the realistic change. This-->
    <!--                    change is the utility or suitability through the honed skills to-->
    <!--                    realize dream, drive, ambition and objective. The educated values-->
    <!--                    inculcated with practical character enable opportunity, justice,-->
    <!--                    recourse and discourse to be dutiful & momentous in small but sure-->
    <!--                    means.-->
    <!--                </p>-->

    <!-- VISION -->
    <!--                <h2 class="text-2xl font-bold mb-4">VISION</h2>-->
    <!--                <p class="text-sm leading-relaxed text-justify">-->
    <!--                    Pyare foundation will support the system of care cure and heal for-->
    <!--                    perfect health by standards, parameters and gradients that are-->
    <!--                    universally scientifically and technologically accepted.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <section class="py-12 bg-white">
        <div class="px-4 mx-auto px-6 md:px-14">
            <div class="grid lg:grid-cols-2 rounded-2xl overflow-hidden shadow-sm ring-1 ring-black/5">
                <!-- Left: Image (edge-to-edge) -->
                <figure class="relative h-72 sm:h-96 lg:h-auto">
                    <img src="{{ asset('uploads/images/organisation/about_organization.jpeg') }}" alt="Introduction"
                        class="absolute inset-0 w-full h-full object-cover" />
                    <!-- subtle gradient for text contrast on mobile -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent lg:from-transparent"></div>
                </figure>

                <!-- Right: Pattern + glass card -->
                <div class="relative bg-[#ffe4a3] bg-cover bg-center p-6 sm:p-8"
                    style="background-image:url('{{ asset('uploads/images/organisation/projectbackgroundImg.png') }}')">
                    <!-- soft overlay to tame the pattern -->
                    <div class="absolute inset-0 bg-white/30"></div>

                    <!-- inner glass card -->
                    <div class="relative bg-white/65 backdrop-blur-md rounded-xl p-6 sm:p-8 shadow-md ring-1 ring-black/5">
                        <!-- INTRODUCTION -->
                        <div class="mb-8">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="inline-grid place-items-center w-9 h-9 rounded-lg bg-amber-500 text-white">
                                    <!-- book-open icon -->
                                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path
                                            d="M3 4h7a4 4 0 0 1 4 4v12H7a4 4 0 0 0-4-4V4zM21 4h-7a4 4 0 0 0-4 4v12h7a4 4 0 0 1 4-4V4z" />
                                    </svg>
                                </span>
                                <h2 class="text-xl sm:text-2xl font-bold">INTRODUCTION</h2>
                            </div>

                            <p class="text-[15px] leading-relaxed text-gray-800 text-justify md:columns-2 md:gap-8">
                                Pyare Foundation is a multi dimensional group in the sector of human service and knowledge
                                concern
                                to represent and present skills, methods, procedure and approach that are primarily tailor
                                made to fill
                                the gaps of realignment/ delinquency. This group has experience to furnish the rights of
                                self actualization
                                and realization. The services would follow till shadow is removed and light transcends
                                through written,
                                psychological, presentable and consented manner. The foundation is equipped with latest and
                                finest tools
                                to overcome the difficulty in being geared and linked up to make the difference count
                                towards the realistic change.
                                This change is the utility or suitability through the honed skills to realize dream, drive,
                                ambition and objective.
                                The educated values inculcated with practical character enable opportunity, justice,
                                recourse and discourse
                                to be dutiful & momentous in small but sure means.
                            </p>
                        </div>

                        <hr class="border-amber-500/20 my-3">

                        <!-- VISION -->
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <span class="inline-grid place-items-center w-9 h-9 rounded-lg bg-indigo-600 text-white">
                                    <!-- eye icon -->
                                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </span>
                                <h2 class="text-xl sm:text-2xl font-bold">VISION</h2>
                            </div>

                            <p class="text-[15px] leading-relaxed text-gray-800 text-justify">
                                Pyare foundation will support the system of care cure and heal for perfect health by
                                standards,
                                parameters and gradients that are universally scientifically and technologically accepted.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section cards -->
    @include('frontend.home.sections.cta_section')

    <!-- Award and Recognitions -->
    @include('frontend.home.sections.award_recognitions')

    <!-- Core Team member -->
    @include('frontend.home.sections.core_team_member')


    <!-- Advisory Board -->
    @include('frontend.home.sections.advisory')
@endsection
