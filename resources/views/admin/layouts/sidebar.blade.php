<aside id="sidebar" class="fixed z-40 h-screen bg-[#16163f] text-white w-64 flex flex-col -translate-x-full md:translate-x-0 transition-transform" aria-label="Admin navigation">
    <div class="pf-admin-brand">
        <a href="{{ route('admin.dashboard.index') }}" class="pf-admin-brand-link">
            <span class="pf-admin-brand-emblem"><i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i></span>
            <span class="pf-admin-brand-copy"><strong>PYARE</strong><small>FOUNDATION · ADMIN</small></span>
        </a>
    </div>
    <div class="pf-admin-sidebar-scroll flex-1 overflow-y-auto">
        <div class="pf-admin-nav-label">WORKSPACE</div>
        @include('admin.layouts.navbar')
    </div>
    <div class="pf-admin-sidebar-footer">
        @auth
            <div class="pf-admin-sidebar-user">
                <span class="pf-admin-sidebar-avatar">{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</span>
                <span class="pf-admin-sidebar-user-copy"><strong>{{ auth()->user()->name ?? 'Staff Member' }}</strong><small>Staff account</small></span>
            </div>
        @endauth
        <form method="POST" action="{{ route('logout') }}">@csrf
            <button type="submit" class="pf-admin-logout"><i class="fa-solid fa-arrow-right-from-bracket" aria-hidden="true"></i><span>Log out</span></button>
        </form>
    </div>
</aside>
