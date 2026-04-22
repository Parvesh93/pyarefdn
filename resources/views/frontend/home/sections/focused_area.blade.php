<!-- Our Focused Area -->
<!--<section class="bg-white pt-20">-->
<!--    <div class="max-w-screen-xl mx-auto px-6 md:px-10">-->
<!--        <div class="text-center mb-10">-->
<!--            <p class="text-sm text-gray-700 uppercase">-->
<!--                Committed To Helping Our Society-->
<!--            </p>-->
<!--            <h2 class="text-3xl md:text-4xl font-bold text-black">-->
<!--                OUR FOCUSED AREAS-->
<!--            </h2>-->
<!--        </div>-->
<!--        @isset($focuses)-->
<!--            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-0">-->
            <!-- Card 1 -->
<!--            @foreach ($focuses as $focus)-->
<!--                <div class="relative rounded overflow-hidden group h-[300px]">-->
<!--                    <img src={{ asset('uploads/focus/' . $focus->attach) }}-->
<!--                        class="absolute inset-0 w-full h-full object-cover" />-->
<!--                    <div class="absolute inset-0 bg-{{ $focus->bg_color }}/30 group-hover:bg-{{ $focus->bg_color }}/40 transition"></div>-->
<!--                    <div class="relative z-10 text-white p-6 flex flex-col justify-end h-full">-->
<!--                        <h3 class="text-lg font-bold mb-1">{{ $focus->title }}</h3>-->
<!--                        <p class="text-[15px] mb-2">-->
<!--                            {{ $focus->description }}-->
<!--                        </p>-->
<!--                        <a href="#"-->
<!--                            class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-5 py-2 rounded-full text-sm font-semibold">{{$focus->heading}}</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            @endforeach-->

<!--            {{-- <!-- Card 2 -->-->
<!--            <div class="relative rounded overflow-hidden group h-[300px]">-->
<!--                <img src={{ asset('uploads/images/events/project2.png') }}-->
<!--                    class="absolute inset-0 w-full h-full object-cover" />-->
<!--                <div class="absolute inset-0 bg-[#003366]/30 group-hover:bg-[#003366]/40 transition"></div>-->
<!--                <div class="relative z-10 text-white p-6 flex flex-col justify-end h-full">-->
<!--                    <h3 class="text-lg font-bold mb-1">EDUCATION</h3>-->
<!--                    <p class="text-[15px] mb-4">-->
<!--                        Empowering children through learning initiatives.-->
<!--                    </p>-->
<!--                    <a href="#"-->
<!--                        class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-5 py-2 rounded-full text-sm font-semibold">EXPLORE-->
<!--                        PROJECT</a>-->
<!--                </div>-->
<!--            </div>-->
            <!-- Card 3 -->
<!--            <div class="relative rounded overflow-hidden group h-[300px]">-->
<!--                <img src={{ asset('uploads/images/events/project1.png') }}-->
<!--                    class="absolute inset-0 w-full h-full object-cover" />-->
<!--                <div class="absolute inset-0 bg-[#006400]/30 group-hover:bg-[#006400]/40 transition"></div>-->
<!--                <div class="relative z-10 text-white p-6 flex flex-col justify-end h-full">-->
<!--                    <h3 class="text-lg font-bold mb-1">ENVIRONMENT</h3>-->
<!--                    <p class="text-[15px] mb-4">-->
<!--                        Driving change via plantation and water to birds.-->
<!--                    </p>-->
<!--                    <a href="#"-->
<!--                        class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-5 py-2 rounded-full text-sm font-semibold">EXPLORE-->
<!--                        PROJECT</a>-->
<!--                </div>-->
<!--            </div> --}}-->
<!--        </div>-->
<!--        @endisset-->
        
<!--    </div>-->
<!--</section>-->

<!-- OUR FOCUSED AREAS -->
<section class="relative bg-white  pt-10 md:pt-20 pb-20">
  <!-- Background image + offwhite overlay -->
  <div class="absolute inset-0">
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image:url('{{ asset('uploads/focus/focus_bg.jpg') }}')"></div>
    <div class="absolute inset-0 bg-[#F7F4EC]/90"></div>
  </div>

  <!-- Section content -->
  <div data-animate class="relative z-10 mx-auto px-4 md:px-14">
    <div class="text-center mb-10">
      <!--<p class="text-sm text-gray-700 uppercase">Committed To Helping Our Society</p>-->
     <h2 class="font-heading text-2xl md:text-3xl font-extrabold text-gray-900">OUR FOCUSED <span class="text-[#f59e0b]">AREAS</span></h2>
    </div>

    @php
      // Fallback demo data if $focuses is empty
      $demo = [
        ['title'=>'Become a Volunteer','description'=>'Join your hand with us for a better life and beautiful future','btn'=>'Register Now','scheme'=>'light','icon'=>asset('uploads/focus/icons/volunteer.svg')],
        ['title'=>'Give Donation','description'=>'Help thousands of children to get their primary education','btn'=>'Donate Now','scheme'=>'dark','icon'=>asset('uploads/focus/icons/donation.svg')],
        ['title'=>'Give Scholarship','description'=>'Consider a gift to central scholarship to help pay for college','btn'=>'Learn More','scheme'=>'brand','icon'=>asset('uploads/focus/icons/scholarship.svg')],
      ];

      $items = isset($focuses) && count($focuses) ? $focuses : $demo;

      $schemes = [
        'light' => [
          'card' => 'bg-[#F5F5F5] text-[#111827]',
          'pill' => 'bg-[#F97316] text-white hover:bg-[#ea580c]',
          'ring' => 'ring-[#F97316]/20',
        ],
        'dark' => [
          'card' => 'bg-[#0B0D17] text-white',
          'pill' => 'bg-white text-[#0B0D17] hover:bg-gray-100',
          'ring' => 'ring-white/20',
        ],
        'brand' => [
          'card' => 'bg-[#F59E0B] text-white',
          'pill' => 'bg-white text-[#0B0D17] hover:bg-gray-100',
          'ring' => 'ring-white/20',
        ],
      ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-3  gap-6">
      @foreach ($items as $i => $focus)
        @php
          $schemeKey = $focus['scheme'] ?? $focus->scheme ?? (['light','dark','brand'][$i % 3]);
          $S = $schemes[$schemeKey] ?? $schemes['light'];
          $cardClasses = $S['card'] . ' rounded-xl p-8 md:p-10 shadow-sm flex flex-col items-center text-center min-h-[260px] transition hover:-translate-y-0.5 hover:shadow-md';
        @endphp

        <div class="{{ $cardClasses }}">
          @php $icon = $focus['icon'] ?? $focus->icon ?? null; @endphp
          <div class="w-12 h-12 rounded-full bg-white/15 flex items-center justify-center ring-1 {{ $S['ring'] }} mb-4">
            @if($icon)
              <img src="{{ $icon }}" alt="" class="w-6 h-6 object-contain">
            @else
              <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                      d="M12 6v12m6-6H6"/>
              </svg>
            @endif
          </div>

          <h3 class="text-lg md:text-xl font-semibold mb-1">
            {{ $focus['title'] ?? $focus->title }}
          </h3>

          <p class="text-sm opacity-90 leading-relaxed max-w-[30ch] mb-5">
            {{ $focus['description'] ?? $focus->description }}
          </p>

          <a href="{{ route('our-project')}}"
             class="inline-flex items-center justify-center px-5 py-2 rounded-full text-sm font-semibold {{ $S['pill'] }}">
            {{ $focus['btn'] ?? $focus->heading ?? 'Explore' }}
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>


