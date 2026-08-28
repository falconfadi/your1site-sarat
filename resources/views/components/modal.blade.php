@props([
    'id' => 'modalId',
    'color' => 'bg-green-600',
    'icon' => 'bi-plus',
    'text' => 'New',
])
<div x-data="{ createNew: false }" class="inline-block">
    <!-- Trigger Button -->
    <button @click="createNew = true" type="button"
        class="rounded-xl {{ $color }} px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 transition">
        {{ $text }} <i class="bi {{ $icon }}"></i>
    </button>

    <!-- Modal Backdrop and Panel -->
    <div x-show="createNew"
        class="fixed inset-0 z-50 overflow-y-auto"
        role="dialog"
        aria-modal="true"
        style="display: none;">

        <!-- Backdrop Overlay -->
        <div x-show="createNew"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="createNew = false"
            class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm transition-opacity">
        </div>

        <!-- Modal Positioning Wrapper -->
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

            <!-- Modal Panel Box -->
            <div x-show="createNew"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                @keydown.escape.window="createNew = false"
                class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-900 p-6 text-left rtl:text-right shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-slate-100 dark:border-slate-800">

                <!-- Close Button (Top Corner) -->
                <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block rtl:right-auto rtl:left-0 rtl:pl-4">
                    <button @click="createNew = false" type="button"
                        class="rounded-lg text-slate-400 hover:text-slate-500 focus:outline-none p-1 hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                        <span class="sr-only">Close</span>
                        <i class="bi bi-x"></i>
                    </button>
                </div>

                <!-- Modal Body Content -->
                <div class="sm:flex sm:items-start w-full">
                    <!-- Text Wrap -->
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:mr-4 sm:text-left rtl:sm:text-right w-full">
                        {{$slot}}
                    </div>
                </div>

                <!-- Modal Footer Action Actions -->
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse gap-2">
                    <button @click="modalOpen = false" type="submit" form="{{$id}}"
                        class="inline-flex w-full justify-center rounded-xl bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:w-auto transition">
                        Create
                    </button>
                    <button @click="modalOpen = false" type="reset"
                        class="mt-3 inline-flex w-full justify-center rounded-xl bg-white dark:bg-slate-800 px-3 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 shadow-sm ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 sm:mt-0 sm:w-auto transition">
                        Clear
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
