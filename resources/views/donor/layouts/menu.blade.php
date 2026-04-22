<header class="flex items-center justify-between px-6 py-4 bg-white shadow sticky top-0 z-30">
    <div class="flex items-center gap-3 w-full max-w-xl">
        <button id="menu-item" class="md:hidden">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="relative w-full">
            <input type="text" placeholder="Search or type"
                class="w-full bg-gray-100 px-4 py-2 pl-10 rounded text-sm" />
        </div>
    </div>

    @if(Auth::guard('donor')->check())
    @php
        $donor = Auth::guard('donor')->user();
    @endphp

    <!-- Right Side -->
    <div class="flex items-center gap-5 relative">

        <!-- User Avatar -->
        <a href="{{ route('donor.edit.profile', $donor->id) }}">
            <img 
                src="{{ asset('uploads/profile/'.$donor->photo) }}" 
                class="w-8 h-8 rounded-full object-cover" 
                alt="{{ $donor->name ?? 'Donor' }}" 
            />
        </a>

    </div>
@endif


</header>

