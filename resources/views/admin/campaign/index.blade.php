@section('title')
    Campaign List
@endsection

@extends('admin.layouts.master')
@section('adminContent')
    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Navbar Include -->

        <main class="p-6 bg-[#f6f7fb] overflow-y-auto flex-1">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                Campaigns
            </h1>

            <section class="mb-10">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-800">List Of {{ $title }}</h2>
                    <button
                        class="bg-blue-400 hover:bg-blue-500 text-sm px-4 py-2 rounded-md font-medium text-white shadow-sm">
                        <a href="{{ route($route . '.create') }}">Create New +</a>
                    </button>
                </div>

                <!-- Desktop Grid -->
                <div class="hidden md:grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!-- Repeat this div for each card -->
                    @foreach ($campaigns as $row)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <img src="{{ asset('uploads/campaign/' . $row->attach) }}" alt="Campaign"
                                class="w-full h-40 object-cover rounded-t-xl" />
                            @php

                                $start = \Carbon\Carbon::parse($row->start_date); // database se aa rahi start date
                                $end = \Carbon\Carbon::parse($row->end_date); // database se aa rahi end date
                            @endphp

                            <div class="p-4">
                                <div class="flex items-center justify-between text-sm text-gray-500 mb-1">
                                    <span>{{ $start->format('F j') }} – {{ $end->format('F j, Y') }}</span>
                                    <span
                                        class="bg-green-100 text-green-700 text-xs font-medium px-2 py-0.5 rounded-full">{{ $row->status ? ($row->status == 1 ? 'Complete' : 'Incomplete') : 'Incomplete' }}</span>
                                </div>
                                <h3 class="text-base font-semibold text-gray-800">{{ $row->title }}</h3>
                                <p class="text-sm text-justify text-gray-600 mt-1 leading-relaxed">
                                    {!! strip_tags($row->description, '<p><br><strong><em><ul><ol><li>') !!}
                                </p>
                                <div class="flex justify-between items-center mt-4 text-sm font-medium text-gray-700">
                                    <div class="text-center">
                                        <p class="text-xs text-gray-500">Raised</p>
                                        <p>Rs.{{ $row->rises_amount }}
                                        </p>
                                    </div>
                                    <p class="text-sm text-gray-400">VS</p>
                                    <div class="text-center">
                                        <p class="text-xs text-gray-500">Goal</p>
                                        <p>Rs.{{ $row->goal_amount }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-2 mt-4">
                                    <button
                                        class="flex-1 bg-[#003f3f] text-white py-2 rounded-md text-sm font-medium hover:bg-[#005050]">
                                        <a href="{{ route($route . '.edit', $row->id) }}">✏️ EDIT</a>
                                    </button>
                                    <button onclick="openModal('deleteModal-{{ $row->id }}')"
                                        class="flex-1 bg-gray-100 text-gray-800 py-2 rounded-md text-sm font-medium hover:bg-gray-200">
                                        🗑️ DELETE
                                    </button>
                                    @include('admin.common.delete')
                                </div>
                            </div>
                        </div>
                    @endforeach
                  
                    <!-- Repeat ends -->
                </div>

                <!-- Swiper for Mobile -->
                <div class="md:hidden">
                    <div class="swiper mySwiper py-4">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            @foreach ($campaigns as $row)
                                <div class="swiper-slide mb-2">
                                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                                        <img src="{{ asset('uploads/campaign/' . $row->attach) }}" alt="Campaign"
                                            class="w-full h-40 object-cover rounded-t-xl" />
                                        @php

                                            $start = \Carbon\Carbon::parse($row->start_date); // database se aa rahi start date
                                            $end = \Carbon\Carbon::parse($row->end_date); // database se aa rahi end date
                                        @endphp
                                        <div class="p-4">
                                            <div class="flex items-center justify-between text-sm text-gray-500 mb-1">
                                                <span>{{ $start->format('F j') }} – {{ $end->format('F j, Y') }}</span>
                                                <span
                                                    class="bg-green-100 text-green-700 text-xs font-medium px-2 py-0.5 rounded-full">{{ $row->status ? ($row->status == 1 ? 'Complete' : 'Incomplete') : 'Incomplete' }}</span>
                                            </div>
                                            <h3 class="text-base font-semibold text-gray-800">{{ $row->title }}</h3>
                                            <p class="text-sm text-justify text-gray-600 mt-1 leading-relaxed">
                                                {!! strip_tags($row->description, '<p><br><strong><em><ul><ol><li>') !!}
                                            </p>
                                            <div
                                                class="flex justify-between items-center mt-4 text-sm font-medium text-gray-700">
                                                <div class="text-center">
                                                    <p class="text-xs text-gray-500">Raised</p>
                                                    <p>Rs.{{ $row->rises_amount }}</p>
                                                </div>
                                                <p class="text-sm text-gray-400">VS</p>
                                                <div class="text-center">
                                                    <p class="text-xs text-gray-500">Goal</p>
                                                    <p>Rs.{{ $row->goal_amount }}</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 mt-4">
                                                <button
                                                    class="flex-1 bg-[#003f3f] text-white py-2 rounded-md text-sm font-medium hover:bg-[#005050]">
                                                    <a href="{{ route('admin.campaign.edit', $row->id) }}">✏️ EDIT</a>
                                                </button>
                                                <button onclick="openModal('deleteModal-{{ $row->id }}')"
                                                    class="flex-1 bg-gray-100 text-gray-800 py-2 rounded-md text-sm font-medium hover:bg-gray-200">
                                                    🗑️ DELETE
                                                </button>
                                                @include('admin.common.delete')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach     
                        </div>
                       
                    </div>
                </div>
            </section>



        </main>
    </div>
@endsection
