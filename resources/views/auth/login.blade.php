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

    <main class="min-h-[calc(100vh-100px)] flex items-center justify-center px-4">
        <div class="w-full max-w-md">
            <!-- Card -->
            <div
                class="bg-white/80 backdrop-blur rounded-2xl shadow-xl ring-1 ring-slate-900/5 p-6 sm:p-8 dark:bg-slate-900/70">
                <div class="mb-6 text-center">
                    <h1 class="text-2xl font-semibold text-slate-700 dark:text-white">Welcome back</h1>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Staff Sign in to continue</p>
                </div>

                <!-- Flash / Toaster placeholder (Laravel-friendly) -->
                @if (session('status'))
                    <div class="mb-4 rounded-lg bg-green-50 text-green-700 border border-green-200 px-4 py-2 text-sm">
                        {{ session('status') }}</div>
                @endif

                <form id="loginForm" method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="email"
                            class="block text-sm font-medium text-slate-700 dark:text-slate-300">Email</label>
                        <div class="mt-1 relative">
                            <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required
                                class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2 shadow-inner"
                                placeholder="you@example.com" />
                            <svg class="absolute right-3 top-2.5 h-5 w-5 text-slate-400" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M2 6a2 2 0 012-2h16a2 2 0 012 2v1l-10 6L2 7V6zm0 4l10 6 10-6v8a2 2 0 01-2 2H4a2 2 0 01-2-2v-8z" />
                            </svg>
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password"
                            class="block text-sm font-medium text-slate-700 dark:text-slate-300">Password</label>
                        <div class="mt-1 relative">
                            <input id="password" name="password" type="password" value="{{ old('password') }}" autocomplete="current-password"
                                required
                                class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2 shadow-inner pr-10"
                                placeholder="••••••••" />
                            <button type="button" id="togglePassword" aria-label="Show password"
                                class="absolute inset-y-0 right-0 px-3 grid place-content-center text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">
                                <svg id="eyeOpen" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 12a5 5 0 110-10 5 5 0 010 10z" />
                                </svg>
                                <svg id="eyeClosed" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M3.98 8.223A10.477 10.477 0 002 12s3 7 10 7a10.48 10.48 0 006.338-2.115l1.53 1.53 1.414-1.414-18-18-1.414 1.414 2.512 2.512zM12 7a5 5 0 014.9 4.02l-2.058-2.058A3 3 0 0012 9a3 3 0 00-3 3c0 .37.067.72.19 1.046l-2.03-2.03A4.985 4.985 0 0112 7z" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="inline-flex items-center gap-2 text-slate-600 dark:text-slate-300">
                            <input id="remember" name="remember" type="checkbox"
                                class="rounded border-slate-300 dark:border-slate-700 text-blue-600 focus:ring-blue-500" />
                            <span class="text-sm">Remember me</span>
                        </label>
                        <a href="{{ route('password.request') }}"
                            class="text-sm font-medium text-blue-600 hover:text-blue-700">Forgot
                            password?</a>
                    </div>

                    <button id="submitBtn" type="submit"
                        class="w-full inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2.5 transition disabled:opacity-60 disabled:pointer-events-none">
                        <svg id="spinner" class="hidden animate-spin h-5 w-5" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4" fill="none"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                        <span id="btnText">Sign in</span>
                    </button>
                </form>

                {{-- <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-slate-200 dark:border-slate-700"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span
                                class="bg-white dark:bg-slate-900 px-3 text-xs uppercase tracking-wider text-slate-400">Or
                                continue with</span>
                        </div>
                    </div>

                    <div class="mt-4 grid grid-cols-3 gap-3">
                        <button
                            class="rounded-lg border border-slate-200 dark:border-slate-700 px-3 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-800">Google</button>
                        <button
                            class="rounded-lg border border-slate-200 dark:border-slate-700 px-3 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-800">GitHub</button>
                        <button
                            class="rounded-lg border border-slate-200 dark:border-slate-700 px-3 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-800">Twitter</button>
                    </div>
                </div> --}}
            </div>

            <p class="text-center text-sm text-slate-600 dark:text-slate-400 mt-4">Don't have an account? <a
                    href="#" class="text-blue-600 hover:text-blue-700 font-medium">Sign up</a></p>
        </div>
    </main>

    <!-- Tiny toast (JS only, optional) -->
    <div id="toast"
        class="hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50 bg-slate-900 text-white text-sm px-4 py-2 rounded-full shadow-lg">
        Signed in!</div>

    <script>
        // Theme toggle (persists per session in memory)
        const html = document.documentElement;
        const themeBtn = document.getElementById('themeToggle');
        themeBtn.addEventListener('click', () => {
            html.classList.toggle('dark');
        });

        // Show / hide password
        const pw = document.getElementById('password');
        const toggle = document.getElementById('togglePassword');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');
        toggle.addEventListener('click', () => {
            const isHidden = pw.type === 'password';
            pw.type = isHidden ? 'text' : 'password';
            eyeOpen.classList.toggle('hidden', !isHidden);
            eyeClosed.classList.toggle('hidden', isHidden);
        });

        // Submit button UX (spinner)
        const form = document.getElementById('loginForm');
        const btn = document.getElementById('submitBtn');
        const spinner = document.getElementById('spinner');
        const btnText = document.getElementById('btnText');
        const toast = document.getElementById('toast');

        form.addEventListener('submit', (e) => {
            // If you're using Laravel, REMOVE the next two lines to let it submit normally
            // e.preventDefault();
            // fakeSuccess();

            // UX while submitting
            btn.disabled = true;
            spinner.classList.remove('hidden');
            btnText.textContent = 'Signing in...';
        });

        function fakeSuccess() {
            setTimeout(() => {
                btn.disabled = false;
                spinner.classList.add('hidden');
                btnText.textContent = 'Sign in';
                toast.classList.remove('hidden');
                setTimeout(() => toast.classList.add('hidden'), 2000);
            }, 1200);
        }
    </script>
</body>

</html>
