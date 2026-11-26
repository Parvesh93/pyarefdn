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

/* Cohesive management screens: record lists, editors, filters and settings. */
.pf-admin-body .pf-admin-page{min-width:0;width:100%;max-width:1580px;margin:0 auto;padding:26px clamp(16px,2.6vw,42px) 55px;font-family:'DM Sans',Arial,sans-serif}
.pf-admin-body .pf-admin-page>div,.pf-admin-body .pf-admin-page>main{max-width:100%;min-width:0}
.pf-admin-body .pf-admin-page>div.max-w-7xl,.pf-admin-body .pf-admin-page>div.max-w-5xl,.pf-admin-body .pf-admin-page>div.mx-10,.pf-admin-body .pf-admin-page>div.mx-4,.pf-admin-body .pf-admin-page>div.grid{margin-left:0!important;margin-right:0!important;width:100%;max-width:none!important}
.pf-admin-body .pf-admin-page>div.bg-white,.pf-admin-body .pf-admin-page>div.shadow-lg,.pf-admin-body .pf-admin-page>div.max-w-7xl,.pf-admin-body .pf-admin-page>div.max-w-5xl,.pf-admin-body .pf-admin-page>div.mx-10,.pf-admin-body .pf-admin-page>div.mx-4{border:1px solid #e9eaf0;border-radius:13px!important;box-shadow:0 5px 23px #20234008!important;background:#fff;margin-top:0!important;margin-bottom:17px!important;padding:24px!important}
.pf-admin-body .pf-admin-page main{background:transparent!important;padding:0!important;overflow:visible}
.pf-admin-body .pf-admin-page main>section,.pf-admin-body .pf-admin-page main>div.bg-white,.pf-admin-body .pf-admin-page main .shadow-md{border-color:#e9eaf0;box-shadow:0 5px 23px #20234008!important}
.pf-admin-body .pf-admin-page h1,.pf-admin-body .pf-admin-page h2,.pf-admin-body .pf-admin-page h3{font-family:'Manrope',Arial,sans-serif;letter-spacing:-.03em;color:#1d2040}
.pf-admin-body .pf-admin-page h1.text-2xl,.pf-admin-body .pf-admin-page h2.text-2xl{font-size:24px!important;font-weight:800!important;line-height:1.3}
.pf-admin-body .pf-admin-page h2.border-b,.pf-admin-body .pf-admin-page h1.border-b{border-color:#eef0f3;padding-bottom:17px;margin-bottom:20px}
.pf-admin-body .pf-admin-page :is(label){font-weight:700;color:#596176;font-size:12px}
.pf-admin-body .pf-admin-page input:not([type=checkbox]):not([type=radio]):not([type=hidden]),.pf-admin-body .pf-admin-page select,.pf-admin-body .pf-admin-page textarea{background:#fff!important;border:1px solid #e2e5ed!important;border-radius:8px!important;box-shadow:none!important;color:#232743;min-height:42px;padding:10px 12px}
.pf-admin-body .pf-admin-page input:focus,.pf-admin-body .pf-admin-page textarea:focus,.pf-admin-body .pf-admin-page select:focus{border-color:#f46226!important;outline:none!important;box-shadow:0 0 0 3px #f4622618!important}
.pf-admin-body .pf-admin-page input[type=checkbox],.pf-admin-body .pf-admin-page input[type=radio]{accent-color:#f46226}
.pf-admin-body .pf-admin-page .border-l-4{border-left-color:#f46226!important}
.pf-admin-body .pf-admin-page .bg-blue-500,.pf-admin-body .pf-admin-page .bg-blue-600,.pf-admin-body .pf-admin-page .bg-blue-400,.pf-admin-body .pf-admin-page .bg-cyan-500,.pf-admin-body .pf-admin-page .bg-teal-500,.pf-admin-body .pf-admin-page .bg-green-600{background:#f46226!important;color:white!important}
.pf-admin-body .pf-admin-page .hover\\:bg-blue-700:hover,.pf-admin-body .pf-admin-page .hover\\:bg-blue-600:hover,.pf-admin-body .pf-admin-page .hover\\:bg-cyan-600:hover{background:#d94e1a!important}
.pf-admin-body .pf-admin-page button,.pf-admin-body .pf-admin-page a.bg-blue-500,.pf-admin-body .pf-admin-page a.bg-blue-600{border-radius:7px;transition:background .2s,color .2s}
.pf-admin-body .pf-admin-page button:focus-visible,.pf-admin-body .pf-admin-page a:focus-visible{outline:2px solid #f46226;outline-offset:2px}
.pf-admin-body .pf-admin-page :is(table){width:100%;border-collapse:collapse;background:#fff}
.pf-admin-body .pf-admin-page :is(table) :is(thead,thead tr){background:#f7f8fb!important;color:#596174!important}
.pf-admin-body .pf-admin-page table th{font-family:'DM Sans',sans-serif;font-size:11px!important;font-weight:800!important;letter-spacing:.04em;color:#657085!important;padding:14px 16px!important;border-bottom:1px solid #e9eaf0!important;white-space:nowrap}
.pf-admin-body .pf-admin-page table td{padding:13px 16px!important;color:#4d5568;font-size:12px;line-height:1.6;border-bottom:1px solid #f0f1f5!important;vertical-align:middle}
.pf-admin-body .pf-admin-page table tbody tr:hover{background:#fffaf7}
.pf-admin-body .pf-admin-page table tbody tr:last-child td{border-bottom:0!important}
.pf-admin-body .pf-admin-page :is(.overflow-x-auto){max-width:100%;scrollbar-width:thin}
.pf-admin-body .pf-admin-page .dataTables_wrapper .dataTables_filter,.pf-admin-body .pf-admin-page .dataTables_wrapper .dataTables_length{margin-bottom:15px;color:#727989;font-size:12px}
.pf-admin-body .pf-admin-page .dataTables_wrapper .dataTables_info,.pf-admin-body .pf-admin-page .dataTables_wrapper .dataTables_paginate{padding-top:15px;font-size:12px;color:#737d8e}
.pf-admin-body .pf-admin-page .dataTables_wrapper .dataTables_paginate .paginate_button.current{background:#f46226!important;border-color:#f46226!important;color:#fff!important}
.pf-admin-body .pf-admin-page .dataTables_wrapper .dataTables_paginate .paginate_button:hover{background:#fff1e9!important;border-color:#f46226!important;color:#db501c!important}
.pf-admin-body .pf-admin-page .shadow-lg{box-shadow:0 5px 23px #20234009}
.pf-admin-body .pf-admin-page .rounded-xl{border-radius:10px}
.pf-admin-body .pf-admin-page .bg-\\[\\#003f3f\\]{background:#16163f!important}
.pf-admin-body .pf-admin-page .bg-\\[\\#f6f7fb\\]{background:transparent!important}
.pf-admin-body .pf-admin-page .pf-admin-section-heading{display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap;margin-bottom:21px}
.pf-admin-body .pf-admin-page .pf-admin-section-heading strong{font-size:11px;letter-spacing:.12em;font-weight:800;color:#f46226}
.pf-admin-body .pf-admin-page .pf-admin-section-heading h1{font-size:27px;font-weight:800;margin:8px 0 5px;color:#191c3b}
.pf-admin-body .pf-admin-page .pf-admin-section-heading p{font-size:12px;color:#7f8795;line-height:1.65;margin:0}
.pf-admin-body .pf-admin-page .pf-admin-section-heading a{color:#f46226;text-decoration:none;font-size:12px;font-weight:800}
@media(max-width:767px){.pf-admin-body .pf-admin-page{padding:20px 14px 38px}.pf-admin-body .pf-admin-page>div.max-w-7xl,.pf-admin-body .pf-admin-page>div.max-w-5xl,.pf-admin-body .pf-admin-page>div.mx-10,.pf-admin-body .pf-admin-page>div.mx-4{padding:16px!important}.pf-admin-body .pf-admin-page table th,.pf-admin-body .pf-admin-page table td{padding:11px 12px!important}}

/* Phase 3: Content, people and editorial management */
.pf-admin-body .pf-admin-content-page>.grid{gap:20px!important;align-items:start}
.pf-admin-body .pf-admin-content-page>.grid>.col-span-1,.pf-admin-body .pf-admin-content-page>.grid>.col-span-2{min-width:0;margin:0!important}
.pf-admin-body .pf-admin-content-page>.grid>.col-span-1>form,.pf-admin-body .pf-admin-content-page>.grid>.col-span-2>div,.pf-admin-body .pf-admin-content-page>.grid>.col-span-2{background:#fff;border:1px solid #e9eaf0;border-radius:12px!important;box-shadow:0 5px 24px #20234009!important}
.pf-admin-body .pf-admin-content-page>.grid>.col-span-1>form{padding:23px!important}
.pf-admin-body .pf-admin-content-page>.grid>.col-span-2{overflow:hidden}
.pf-admin-body .pf-admin-content-page>.grid>.col-span-2>.bg-white{padding:22px!important}
.pf-admin-body .pf-admin-content-page .border-l-4.bg-white{background:transparent!important;box-shadow:none!important;border-left:0!important;border-bottom:1px solid #eef0f3;margin-bottom:18px!important;padding-bottom:15px}
.pf-admin-body .pf-admin-content-page .border-l-4 h2,.pf-admin-body .pf-admin-content-page .border-l-4 h5{font-family:'Manrope',Arial,sans-serif;font-weight:800!important;color:#1e2240!important;letter-spacing:-.025em;font-size:19px!important}
.pf-admin-body .pf-admin-content-page .bg-blue-50{background:#fff!important}
.pf-admin-body .pf-admin-content-page .text-blue-500,.pf-admin-body .pf-admin-content-page .text-blue-600{color:#ef632d!important}
.pf-admin-body .pf-admin-content-page :is(button[type=submit],input[type=submit]){font-weight:800;border-radius:8px!important}
.pf-admin-body .pf-admin-content-page :is(input[type=file]){max-width:100%;height:auto;cursor:pointer}
.pf-admin-body .pf-admin-content-page input[type=file]::file-selector-button{border:0;background:#f2f3f8;color:#343950;border-radius:6px;padding:9px 12px;margin-right:14px;cursor:pointer;font-size:11px;font-weight:800}
.pf-admin-body .pf-admin-content-page .bg-white.rounded-xl.shadow-md,.pf-admin-body .pf-admin-content-page .rounded-xl.shadow-md{border:1px solid #e9eaf0;border-radius:12px!important;box-shadow:0 5px 22px #2023400b!important}
.pf-admin-body .pf-admin-content-page .rounded-xl.shadow-md img{object-fit:cover}
.pf-admin-body .pf-admin-content-page .fc-toolbar-title{font-family:'Manrope',Arial,sans-serif!important;color:#1c2040!important;font-size:18px!important;font-weight:800!important}
.pf-admin-body .pf-admin-content-page .fc-button-primary{background:#16163f!important;border-color:#16163f!important;border-radius:6px!important;font-size:12px!important;font-weight:700!important}
.pf-admin-body .pf-admin-content-page .fc-button-primary:not(:disabled):hover,.pf-admin-body .pf-admin-content-page .fc-button-primary.fc-button-active{background:#f46226!important;border-color:#f46226!important}
.pf-admin-body .pf-admin-content-page .fc-day-today{background:#fff3ed!important;border-color:#f46226!important}
.pf-admin-body .pf-admin-content-page #calendar{border:1px solid #e9eaf0;border-radius:12px!important;box-shadow:0 5px 22px #20234008!important;padding:20px!important;min-width:0}
.pf-admin-body .pf-admin-content-page .ql-toolbar.ql-snow{border-color:#e6e8ef!important;border-radius:8px 8px 0 0;background:#fafafd}
.pf-admin-body .pf-admin-content-page .ql-container.ql-snow{border-color:#e6e8ef!important;border-radius:0 0 8px 8px}
.pf-admin-body .pf-admin-content-page .tox-tinymce{border-color:#e6e8ef!important;border-radius:8px!important}
.pf-admin-body .pf-admin-content-page .fixed.inset-0.z-50>div,.pf-admin-body .pf-admin-content-page [id^="editModal-"]>div{border-radius:12px!important}
.pf-admin-body .pf-admin-content-page .grid.grid-cols-1.md\\:grid-cols-3{grid-template-columns:minmax(270px,1fr) minmax(0,2fr)}
@media(max-width:1024px){.pf-admin-body .pf-admin-content-page .grid.grid-cols-1.md\\:grid-cols-3{grid-template-columns:1fr}}
@media(max-width:767px){.pf-admin-body .pf-admin-content-page #calendar{padding:11px!important}.pf-admin-body .pf-admin-content-page>.grid>.col-span-1>form{padding:16px!important}.pf-admin-body .pf-admin-content-page .fc-toolbar-title{font-size:15px!important}}
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
