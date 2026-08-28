<aside class="d-sidebar">
    <div class="brand">
        <div class="brand-logo">
            EY
        </div>
        <div class="brand-text">
            <div class="brand-name">EduYouth</div>
            <div class="brand-tag">EY</div>
        </div>
    </div>

    <nav class="nav-section">
        <div class="nav-label">Workspace</div>

        <a class="nav-link {{ request()->routeIs('admin.home') ? 'is-active' : '' }}"
            href="{{ route('admin.home') }}">
            <i class="bi bi-house"></i>
            <span>{{__('admin.dashboard')}}</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.admins.*') ? 'is-active' : '' }}"
            href="{{ route('admin.admins.all') }}">
            <i class="bi bi-shield"></i>
            <span>{{__('admin.admins')}}</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.visitorsMessages.*') ? 'is-active' : '' }}"
            href="{{ route('admin.visitorsMessages.all') }}">
            <i class="bi bi-shield"></i>
            <span>{{__('admin.visitorsMessages')}}</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.settings.*') ? 'is-active' : '' }}"
            href="{{ route('admin.settings.all') }}">
            <i class="bi bi-gear"></i>
            <span>{{__('admin.settings')}}</span>
        </a>
    </nav>
    <div class="sidebar-footer">
        <div class="workspace">
            <div class="workspace-avatar">
                {{ ucfirst(substr(Auth::guard('admin')->user()->name, 0, 1)) }}
            </div>
            <div class="workspace-text">
                <div class="workspace-name">
                    {{ Auth::guard('admin')->user()->email }}</div>
                <div class="workspace-role">admin</div>
            </div>
        </div>
    </div>
</aside>
