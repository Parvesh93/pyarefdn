<!-- advisory Board -->
<section class="pt-12 mb-12 bg-white">
    <div class="text-center mb-10">
        <!--<p class="text-sm text-gray-600 uppercase">-->
        <!--    Committed To Helping Our Society-->
        <!--</p>-->
        <h2 class="font-heading text-2xl md:text-3xl font-extrabold text-gray-900">
            ADVISORY <span class="text-[#f59e0b]">BOARD</span>
        </h2>
    </div>

    <div class="mx-auto px-4 md:px-14 mb-2 relative">
        @isset($advisories)
          <div class="swiper advisorySwiper pb-14 overflow-y-visible">
            <div class="swiper-wrapper">
                @foreach ($advisories as $advisory)
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden bg-black text-white rounded-md shadow-md">
                            <img src="{{ asset('uploads/advisory/' . $advisory->attach) }}" alt="{{ $advisory->name }}"
                                class="w-full md:h-[450px] h-[420px] object-cover opacity-90" />
                            <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t from-black/80 to-transparent w-full">
                                <h3 class="font-bold text-sm">{{ $advisory->name }}</h3>
                                <p class="text-xs">{{ $advisory->designation }}</p>
                                <p class="text-[11px]">
                                    {{ $advisory->organization }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>

            <!-- Custom Bottom Center Arrows -->
    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-4 z-10">
               



               <!-- Bottom Center Arrows -->
<div class="absolute bottom-0 left-1/2 -translate-x-1/2 flex space-x-4 z-10">

  <!-- Prev (left) -->
  <div class="swiper-button-prev-custom-adviser w-9 h-9 rounded-full bg-[#F97316] flex items-center justify-center hover:bg-orange-600 transition">
    <svg xmlns="http://www.w3.org/2000/svg" style="width:14px;height:14px" fill="none" viewBox="0 0 24 24" stroke="white">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
    </svg>
  </div>

  <!-- Next (right) -->
  <div class="swiper-button-next-custom-adviser w-9 h-9 rounded-full bg-[#F97316] flex items-center justify-center hover:bg-orange-600 transition">
    <svg xmlns="http://www.w3.org/2000/svg" style="width:14px;height:14px" fill="none" viewBox="0 0 24 24" stroke="white">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
    </svg>
  </div>
</div>
            </div>
        </div>
            
        @endisset
        
    </div>
</section>
