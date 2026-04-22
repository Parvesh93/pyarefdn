
<section class="py-16 bg-gray-50">
  <div class="text-center mb-12">
    <!--<p class="text-sm text-gray-700 uppercase">Committed To Helping Our Society</p>-->
    <h2 class="font-heading text-2xl md:text-3xl font-extrabold text-gray-900">OUR FEATURED <span class="text-[#f59e0b]">PROJECTS</span></h2>

    <a href="{{ route('our-project')}}"
       class="inline-block mt-4 bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full text-sm font-semibold">
      Explore All Projects
    </a>
  </div>

  <div class="mx-auto px-4 md:px-14 relative">
    @isset($features)
   

<div class="swiper featuredSwiper pb-16 overflow-y-visible">
  <div class="swiper-wrapper">
    @foreach ($features as $feature)
      <div class="swiper-slide">
        <article
          class="bg-white rounded-2xl shadow-md overflow-hidden
                 grid  md:h-full h-full ">
          <!-- 1) Image (consistent aspect so all tops match) -->
          <div class="w-full aspect-[16/9] md:aspect-[4/3] overflow-hidden">
            <img src="{{ asset('uploads/feature/'.$feature->attach) }}"
                 alt="{{ $feature->title }}"
                 class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
          </div>

          <!-- 2) Content (grows to fill) -->
          <div class="p-6 text-center ">
            <h3 class="font-semibold text-lg leading-snug mb-2">
              {{ $feature->title }}
            </h3>
            <p class="text-sm text-gray-600 mb-0
                      line-clamp-4 md:line-clamp-5">
              {{ $feature->description }}
            </p>
          </div>

          <!-- 3) Actions (always at bottom, same height) -->
          <div class="px-6 pb-6">
            <div class="flex flex-col sm:flex-row gap-3">
              <a href="{{$feature->button_link }}"
                 class="flex-1 inline-flex items-center justify-center gap-2 px-5 py-2 rounded-full
                        bg-gray-900 text-white text-sm font-semibold hover:bg-gray-800">
                {{ $feature->button_more ?? 'READ MORE' }}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
              <a href="{{ route('donation-page') }}"
                 class="flex-1 inline-flex items-center justify-center gap-2 px-5 py-2 rounded-full
                        bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600">
                DONATE NOW
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </div>
        </article>
      </div>
    @endforeach
  </div>

        <!-- Custom Bottom Center Arrows -->
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-4 z-10">
          <!-- Prev Arrow -->
          <div class="swiper-button-prev-custom-feature w-9 h-9 rounded-full bg-[#F97316] flex items-center justify-center hover:bg-orange-600 transition">
            <svg xmlns="http://www.w3.org/2000/svg" style="width: 14px; height: 14px" fill="none" viewBox="0 0 24 24" stroke="white">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
            </svg>
          </div>
          <!-- Next Arrow -->
          <div class="swiper-button-next-custom-feature w-9 h-9 rounded-full bg-[#F97316] flex items-center justify-center hover:bg-orange-600 transition">
            <svg xmlns="http://www.w3.org/2000/svg" style="width: 14px; height: 14px" fill="none" viewBox="0 0 24 24" stroke="white">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>
      </div>
    @endisset
  </div>
</section>


   <style>
  /* Let each slide size to its content */
  .featuredSwiper .swiper-slide { height: auto; }
</style>


