<header class="pf-site-header bg-white shadow-sm relative z-50">
    <div class="pf-header-inner mx-auto px-4 md:px-14 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a class="pf-header-brand" href="{{ route('home') }}">
            <img src="{{ asset('uploads/settings/' . $setting->logo_path) }}" alt="Logo" class="w-60 h-auto" />
        </a>

        <!-- Hamburger -->
        <button id="menu-toggle" type="button" aria-label="Toggle navigation menu" aria-controls="menu" aria-expanded="false" class="pf-header-toggle md:hidden text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Nav Menu -->
        <nav id="menu"
            class="pf-header-nav hidden md:flex flex-col md:flex-row md:items-center md:space-x-6 w-full md:w-auto bg-white md:bg-transparent absolute md:static top-full left-0 border-t md:border-none px-4 md:px-0 py-4 md:py-0">
            <a href="{{ route('home') }}"
                class="block py-2 md:py-0 text-sm font-semibold hover:text-orange-600">HOME</a>

            <!-- ABOUT US Dropdown -->
            {{-- <div class="relative group" x-data="{ open: false }">
                <!-- Button -->
                <button @click="open = !open"
                    class="block py-2 md:py-0 text-sm font-semibold hover:text-orange-600 flex items-center gap-1 focus:outline-none">
                    ABOUT US
                    <span class="text-xs">
                        <svg class="w-4 h-4 transform transition-transform duration-200"
                            :class="open ? 'rotate-180 text-orange-600' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>

                <!-- Dropdown -->
                <div x-show="open" @click.outside="open = false"
                    class="absolute bg-white shadow-lg rounded-md w-[280px] z-50" style="top: 100%; margin-top: 0"
                    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                    <div class="py-2">
                        <a href="{{ route('about-organization') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('about-organization') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Organisation
                        </a>

                        <a href="{{ route('about-pyare-lal') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('about-pyare-lal') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            About Pyare Lal
                        </a>

                        <a href="{{ route('about-president') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('about-president') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            About President
                        </a>
                    </div>
                </div>
            </div> --}}

            <div class="relative group" x-data="{ open: false }">
                <!-- Button -->
                <button @click="open = !open"
                    class="block py-2 md:py-0 text-sm font-semibold flex items-center gap-1 focus:outline-none transition-colors duration-200
        {{ request()->routeIs(['about-organization', 'about-pyare-lal', 'about-president']) ? 'text-orange-600' : '' }}"
                    :class="open ? 'text-orange-600' : 'hover:text-orange-600'">
                    ABOUT US
                    <span class="text-xs">
                        <svg class="w-4 h-4 transform transition-transform duration-200"
                            :class="open ? 'rotate-180 text-orange-600' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>

                <!-- Dropdown -->
                <div x-show="open" @click.outside="open = false"
                    class="absolute bg-white shadow-lg rounded-md w-[280px] z-50" style="top: 100%; margin-top: 0"
                    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                    <div class="py-2">
                        <a href="{{ route('about-organization') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('about-organization') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Organisation
                        </a>

                        <a href="{{ route('about-pyare-lal') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('about-pyare-lal') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            About Pyare Lal
                        </a>

                        <a href="{{ route('about-president') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('about-president') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            About President
                        </a>
                    </div>
                </div>
            </div>




            <!-- OUR PROJECTS Dropdown -->
            <div class="relative group" x-data="{ open: false }">
                <!-- Main button -->
                <button @click="open = !open"
                    class="block py-2 md:py-0 text-sm font-semibold flex items-center gap-1 focus:outline-none transition-colors duration-200
        {{ request()->routeIs([
            'our-project.female-health-campaign',
            'plantation-page',
            'rudra-page',
            'govind-page',
            'shambhoo-page',
            'our-project.skill-development',
            'our-project.female-health-hygiene',
            'our-project.avadhoot-bal-seva',
            'our-project.health-awareness',
            'our-project.happiness-wellness',
            'our-project.women-employment',
            'our-project.pradhan-mantri-jan-aushadhi-kendra',
            'our-project.journal',
            'our-project.lok-nyay-seva-kendra',
            'our-project.project-bhairavi',
        ])
            ? 'text-orange-600'
            : '' }}"
                    :class="open ? 'text-orange-600' : 'hover:text-orange-600'">
                    OUR PROJECTS
                    <span class="text-xs">
                        <svg class="w-4 h-4 transform transition-transform duration-200"
                            :class="open ? 'rotate-180 text-orange-600' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.outside="open = false"
                    class="absolute bg-white shadow-lg rounded-md w-[280px] z-50" style="top: 100%; margin-top: 0"
                    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                    <div class="py-2">
                        
                         <a href="{{ route('our-project.project-bhairavi') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('our-project.project-bhairavi') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Project Bhairavi
                        </a>
                        
                         <a href="{{ route('our-project.lok-nyay-seva-kendra') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('our-project.lok-nyay-seva-kendra') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Lok Nyay Seva Kendra
                        </a>
                        
                        <a href="{{ route('our-project.female-health-campaign') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('our-project.female-health-campaign') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Intensive Care For Female Health Camps
                        </a>

                        <a href="{{ route('plantation-page', 'plantation') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('plantation-page') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Plantation Drive
                        </a>

                        <a href="{{ route('rudra-page', 'Rudra') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('rudra-page') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Project Rudra
                        </a>

                        <a href="{{ route('govind-page', 'Govind') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('govind-page') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Project Govind Leela
                        </a>

                        <a href="{{ route('shambhoo-page', 'Shambhoo') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('shambhoo-page') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Project Shambhoo Leela
                        </a>

                        <a href="{{ route('our-project.skill-development') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('our-project.skill-development') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Skill Development Program
                        </a>

                        <a href="{{ route('our-project.female-health-hygiene') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('our-project.female-health-hygiene') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Workshops on Female Health and Hygiene
                        </a>

                        <a href="{{ route('our-project.avadhoot-bal-seva') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('our-project.avadhoot-bal-seva') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Avadhoot Bal Seva Kendra
                        </a>

                        <a href="{{ route('our-project.health-awareness') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('our-project.health-awareness') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Health Awareness Campaigns
                        </a>

                        <a href="{{ route('our-project.happiness-wellness') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('our-project.happiness-wellness') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Happiness and Wellness Program
                        </a>

                        <a href="{{ route('our-project.women-employment') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('our-project.women-employment') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Women Empowerment
                        </a>

                        <a href="{{ route('our-project.pradhan-mantri-jan-aushadhi-kendra') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('our-project.pradhan-mantri-jan-aushadhi-kendra') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Pradhan Mantri Jan Aushadhi Kendra
                        </a>

                        <a href="{{ route('our-project.journal') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500
                {{ request()->routeIs('our-project.journal') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Journal of Interdisciplinary Approaches
                        </a>
                    </div>
                </div>
            </div>



            <!-- JOIN US Dropdown -->


            <div class="relative group" x-data="{ open: false }">
                <!-- Main button -->
                <button @click="open = !open"
                    class="block py-2 md:py-0 text-sm font-semibold flex items-center gap-1 focus:outline-none transition-colors duration-200
        {{ request()->routeIs('volunteer-member') || request()->routeIs('annual-member') ? 'text-orange-600' : '' }}"
                    :class="open ? 'text-orange-600' : 'hover:text-orange-500'">
                    JOIN US
                    <span class="text-xs">
                        <svg class="w-4 h-4 transform transition-transform duration-200"
                            :class="open ? 'rotate-180 text-orange-600' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.outside="open = false"
                    class="absolute bg-white shadow-lg rounded-md w-[270px] z-50" style="top: 100%; margin-top: 0"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                    <div class="py-2">
                        <a href="{{ route('volunteer-member') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 {{ request()->routeIs('volunteer-member') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Become Volunteer
                        </a>
                        <a href="{{ route('annual-member') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 {{ request()->routeIs('annual-member') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Become Annual Member
                        </a>
                    </div>
                </div>
            </div>




            <a href="{{ route('contact') }}"
                class="block py-2 md:py-0 text-sm font-semibold flex items-center gap-1 transition-colors duration-200 
    {{ request()->routeIs('contact') ? 'text-orange-600' : 'hover:text-orange-600' }}">
                CONTACT US
            </a>

            <a href="{{ route('blog') }}"
                class="block py-2 md:py-0 text-sm font-semibold flex items-center gap-1 transition-colors duration-200 
    {{ request()->routeIs('blog') ? 'text-orange-600' : 'hover:text-orange-600' }}">
                BLOGS
            </a>


            <a href="{{ route('donation-page') }}"
                class="pf-header-donate block py-3 md:py-2 px-6 rounded-full text-center md:ml-4 font-semibold transition-all duration-200
   {{ request()->routeIs('donation-page')
       ? 'bg-[#f46226] text-white shadow-md scale-100'
       : 'bg-[#f46226] hover:bg-[#d8500f] text-white' }}">
                DONATE NOW
            </a>
        </nav>
    </div>
</header>

<style>
/* Shared site header: existing Alpine dropdowns and menu IDs retained. */
.pf-site-header{position:relative!important;z-index:1000!important;background:#fff!important;border-bottom:1px solid #eeecea;box-shadow:0 4px 22px rgba(22,22,63,.045)!important;font-family:'DM Sans',Arial,sans-serif}
.pf-site-header .pf-header-inner{width:100%;max-width:1544px;margin:0 auto;padding:13px clamp(18px,3vw,52px)!important;gap:24px;min-height:82px}
.pf-site-header .pf-header-brand{flex:none;display:flex;align-items:center}
.pf-site-header .pf-header-brand img{width:clamp(190px,17vw,236px)!important;height:auto!important;max-height:58px;object-fit:contain;object-position:left center}
.pf-site-header .pf-header-nav{align-items:center;gap:clamp(12px,1.65vw,25px)!important}
.pf-site-header .pf-header-nav>a:not(.pf-header-donate),.pf-site-header .pf-header-nav>div>button{display:inline-flex;align-items:center;gap:6px;padding:10px 0!important;color:#16163f;font-size:12px!important;font-weight:800!important;white-space:nowrap;line-height:1.4;letter-spacing:.01em;transition:color .2s}
.pf-site-header .pf-header-nav>a:not(.pf-header-donate):hover,.pf-site-header .pf-header-nav>div>button:hover{color:#f46226!important}
.pf-site-header .pf-header-nav>div[x-data]>div[x-show]{border:1px solid #eee7e3;border-radius:8px!important;box-shadow:0 14px 32px rgba(15,18,40,.12)!important;overflow-y:auto;max-height:min(65vh,530px);z-index:1001!important}
.pf-site-header .pf-header-nav>div[x-data]>div[x-show] a{display:block;padding:11px 16px!important;font-size:12px!important;line-height:1.5;color:#25283e;transition:background .2s,color .2s}
.pf-site-header .pf-header-nav>div[x-data]>div[x-show] a:hover{background:#fff2ea!important;color:#e6531f!important}
.pf-site-header .pf-header-nav a.pf-header-donate{flex:none;display:inline-flex!important;align-items:center;justify-content:center;min-height:45px;margin-left:5px!important;padding:12px 21px!important;border-radius:5px!important;background:#f46226!important;color:#fff!important;font-size:12px!important;font-weight:800!important;line-height:1.2;letter-spacing:.02em;box-shadow:none!important;white-space:nowrap;transition:background .2s,transform .2s}
.pf-site-header .pf-header-nav a.pf-header-donate:hover{background:#d94f1a!important;transform:translateY(-1px)}
.pf-site-header .pf-header-toggle{display:none;align-items:center;justify-content:center;width:42px;height:42px;flex:none;border:1px solid #eee6e3;border-radius:6px;color:#16163f!important}
@media(max-width:1150px) and (min-width:768px){.pf-site-header .pf-header-inner{gap:12px;padding-inline:18px!important}.pf-site-header .pf-header-brand img{width:174px!important}.pf-site-header .pf-header-nav{gap:11px!important}.pf-site-header .pf-header-nav>a:not(.pf-header-donate),.pf-site-header .pf-header-nav>div>button{font-size:11px!important}.pf-site-header .pf-header-nav a.pf-header-donate{padding:10px 12px!important}}
@media(max-width:767px){
 .pf-site-header .pf-header-inner{min-height:70px;padding:10px 18px!important;gap:10px}
 .pf-site-header .pf-header-brand img{width:190px!important;max-height:50px}
 .pf-site-header .pf-header-toggle{display:flex}
 .pf-site-header nav.pf-header-nav{position:absolute!important;top:100%;left:0;right:0;width:100%;max-height:calc(100dvh - 80px);overflow-y:auto;background:#fff!important;box-shadow:0 16px 32px #16163f18;border-top:1px solid #ece7e4;padding:14px 20px 22px!important;gap:0!important;align-items:stretch}
 .pf-site-header nav.pf-header-nav:not(.hidden){display:flex!important;flex-direction:column!important}
 .pf-site-header .pf-header-nav>a:not(.pf-header-donate),.pf-site-header .pf-header-nav>div>button{display:flex!important;width:100%;justify-content:space-between;min-height:45px;padding:12px 5px!important;border-bottom:1px solid #f1edeb;font-size:13px!important}
 .pf-site-header .pf-header-nav>div[x-data]>div[x-show]{position:static!important;width:100%!important;margin:0 0 8px!important;box-shadow:none!important;border:0!important;border-left:2px solid #f46226!important;border-radius:0!important;max-height:none!important}
 .pf-site-header .pf-header-nav>div[x-data]>div[x-show] a{padding:11px 16px!important}
 .pf-site-header .pf-header-nav a.pf-header-donate{margin:18px 0 0!important;width:100%;min-height:46px}
}
@media(prefers-reduced-motion:reduce){.pf-site-header *{transition:none!important}}
</style>
