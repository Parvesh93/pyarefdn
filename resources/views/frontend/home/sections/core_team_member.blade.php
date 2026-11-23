<section class="bg-white ">
    <div class="text-center mb-10">
        <p class="text-sm text-gray-600 uppercase">
            Committed To Helping Our Society
        </p>
        <h2 class="text-3xl md:text-4xl font-bold text-black">
            CORE TEAM MEMBERS
        </h2>
    </div>

    <div class="md:px-14 px-4 mx-auto px-4 relative">
        @isset($coreTeams)
            <div class="swiper pf-core-team-swiper pb-12 overflow-y-visible">
            <div class="swiper-wrapper">
                <!-- Card 1 -->
                @foreach ($coreTeams as $team)
                    <div class="swiper-slide">
                    <div class="relative overflow-hidden bg-black text-white rounded-md shadow-md">
                        <img src="{{ asset('uploads/core-team/'.$team->attach) }}" alt="Pushpa Thapliyal"
                            class="w-full md:h-[420px] h-[420px] object-cover opacity-90" />
                        <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t from-black/80 to-transparent w-full">
                            <h3 class="font-bold text-sm">{{$team->name}}</h3>
                            <p class="text-xs">{{$team->designation}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>

            <!-- Custom Bottom Center Arrows -->
            <div class="absolute  bottom-0 left-1/2 transform -translate-x-1/2 flex gap-3  z-10">
                <!-- Next Arrow (→) should be on the RIGHT -->
                <div
                    class="pf-core-team-next w-9 h-9 rounded-full bg-[#F97316] flex items-center justify-center hover:bg-orange-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 14px; height: 14px" fill="none"
                        viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
               
                <!-- Prev Arrow (←) should be on the LEFT -->
                <div
                    class="pf-core-team-prev w-9 h-9 rounded-full bg-[#F97316] flex items-center justify-center hover:bg-orange-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 14px; height: 14px" fill="none"
                        viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                    </svg>
                </div>

               
            </div>
        </div>
        @endisset
        
    </div>
</section>

<style>
.pf-about-org #ao-team .pf-core-team-swiper .swiper-slide>div{height:385px!important;border-radius:10px!important;background:#ece5e3!important;overflow:hidden}
.pf-about-org #ao-team .pf-core-team-swiper .swiper-slide img{height:100%!important;width:100%!important;object-fit:cover;object-position:center 25%}
.pf-about-org #ao-team .pf-core-team-swiper .swiper-slide>div>div:last-child{padding:25px 20px 18px!important}
.pf-about-org #ao-team .pf-core-team-swiper .swiper-slide h3{font-size:16px!important;font-weight:800}
.pf-about-org #ao-team .pf-core-team-swiper .swiper-slide p{font-size:12px!important;line-height:1.6}
.pf-about-org #ao-team .pf-core-team-next,.pf-about-org #ao-team .pf-core-team-prev{border-radius:50%!important;width:42px!important;height:42px!important;background:#f46226!important;cursor:pointer}
@media(max-width:767px){.pf-about-org #ao-team .pf-core-team-swiper .swiper-slide>div{height:345px!important}}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var element = document.querySelector('.pf-core-team-swiper');
  if (!element || typeof Swiper === 'undefined' || element.swiper) return;
  new Swiper(element, {
    slidesPerView: 1.15,
    spaceBetween: 16,
    watchOverflow: true,
    breakpoints: {
      0: { slidesPerView: 1.15, spaceBetween: 16 },
      640: { slidesPerView: 2, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 22 },
      1280: { slidesPerView: 4, spaceBetween: 22 }
    },
    navigation: { nextEl: '.pf-core-team-next', prevEl: '.pf-core-team-prev' }
  });
});
</script>