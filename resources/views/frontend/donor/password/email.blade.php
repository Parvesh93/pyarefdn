{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
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
        <title>Login | {{ $setting->meta_title ?? '' }}</title>

        <meta name="description" content="{!! Str::limit(strip_tags($setting->meta_description), 160, ' ...') !!}">
        <meta name="keywords" content="{!! strip_tags($setting->meta_keywords) !!}">

        @if (is_file('uploads/settings/' . $setting->favicon_path))
            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('uploads/settings/' . $setting->favicon_path) }}"
                type="image/x-icon">
        @endif
    @endif

    <script src="{{ asset('backend/tailwind-css/js/3.4.17') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}
    <style>
        * {
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji"
        }
    </style>
</head>

<body class="h-full bg-gradient-to-br from-slate-200 to-slate-200  dark:to-slate-200">

    <div class="absolute inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -left-20 h-72 w-72 rounded-full blur-3xl bg-blue-300/30 dark:bg-blue-500/20"></div>
        <div
            class="absolute -bottom-20 -right-20 h-72 w-72 rounded-full blur-3xl bg-purple-300/30 dark:bg-purple-500/20">
        </div>
    </div>

    <header class="flex items-center justify-between max-w-5xl  px-6 py-6">
        <a href="#">
            <img src={{ asset('uploads/images/logo/logo.webp') }} alt="Logo" class="w-60 h-auto" />
        </a>

        <button id="themeToggle"
            class="rounded-full hidden border border-slate-300/60 dark:border-slate-700 px-3 py-1.5 text-sm text-slate-700 dark:text-slate-200 hover:bg-white/70 dark:hover:bg-white/5 transition">
            Toggle Theme
        </button>
    </header>


    <div class="max-w-md mx-[10px] md:mx-auto bg-white shadow-md rounded-md  overflow-hidden mt-10">
        <div class="p-6 text-center">

            {{-- Icon --}}
            <div class="mb-4 flex justify-center">
                <svg class="w-12 h-12 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 12H8m8 0a4 4 0 10-8 0 4 4 0 008 0zm-8 0v.01M12 14v2m0 4h.01M2 12a10 10 0 1120 0 10 10 0 01-20 0z" />
                </svg>
            </div>

            {{-- Title --}}
            <h3 class="text-xl font-semibold mb-4 text-gray-700">{{ __('auth_email_title') }}</h3>

            {{-- Alerts --}}
            @include('frontend.donor.inc.message')

            {{-- Form --}}
            <form method="POST" action="{{ route($passwordEmailRoute) }}" class="space-y-4">
                @csrf

                <div>
                    <input id="email" type="email"
                        class="w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="{{ __('field_email') }}" autofocus>

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md shadow">
                        {{ __('auth_send_reset_link') }}
                    </button>
                </div>
            </form>

            {{-- Already have an account --}}
            @if (Route::has('student.login'))
                <p class="mt-6 text-sm text-gray-600">
                    {{ __('auth_already_have_account') }}
                    <a href="{{ route('student.login') }}" class="text-indigo-600 hover:underline">
                        {{ __('auth_login') }}
                    </a>
                </p>
            @endif
        </div>
    </div>
</body>

</html>
