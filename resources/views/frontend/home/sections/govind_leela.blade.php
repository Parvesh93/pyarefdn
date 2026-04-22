<!--<section class="bg-[#f8f0df] py-16">-->
<!--        <div class="max-w-screen-xl mx-auto px-6">-->
<!--            <div class="grid md:grid-cols-2 gap-10 md:h-full">-->
                <!-- Image Grid -->
<!--                @isset($projectGovindImages)-->
<!--                    <div class="grid grid-cols-3 gap-4 self-stretch h-full">-->
<!--                        @foreach ($projectGovindImages as $govind)-->
<!--                            <img src={{ asset('uploads/gallery/'.$govind->attach) }}-->
<!--                        class="rounded-lg object-cover w-full h-full aspect-square" />-->
<!--                        @endforeach-->

<!--                    {{-- <img src={{ asset('uploads/images/events/govindleela1.png') }}-->
<!--                        class="rounded-lg object-cover w-full h-full aspect-square" />-->
<!--                    <img src={{ asset('uploads/images/events/govindleela2.png') }}-->
<!--                        class="rounded-lg object-cover w-full h-full aspect-square" />-->
<!--                    <img src={{ asset('uploads/images/events/govindleela3.png') }}-->
<!--                        class="rounded-lg object-cover w-full h-full aspect-square" />-->
<!--                    <img src={{ asset('uploads/images/events/govindleela4.png') }}-->
<!--                        class="rounded-lg object-cover w-full h-full aspect-square" />-->
<!--                    <img src={{ asset('uploads/images/events/project4.png') }}-->
<!--                        class="rounded-lg object-cover w-full h-full aspect-square" />-->
<!--                    <img src={{ asset('uploads/images/events/govindleela5.png') }}-->
<!--                        class="rounded-lg object-cover w-full h-full aspect-square" /> --}}-->
<!--                </div>-->
<!--                @endisset-->
                

                <!-- Text Content -->
<!--                <div class="flex flex-col justify-between self-stretch h-full">-->
<!--                    <div>-->
<!--                        <h2 class="text-2xl md:text-3xl font-bold text-black">-->
<!--                            Project Govind Leela-->
<!--                        </h2>-->
<!--                        <p class="text-orange-600 text-lg font-semibold mb-4">PHASE 1</p>-->
<!--                        <p class="text-gray-700 text-sm leading-relaxed mb-6 text-justify">-->
<!--                            This project has been initiated in remote villages of-->
<!--                            Uttarakhand to provide on ground solutions for health issues.-->
<!--                            The foundation has established two dispensaries in these-->
<!--                            villages for underprivileged and under reach section of the-->
<!--                            society. Project Govind Leela Medicines and preliminary-->
<!--                            healthcare check up and monitoring in far flung areas of-->
<!--                            Uttarakhand have helped local people to think health ways in-->
<!--                            positive manner. The health standards would be improved and a-->
<!--                            new renaissance would begin to take shape.-->
<!--                        </p>-->

                        <!-- Stats -->
<!--                        <div class="grid grid-cols-3 gap-4 mb-6">-->
<!--                            <div class="bg-white rounded-lg py-4 text-center">-->
<!--                                <p class="text-lg font-bold text-black">5+</p>-->
<!--                                <p class="text-sm text-gray-600">Dispensaries</p>-->
<!--                            </div>-->
<!--                            <div class="bg-white rounded-lg py-4 text-center">-->
<!--                                <p class="text-lg font-bold text-black">20+</p>-->
<!--                                <p class="text-sm text-gray-600">Villages</p>-->
<!--                            </div>-->
<!--                            <div class="bg-white rounded-lg py-4 text-center">-->
<!--                                <p class="text-lg font-bold text-black">6,000+</p>-->
<!--                                <p class="text-sm text-gray-600">Beneficiaries</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Buttons -->
<!--                    <div class="flex flex-col sm:flex-row gap-4">-->
<!--                        <a href="#"-->
<!--                            class="w-full sm:w-auto text-center bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-2 font-semibold rounded">-->
<!--                            READ MORE-->
<!--                        </a>-->
<!--                        <a href="{{route('donation-page')}}"-->
<!--                            class="w-full sm:w-auto text-center bg-[#0d0c38] hover:bg-[#1a1a4d] text-white px-6 py-2 font-semibold rounded">-->
<!--                            DONATE NOW-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    
    
<section class="bg-[#f8f0df] py-16 ">
  <div class="mx-auto px-4 md:px-14">
    <div class="grid md:grid-rows gap-5 md:h-full items-start">
      <!-- LEFT — refined image grid -->
      @isset($projectGovindImages)
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-5">
          @foreach ($projectGovindImages->take(6) as $govind)
            <figure class="rounded-2xl overflow-hidden bg-white shadow-sm ring-1 ring-black/5">
              <img
                src="{{ asset('uploads/gallery/'.$govind->attach) }}"
                alt=""
                loading="lazy"
                class="w-full h-[200px] object-cover aspect-[4/3] sm:aspect-square transition-transform duration-300 hover:scale-105"
              />
            </figure>
          @endforeach
        </div>
      @endisset

      <!-- RIGHT — content unchanged, just tidied styles -->
     
      
      
    </div>
    
     <div class="flex flex-col justify-start h-full mt-4">
        <div>
             <p class="text-orange-600 text-base md:text-xl font-semibold mb-1">Featured Project</p>
          <h2 class="font-heading text-2xl md:text-3xl font-extrabold text-gray-900 mb-4">
            PROJECT BHAIRAVI
          </h2>
          
          
          <div class="h-full w-full">
              <p class="text-gray-700 text-sm md:text-[15px] leading-relaxed mb-8 text-justify">
            Project Bhairavi is a community-driven initiative focused on improving women’s health, hygiene, and dignity, with a special emphasis on menstrual health awareness and access to essential hygiene resources. The project works at the grassroots level to educate women and girls about safe menstrual practices, address myths and taboos, and provide affordable or free sanitary products. Through training sessions, health checkups, and distribution camps, Project Bhairavi aims to empower women with knowledge, confidence, and the tools needed to lead healthier lives.
          </p>
          </div>
        </div>

        <!-- Buttons -->
        
        <div class="flex flex-col sm:flex-row gap-4 sm:pb-4 pb-1">
          <a href="{{route('our-project.project-bhairavi')}}"
             class="w-full sm:w-auto text-center rounded-full bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-2 font-semibold shadow-sm">
            READ MORE
          </a>
          <a href="{{ route('donation-page') }}"
             class="w-full sm:w-auto text-center rounded-full bg-[#0d0c38] hover:bg-[#1a1a4d] text-white px-6 py-2 font-semibold shadow-sm">
            DONATE NOW
          </a>
        </div>
        
      </div>
  </div>
</section>
