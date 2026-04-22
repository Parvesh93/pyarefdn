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

    <!-- Start Content -->
    <div class="flex items-center justify-center py-[30px] px-[10px]">
        <div class="w-full max-w-md p-8 bg-white shadow-lg rounded-lg">
            <div class="text-center mb-6">
                <div class="text-blue-500 text-4xl mb-2">
                    <i class="feather icon-unlock"></i>
                </div>
                <h3 class="text-2xl font-semibold">Donor {{ __('auth_login_title') }}</h3>
            </div>

            <!-- Form Start -->
            <form method="POST" action="{{ route($loginRoute) }}">
                @csrf

                <div class="mb-4">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus placeholder="{{ __('field_email') }}"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        placeholder="{{ __('field_password') }}"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="text-sm text-gray-700">
                        {{ __('field_remember') }}
                    </label>
                </div>

                <div class="mb-4">
                    <button type="submit" name="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">
                        {{ __('auth_login') }}
                    </button>
                </div>
            </form>
            <!-- Form End -->

            @if (Route::has('donor.password.request'))
                <p class="text-sm text-gray-600 mb-2">
                    <a href="{{ route($forgotPasswordRoute) }}" class="text-blue-600 hover:underline">
                        {{ __('auth_forgot_password') }}
                    </a>
                </p>
            @endif

            @if (Route::has('donor.register'))
                <p class="text-sm text-gray-600 hidden">
                    {{ __('auth_dont_have_account') }}
                    <a href="{{ route('donor.register') }}" class="text-blue-600 hover:underline">
                        {{ __('auth_register') }}
                    </a>
                </p>
            @endif

            @isset($setting->copyright_text)
                <p class="text-xs text-gray-500 mt-6">
                    &copy; {!! strip_tags($setting->copyright_text, '<a><b><br>') !!}
                </p>
            @endisset
        </div>
    </div>
    <!-- End Content -->
</body>

</html>
