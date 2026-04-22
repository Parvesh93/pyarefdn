@section('title')
    Annual Report
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->


    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0   mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">ANNUAL REPORT</h2>

            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Annual Report</span>
            </nav>
        </div>
    </section>

    <section class="w-full py-12 bg-white">
        <div class="md:mx-11 px-4">
            <h2 class="text-center text-xl md:text-2xl font-bold text-black mb-10">
                ANNUAL REPORTS
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Single Report Card -->
                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2013 - 2014</p>
                    <a href="{{ asset('uploads/pdf/2013-2014/Pyare-annual-report-for-2013-2014.pdf') }}" target="_blank"
                        class="py-2 bg-indigo-900 text-white rounded shadow hover:bg-indigo-800">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2014 - 2015</p>
                    <a href="{{ asset('uploads/pdf/2014-2015/Pyare-Foundation-annual-report-2014-15.pdf') }}"
                        target="_blank" class="py-2 bg-purple-600 text-white rounded shadow hover:bg-purple-700">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2015 - 2016</p>
                    <a href="{{ asset('uploads/pdf/2015-2016/Pyare-Annual-Report-2015-16.pdf') }}" target="_blank"
                        class="py-2 bg-indigo-900 text-white rounded shadow hover:bg-indigo-800">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2016 - 2017</p>
                    <a href="{{ asset('uploads/pdf/2016-2017/Pyare-Annual-report-for-2016-2017.pdf') }}" target="_blank"
                        class="py-2 bg-purple-600 text-white rounded shadow hover:bg-purple-700">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2017 - 2018</p>
                    <a href="{{ asset('uploads/pdf/2017-2018/Pyare-Annual-report-for-2017-2018.pdf') }}" target="_blank"
                        class="py-2 bg-indigo-900 text-white rounded shadow hover:bg-indigo-800">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2018 - 2019</p>
                    <a href="{{ asset('uploads/pdf/2018-2019/ANNUAL-REPORT-2018-19_updated.pdf') }}" target="_blank"
                        class="py-2 bg-purple-600 text-white rounded shadow hover:bg-purple-700">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>

                </div>

                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2019 - 2020</p>
                    <a href="{{ asset('uploads/pdf/2019-2020/Annual-Report_2019-20_updated.pdf') }}" target="_blank"
                        class="py-2 bg-indigo-900 text-white rounded shadow hover:bg-indigo-800">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2020 - 2021</p>
                    <a href="{{ asset('uploads/pdf/2020-2021/Annual_Report_2020-21.pdf') }}" target="_blank"
                        class="py-2 bg-purple-600 text-white rounded shadow hover:bg-purple-700">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>

                </div>

                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <p class="text-lg font-semibold mb-4">2021 - 2022</p>
                    <a href="{{ asset('uploads/pdf/2021-2022/Annual-Report-2021-22_updated_compressed.pdf') }}"
                        target="_blank" class="py-2 bg-indigo-900 text-white rounded shadow hover:bg-indigo-800">

                        <button class=" text-white text-sm font-semibold py-2  rounded w-full">
                            📄 DOWNLOAD PDF
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
