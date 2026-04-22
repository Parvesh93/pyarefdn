<div class="flex">
    <!-- Sidebar -->
    <aside id="sidebar"
        class="fixed z-40 h-screen bg-[#003f3f] text-white w-64 flex flex-col -translate-x-full md:translate-x-0 transition-transform">

        <!-- Scrollable Area -->
        <div class="flex-1 overflow-y-auto">

            <!-- Logo -->
            <div class="h-16 flex items-center justify-center border-b border-[#004f4f]">
                <img src="{{ asset('uploads/images/logo/logo.webp') }}" alt="Logo"
                    class="h-10 bg-white p-1 rounded-lg" />
            </div>

            @include('donor.layouts.navbar')
        </div>

        <!-- Logout Button - Fixed Bottom -->
        <div class="flex-shrink-0 p-4 border-t border-[#004f4f] bg-[#003f3f]">
            <form method="POST" action="{{ route('donor.logout') }}">
                @csrf

                <button
                    class="w-full bg-white text-[#003f3f] py-2 rounded hover:bg-gray-100 flex items-center justify-center gap-2">
                    <img src="{{ asset('uploads/images/icon/logout-03.svg') }}" alt="Icon" class="w-5 h-5" />
                    Log out
                </button>
            </form>

        </div>
    </aside>


</div>
