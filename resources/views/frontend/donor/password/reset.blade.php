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

    <div class="max-w-md mx-[10px] md:mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <div class="text-center">
            {{-- Icon --}}
            <div class="mb-4 flex justify-center">
                <svg class="w-12 h-12 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 11c1.105 0 2-.895 2-2V7a2 2 0 10-4 0v2c0 1.105.895 2 2 2zm0 0v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                </svg>
            </div>

            {{-- Title --}}
            <h5 class="text-xl font-semibold mb-4 text-gray-700">
                {{ __('auth_reset_title') }}
            </h5>
        </div>

        {{-- Form Start --}}
        <form method="POST" action="{{ route($passwordUpdateRoute) }}" class="space-y-4">
            @csrf

            {{-- Hidden token --}}
            <input type="hidden" name="token" value="{{ $token }}">

            {{-- Hidden Email --}}
            <input id="email" type="hidden" class="form-input @error('email') border-red-500 @enderror"
                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            {{-- Password --}}
            <div>
                <input id="password" type="password"
                    class="w-full px-4 py-2 border @error('password') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    name="password" required autocomplete="new-password" placeholder="{{ __('field_password') }}">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <input id="password-confirm" type="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="{{ __('field_confirm_password') }}">
            </div>

            {{-- Submit --}}
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md shadow">
                    {{ __('auth_reset') }}
                </button>
            </div>
        </form>
        {{-- Form End --}}

        {{-- Login link --}}
        @if (Route::has('student.login'))
            <p class="mt-6 text-sm text-gray-600 text-center">
                {{ __('auth_already_have_account') }}
                <a href="{{ route('student.login') }}" class="text-indigo-600 hover:underline">
                    {{ __('auth_login') }}
                </a>
            </p>
        @endif
    </div>



</body>

</html>
