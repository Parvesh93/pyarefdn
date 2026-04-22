<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{ $setting->title }}</title>
  <script src="{{ asset('backend/tailwind-css/js/3.4.17') }}"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Preheader Text -->
  <span class="sr-only hidden">{{ $setting->title }}</span>

  <div class="max-w-xl mx-auto p-4 sm:p-6">
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="p-6">

        <!-- Title -->
        <h1 class="text-2xl font-semibold text-center text-indigo-600 mb-6">
          {{ $setting->title }}
        </h1>

        <!-- Greeting -->
        <p class="mb-4 text-base">
          <strong>{{ __('Hello') }}:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}
        </p>

        <!-- Message -->
        <p class="mb-4 text-base">
          {{ __('auth_forgot_password_title') }}
        </p>

        <!-- Reset Button -->
        @if(!empty($data['token']))
          <div class="text-center mb-6">
            <a href="{{ route('donor.password.reset', [$data['token'], $data['email']]) }}"
              class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition"
              target="_blank">
              {{ __('auth_reset') }}
            </a>
          </div>
        @endif

        <!-- Info -->
        <p class="mb-2 text-sm text-gray-700">
          {{ __('auth_token_expire') }}
        </p>
        <p class="mb-0 text-sm text-gray-700">
          {{ __('auth_security_alert') }}
        </p>

      </div>
    </div>
  </div>

</body>
</html>
