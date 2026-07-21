@extends('website.layouts.app')

@section('title') Contact @endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('website/css/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/contact_responsive.css')}}">
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
							<form action="post" class="flex flex-col gap-4">
								<input id="name" name="name" type="text" autocomplete="name" required
                                        class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20" placeholder="Name">
								<input id="email" name="email" type="email" autocomplete="email" required
                                        class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20" placeholder="Email">
								<textarea id="contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message." rows="5"
								class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-200 dark:bg-slate-500 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"></textarea>
								<button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">
									{{__('website.contact_page.send_message')}}
								</button>
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

						<div class="contact_info">
							<ul>
								<!-- Address -->
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="{{ asset('website/images/placeholder.svg') }}" alt="Address Icon">
									</div>
									<strong>{{ __('website.contact_page.box.address_label') }}</strong>
									{{ setting('address', 'Blvd Libertad, 34 m05200 Arévalo') }}
								</li>

								<!-- Phone -->
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="{{ asset('website/images/smartphone.svg') }}" alt="Phone Icon">
									</div>
									<strong>{{ __('website.contact_page.box.phone_label') }}</strong>
									{{ setting('phone', '0034 37483 2445 322') }}
								</li>

								<!-- Email -->
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="{{ asset('website/images/envelope.svg') }}" alt="Email Icon">
									</div>
									<strong>{{ __('website.contact_page.box.email_label') }}</strong>
									{{ setting('email', 'hello@company.com') }}
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

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('website/js/contact_custom.js')}}"></script>

@endpush
