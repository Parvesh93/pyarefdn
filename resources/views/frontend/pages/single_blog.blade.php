@section('title')
    {{ $blog->title }}
@endsection


@extends('frontend.layouts.master')

@section('content')

    <!-- Main Content & Donate now Form -->
    <section class="w-full py-10 bg-white">
        <div class="md:mx-11 flex flex-col lg:flex-row gap-10 px-4">
            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="w-full lg:w-2/3 overflow-y-auto">

                <section class="relative   bg-cover bg-center overflow-hidden text-white">
                    <!-- Noise / Grainy Texture Overlay -->


                    <div class="relative max-w-screen-xl mb-6">
                        <h2 class="text-2xl sm:text-3xl text-black font-bold">{{ $blog->title }}</h2>

                        <nav class="my-3  text-sm">
                            <i class="fa-sharp-duotone fa-solid fa-house text-black"></i> <a href="{{ route('home') }}"
                                class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                            <span class="mx-1 text-gray-600">></span><span
                                class="text-[16px] text-gray-600">{{ $blog->blogCategory->title }}</span><span
                                class="mx-1 text-gray-600">></span>
                            <span class="text-[16px] text-gray-600">{{ $blog->title }}</span>
                        </nav>
                        <a href="#">
                            <span
                                class="bg-black text-white text-xs font-semibold hover:text-white hover:bg-blue-600 transition px-2 py-1">
                                {{ $blog->blogCategory->title }}
                            </span>
                        </a>
                    </div>
                </section>

                <div class="flex items-center space-x-6 text-gray-700 text-sm mb-6">
                    <!-- Author Info -->
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-user text-blue-600 text-base leading-none"></i>
                        <span class="font-medium">By <sapn class="font-bold">{{ $blog->author->name }}</sapn></span>
                        <!-- Replace dynamically -->
                    </div>

                    <!-- Separator Line -->
                    <div class="h-4 border-l border-gray-300 mx-2"></div>


                    <!-- Publish Date Info -->
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-calendar-alt text-green-600 text-base leading-none"></i>
                        <span>{{ \Carbon\Carbon::parse($blog->created_date)->format('d F Y') }}</span>
                    </div>
                </div>

                <div class="flex items-center space-x-2 mb-6">
                    <!-- Share Label Button -->
                    <div class="relative">
                        <div
                            class="flex items-center bg-gray-100 text-gray-700 px-5 py-3 rounded shadow text-sm font-medium">
                            <span> <i class="fas fa-share-alt mr-1 p-1"></i></span>
                            <span class="h-4 border-l border-gray-300"></span>
                            <span class="p-1">Share</span>
                        </div>
                        <!-- Arrow (tooltip style) -->
                        <div
                            class="absolute top-1/2 left-full transform -translate-y-1/2 -ml-1 w-3 h-3 bg-gray-100 rotate-45 shadow">
                        </div>
                    </div>

                    <!-- Vertical line separator -->
                    <!--<div class="h-6 border-l border-gray-300 mx-2"></div>-->

                    <!-- Social Share Buttons -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank"
                        class="bg-blue-600 text-white px-4 py-3 rounded hover:bg-blue-700">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank"
                        class="bg-sky-400 text-white px-4 py-3 rounded hover:bg-sky-500">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(url()->current()) }}"
                        target="_blank" class="bg-red-600 text-white px-4 py-3 rounded hover:bg-red-700">
                        <i class="fab fa-pinterest-p"></i>
                    </a>

                    <a href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}" target="_blank"
                        class="bg-green-500 text-white px-4 py-3 rounded hover:bg-green-600">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

                <div class="my-4">
                    <!-- Image -->
                    <div class="bg-green-600  flex justify-center rounded-lg">
                        <img src="{{ asset('uploads/blog/' . $blog->attach) }}" alt="Diesel Generator"
                            class="w-full h-auto max-h-150 object-contain rounded-lg" />
                    </div>
                </div>

                <!-- Project Intro -->
                <div
                    class="text-gray-800 text-md text-justify leading-relaxed space-y-4 prose prose-sm max-w-none [&_ol]:list-decimal [&_ol]:ml-6 [&_ul]:list-disc [&_ul]:ml-6">
                    <!-- Blog Description -->
                    {!! @$blog->description !!}

                    <div class="h-1 border-t border-gray-300 "></div>

                    <div class="flex items-center space-x-6 text-gray-700 text-sm mb-4">
                        <!-- Author Info -->
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-user text-blue-600 text-base leading-none"></i>
                            <span class="font-medium">By <sapn class="font-bold">{{ $blog->author->name }}</sapn></span>
                            <!-- Replace dynamically -->
                        </div>

                        <!-- Separator Line -->
                        <div class="h-4 border-l border-gray-300"></div>

                        <!-- Publish Date Info -->
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-calendar-alt text-green-600 text-base leading-none"></i>
                            <span>{{ \Carbon\Carbon::parse($blog->created_date)->format('d F Y') }}</span>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2 mt-4">
                        <!-- Share Label Button -->
                        <div class="relative">
                            <div
                                class="flex items-center bg-gray-100 text-gray-700 px-5 py-3 rounded shadow text-sm font-medium">
                                <span> <i class="fas fa-share-alt mr-1 p-1"></i></span>
                                <span class="h-4 border-l border-gray-300"></span>
                                <span class="p-1">Share</span>
                            </div>
                            <!-- Arrow (tooltip style) -->
                            <div
                                class="absolute top-1/2 left-full transform -translate-y-1/2 -ml-1 w-3 h-3 bg-gray-100 rotate-45 shadow">
                            </div>
                        </div>

                        <!-- Vertical line separator -->
                        <!--<div class="h-6 border-l border-gray-300 mx-2"></div>-->

                        <!-- Social Share Buttons -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                            target="_blank" class="bg-blue-600 text-white px-4 py-3 rounded hover:bg-blue-700">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank"
                            class="bg-sky-400 text-white px-4 py-3 rounded hover:bg-sky-500">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(url()->current()) }}"
                            target="_blank" class="bg-red-600 text-white px-4 py-3 rounded hover:bg-red-700">
                            <i class="fab fa-pinterest-p"></i>
                        </a>

                        <a href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}" target="_blank"
                            class="bg-green-500 text-white px-4 py-3 rounded hover:bg-green-600">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>

                    <div class="h-8  border-t border-gray-300 pt-2"></div>


                    <section class="mt-[20px]">
                        <!-- Section Header -->
                        <div class="flex items-center border-b-2 border-black mb-4">
                            <span class="bg-black text-white px-3 py-1 text-sm font-semibold uppercase">Related
                                Articles</span>

                        </div>

                        <!-- Articles Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            <!-- Article Card -->
                            @php use Illuminate\Support\Str; @endphp

                            @foreach ($relatedBlogs as $relatedBlog)
                                <div class="group">
                                    <div class="relative overflow-hidden">
                                        <a
                                            href="{{ route('blog.details', ['id' => $relatedBlog->id, 'slug' => $relatedBlog->slug]) }}"><img
                                                src="{{ asset('uploads/blog/' . $relatedBlog->attach) }}"
                                                alt="Article Image" class="w-full h-auto object-cover"></a>

                                        <a
                                            href="{{ route('blog.details', ['id' => $relatedBlog->id, 'slug' => $relatedBlog->slug]) }}">
                                            <span
                                                class="absolute bottom-2 left-2 bg-black text-white text-xs font-semibold hover:text-white hover:bg-blue-600 transition px-2 py-1">{{ $relatedBlog->blogCategory->title }}</span>
                                        </a>
                                    </div>
                                    <a
                                        href="{{ route('blog.details', ['id' => $relatedBlog->id, 'slug' => $relatedBlog->slug]) }}">
                                        <h3
                                            class="mt-2 text-base font-semibold text-gray-800 group-hover:text-blue-600 transition">
                                            {{ Str::limit($relatedBlog->title, 50, '...') }}
                                        </h3>
                                    </a>

                                </div>
                            @endforeach


                        </div>
                    </section>
                    
                    
                    <div class="">
                        <div class="pt-6">
                            <div class="flex items-center border-b-2 border-black mb-4">
                                <span class="bg-black text-white px-3 py-1 text-sm font-semibold uppercase">Recent Comments
                                </span>

                            </div>
                        </div>
                        @isset($recentComments)
                            @foreach ($recentComments as $comment)
                                <div class="flex items-start space-x-4 py-4 border-b">
                                    <img src="{{ asset('uploads/blog/' . $blog->attach) }}" class="w-12 h-12 rounded-full" />
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm">
                                                <span class="font-semibold">{{ $comment->name }}</span>
                                                <span class="text-gray-600">says:</span>
                                            </p>
                                            <span
                                                class="text-xs text-gray-500">{{ $comment->created_at->timezone('Asia/Kolkata')->format('d F Y') }}</span>
                                        </div>
                                        <div class="mt-1 text-sm text-gray-700">
                                            {!! nl2br(e($comment->comment)) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset



                    </div>

                    <div class="">
                        <div class="pt-10">
                            <div class="w-full    shadow-lg rounded  bg-gray-200 p-6">
                                <h2 class="text-2xl  font-bold mb-6 text-gray-800">LEAVE A REPLY</h2>

                                <form action="{{ route('web.leave.comment') }}" method="POST" class="space-y-2">
                                    @csrf
                                    <!-- Name -->

                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                                    <div>
                                        <label for="name" class="block text-gray-700 font-medium mb-2">Name <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" id="name" name="name" required
                                            class="w-full border border-gray-200 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            placeholder="Name" />
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <label for="email" class="block text-gray-700 font-medium mb-2">Email <span
                                                class="text-red-500">*</span></label>
                                        <input type="email" id="email" name="email" required
                                            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            placeholder="Email" />
                                    </div>

                                    <!-- Comment -->
                                    <div>
                                        <label for="comment" class="block text-gray-700 font-medium mb-2">Comment <span
                                                class="text-red-500">*</span></label>
                                        <textarea id="comment" name="comment" rows="4" required
                                            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                                            placeholder="Comment"></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <div>
                                        <button type="submit"
                                            class="w-40 bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                                            Post Comment
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>



                </div>

            </div>

            <!-- Right Donate Form -->

            <div class="w-full lg:w-1/3 h-fit sticky top-0 ">
                <div class="shadow-lg rounded p-6 bg-white border border-gray-200">
                    <div class="max-w-2xl mx-auto  mb-4">
                        <!-- Section Title -->
                        {{-- <h2 class="text-2xl font-semibold mb-6">Related Posts</h2> --}}

                        <div class="flex items-center border-b-2 border-black mb-4">
                            <span class="bg-black text-white px-3 py-1 text-sm font-semibold uppercase">
                                Related Posts</span>

                        </div>

                        @isset($relatedBlogs)
                            <!-- Post List -->
                            <div class="space-y-5">
                                @foreach ($relatedBlogs as $relatedBlog)
                                    <div class="flex items-start space-x-4">
                                        <a href="{{ route('blog.details', ['id' => $relatedBlog->id, 'slug' => $relatedBlog->slug]) }}"
                                            class="flex-shrink-0">
                                            <img src="{{ asset('uploads/blog/' . $relatedBlog->attach) }}" alt="Post 1"
                                                class="w-20 h-20 object-cover rounded" />
                                        </a>
                                        <div>
                                            <a
                                                href="{{ route('blog.details', ['id' => $relatedBlog->id, 'slug' => $relatedBlog->slug]) }}">
                                                <h3 class="text-md font-medium text-gray-900">
                                                    {{ $relatedBlog->title }}
                                                </h3>
                                            </a>

                                            <p class="text-sm text-gray-500 mt-1">

                                                {{ \Carbon\Carbon::parse($relatedBlog->created_date)->format('d F Y') }}

                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endisset
                    </div>

                    <div class="max-w-2xl mx-auto  mb-4">

                        <div class="flex items-center border-b-2 border-black mb-4">
                            <span class="bg-black text-white px-3 py-1 text-sm font-semibold uppercase">
                                Recent Comment</span>

                        </div>

                        @isset($recentComments)
                            <!-- Post List -->
                            <div class="space-y-5">
                                @foreach ($recentComments as $recentComment)
                                    <div class="flex items-start space-x-4">
                                        <a href="{{ route('blog.details', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                                            class="flex-shrink-0">
                                            <img src="{{ asset('uploads/blog/' . $blog->attach) }}" alt="Post 1"
                                                class="w-20 h-20 object-cover rounded" />
                                        </a>
                                        <div>
                                            <a href="{{ route('blog.details', ['id' => $blog->id, 'slug' => $blog->slug]) }}">
                                                <h3 class="text-md font-medium text-gray-900">
                                                    {{ $recentComment->comment }}
                                                </h3>
                                            </a>

                                            <p class="text-sm text-gray-500 mt-1">

                                                {{ \Carbon\Carbon::parse($recentComment->created_at)->format('d F Y') }}

                                            </p>



                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endisset
                    </div>



                    <!-- Volunteer Box -->
                    <div
                        class="relative overflow-hidden rounded-xl bg-[#fee09c] px-6 py-6 min-h-[200px] flex flex-col justify-center items-center text-center mt-6 mb-6">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Volunteers are the heart of our foundation. Sign up today and
                                be a part of something bigger.
                            </p>
                            <button class="bg-[#11144a] text-white text-sm font-semibold py-2 px-6 rounded"><a
                                    href="{{ route('volunteer-member') }}">BECOME VOLUNTEER</a>

                            </button>
                        </div>
                    </div>

                    <!-- Annual Member Box -->
                    <div
                        class="relative overflow-hidden rounded-xl bg-[#fee09c] px-6 py-6 min-h-[220px] flex flex-col justify-center items-center text-center">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Join a community committed to long-term change. Your annual
                                membership fuels year-round impact — supporting education,
                                environment, and empowerment.
                            </p>
                            <button class="bg-[#11144a] text-white text-sm font-semibold py-2 px-6 rounded"><a
                                    href="{{ route('annual-member') }}">BECOME ANNUAL MEMBER</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
