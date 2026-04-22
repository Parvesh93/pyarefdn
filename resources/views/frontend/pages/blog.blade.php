@section('title')
    Blogs
@endsection

@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->

    <!--<section class="relative py-12  bg-cover bg-center overflow-hidden text-black"-->
    <!--    style="">-->
        <!-- Noise / Grainy Texture Overlay -->
        <!--<div class="absolute inset-0  opacity-20 mix-blend-overlay pointer-events-none"-->
        <!--    style="background-image: url('{{ asset('uploads/images/organisation/blurshadeImg.png') }}');">-->
        <!--</div>-->

    <!--    <div class="relative max-w-screen-xl md:mx-8 px-6">-->
    <!--        <h2 class="text-2xl sm:text-3xl font-bold">BLOGS</h2>-->

    <!--        <nav class="mt-3 text-sm">-->
    <!--            <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"-->
    <!--                class="text-[18px] text-orange-400 font-semibold hover:underline">Home</a>-->
    <!--            <span class="mx-1 text-gray-200">/</span>-->
    <!--            <span class="text-[18px] text-gray-300">Blogs</span>-->
    <!--        </nav>-->
    <!--    </div>-->
    <!--</section>-->


    @if($blogs->count())
        @isset($blogs)
            <section class="w-full md:py-12 py-8 bg-white">
                <div class="md:mx-10 px-3">
                    

                    <div class="flex flex-col md:flex-row md:items-center justify-between bg-white pb-6 rounded-md ">

                        <!-- Left: Heading -->
                        <div class="mb-4 md:mb-0">
                            <h2 class="text-3xl font-bold text-start  ">Our Blogs</h2>
                        </div>

                        <!-- Right: Filters -->
                        <form action="{{ route('filter.blog') }}" class="flex flex-wrap gap-3 items-center">
                            @csrf
                            <!-- Year -->
                            <div>
                                <label class="sr-only" for="year">Year</label>
                                <select id="year" name="year"
                                    class="border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>All</option>
                                    @foreach ($years as $year)
                                        <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                            {{ $year }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Month -->
                            <div>
                                <label class="sr-only" for="month">Month</label>
                                <select id="month" name="month"
                                    class="border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>All</option>
                                    @foreach ($months as $key => $value)
                                        <option value="{{ $key }}" {{ request('month') == $key ? 'selected' : '' }}>
                                            {{ $value }}</option>
                                    @endforeach
                                    <!-- Add remaining months -->
                                </select>
                            </div>

                            <!-- Category -->
                            <div>
                                <label class="sr-only" for="category">Category</label>
                                <select id="category" name="category"
                                    class="border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>All</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ request('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>



                            <!-- Apply Button -->
                            <button type="submit"
                                class="bg-[#f46226] text-white px-5 py-2 text-sm rounded-md hover:bg-[#d8500f] transition">
                                Apply
                            </button>

                            <!-- Reset -->
                            <a href="{{ route('blog') }}"
                                class="border border-gray-300 text-gray-700 px-5 py-2 text-sm rounded-md hover:bg-gray-100 transition">
                                Reset
                            </a>



                        </form>
                    </div>




                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach ($blogs as $blog)
                            <div class="bg-white rounded-xl shadow-md overflow-hidden">

                                <!-- Image -->
                                <div class="bg-green-600 flex justify-center">
                                    <img src="{{ asset('uploads/blog/' . $blog->attach) }}" alt="Diesel Generator"
                                        class="w-full h-auto max-h-120 object-contain" />
                                </div>

                                <!-- Content -->
                                <div class="p-6 text-center">
                                    <h2 class="text-black font-bold text-lg mb-3">
                                        {{ $blog->title }}
                                    </h2>
                                    <p class="text-gray-600 text-sm mb-6">
                                        {{ Str::limit(strip_tags($blog->sub_title), 150, '...') }}
                                    </p>

                                    <!-- Button -->
                                    <a href="{{ route('blog.details', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                                        class="inline-block px-6 py-2 border border-[#f46226] text-[#f46226] font-semibold rounded-full hover:bg-[#f46226] hover:text-white transition">
                                        READ MORE
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        @endisset
    @else
        <section class="w-full md:py-12 py-8 bg-white">
            <div class="md:mx-10 px-3">

                <div class="flex flex-col md:flex-row md:items-center justify-between bg-white pb-6 rounded-md ">

                    <!-- Left: Heading -->
                    <div class="mb-4 md:mb-0">
                        <h2 class="text-3xl font-bold text-start  ">No Blog Found</h2>
                    </div>

                    <!-- Right: Filters -->
                    <form action="{{ route('filter.blog') }}" class="flex flex-wrap gap-3 items-center">
                        @csrf
                        <!-- Year -->
                        <div>
                            <label class="sr-only" for="year">Year</label>
                            <select id="year" name="year"
                                class="border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>All</option>
                                @foreach ($years as $year)
                                    <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                        {{ $year }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Month -->
                        <div>
                            <label class="sr-only " for="month">Month</label>
                            <select id="month" name="month"
                                class="border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>All</option>
                                @foreach ($months as $key => $value)
                                    <option value="{{ $key }}" {{ request('month') == $key ? 'selected' : '' }}>
                                        {{ $value }}</option>
                                @endforeach
                                <!-- Add remaining months -->
                            </select>
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="sr-only" for="category">Category</label>
                            <select id="category" name="category"
                                class="border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>All</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ request('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>





                        <!-- Apply Button -->
                        <button type="submit"
                            class="bg-green-600 text-white px-5 py-2 text-sm rounded-md hover:bg-green-700 transition">
                            Apply
                        </button>

                        <!-- Reset -->
                        <a href="{{ route('blog') }}"
                            class="border border-gray-300 text-gray-700 px-5 py-2 text-sm rounded-md hover:bg-gray-100 transition">
                            Reset
                        </a>



                    </form>
                </div>
            </div>
        </section>
    @endif
@endsection
