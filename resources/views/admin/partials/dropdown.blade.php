<!-- Component Container with Alpine state -->
<div x-data="{ open: false }" @click.outside="open = false"
    class="relative inline-block text-left">

    <!-- Dropdown Trigger Button -->
    <button @click="open = !open"
        class="inline-flex justify-center w-full rounded-lg border border-gray-300 shadow-sm px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-100 bg-slate-100 dark:bg-slate-950
        hover:bg-gray-50 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        :aria-expanded="open" aria-haspopup="true">
        @if(isset($name))
            <p class="mr-2">{{ucfirst($name)}}</p>
        @endif
        <i class="bi bi-chevron-down h-5 w-5 transform transition-transform duration-200"
            :class="open ? 'rotate-180' : ''"></i>

    </button>

    <!-- Dropdown Menu Box (With Transitions) -->
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg
        bg-white dark:bg-slate-300 ring-1 ring-black ring-opacity-5
        divide-y divide-gray-100 focus:outline-none z-50"
        role="menu" aria-orientation="vertical">

        <div class="py-1" role="none">
            @foreach ($links as $link=>$value)
                <a href="{{ $value['url'] }}"
                    class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                    role="menuitem">
                    @if(isset($value['icon']))
                    <i class="bi {{ $value['icon'] }}"></i>
                    @endif

                    <p class="mx-2">
                        {{ ucfirst($link) }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
</div>


