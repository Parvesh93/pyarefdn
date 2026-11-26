<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
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

    @include('admin.layouts.common.header_script')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
<style>
body.pf-admin-body{font-family:'DM Sans',Arial,sans-serif;background:#f7f8fb;color:#1c203b}
.pf-admin-body *, .pf-admin-body *::before,.pf-admin-body *::after{box-sizing:border-box}
.pf-admin-body #sidebar{background:#16163f!important;width:264px;box-shadow:3px 0 25px #16163f0c}
.pf-admin-body .pf-admin-content{min-width:0;max-width:100%;background:#f7f8fb}
.pf-admin-body .pf-admin-brand{padding:25px 20px 22px;border-bottom:1px solid #ffffff13}
.pf-admin-body .pf-admin-brand-link{display:flex;align-items:center;gap:12px;color:#fff;text-decoration:none}
.pf-admin-body .pf-admin-brand-emblem{width:41px;height:41px;border-radius:11px;background:#f46226;display:grid;place-items:center;color:white;font-size:18px;flex:none}
.pf-admin-body .pf-admin-brand-copy{display:flex;flex-direction:column;gap:4px}
.pf-admin-body .pf-admin-brand-copy strong{font-family:'Manrope',sans-serif;font-size:18px;letter-spacing:.04em;line-height:1;font-weight:800}
.pf-admin-body .pf-admin-brand-copy small{font-size:9px;letter-spacing:.105em;color:#aaaecb;font-weight:800}
.pf-admin-body .pf-admin-nav-label{padding:26px 27px 3px;font-size:10px;font-weight:800;letter-spacing:.16em;color:#747aa6}
.pf-admin-body .pf-admin-sidebar-scroll{scrollbar-width:thin;scrollbar-color:#4b4e75 transparent}
.pf-admin-body #sidebar nav{overflow:visible}
.pf-admin-body #sidebar nav>ul{padding:11px 13px 25px!important;display:flex;flex-direction:column;gap:3px}
.pf-admin-body #sidebar nav>ul>li,.pf-admin-body #sidebar nav>ul>div{margin:0!important;list-style:none}
.pf-admin-body #sidebar nav>ul>li>a,.pf-admin-body #sidebar nav>ul>div>li>a,.pf-admin-body #sidebar nav>ul>div>li>button{display:flex!important;align-items:center;gap:11px;width:100%;min-height:43px;padding:10px 13px!important;border-radius:8px!important;text-decoration:none;color:#bbc1dc!important;background:transparent!important;font-size:12px;font-weight:650;transition:background .18s,color .18s}
.pf-admin-body #sidebar nav>ul>li>a:hover,.pf-admin-body #sidebar nav>ul>div>li>a:hover,.pf-admin-body #sidebar nav>ul>div>li>button:hover{background:#ffffff13!important;color:#fff!important}
.pf-admin-body #sidebar nav>ul>li>a img,.pf-admin-body #sidebar nav>ul>div>li>a img,.pf-admin-body #sidebar nav>ul>div>li>button img{width:18px!important;height:18px!important;object-fit:contain;filter:brightness(0) invert(.77)}
.pf-admin-body #sidebar nav>ul>div>li>button span.text-white,.pf-admin-body #sidebar nav>ul>div>li>button span.flex-1,.pf-admin-body #sidebar nav>ul>div>li>a{color:inherit!important}
.pf-admin-body #sidebar nav a[class*="bg-\\[\\#004f4f\\]"],.pf-admin-body #sidebar nav a[href]:is(:hover){background:#ffffff13!important;color:#fff!important}
.pf-admin-body #sidebar nav ul ul{margin:3px 0 10px 17px!important;padding-left:10px;border-left:1px solid #ffffff1e}
.pf-admin-body #sidebar nav ul ul a{color:#aab1cf!important;padding:9px 12px!important;font-size:11px;line-height:1.5;display:block;border-radius:6px;text-decoration:none}
.pf-admin-body #sidebar nav ul ul a:hover{background:#ffffff12!important;color:#fff!important}
.pf-admin-body .pf-admin-sidebar-footer{border-top:1px solid #ffffff16;padding:15px 16px 20px;background:#131333}
.pf-admin-body .pf-admin-sidebar-user{display:flex;align-items:center;gap:10px;margin-bottom:14px;min-width:0}
.pf-admin-body .pf-admin-sidebar-avatar{width:35px;height:35px;border-radius:9px;background:#ffffff1a;color:#fff;display:grid;place-items:center;font-size:14px;font-weight:800}
.pf-admin-body .pf-admin-sidebar-user-copy{min-width:0;display:flex;flex-direction:column}
.pf-admin-body .pf-admin-sidebar-user-copy strong{font-size:12px;color:#fff;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.pf-admin-body .pf-admin-sidebar-user-copy small{font-size:10px;color:#939abb;margin-top:3px}
.pf-admin-body .pf-admin-logout{width:100%;height:40px;display:flex;align-items:center;justify-content:center;gap:11px;color:#dce0f7;background:#ffffff13;border:1px solid #ffffff15;border-radius:8px;font-size:12px;font-weight:800}
.pf-admin-body .pf-admin-logout:hover{background:#ffffff24}
.pf-admin-body .pf-admin-topbar{height:76px;padding:12px clamp(20px,3vw,48px)!important;background:#fff;border-bottom:1px solid #e9eaf0;box-shadow:none!important;gap:16px;z-index:30}
.pf-admin-body .pf-admin-topbar-title{display:flex;flex-direction:column;gap:3px}
.pf-admin-body .pf-admin-topbar-overline{font-size:9px;letter-spacing:.12em;color:#9a9faf;font-weight:800}
.pf-admin-body .pf-admin-topbar-title strong{font-size:14px;font-family:'Manrope',sans-serif;color:#222441;font-weight:800}
.pf-admin-body .pf-admin-site-link{margin-left:auto;display:inline-flex;align-items:center;gap:10px;color:#5f6575;text-decoration:none;font-weight:700;font-size:12px;white-space:nowrap}
.pf-admin-body .pf-admin-site-link:hover{color:#f46226}
.pf-admin-body .pf-admin-notification-btn{width:39px;height:39px;display:grid;place-items:center;background:#f7f8fb;border:1px solid #eeeef2;border-radius:9px}
.pf-admin-body #notification-count{width:auto;min-width:16px;padding:0 3px;height:16px;font-size:9px}
.pf-admin-body .pf-admin-notifications{max-width:calc(100vw - 32px);border:1px solid #e9eaf0}
.pf-admin-body .pf-admin-topbar img[alt="User"]{width:37px!important;height:37px!important;object-fit:cover;border:2px solid #f3e9e4;border-radius:50%}
.pf-admin-body .pf-admin-content>main:not(.pfs-dashboard){max-width:100%;min-width:0}
.pf-admin-body .dataTables_wrapper .dataTables_filter input,.pf-admin-body input[type=text]:not(.hidden),.pf-admin-body select,.pf-admin-body textarea{border-radius:7px}
@media(min-width:768px){.pf-admin-body .pf-admin-content{margin-left:264px!important}}
@media(max-width:767px){.pf-admin-body #sidebar{width:min(82vw,290px)}.pf-admin-body .pf-admin-topbar{padding:12px 16px!important;height:69px}.pf-admin-body .pf-admin-site-link span{display:none}.pf-admin-body .pf-admin-topbar-title strong{font-size:12px}.pf-admin-body .pf-admin-topbar>div:last-child{gap:11px}}
@media(prefers-reduced-motion:reduce){.pf-admin-body *{transition:none!important}}
</style>
  

</head>

<body class="pf-admin-body bg-gray-100 text-gray-800">
    <div class="flex min-h-screen">

        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        <div class="pf-admin-content flex-1 md:ml-64 flex flex-col overflow-hidden">
            <!-- Navbar Include -->
            @include('admin.layouts.menu')


            @yield('adminContent')


        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    @include('admin.layouts.common.footer_script')


</body>

</html>
