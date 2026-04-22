@section('title')
Project description
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl mx-auto px-6">
            <h2 class="md:text-2xl text-2xl font-bold">PROJECTS</h2>
            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Projects</span>
            </nav>
        </div>
    </section>


    <!-- Our Programs -->
    <section class="bg-white py-16">
        <div class="max-w-screen-xl mx-auto px-4 space-y-12">

            @foreach ($projects as $project)
                <div class="flex flex-col md:flex-row{{ @$project->attribute }} items-center gap-8">
                    <img src={{ asset('uploads/project/' . $project->attach) }}
                        class="w-full md:w-1/2 h-64 object-cover rounded" />
                    <div class="md:w-1/2">
                        <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                        <p class="text-sm  text-justify">
                            {!! strip_tags($project->description, '<p><br><strong><em><ul><ol><li>') !!}

                        </p>
                        <p class="mb-6"><span class="block my-2">{{ $project->sub_title }}</span></p>
                        <a href="{{$project->button_more}}"
                            class="px-4 py-2 mt-3 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
                            MORE
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- Program Block -->
            {{-- <div class="flex flex-col md:flex-row items-center gap-8">
        <img src={{asset('uploads/images/events/img1.png')}} class="w-full md:w-1/2 h-64 object-cover rounded" />
        <div class="md:w-1/2">
          <h3 class="text-xl font-semibold mb-2">Plantation Drive</h3>
          <p class="text-sm mb-4 text-justify">
            Pyare Foundation with Hindustan Scout Guides took an initiative of
            planting and maintaining 5000 plants till 2022. The initiative is
            expanding to various areas day by day.
            <span class="block mt-2">Join us in our mission to create a greener and more sustainable
              future for generations to come.</span>
          </p>
          <a href="#" class="px-4 py-2 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
            MORE</a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row-reverse items-center gap-8">
        <img src={{asset('uploads/images/events/dca713e2bb29968b544f053e2a87a59e2fd76620.png')}}
          class="w-full md:w-1/2 h-64 object-cover rounded" />
        <div class="md:w-1/2">
          <h3 class="text-xl font-semibold mb-2">Avadhoot Bal Seva Kendra</h3>
          <p class="text-sm mb-4 text-justify">
            Pyare Foundation initiated a program "Avadhoot Bal Seva Kendra"
            for 3 months from October 2021 to December 2021. The program was
            for overall development of children.
            <span class="block mt-2">Empowering children with knowledge, skills, and values to build
              a brighter tomorrow.</span>
          </p>
          <a href="#" class="px-4 py-2 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
            MORE</a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row items-center gap-8">
        <img src={{asset('uploads/images/events/event1.png')}} class="w-full md:w-1/2 h-64 object-cover rounded" />
        <div class="md:w-1/2">
          <h3 class="text-xl font-semibold mb-2">Project Rudra</h3>
          <p class="text-sm mb-4 text-justify">
            We are reviving ancient POND (KUND) and sculptures in Uttarakhand
            near Omkareshwar Temple of Ukhimath, that needs urgent
            rejuvenation.
            <span class="block mt-2">Preserving our cultural heritage and traditional water
              conservation methods for future generations.</span>
          </p>
          <a href="#" class="px-4 py-2 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
            MORE</a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row-reverse items-center gap-8">
        <img src={{asset('uploads/images/events/project5.png')}} class="w-full md:w-1/2 h-64 object-cover rounded" />
        <div class="md:w-1/2">
          <h3 class="text-xl font-semibold mb-2">
            Pradhan Mantri Jan Aushadhi Kendra
          </h3>
          <p class="text-sm mb-4 text-justify">
            Inaugurated in Ukhimath block, Rudraprayag. Celebrated PM Jan
            Aushadhi Diwas on 7th March 2020.
            <span class="block mt-2">Making quality medicines accessible and affordable for all
              sections of society.</span>
          </p>
          <a href="#" class="px-4 py-2 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
            MORE</a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row items-center gap-8">
        <img src={{asset('uploads/images/events/img1.png')}} class="w-full md:w-1/2 h-64 object-cover rounded" />
        <div class="md:w-1/2">
          <h3 class="text-xl font-semibold mb-2">Project Govind Leela</h3>
          <p class="text-sm mb-4 text-justify">
            This project was initiated in remote villages of Uttarakhand for
            ground health solutions. Two dispensaries were established.
            <span class="block mt-2">Bringing healthcare services to the doorstep of remote village
              communities.</span>
          </p>
          <a href="#" class="px-4 py-2 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
            MORE</a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row-reverse items-center gap-8">
        <img src={{asset('uploads/images/events/project5.png')}} class="w-full md:w-1/2 h-64 object-cover rounded" />
        <div class="md:w-1/2">
          <h3 class="text-xl font-semibold mb-2">
            Workshop on Female Health and Hygiene
          </h3>
          <p class="text-sm mb-4 text-justify">
            Designed to discuss and reach consensus for female health issues
            and concerns.
            <span class="block mt-2">Empowering women through education and awareness about health
              and hygiene practices.</span>
          </p>
          <a href="#" class="px-4 py-2 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
            MORE</a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row items-center gap-8">
        <img src={{asset('uploads/images/events/project2.png')}} class="w-full md:w-1/2 h-64 object-cover rounded" />
        <div class="md:w-1/2">
          <h3 class="text-xl font-semibold mb-2">Project Shambhoo Leela</h3>
          <p class="text-sm mb-4 text-justify">
            Focused on education – as it is the only means through which a
            person can achieve anything.
            <span class="block mt-2">Creating opportunities for quality education in underserved
              communities.</span>
          </p>
          <a href="#" class="px-4 py-2 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
            MORE</a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row-reverse items-center gap-8">
        <img src={{asset('uploads/images/events/project5.png')}} class="w-full md:w-1/2 h-64 object-cover rounded" />
        <div class="md:w-1/2">
          <h3 class="text-xl font-semibold mb-2">
            Nutrition Awareness Program
          </h3>
          <p class="text-sm mb-4 text-justify">
            Helping maids, labors, and servants with practical health tips
            within limited budget.
            <span class="block mt-2">Promoting healthy living through affordable and sustainable
              nutrition practices.</span>
          </p>
          <a href="#" class="px-4 py-2 text-sm text-white bg-[#0b0d3f] hover:bg-[#161a5c] transition rounded">KNOW
            MORE</a>
        </div>
      </div> --}}
        </div>
    </section>
@endsection
