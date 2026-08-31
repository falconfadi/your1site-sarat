<!-- Header -->
<header class="header d-flex flex-row h-18 rounded-lg z-[1100] ">
	<div class="header_content flex flex-row justify-between items-center rounded-lg">
		<!-- Logo -->
		<div class="logo_container rtl:pr-5">
			<div class="logos">
				<a href="{{route('home')}}">
					<img src="{{asset('website/logo/Asset 10.png')}}" class="w-32 md:w-48"  alt="">
				</a>
			</div>
		</div>

		<!-- Main Navigation -->
		<nav class="main_nav_container p-0 mx-auto rounded-lg">
			<div class="main_nav">
				<ul class="flex flex-row justify-around items-center gap-6">
					<li class="text-zinc-900 text-xl font-semibold hover:text-[#f47e52] {{request()->routeIs('home') ? 'p-1 ring-2 ring-[#f47e52] rounded-lg':''}}">
						<a href="{{route('home')}}" class="hover:text-[#f47e52] no-underline text-current">
							{{__('website.home')}}
						</a>
					</li>
					<li class="text-zinc-900 text-xl font-semibold hover:text-[#f47e52] {{request()->routeIs('teachers') ? 'p-1 ring-2 ring-[#f47e52] rounded-lg':''}}">
						<a href="{{route('teachers')}}" class="hover:text-[#f47e52] no-underline text-current">
							{{__('website.teachers')}}
						</a>
					</li>
					<li class="text-zinc-900 text-xl font-semibold hover:text-[#f47e52] {{request()->routeIs('courses') ? 'p-1 ring-2 ring-[#f47e52] rounded-lg':''}}">
						<a href="{{route('courses')}}" class="hover:text-[#f47e52] no-underline text-current">
							{{__('website.courses')}}
						</a>
					</li>
					<li class="text-zinc-900 text-xl font-semibold hover:text-[#f47e52] {{request()->routeIs('news') ? 'p-1 ring-2 ring-[#f47e52] rounded-lg':''}}">
						<a href="{{route('news')}}" class="hover:text-[#f47e52] no-underline text-current">
							{{__('website.news')}}
						</a>
					</li>
					<li class="text-zinc-900 text-xl font-semibold hover:text-[#f47e52] {{request()->routeIs('contact') ? 'p-1 ring-2 ring-[#f47e52] rounded-lg':''}}">
						<a href="{{route('contact')}}" class="hover:text-[#f47e52] no-underline text-current">
							{{__('website.contact')}}
						</a>
					</li>
					<li class="text-zinc-900 text-xl font-semibold hover:text-[#f47e52] {{request()->routeIs('about') ? 'p-1 ring-2 ring-[#f47e52] rounded-lg':''}}">
						<a href="{{route('about')}}" class="hover:text-[#f47e52] no-underline text-current">
							{{__('website.about')}}
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="header_side flex justify-cener items-center ltr:rounded-r-lg rtl:rounded-l-lg">
		<div>
			<ul class="flex justify-between items-center gap-6">
				<li>
					<div class="relative inline-block" x-data="{ langOpen: false }" @click.away="langOpen = false">
						<div>
							<button @click="langOpen = !langOpen" type="button"
								class="flex items-center justify-center gap-x-1.5 rounded-lg px-2 py-2
								text-sm font-semibold transition-all focus:outline-none bg-transparent border-none"
								aria-expanded="true" aria-haspopup="true">
								<span class="flex justify-center items-center gap-2">
									<span class="leading-none">
										<i class="text-2xl text-zinc-100 hover:text-yellow-800 bi bi-globe-europe-africa"></i>
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
			
								<a class="flex items-center gap-3 px-4 py-3 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition font-medium
								{{app()->getLocale() == 'ar' ? 'bg-gray-200' : ''}}"
									role="menuitem" tabindex="-1" onclick="changeLang('ar')"
									href="{{route('lang',['locale'=>'ar'])}}">
									Arabic
								</a>
							</div>
						</div>
					</div>
				</li>
				<li class="">
					<a href="{{ app_setting('social_facebook','#') }}" target="_blank" rel="noopener noreferrer">
						<i class="text-2xl text-zinc-100 hover:text-yellow-800 fab fa-facebook"></i>
					</a>
				</li>
				<li class="">
					<a href="{{ app_setting('social_instagram','#') }}" target="_blank" rel="noopener noreferrer">
						<i class="text-2xl text-zinc-100 hover:text-yellow-800 fab fa-instagram"></i>
					</a>
				</li>
				<li class="">
					@php
						if(app_setting('social_whatsapp') == 'none'){
							$link = "https://wa.me/".app_setting('phone');
						}else{
							$link = app_setting('social_whatsapp');
						}
					@endphp
					<a href="{{$link}}"
					 target="_blank" rel="noopener noreferrer">
						<i class="text-2xl text-zinc-100 hover:text-yellow-800 fab fa-whatsapp"></i>
					</a>
				</li>					
				<li class="">
					@php
						if(app_setting('social_telegram') == 'none'){
							$link = "https://t.me/+".app_setting('phone');
						}else{
							$link = app_setting('social_telegram');
						}
					@endphp
					<a href="{{$link}}" target="_blank" rel="noopener noreferrer">
						<i class="text-2xl text-zinc-100 hover:text-yellow-800 fab fa-telegram"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- Hamburger -->
	<div class="hamburger_container rtl:absolute rtl:left-5">
		<i class="fas fa-bars trans_200"></i>
	</div>
</header>

<!-- Menu -->
<div class="menu_container menu_mm z-[1160] rtl:text-right">

	<!-- Menu Close Button -->
	<div class="flex justify-between items-center mt-4 px-8">
		<div class="">
			<a href="{{route('home')}}">
				<img src="{{asset('website/logo/Asset 10.png')}}" class="w-32" alt="">
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
	                            <i class="bi bi-globe-europe-africa"></i> Arabic
	                        </span>
	                    </a>
					@endif
				</li>
			</ul>

			<!-- Menu Social -->

			<div class="menu_social_container menu_mm">
				<ul class="menu_social menu_mm">
					<li class="menu_social_item menu_mm">
						<a href="{{ app_setting('social_facebook','#') }}" target="_blank" rel="noopener noreferrer">
							<i class=" text-2xl fab fa-facebook"></i>
						</a>
					</li>
					<li class="menu_social_item menu_mm">
						<a href="{{ app_setting('social_instagram','#') }}" target="_blank" rel="noopener noreferrer">
							<i class=" text-2xl fab fa-instagram"></i>
						</a>
					</li>
					<li class="menu_social_item menu_mm">
						@php
							if(app_setting('social_whatsapp') == 'none'){
								$link = "https://wa.me/".app_setting('phone');
							}else{
								$link = app_setting('social_whatsapp');
							}
						@endphp
						<a href="{{$link}}"
							target="_blank" rel="noopener noreferrer">
							<i class=" text-2xl fab fa-whatsapp"></i>
						</a>
					</li>					
					<li class="menu_social_item menu_mm">
						@php
							if(app_setting('social_telegram') == 'none'){
								$link = "https://t.me/+".app_setting('phone');
							}else{
								$link = app_setting('social_telegram');
							}
						@endphp
						<a href="{{$link}}" target="_blank" rel="noopener noreferrer">
							<i class=" text-2xl fab fa-telegram"></i>
						</a>
					</li>
				</ul>
			</div>

			<div class="menu_copyright menu_mm">All rights reserved</div>
		</div>

	</div>
</div>
