@section('title')
    {{ $story->title }}
@endsection

@extends('frontend.layouts.master')

@section('content')
<section class="relative py-10 bg-[#0f1240] text-white">
    <div class="md:px-14 px-4 mx-auto">
        <nav class="text-sm mb-4">
            <a href="{{ route('home') }}" class="text-orange-400 font-semibold hover:underline">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ route('founder-stories.index') }}" class="text-orange-400 font-semibold hover:underline">Founder Stories</a>
            <span class="mx-2">/</span>
            <span class="text-gray-300">Story</span>
        </nav>

        <h1 class="text-3xl md:text-4xl font-bold max-w-4xl">{{ $story->title }}</h1>

        <div class="mt-3 flex flex-wrap gap-4 text-sm text-orange-300">
            @if($story->story_date)
                <span>{{ $story->story_date->format('d F Y') }}</span>
            @endif

            @if($story->source_name)
                <span>Source: {{ $story->source_name }}</span>
            @endif
        </div>
    </div>
</section>

<section class="py-14 bg-white">
    <div class="md:px-14 px-4 mx-auto">
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <div>
                @if($story->excerpt)
                    <div class="bg-orange-50 border-l-4 border-orange-500 p-5 rounded mb-6">
                        <p class="text-gray-800 leading-7">{{ $story->excerpt }}</p>
                    </div>
                @endif

                @if($story->content)
                    <div class="prose max-w-none prose-p:leading-8 prose-p:text-gray-700">
                        {!! nl2br(e($story->content)) !!}
                    </div>
                @endif
            </div>

            <div class="lg:sticky lg:top-24">
                <div class="bg-[#fafafa] border border-gray-200 rounded-2xl shadow-sm p-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Original Archive</h3>

                    @if($story->original_scan)
                        <a href="{{ asset('uploads/founder-stories/' . $story->original_scan) }}" target="_blank">
                            <img
                                src="{{ asset('uploads/founder-stories/' . $story->original_scan) }}"
                                alt="{{ $story->title }}"
                                class="w-full rounded-xl border border-gray-200"
                            >
                        </a>
                    @endif

                    <p class="text-sm text-gray-500 mt-3">
                        Original scanned document shared for archival reference.
                    </p>
                </div>
            </div>
        </div>

        @if($relatedStories->count())
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Related Stories</h2>

                <div class="grid md:grid-cols-3 gap-6">
                    @foreach($relatedStories as $related)
                        <a href="{{ route('founder-stories.show', $related->slug) }}"
                           class="block bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                            <img src="{{ asset('uploads/founder-stories/' . $related->story_image) }}"
                                 alt="{{ $related->title }}"
                                 class="w-full h-52 object-cover">
                            <div class="p-5">
                                <h3 class="font-semibold text-gray-900 line-clamp-2">{{ $related->title }}</h3>
                                @if($related->excerpt)
                                    <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $related->excerpt }}</p>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
@endsection