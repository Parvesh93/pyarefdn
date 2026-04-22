@section('title')
    Gallery
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">GALLERY</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Gallery</span>
            </nav>
        </div>
    </section>


    <section class="w-full py-12 bg-white">
        <div class="md:mx-11 px-4">


            <div class="columns-1 sm:columns-2 md:columns-3 gap-4 space-y-4">
                <!-- Each image -->
                <img src={{ asset('uploads/images/events/event2.png') }} alt="Gallery Image" class="w-full rounded-lg" />
                <img src={{ asset('uploads/images/events/img1.png') }} alt="Gallery Image" class="w-full rounded-lg" />
                <img src={{ asset('uploads/images/gallery/gallery1.png') }} alt="Gallery Image" class="w-full rounded-lg" />
                <img src={{ asset('uploads/images/events/project5.png') }} alt="Gallery Image" class="w-full rounded-lg" />
                <img src={{ asset('uploads/images/gallery/gallery2.png') }} alt="Gallery Image" class="w-full rounded-lg" />
                <img src={{ asset('uploads/images/events/project2.png') }} alt="Gallery Image" class="w-full rounded-lg" />
                <img src={{ asset('uploads/images/gallery/gallery3.png') }} alt="Gallery Image" class="w-full rounded-lg" />
                <img src={{ asset('uploads/images/events/femaleHealthCamp2.png') }} alt="Gallery Image"
                    class="w-full rounded-lg" />
                <img src={{ asset('uploads/images/events/govindleela4.png') }} alt="Gallery Image"
                    class="w-full rounded-lg" />
            </div>
        </div>
    </section>
@endsection
