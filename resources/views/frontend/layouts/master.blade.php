<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        use Illuminate\Support\Str;
    @endphp
    @if (isset($setting))
        <title>@yield('title') | {{ $setting->meta_title ?? '' }}</title>

        <meta name="description" content="{!! Str::limit(strip_tags($setting->meta_description), 160, ' ...') !!}">
        <meta name="keywords" content="{!! strip_tags($setting->meta_keywords) !!}">

        @if (is_file('uploads/settings/' . $setting->favicon_path))
            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('uploads/settings/' . $setting->favicon_path) }}"
                type="image/x-icon">
        @endif
    @endif

    @include('frontend.layouts.common.header_script')
    
    <!-- Option A: Poppins (headings) + Hind (body) -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Hind:wght@400;500&display=swap" rel="stylesheet">

<!-- Option B: Teko (headings) + Mukta (body) -->
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@600;700&family=Mukta:wght@400;600&display=swap" rel="stylesheet">

</head>

<body class="font-sans">
    @include('frontend.layouts.topbar')

    @include('frontend.layouts.header')



    @yield('content')


    @include('frontend.layouts.footer')







    @include('frontend.layouts.common.footer_script')
    
    
  
    
<script>
  (() => {
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) return;
    const els = document.querySelectorAll('[data-animate]');
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('animate-in');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.15 });
    els.forEach(el => {
      el.classList.add('will-animate');
      io.observe(el);
    });
  })();
</script>

<style>
    @media (prefers-reduced-motion: no-preference) {
    .will-animate { opacity: 0; transform: translateY(16px); transition: opacity .6s ease, transform .6s ease; }
    .animate-in   { opacity: 1; transform: translateY(0); }
    /* Staggers */
    .delay-1 { transition-delay: .08s }
    .delay-2 { transition-delay: .16s }
    .delay-3 { transition-delay: .24s }
  }
  
  html {
    scroll-behavior: smooth;
  }
</style>

    
</body>

</html>
