<section class="pt-2 pb-12 bg-white">
  <div class="text-center mb-10">
    <!--<p class="font-body text-sm text-gray-700 uppercase">Committed To Helping Our Society</p>-->
    <h2 class="font-heading text-2xl md:text-3xl font-extrabold text-gray-900">
            IN NEWS & <span class="text-[#f59e0b]">MEDIA</span>
        </h2>
  </div>

  <div class="mx-auto px-4 md:px-14 relative">
    @isset($news)
    <div class="swiper mediaSwiper pb-14 overflow-y-visible">
      <div class="swiper-wrapper">
        @foreach ($news as $new)
          <div class="swiper-slide">
            <!-- HREF should be the ORIGINAL image -->
            <a href="{{ asset('uploads/news/' . $new->attach) }}"
               data-fancybox="news-gallery"
               data-caption="{{ $new->title }}">
              <!-- Thumbnail for slider only (can be cover) -->
              <img
                src="{{ asset('uploads/news/' . $new->attach) }}"
                alt="{{ $new->title }}"
                class="w-full h-[400px] md:h-[450px] object-cover rounded-xl border-2 border-blue-600 shadow-md"
                loading="lazy"
              />
            </a>
          </div>
        @endforeach
      </div>

      <!-- Bottom center arrows -->
      <div class="absolute bottom-0 left-1/2 -translate-x-1/2 flex space-x-4 z-10">
        <div class="swiper-button-prev-custom-news w-9 h-9 rounded-full bg-[#F97316] flex items-center justify-center hover:bg-orange-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M15 19l-7-7 7-7"/>
          </svg>
        </div>
        <div class="swiper-button-next-custom-news w-9 h-9 rounded-full bg-[#F97316] flex items-center justify-center hover:bg-orange-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M9 5l7 7-7 7"/>
          </svg>
        </div>
      </div>
    </div>
    @endisset
  </div>
</section>






<script>
  // Swiper
  new Swiper('.mediaSwiper', {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 1,
    breakpoints: {
      640:  { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    },
    navigation: {
      nextEl: '.swiper-button-next-custom-news',
      prevEl: '.swiper-button-prev-custom-news'
    }
  });

  // Fancybox: default behavior already fits image.
  // The CSS above ensures no global img styles force fixed sizes.
  Fancybox.bind('[data-fancybox="news-gallery"]', {
    // helpful viewing tweaks
    contentClick: "toggleZoom",  // click toggles zoom
    dragToClose: true
  });
</script>


