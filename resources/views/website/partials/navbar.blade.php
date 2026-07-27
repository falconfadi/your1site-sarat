<!-- Header -->
<header class="header d-flex flex-row h-16 rounded-lg z-50 ">
	<div class="header_content d-flex flex-row align-items-center">
		<!-- Logo -->
		<div class="logo_container rtl:pr-5">
			<div class="logo">
				<a href="{{route('home')}}">
					<img src="{{asset('website/logo/Asset 10.png')}}" class="h-12 w-24" alt="">
				</a>
			</div>
		</div>

		<!-- Main Navigation -->
		<nav class="main_nav_container">
			<div class="main_nav">
				<ul class="main_nav_list">
					<li class="main_nav_item {{request()->routeIs('home') ? 'p-2 ring-2 ring-yellow-200 rounded-lg':''}}">
						<a href="{{route('home')}}">
							{{__('website.home')}}
						</a>
					</li>
					<li class="main_nav_item {{request()->routeIs('teachers') ? 'p-2 ring-2 ring-yellow-200 rounded-lg':''}}">
						<a href="{{route('teachers')}}">
							{{__('website.teachers')}}
						</a>
					</li>
					<li class="main_nav_item {{request()->routeIs('courses') ? 'p-2 ring-2 ring-yellow-200 rounded-lg':''}}">
						<a href="{{route('courses')}}">
							{{__('website.courses')}}
						</a>
					</li>
					<li class="main_nav_item {{request()->routeIs('news') ? 'p-2 ring-2 ring-yellow-200 rounded-lg':''}}">
						<a href="{{route('news')}}">
							{{__('website.news')}}
						</a>
					</li>
					<li class="main_nav_item {{request()->routeIs('contact') ? 'p-2 ring-2 ring-yellow-200 rounded-lg':''}}">
						<a href="{{route('contact')}}">
							{{__('website.contact')}}
						</a>
					</li>
					<li class="main_nav_item {{request()->routeIs('about') ? 'p-2 ring-2 ring-yellow-200 rounded-lg':''}}">
						<a href="{{route('about')}}">
							{{__('website.about')}}
						</a>
					</li>
					<li class="main_nav_item">
						<div class="relative inline-block" x-data="{ langOpen: false }" @click.away="langOpen = false">
				            <div>
				                <button @click="langOpen = !langOpen" type="button"
				                    class="flex items-center justify-between gap-x-1.5 rounded-lg px-3 py-2
				                    text-sm font-semibold transition-all focus:outline-none"
				                    aria-expanded="true" aria-haspopup="true">
				                    <span class="flex items-center gap-2">
				                        <span class="text-black leading-none">
				                            <i class="bi bi-globe-europe-africa"></i>
				                        </span>
				                    </span>
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
				                    <a class="flex items-center gap-3 px-4 py-3 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition font-medium
				                    {{app()->getLocale() == 'en' ? 'bg-gray-200' : ''}}"
				                        role="menuitem" tabindex="-1" onclick="changeLang('en')"
				                        href="{{route('lang',['locale'=>'en'])}}">
				                        English
				                    </a>

				                    <a class="flex items-center justify-between gap-3 px-4 py-3 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition font-medium
				                    {{app()->getLocale() == 'ar' ? 'bg-gray-200' : ''}}"
				                        role="menuitem" tabindex="-1" dir="rtl" onclick="changeLang('ar')"
				                        href="{{route('lang',['locale'=>'ar'])}}">
					                	العربية
				                    </a>

				                </div>
				            </div>
				        </div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="header_side d-flex flex-row justify-content-center align-items-center ltr:rounded-r-lg rtl:rounded-l-lg">
		<img src="{{asset('website/images/phone-call.svg')}}" alt="">
		<span class="">{{Setting('phone','963117875050+')}}</span>
	</div>

	<!-- Hamburger -->
	<div class="hamburger_container rtl:absolute rtl:left-5">
		<i class="fas fa-bars trans_200"></i>
	</div>
</header>

<!-- Menu -->
<div class="menu_container menu_mm z-[60] rtl:text-right">

	<!-- Menu Close Button -->
	<div class="flex justify-between items-center mt-4 px-8">
		<div class="">
			<a href="{{route('home')}}">
				<img src="{{asset('website/images/logo.png')}}" alt="">
			</a>
		</div>

		<div class="menu_close rotate-45 -translate-y-2">
		</div>
	</div>

	<!-- Menu Items -->
	<div class="menu_inner menu_mm">
		<div class="menu menu_mm">
			<ul class="menu_list menu_mm ">
				<li class="menu_item menu_mm"><a href="{{route('home')}}">{{__('website.home')}}</a></li>
				<li class="menu_item menu_mm"><a href="{{route('teachers')}}">{{__('website.teachers')}}</a></li>
				<li class="menu_item menu_mm"><a href="{{route('courses')}}">{{__('website.courses')}}</a></li>
				<li class="menu_item menu_mm"><a href="{{route('news')}}">{{__('website.news')}}</a></li>
				<li class="menu_item menu_mm"><a href="{{route('contact')}}">{{__('website.contact')}}</a></li>

				<li class="menu_item menu_mm">
					@if(app()->getLocale() == 'ar')
						<a class="flex items-center gap-3 py-2 text-sm transition font-medium"
	                        href="{{route('lang',['locale'=>'en'])}}">
	                        <span class="text-black leading-none">
	                            <i class="bi bi-globe-europe-africa"></i> English
	                        </span>
	                    </a>
					@else
						<a class="flex items-center gap-3 py-2 text-sm transition font-medium"
	                        href="{{route('lang',['locale'=>'ar'])}}">
	                        <span class="text-black leading-none">
	                            <i class="bi bi-globe-europe-africa"></i> عربي
	                        </span>
	                    </a>
					@endif
				</li>
			</ul>

			<!-- Menu Social -->

			<div class="menu_social_container menu_mm">
				<ul class="menu_social menu_mm">
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
				</ul>
			</div>

			<div class="menu_copyright menu_mm">All rights reserved</div>
		</div>

	</div>
</div>
