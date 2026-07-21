<header class="d-topbar">
    <div class="crumbs">
        <button class="hamburger" data-drawer-open="" aria-label="Open navigation">
            <i class="bi bi-list"></i>
        </button>
        <x-breadcrumbs />
    </div>
    <div class="topbar-actions">
        <button class="cmd" data-palette-open="">
            <i class="bi bi-search"></i>
            <span>{{__('admin.search')}} </span>
            <kbd class="kbd">⌘K</kbd>
        </button>

        {{-- dark theme --}}
        <button class="icon-btn" id="themeToggle" aria-label="Toggle theme">
            <svg viewBox="0 0 32 32" fill="none" stroke="currentColor"
                stroke-width="1.8">
                <path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"></path>
            </svg>
        </button>

        {{-- Localization Dropdown --}}
        <div class="relative inline-block" x-data="{ langOpen: false }" @click.away="langOpen = false">
            <div>
                <button @click="langOpen = !langOpen" type="button"
                    class="flex items-center justify-between gap-x-1.5 rounded-lg px-3 py-2 text-sm font-semibold
                    border border-slate-200 dark:border-slate-700 transition-all focus:outline-none"
                    aria-expanded="true" aria-haspopup="true">
                    <!-- Current Language Icon / Label -->
                    <span class="flex items-center gap-2">
                        <span class="text-base leading-none">
                            <i class="bi bi-globe-europe-africa"></i>
                        </span>
                    </span>
                    <!-- Chevron Icon -->
                    <i class="bi bi-chevron-down" :class="{ 'rotate-180': langOpen }"></i>

                </button>
            </div>

            <!-- Dropdown Panel -->
            <div x-show="langOpen"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 rtl:right-auto rtl:left-0 z-50 mt-2 w-48 origin-top-right rtl:origin-top-left rounded-2xl bg-white dark:bg-slate-900 shadow-xl shadow-slate-200/50 dark:shadow-slate-950/40 border border-slate-100 dark:border-slate-700 ring-1 ring-black ring-opacity-5 focus:outline-none overflow-hidden"
                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    <a class="flex items-center gap-3 px-4 py-3 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition font-medium "
                        role="menuitem" tabindex="-1" onclick="changeLang('en')"
                        href="{{route('admin.lang',['locale'=>'en'])}}">
                        <span class="text-base leading-none">🇺🇸</span>English
                    </a>

                    <a class="flex items-center justify-between gap-3 px-4 py-3 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition font-medium"
                        role="menuitem" tabindex="-1" dir="rtl" onclick="changeLang('ar')"
                        href="{{route('admin.lang',['locale'=>'ar'])}}">
                        <span>العربية</span>
                        <span class="text-base leading-none">🇸🇾</span>
                    </a>

                </div>
            </div>
        </div>

        {{-- notification drop down --}}
        <div class="relative inline-block" x-data="{ notificationOpen: false }" @click.away="notificationOpen = false">
            <div>
                <button class="icon-btn relative" data-dropdown=""
                    aria-label="Notifications" type="button"
                    @click="notificationOpen = !notificationOpen">
                    <i class="bi bi-bell"></i>
                    <span class="absolute top-0 right-0 z-10 text-red-500 text-sm">2</span>
                </button>
            </div>

            <!-- Dropdown Panel -->
                <div x-show="notificationOpen"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 rtl:right-auto rtl:left-0 z-50 mt-2 w-96 origin-top-right rtl:origin-top-left rounded-2xl bg-slate-100 dark:bg-slate-900 shadow-xl shadow-slate-200/50 dark:shadow-slate-950/40 border border-slate-100 dark:border-slate-700 ring-1 ring-black ring-opacity-5 focus:outline-none overflow-hidden"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    <div class="dd-head">
                        <i class="bi bi-notification"></i>
                        {{__('admin.notifications')}}
                    </div>
                    <div class="dd-list">
                        <a class="dd-item" href="#">
                            <div class="dd-avatar a1">JD</div>
                            <div class="dd-body">
                                <div class="dd-text"><strong>John Doe</strong> liked
                                    your <em>post</em>
                                </div>
                                <div class="dd-time">5 MIN AGO</div>
                            </div>
                        </a>
                    </div>
                    <a class="dd-footer" href="#">{{__('admin.view all')}} </a>
                    </div>
            </div>
        </div>

        {{-- profile dropdown --}}
        <div class="relative inline-block" x-data="{ profileOpen: false }" @click.away="profileOpen = false">
            <div>
                <div class="avatar" data-dropdown="" tabindex="0" role="button"
                    aria-label="Account menu" @click="profileOpen = !profileOpen">
                    {{ ucfirst(substr(Auth::guard('admin')->user()->name,0,1)) }}
                </div>
            </div>

            <!-- Dropdown Panel -->
            <div x-show="profileOpen"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 rtl:right-auto rtl:left-0 z-50 mt-2 w-48 origin-top-right rtl:origin-top-left rounded-2xl bg-white dark:bg-slate-900 shadow-xl shadow-slate-200/50 dark:shadow-slate-950/40 border border-slate-100 dark:border-slate-700 ring-1 ring-black ring-opacity-5 focus:outline-none overflow-hidden"
                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    <div class="dd-profile-head">
                        <div class="dd-profile-name">
                            {{ Auth::guard('admin')->user()->name }}
                        </div>
                        <div class="dd-profile-email">
                            {{ Auth::guard('admin')->user()->email }}
                        </div>
                    </div>
                    <a class="dd-menu-item" href="#">
                        <i class="bi bi-gear"></i>
                        {{__('admin.settings')}}
                    </a>
                    <a class="dd-menu-item" href="#">
                        <i class="bi bi-person"></i>
                        {{__('admin.profile')}}
                    </a>
                    <div class="dd-divider"></div>
                    <button type="submit" form="logout" class="dd-menu-item danger" >
                        <i class="bi bi-door-closed"></i>
                        {{__('admin.logout')}}
                    </button>
                    <form action="{{ route('admin.logout') }}" method="post" id="logout" >
                        @csrf
                    </form>

                </div>
            </div>
        </div>

    </div>
</header>
