@extends('website.layouts.app')

@section('title') Contact @endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('website/css/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/contact_responsive.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" integrity="sha512-Zcn6bjR/8RZbLEpLIeOwNtzREBAJnUKESxces60Mpoj+2okopSAcSUIUOseddDm0cxnGQzxIR7vJgsLZbdLE3w==" crossorigin="anonymous" referrerpolicy="no-referrer">
@endpush

@section('content')
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{asset('website/images/contact_background.jpg')}})"></div>
		</div>
		<div class="home_content">
			<h1>{{__('website.contact')}}</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container rtl:text-right">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">{{__('website.contact_page.get_in_touch')}}</div>

						<div class="contact_form_container mt-4 rtl:text-right">
							{{-- <form action="{{ route('visitorMessage') }}" class="flex flex-col gap-4" method="POST">
								@csrf
								<input id="name" name="name" type="text" autocomplete="name" required
                                        class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20" placeholder="{{ __('website.contact_page.name') }}">
								<input id="email" name="email" type="email" autocomplete="email" required
                                        class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20" placeholder="{{ __('website.contact_page.email') }}">
								<textarea id="contact_form_message" name="message" placeholder="{{ __('website.contact_page.message') }}" required="required" data-error="Please, write us a message." rows="5"
								class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"></textarea>
								<button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">
									{{__('website.contact_page.send_message')}}
								</button>
							</form> --}}
							<form action="{{ route('visitorMessage') }}" class="flex flex-col gap-4" method="POST">
								@csrf
								
								<!-- Name Input -->
								<div>
									<input id="name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}"
										class="block w-full rounded-xl border @error('name') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20" 
										placeholder="{{ __('website.contact_page.name') }}">
									@error('name')
										<span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
									@enderror
								</div>
							
								<!-- Email Input -->
								<div>
									<input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}"
										class="block w-full rounded-xl border @error('email') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20" 
										placeholder="{{ __('website.contact_page.email') }}">
									@error('email')
										<span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
									@enderror
								</div>
							
								<!-- Message Input -->
								<div>
									<textarea id="contact_form_message" name="message" placeholder="{{ __('website.contact_page.message') }}" required rows="5"
										class="block w-full rounded-xl border @error('message') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">{{ old('message') }}</textarea>
									@error('message')
										<span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
									@enderror
								</div>
							
								<!-- Submit Button (Changed type from "button" to "submit") -->
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200">
									{{ __('website.contact_page.send_message') }}
								</button>

								@if(Session::has('success'))
									<p class="text-green-400">
										message sent
									</p>
								@endif
							</form>
							
						</div>
					</div>
						
				</div>

				<!-- Join Courses & Contact Info Column -->
				<div class="col-lg-4 ">
					<div class="about">
						<div class="about_title">{{ __('website.contact_page.box.title') }}</div>
						<p class="about_text">
							{{ __('website.contact_page.box.text') }}
						</p>

						<div class="contact_info mt-1 pl-1">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{ asset('website/images/placeholder.svg') }}" alt="Address Icon">
									</div>
								   {{app_setting('address','Syria - Rif Dimashq -  Deir Atiyah')}}
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{ asset('website/images/envelope.svg') }}" alt="Email Icon">
									</div>
									{{ app_setting('email','info@sarat-sy.com')}}
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{ asset('website/images/smartphone.svg') }}" alt="Phone Icon">
									</div>
									+963-{{ app_setting('phone','995365317')}}
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{ asset('website/images/smartphone.svg') }}" alt="Phone Icon">
									</div>
									+963-{{ app_setting('landLine','117875050') }}
								</li>
							</ul>
						</div>

					</div>
				</div>


			</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

@endsection

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js" integrity="sha512-BwHfrr4c9kmRkLw6iXFdzcdWV/PGkVgiIyIWLLlTSXzWQzxuSg4DiQUCpauz/EWjgk5TYQqX/kvn9pG1NpYfqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	// 5. Coordinates for Deir Atiyah, Rif Dimashq, Syria
	const latitude = 34.0920;
	const longitude = 36.7642;
	const zoomLevel = 13; // Good town-level zoom detail

	// 6. Initialize the map onto the #map div
	const map = L.map('map').setView([latitude, longitude], zoomLevel);

	// 7. Load and add OpenStreetMap tile layers to the map
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
	}).addTo(map);

	// 8. Place a map marker on Deir Atiyah
	const marker = L.marker([latitude, longitude]).addTo(map);

	// 9. Add a popup message to the marker (opens on click)
	marker.bindPopup("<b>Deir Atiyah (دير عطية)</b><br>An-Nabek District, Rif Dimashq, Syria.")
		  .openPopup();
</script>
<script src="{{asset('website/js/contact_custom.js')}}"></script>

@endpush
