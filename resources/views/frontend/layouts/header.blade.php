<header class="bg-white shadow-sm relative z-50">
    <div class="mx-auto px-4 md:px-14 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}">
            <img src="{{ asset('uploads/settings/' . $setting->logo_path) }}" alt="Logo" class="w-60 h-auto" />
        </a>

        <!-- Hamburger -->
        <button id="menu-toggle" class="md:hidden text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Nav Menu -->
        <nav id="menu"
            class="hidden md:flex flex-col md:flex-row md:items-center md:space-x-6 w-full md:w-auto bg-white md:bg-transparent absolute md:static top-full left-0 border-t md:border-none px-4 md:px-0 py-4 md:py-0">
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
                        
                        <a href="{{ route('our-project.wellness-centres-for-females') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('our-project.wellness-centres-for-females') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Wellness Centres for Females
                        </a>
                        
                        <a href="{{ route('our-project.pathology-lab') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-yellow-500 
                {{ request()->routeIs('our-project.pathology-lab') ? 'bg-gray-200 text-yellow-500 font-semibold' : '' }}">
                            Pathology Lab
                        </a>
                        
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
                class="block py-3 md:py-2 px-6 rounded-full text-center md:ml-4 font-semibold transition-all duration-200
   {{ request()->routeIs('donation-page')
       ? 'bg-[#f46226] text-white shadow-md scale-100'
       : 'bg-[#f46226] hover:bg-[#d8500f] text-white' }}">
                DONATE NOW
            </a>
        </nav>
    </div>
</header>
