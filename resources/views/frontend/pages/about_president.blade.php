@section('title')
    President
@endsection @extends('frontend.layouts.master')
@section('content')
    <section class="relative py-6 bg-cover bg-center overflow-hidden text-white">
      <!-- Dark Overlay -->
        <div class="absolute inset-0 "></div>

        <!-- Grainy/Blur Texture Overlay -->
        <div class="absolute inset-0  mix-blend-overlay pointer-events-none  bg-[#0f1240]">
        </div>

        <!-- Content -->
        <div class="relative md:px-14 px-4 mx-auto px-6">
            <h2 class="md:text-2xl text-2xl font-bold tracking-wide uppercase">
                ABOUT PRESIDENT
            </h2>

            <!-- Breadcrumbs -->
            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i>
                <a href="{{ route('home') }}" class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">About President</span>
            </nav>
        </div>
    </section>

    <section class="relative bg-white pt-10 md:pt-16 pb-16">
        <!-- Background image + offwhite overlay -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image:url('{{ asset('uploads/focus/focus_bg.jpg') }}')"></div>
            <div class="absolute inset-0 bg-[#F7F4EC]/90"></div>
        </div>

        <!-- Section content -->
        <div data-animate class="relative z-10 px-6 md:px-10">
            <div class="md:mx-12 mx-4">
                <div class="flex flex-col md:flex-row overflow-hidden">
                    <!--Left Image (25%) -->
                    <div class="w-full md:w-1/3 my-3 rounded-2xl overflow-hidden">
                        <img src="{{ asset('uploads/images/organisation/president.jpg') }}" alt="Dr. Anjali Thapliyal Kaul"
                            class="w-[400px] h-auto object-contain rounded-2xl overflow-hidden bg-white" />
                    </div>

                    <!--Right Text Panel (75%) bg-[#ffe4a3] -->
                    <div
                        class="md:w-[900px] w-full bg-[#ffe4a3] md:rounded-2xl rounded-2xl my-3 bg-cover bg-center bg-no-repeat px-4 py-5 md:p-6 text-black">
                        <h4 class="text-xl font-bold text-orange-500 mb-2">
                            PRESIDENT & DIRECTOR
                        </h4>
                        <h1 class="text-2xl font-bold mb-4">DR ANJALI THAPLIYAL KAUL</h1>
                        <p class="text-[16px] leading-relaxed text-gray-900 text-justify">
                            She passed 10th and 12th from UP Board with first division. Under
                            the pressure of family, especially father, she pursued B.Sc (Bio)
                            but showed disinterest and passed unexpectedly with second division.
                            In order to live with an open mind, she pursued Master’s in History,
                            showed the calibre with Gold Medal Degree. M.Phil. with Gender
                            expertise again gave her a Gold Medal with Governor’s excellence
                            award.
                            <br /><br />
                            She achieved Doctorate in short span through her aptitude and
                            confidence. With M.Phil. and Ph.D., she generated interest in
                            research, it took the level of Post-Doctoral to newer heights from
                            India’s top institutions of History and Social Sciences (ICHR and ICSSR).
                            <br /><br />
                            She is the President and Director of Pyare Foundation through her
                            skilled potential. She said, “I want to make the world beautiful by
                            contributing my money, energy and values for holistic health. I feel
                            proud and blessed when I think about my journey in the social
                            field”.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Award and Recognitions -->
    @include('frontend.home.sections.award_recognitions')

    <!-- About president section -->
    <!--<section class="bg-white py-14">-->

    <!--</section>-->

    <!-- About president section -->
    <!-- About president section -->
    <!--<section class="bg-white py-16">-->
    <!--  <div class="md:mx-9 px-4">-->
    <!--    <div class="flex flex-col md:flex-row rounded-2xl overflow-hidden shadow-lg ring-1 ring-black/5">-->
    <!-- LEFT: Small fixed portrait -->
    <!--      <figure class="w-full md:w-[260px] md:flex-none relative bg-[#11144a]">-->
    <!--        <img-->
    <!--          src="{{ asset('uploads/images/organisation/president.jpg') }}"-->
    <!--          alt="Dr. Anjali Thapliyal Kaul"-->
    <!--          class="w-full h-56 md:h-full object-cover"-->
    <!--          loading="lazy" decoding="async"-->
    <!--        />-->
    <!--      </figure>-->

    <!-- RIGHT: Text panel -->
    <!--      <div-->
    <!--        class="flex-1 relative bg-[#ffe4a3] bg-cover bg-center bg-no-repeat p-6 md:p-10 text-black"-->
    <!--        style="background-image:url('{{ asset('uploads/images/organisation/projectbackgroundImg.png') }}')"-->
    <!--      >-->
    <!--        <div class="absolute inset-0 bg-white/35"></div>-->

    <!--        <div class="relative bg-white/70 backdrop-blur-md rounded-xl p-6 md:p-8 shadow-md ring-1 ring-black/5">-->
    <!--          <div class="flex flex-wrap items-center gap-3 mb-4">-->
    <!--            <h2 class="text-2xl font-bold">DR ANJALI THAPLIYAL KAUL</h2>-->
    <!--            <span class="inline-flex items-center gap-2 text-[11px] font-semibold px-2.5 py-1 rounded-md bg-[#11144a] text-white">-->
    <!--              PRESIDENT &amp; DIRECTOR-->
    <!--            </span>-->
    <!--          </div>-->

    <!--          <blockquote class="relative ps-8 border-s-4 border-amber-500/70 text-[15px] leading-relaxed text-gray-900 mb-6">-->
    <!--            I want to make the world beautiful by contributing my money, energy and values for holistic health.-->
    <!--            <footer class="mt-2 text-xs text-gray-600">— Dr. Anjali Thapliyal Kaul</footer>-->
    <!--          </blockquote>-->

    <!-- DESCRIPTION -->
    <!--          <div class="lg:columns-2 lg:gap-10 text-[15px] leading-7 text-gray-800 text-justify">-->
    <!--            <p class="mb-4">-->
    <!--              She passed 10th and 12th from UP Board with first division. Under the pressure of family, especially father,-->
    <!--              she pursued B.Sc (Bio) but showed disinterest and passed unexpectedly with second division. In order to live-->
    <!--              with an open mind, she pursued Master’s in History, showed the calibre with Gold Medal Degree. M.Phil. with-->
    <!--              Gender expertise again gave her a Gold Medal with Governor’s excellence award.-->
    <!--            </p>-->
    <!--            <p class="mb-4">-->
    <!--              She achieved Doctorate in short span through her aptitude and confidence. With M.Phil. and Ph.D., she generated-->
    <!--              interest in research, it took the level of Post-Doctoral to newer heights from India’s top institutions of-->
    <!--              History and Social Sciences...-->
    <!--            </p>-->
    <!--            <p class="mb-0">-->
    <!--              She is the President and Director of Pyare Foundation through her skilled potential. She said, “I want to make-->
    <!--              the world beautiful by contributing my money, energy and values for holistic health. I feel proud and blessed-->
    <!--              when I think about my journey in the social field”.-->
    <!--            </p>-->
    <!--          </div>-->

    <!--          <div class="mt-6 flex flex-wrap gap-3">-->
    <!--            <a href="#awards" class="inline-flex items-center text-xs font-semibold px-3 py-2 rounded-md bg-amber-500 text-white hover:opacity-95 transition">-->
    <!--              View Awards-->
    <!--            </a>-->
    <!--            <a href="#vision" class="inline-flex items-center text-xs font-semibold px-3 py-2 rounded-md bg-[#11144a] text-white hover:opacity-95 transition">-->
    <!--              Read Vision-->
    <!--            </a>-->
    <!--          </div>-->
    <!--        </div>-->

    <!--        <div class="absolute inset-x-0 bottom-0 h-10 bg-gradient-to-t from-black/10 to-transparent pointer-events-none"></div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
@endsection
