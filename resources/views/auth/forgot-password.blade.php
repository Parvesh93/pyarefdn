{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @php
        use Illuminate\Support\Str;
    @endphp

    @if (isset($setting))
        <title>Forgot Password | {{ $setting->meta_title ?? '' }}</title>

        <meta name="description" content="{!! Str::limit(strip_tags($setting->meta_description), 160, ' ...') !!}">
        <meta name="keywords" content="{!! strip_tags($setting->meta_keywords) !!}">

        @if (is_file('uploads/settings/' . $setting->favicon_path))
            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('uploads/settings/' . $setting->favicon_path) }}"
                type="image/x-icon">
        @endif
    @endif
    <script src="{{ asset('backend/tailwind-css/js/3.4.17') }}"></script>
    <style>
        * {
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji"
        }
    </style>
</head>

<body class="h-full bg-gradient-to-br from-slate-200 to-slate-200">
    <section class="min-h-screen flex items-center justify-center bg-gray-100 relative overflow-hidden">
        <!-- Background Circles -->
        <div class="absolute -top-20 -left-20 w-96 h-96 bg-purple-400 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob"></div>
        <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-teal-400 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob"></div>
        <div class="absolute top-1/3 left-2/3 w-40 h-40 bg-blue-400 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob"></div>

        <!-- Card -->
        <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md relative z-10">
            <!-- Icon -->
            <div class="flex justify-center mb-6">
                <div class="text-5xl text-teal-500">
                    <i class="fal fa-envelope"></i>
                </div>
            </div>

            <!-- Heading -->
            <h2 class="text-xl font-semibold text-center text-gray-800 mb-4">
                Enter Your Account Email Address
            </h2>

            <!-- Success Message -->
            @if (session('status'))
                <div class="mb-4 text-green-700 bg-green-100 border border-green-400 rounded-md px-4 py-3 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf
                <div>
                    <input 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="Email"
                        class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-blue-400 @error('email') border-red-500 @enderror"
                        required
                    >
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-3 rounded-lg font-medium hover:bg-blue-600 transition">
                    Send Password Reset Link
                </button>
            </form>

            <!-- Link -->
            <p class="text-center text-gray-600 mt-6 text-sm">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-gray-800 hover:underline">
                    Login
                </a>
            </p>
        </div>
    </section>

    <!-- Tailwind Blob Animation -->
    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 8s infinite;
        }
    </style>
</body>
</html>
