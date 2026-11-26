@section('title')
    {{ $title }} Management
@endsection

@extends('admin.layouts.master')
@section('adminContent')
<div class="pf-admin-page pf-admin-content-page" data-admin-module="event">

    <!-- Start Content-->

    <main class="p-6 bg-[#f6f7fb] overflow-y-auto flex-1">

        <div class="flex items-center ml-1 mr-3 justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 ">
                {{ $title }} Management
            </h1>
            <button class="bg-gray-100 px-5 py-2 rounded border text-sm hover:bg-blue-500"><a
                    href="{{ route($route . '.create') }}">+ Add New Event</a></button>
        </div>
        <!-- calender and right sidebar section -->
        <div class="bg-[#f6f7fb] ">
            <div class="w-full flex flex-col lg:flex-row gap-6">


                <div class="container mx-auto ">

                    <!-- Calendar container -->
                    <div id="calendar" class="bg-white p-4 rounded-lg shadow"></div>
                </div>



                <!-- Sidebar -->
                <div
                    class="flex-[1] bg-white rounded-2xl shadow p-4 mx-1 flex flex-col justify-between min-h-[700px] w-full">
                    <button class="bg-[#e7f0ee] text-sm px-4 py-2 rounded w-full mb-4 text-center font-medium">
                        Upcoming Events
                    </button>

                    <h2 class="text-sm font-medium text-gray-700 mb-4">You are going to</h2>

                    <div class="space-y-3 mx-1 flex-1 overflow-y-auto">
                        <!-- Card -->
                        @isset($eventsside)
                            @foreach ($eventsside as $event)
                                <div class="border rounded-lg px-11 py-2 flex gap-2 items-start">
                                    <img src="{{ asset('uploads/event/' . $event->attach) }}"
                                        class="w-10 h-10 rounded-full object-cover" />
                                    <div class="flex-1">
                                        <h3 class="text-sm font-semibold">{{ $event->title }}</h3>
                                        <p class="text-xs text-gray-500"> {{ date('j F Y', strtotime($event->start_date)) }}</p>
                                        <p class="text-xs text-gray-500">{{ $event->location }}</p>
                                        <p class="text-xs text-gray-500">Christine Brooks</p>
                                        <div class="flex items-center gap-2 mt-2">
                                            <img src="{{ asset('uploads/event/' . $event->attach) }}"
                                                class="w-6 h-6 rounded-full" />
                                            <div class="w-6 h-6 rounded-full bg-gray-200"></div>
                                            <div class="w-6 h-6 rounded-full bg-gray-200"></div>
                                            <span
                                                class="text-[10px] border border-gray-400 rounded-full px-2 py-[2px] ml-auto">15+</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset






                        <!-- See More -->
                        @can($access . '-list')
                            <button class="mt-8  bg-gray-100 text-sm text-gray-700 py-2 rounded-full w-full hover:bg-gray-200">
                                <a href="{{ route($route . '.list') }}">See More</a>
                            </button>
                        @endcan
                    </div>
                </div>
            </div>



            <!-- Tree Plantation , Health Camp -->
            <section class="bg-[#f6f7fb] py-8  ">
                <div class="w-full">
                    <div
                        class="bg-white rounded-2xl shadow-sm w-full mx-auto p-6 flex flex-col gap-8 sm:flex-row sm:flex-wrap items-start">

                        <!-- Left: Attendance -->
                        <div class="w-full sm:flex-1">
                            <h2 class="text-2xl font-semibold mb-6 font-[Poppins,sans-serif]">Tree Plantation, Health Camp
                            </h2>
                            <div class="mb-4 flex items-center gap-2">
                                <span class="font-semibold text-lg font-[Poppins,sans-serif]">Mark Attendance</span>
                                <span class="text-green-600 text-lg">✅</span>
                            </div>
                            <div class="mb-6 space-y-3">
                                <label class="flex items-center gap-2 text-[17px] font-[Poppins,sans-serif]">
                                    <input type="radio" name="attendance" class="accent-[#0e5757]" />
                                    Christine Brooks
                                </label>
                                <label class="flex items-center gap-2 text-[17px] font-[Poppins,sans-serif]">
                                    <input type="radio" name="attendance" class="accent-[#0e5757]" />
                                    Rosie Pearson
                                </label>
                                <label class="flex items-center gap-2 text-[17px] font-[Poppins,sans-serif]">
                                    <input type="radio" name="attendance" class="accent-[#0e5757]" />
                                    Gilbert Johnston
                                </label>
                                <label class="flex items-center gap-2 text-[17px] font-[Poppins,sans-serif]">
                                    <input type="radio" name="attendance" class="accent-[#0e5757]" />
                                    Maggie Sullivan
                                </label>
                            </div>
                            <button
                                class="w-full bg-[#0e5757] text-white font-semibold py-3 rounded-md text-lg font-[Poppins,sans-serif] hover:bg-[#004f4f] transition">
                                Save Attendance
                            </button>
                        </div>

                        <!-- Right: Uploads -->
                        <div class="w-full sm:flex-1 flex flex-col gap-6">
                            <!-- Report Upload -->
                            <div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-xl">📄</span>
                                    <span class="font-semibold text-lg font-[Poppins,sans-serif]">Upload Report</span>
                                </div>
                                <input type="file" id="report"
                                    class="block w-full mb-1 border border-gray-400 rounded px-2 py-1 text-sm file:mr-4 file:py-1 file:px-4 file:rounded file:border-0 file:text-sm file:bg-gray-100 file:text-gray-700" />
                                <p class="text-sm text-gray-600 mt-1">No report uploaded.</p>
                            </div>

                            <!-- Photo Upload -->
                            <div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-xl">📸</span>
                                    <span class="font-semibold text-lg font-[Poppins,sans-serif]">Add Photos</span>
                                </div>
                                <input type="file" id="photos"
                                    class="block w-full mb-1 border border-gray-400 rounded px-2 py-1 text-sm file:mr-4 file:py-1 file:px-4 file:rounded file:border-0 file:text-sm file:bg-gray-100 file:text-gray-700" />
                                <p class="text-sm text-gray-600 mt-1">No Photos uploaded.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var calendarEl = document.getElementById("calendar");

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: "dayGridMonth",
                height: "auto",
                expandRows: true, // ✅ rows adjust ho jayenge
                headerToolbar: {
                    left: "prev,next today",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay",
                },

                // ✅ Backend से data आएगा

                events: {!! $events->toJson() !!},

                eventDisplay: "block",
                dayMaxEventRows: true,

                /** ✅ Event वाले दिन का cell background बदले */
                eventDidMount: function(info) {
                    let eventDate = info.event.startStr;
                    let cell = document.querySelector('[data-date="' + eventDate + '"]');
                    if (cell) {
                        cell.style.backgroundColor = info.event.backgroundColor;
                    }
                },

                /** ✅ Responsive breakpoints */
                windowResize: function() {
                    if (window.innerWidth < 640) {
                        calendar.changeView("timeGridDay"); // mobile me daily view
                    } else if (window.innerWidth < 1024) {
                        calendar.changeView("timeGridWeek"); // tablet me weekly view
                    } else {
                        calendar.changeView("dayGridMonth"); // desktop me monthly view
                    }
                },
            });

            calendar.render();
        });
    </script>

</div>
@endsection
