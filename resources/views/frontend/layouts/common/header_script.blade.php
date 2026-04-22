
<script src="{{ asset('backend/tailwind-css/js/3.4.17') }}"></script>


<!-- page css -->
@yield('page_css')

<!-- Swiper CSS-->
<link rel="stylesheet" href="{{ asset('frontend/swipper@10/css/swiper-bundle.min.css') }}" />
<!--font-awesome css-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- Fancybox css-->
<link rel="stylesheet" href="{{ asset('frontend/fancybox/css/fancybox.css') }}" />


<link rel="stylesheet" href="{{ asset('backend/toaster/css/toastr.min.css') }}" />

<style>
    /* Removed @apply directive */

    .swiper-button-next::after,
    .swiper-button-prev::after {
        display: none;
    }
</style>
