@section('title')
    {{ $title }}
@endsection

@extends('admin.layouts.master')

@section('adminContent')
<div class="pf-admin-page pf-admin-content-page" data-admin-module="razorpay">

    <!-- Start Content-->

    <div class="max-w-5xl px-4 py-6">
        <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-lg rounded p-6 space-y-6">
            @csrf
            <input name="id" type="hidden" value="{{ isset($row->id) ? $row->id : -1 }}">

            <h2 class="text-2xl font-semibold text-gray-700 border-b pb-2">
                {{ __('btn_update') }} Razorpay Setting
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Example Field -->
                <div>
                    <label for="country" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ 'Country' }} <span class="text-red-500">*</span>
                    </label>

                    <select name="country" id="country" required
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-blue-400">

                        @php
                            $countries = [
                                'afghanistan' => 'Afghanistan',
                                'albania' => 'Albania',
                                'algeria' => 'Algeria',
                                'andorra' => 'Andorra',
                                'angola' => 'Angola',
                                'argentina' => 'Argentina',
                                'armenia' => 'Armenia',
                                'australia' => 'Australia',
                                'austria' => 'Austria',
                                'azerbaijan' => 'Azerbaijan',
                                'bahrain' => 'Bahrain',
                                'bangladesh' => 'Bangladesh',
                                'belgium' => 'Belgium',
                                'bhutan' => 'Bhutan',
                                'brazil' => 'Brazil',
                                'bulgaria' => 'Bulgaria',
                                'cambodia' => 'Cambodia',
                                'canada' => 'Canada',
                                'china' => 'China',
                                'denmark' => 'Denmark',
                                'egypt' => 'Egypt',
                                'finland' => 'Finland',
                                'france' => 'France',
                                'germany' => 'Germany',
                                'ghana' => 'Ghana',
                                'greece' => 'Greece',
                                'hong_kong' => 'Hong Kong',
                                'hungary' => 'Hungary',
                                'iceland' => 'Iceland',
                                'india' => 'India',
                                'indonesia' => 'Indonesia',
                                'iran' => 'Iran',
                                'iraq' => 'Iraq',
                                'ireland' => 'Ireland',
                                'israel' => 'Israel',
                                'italy' => 'Italy',
                                'japan' => 'Japan',
                                'jordan' => 'Jordan',
                                'kenya' => 'Kenya',
                                'kuwait' => 'Kuwait',
                                'lebanon' => 'Lebanon',
                                'luxembourg' => 'Luxembourg',
                                'malaysia' => 'Malaysia',
                                'maldives' => 'Maldives',
                                'mexico' => 'Mexico',
                                'morocco' => 'Morocco',
                                'myanmar' => 'Myanmar',
                                'nepal' => 'Nepal',
                                'netherlands' => 'Netherlands',
                                'new_zealand' => 'New Zealand',
                                'nigeria' => 'Nigeria',
                                'norway' => 'Norway',
                                'oman' => 'Oman',
                                'pakistan' => 'Pakistan',
                                'philippines' => 'Philippines',
                                'poland' => 'Poland',
                                'portugal' => 'Portugal',
                                'qatar' => 'Qatar',
                                'russia' => 'Russia',
                                'saudi_arabia' => 'Saudi Arabia',
                                'singapore' => 'Singapore',
                                'south_africa' => 'South Africa',
                                'south_korea' => 'South Korea',
                                'spain' => 'Spain',
                                'sri_lanka' => 'Sri Lanka',
                                'sweden' => 'Sweden',
                                'switzerland' => 'Switzerland',
                                'taiwan' => 'Taiwan',
                                'thailand' => 'Thailand',
                                'turkey' => 'Turkey',
                                'uae' => 'United Arab Emirates',
                                'uk' => 'United Kingdom',
                                'usa' => 'United States',
                                'vietnam' => 'Vietnam',
                                'zimbabwe' => 'Zimbabwe',
                            ];
                        @endphp

                        @foreach ($countries as $key => $country)
                            <option></option>
                            <option value="{{ $key }}" @if (isset($row->country) && $row->country == $key) selected @endif>
                                {{ $country }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <!-- Razorpay key id -->
                <div>
                    <label for="razorpay_key_id" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ 'Razorpay Key Id' }} <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="razorpay_key_id" id="razorpay_key_id"
                        value="{{ $row->razorpay_key_id ?? '' }}" required
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                </div>

                <!-- Mail Port -->
                <div>
                    <label for="razorpay_key_secret" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ 'Razorpay Secret Key' }} <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="razorpay_key_secret" id="razorpay_key_secret"
                        value="{{ $row->razorpay_key_secret ?? '' }}" required
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                </div>

                <!-- Mail Username -->
                <div>
                    <label for="mode" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ 'Mode' }} <span class="text-red-500">*</span>
                    </label>
                    <select name="mode" id="mode" required
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        <option value="test" @if (isset($row->mode) && $row->mode == 'test') selected @endif>{{ 'test' }}
                        </option>
                        <option value="live" @if (isset($row->mode) && $row->mode == 'live') selected @endif>{{ 'live' }}
                        </option>
                    </select>
                </div>


                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ 'Status' }} <span class="text-red-500">*</span>
                    </label>
                    <select name="status" id="status" required
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                        <option value="1" @if (isset($row->status) && $row->status == '1') selected @endif>{{ 'Active' }}
                        </option>
                        <option value="0" @if (isset($row->status) && $row->status == '0') selected @endif>{{ 'InActive' }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 shadow-md transition">
                    <i class="fas fa-check mr-2"></i>{{ __('btn_update') }}
                </button>
            </div>
        </form>
    </div>

    <!-- End Content-->

</div>
@endsection
