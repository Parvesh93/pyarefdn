@section('title')
    Founder Stories
@endsection

@extends('frontend.layouts.master')

@section('content')
<section class="relative py-14 bg-[#0f1240] text-white">
    <div class="md:px-14 px-4 mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold">Founder Stories & Archive</h1>
        <p class="mt-3 text-gray-200 max-w-2xl">
            Explore archived newspaper coverage, documented public mentions, and written stories
            connected to the founder’s journey.
        </p>
    </div>
</section>

<section class="py-14 bg-[#f8f8f8]">
    <div class="md:px-14 px-4 mx-auto">
        @if($stories->count())
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($stories as $story)
                    <article class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition duration-300 border border-gray-100">
                        <a href="{{ route('founder-stories.show', $story->slug) }}" class="block">
                            <div class="relative h-[250px] bg-gray-100 overflow-hidden">
                                <img
                                    src="{{ asset('uploads/founder-stories/' . $story->story_image) }}"
                                    alt="{{ $story->title }}"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                        </a>

                        <div class="p-6">
                            @if($story->story_date)
                                <p class="text-sm text-orange-500 font-medium mb-2">
                                    {{ $story->story_date->format('d M Y') }}
                                </p>
                            @endif

                            <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                                <a href="{{ route('founder-stories.show', $story->slug) }}">
                                    {{ $story->title }}
                                </a>
                            </h3>

                            @if($story->excerpt)
                                <p class="text-gray-600 text-sm leading-6 mb-4 line-clamp-3">
                                    {{ $story->excerpt }}
                                </p>
                            @endif

                            <a href="{{ route('founder-stories.show', $story->slug) }}"
                               class="inline-flex items-center text-orange-500 font-semibold hover:text-orange-600">
                                Read Story →
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $stories->links() }}
            </div>
        @else
            <div class="bg-white rounded-2xl shadow p-8 text-center text-gray-500">
                No stories found.
            </div>
        @endif
    </div>
</section>
@endsection