@section('title')
    Donation Success
@endsection

@extends('frontend.layouts.master')

@section('content')
    <div class="bg-gradient-to-br from-slate-100 to-slate-200 min-h-screen flex items-center justify-center p-12">
        <div
            class="bg-white rounded-2xl shadow-2xl overflow-hidden max-w-md w-full transform hover:scale-105 transition-all duration-300">
            <!-- Success Header with Blue Gradient -->
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-12 text-center relative overflow-hidden">
                <!-- Animated Background Elements -->
                <div class="absolute top-0 left-0 w-full h-full">
                    <div class="absolute top-4 left-4 w-8 h-8 bg-white/20 rounded-full animate-pulse"></div>
                    <div class="absolute top-8 right-8 w-4 h-4 bg-white/30 rounded-full animate-bounce delay-75"></div>
                    <div class="absolute bottom-6 left-8 w-6 h-6 bg-white/25 rounded-full animate-pulse delay-150"></div>
                </div>

                <!-- Success Icon -->
                <div class="relative z-10">
                    <div
                        class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg transform animate-bounce">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-white tracking-wide">SUCCESS</h1>
                </div>
            </div>

            <!-- Message Section -->
            <div class="p-8 text-center">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">
                    Payment Completed!
                </h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Congratulations, your payment has been successfully processed and
                    confirmed.
                </p>

                <!-- Continue Button -->
                <button onclick="handleContinue()"
                    class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:from-blue-600 hover:to-indigo-700 transform hover:scale-105 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    Go To Home
                </button>
            </div>

            <!-- Decorative Bottom Border -->
            <div class="h-1 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
        </div>
    </div>


    <!-- Floating Animation Elements -->
    <div class="fixed top-20 left-10 w-2 h-2 bg-blue-400 rounded-full animate-ping opacity-60"></div>
    <div class="fixed top-32 right-20 w-3 h-3 bg-indigo-400 rounded-full animate-pulse opacity-40"></div>
    <div class="fixed bottom-40 left-20 w-2 h-2 bg-blue-300 rounded-full animate-bounce opacity-50"></div>
    <div class="fixed bottom-60 right-16 w-1 h-1 bg-indigo-500 rounded-full animate-ping opacity-70"></div>

    <script>
        function handleContinue() {
            // Add loading state
            const button = event.target;
            button.innerHTML = "Loading...";
            button.className =
                "w-full bg-gray-400 text-white font-semibold py-4 px-8 rounded-xl cursor-wait";

            // Simulate redirect
            setTimeout(() => {
                // In a real application, redirect to dashboard or home page
                window.location.href = "/";
                // For demo: alert('Redirecting to dashboard...');
            }, 1000);
        }

        // Add entrance animation
        window.addEventListener("load", () => {
            const card = document.querySelector(".bg-white");
            card.style.transform = "translateY(50px)";
            card.style.opacity = "0";

            setTimeout(() => {
                card.style.transition = "all 0.6s ease-out";
                card.style.transform = "translateY(0)";
                card.style.opacity = "1";
            }, 100);
        });
    </script>
@endsection
