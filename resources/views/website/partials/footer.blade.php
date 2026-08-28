<footer class="footer">
	<div class="container rtl:text-right">
		<div class="newsletter">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>{{ __('website.footer.subscribe_to_news_letter') }}</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<div class="newsletter_form_container mx-auto">
						<form action="post">
							<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
								<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
								<button id="newsletter_submit" type="submit"
								class="newsletter_submit_btn trans_300" value="Submit">
								{{ __('website.footer.subscribe') }}
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer Content -->
		<div class="footer_content ">
		    <div class="row">
		        <div class="col-lg-3 footer_col">
		            <!-- Logo -->
		            <div class="logo_containerx">
		                <div class="logo">
		                    <img src="{{asset('website/logo/Asset 10.png')}}" alt="Logo" class="h-32 w-72">
		                    {{-- <span>{{ __('website.footer.logo_text') }}</span> --}}
		                </div>
		            </div>
		            <p class="footer_about_textx">
		                {{ __('website.footer.about_text') }}
		            </p>
		        </div>

		        <div class="col-lg-3 footer_col">
		            <div class="footer_column_title">{{ __('website.footer.menu_title') }}</div>
		            <div class="footer_column_content">
		                <ul>
		                    <li class="footer_list_item"><a href="{{ url('/') }}">{{ __('website.footer.menu_home') }}</a></li>
		                    <li class="footer_list_item"><a href="{{ url('/courses') }}">{{ __('website.footer.menu_courses') }}</a></li>
		                    <li class="footer_list_item"><a href="{{ url('/teachers') }}">{{ __('website.footer.menu_teachers') }}</a></li>
		                </ul>
		            </div>
		        </div>

		        <div class="col-lg-3 footer_col">
		            <div class="footer_column_title">{{ __('website.footer.links_title') }}</div>
		            <div class="footer_column_content">
		                <ul>
		                    <li class="footer_list_item"><a href="{{ url('/') }}">{{ __('website.footer.link_testimonials') }}</a></li>
		                    <li class="footer_list_item"><a href="{{ url('/news') }}">{{ __('website.footer.menu_news') }}</a></li>
		                    <li class="footer_list_item"><a href="{{ url('/contact') }}">{{ __('website.footer.menu_contact') }}</a></li>
		                    {{-- <li class="footer_list_item"><a href="{{ url('/') }}">{{ __('website.footer.link_faq') }}</a></li>
		                    <li class="footer_list_item"><a href="{{ url('/') }}">{{ __('website.footer.link_community') }}</a></li>
		                    <li class="footer_list_item"><a href="{{ url('/') }}">{{ __('website.footer.link_gallery') }}</a></li>
		                    <li class="footer_list_item"><a href="{{ url('/') }}">{{ __('website.footer.link_tuition') }}</a></li> --}}
		                </ul>
		            </div>
		        </div>

		        <div class="col-lg-3 footer_col">
		            <div class="footer_column_title">{{ __('website.footer.contact_title') }}</div>
		            <div class="footer_column_content">
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
		                            <img src="{{ asset('website/images/phone-call.svg') }}" alt="Phone Icon">
		                        </div>
		                        +963-{{ app_setting('landLine','117875050') }}
		                    </li>
		                </ul>
		            </div>
		        </div>
		    </div>
		</div>


		<!-- Footer Copyright -->
		<div class="footer_bar flex justify-between items-center">
			<div class="footer_copyright">
				<span>
					Powered By 
					<a href="http://your1site.sy" target="_blank" rel="noopener noreferrer">
						Your1Site
					</a> 
				</span>
			</div>
			<div class="footer_social">
				<ul class="menu_social">
					<li class="menu_social_item">
						<a href="{{ app_setting('social_whatsapp','#') }}">
							<i class="fab fa-whatsapp"></i>
						</a>
					</li>
					<li class="menu_social_item">
						<a href="{{ app_setting('social_facebook','#') }}">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
					<li class="menu_social_item">
						<a href="{{ app_setting('social_telegram','#') }}">
							<i class="fab fa-telegram"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
