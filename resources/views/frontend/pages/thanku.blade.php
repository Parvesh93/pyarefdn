@section('title')
    Thanku Page
@endsection

@extends('frontend.layouts.master')
@section('content')
    <section class="bg-gray-100 flex items-center justify-center min-h relative overflow-hidden">
        <!-- Background Decoration -->
        <img src="{{ asset('uploads/leave/leave.jpg') }}" alt="leaves"
            class="absolute bottom-0 left-0 w-40 opacity-80 rotate-180" />
        <img src="{{ asset('uploads/leave/leave.jpg') }}" alt="leaves"
            class="absolute bottom-0 right-0 w-40 opacity-80 rotate-180" />

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-xl p-10 max-w mx-10 my-10 w-full z-10 text-center">

            <!-- Logo -->
            <div class="mb-4">
                <h1 class="text-2xl font-bold text-gray-800">Pyare Foundation</h1>
            </div>

            <!-- Title -->
            <h2 class="text-md font-bold text-gray-800">🌸 Thank You for Your Generous Donation 🌸</h2>

            <!-- Subtext -->
            <p class="text-gray-600 mt-2">Dear <span>{{@$receiptData->name}}</span></p>
            <p class="text-gray-600 mt-1">
                Your kindness has just created ripples of hope. 💖  
                Every rupee you donated will go towards building healthier communities, empowering children with education,
                and protecting our environment for future generations.
            </p>

            <!-- Arrow -->
            <div class="mt-4 text-2xl text-gray-500 animate-bounce">↓</div>
           

            <!-- Download Button -->
            <a  href="{{route('payment-page',@$receiptData->id)}}" target="_blank"
                class="mt-6 inline-block px-8 py-4 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-green-700 transition duration-200">
                📥 Download Donation Receipt
            </a>
        </div>
    </section>

   
@endsection
