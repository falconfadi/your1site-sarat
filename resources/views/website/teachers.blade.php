@extends('website.layouts.app')

@section('title') Teachers @endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('website/css/teachers_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/teachers_responsive.css')}}">
@endpush

@section('content')
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{asset('website/images/teachers_background.jpg')}})"></div>
		</div>
		<div class="home_content">
			<h1>{{__('website.teachers')}}</h1>
		</div>
	</div>

	<!-- Teachers -->
	<div class="teachers page_section">
		<div class="container">
			<div class="row">
				
				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="{{asset('website/images/teacher_1.jpg')}}" alt="https://unsplash.com/@michaeldam">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Maria Smith</a></div>
							<div class="card-text">Graphic Designer</div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="{{asset('website/images/teacher_2.jpg')}}" alt="https://unsplash.com/@jcpeacock">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Christian Blue</a></div>
							<div class="card-text">Graphic Designer</div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="{{asset('website/images/teacher_3.jpg')}}" alt="https://unsplash.com/photos/n8jeOSxCRfQ">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">James Brown</a></div>
							<div class="card-text">Graphic Designer</div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="{{asset('website/images/teacher_4.jpg')}}" alt="https://unsplash.com/@seteales">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Graphic Designer</div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="{{asset('website/images/teacher_5.jpg')}}" alt="https://unsplash.com/@jaredsluyter">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Graphic Designer</div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="{{asset('website/images/teacher_6.jpg')}}" alt="https://unsplash.com/@mehdizadeh">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Graphic Designer</div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Milestones Section -->
	<div class="milestones">
		<div class="milestones_background" style="background-image:url({{ asset('website/images/milestones_background.jpg') }})"></div>

		<div class="container">
			<div class="row">

				<!-- Milestone: Current Students -->
				<div class="col-lg-3 milestone_col group">
					<div class="milestone text-center">
						<div class="milestone_icon">
							<img src="{{ asset('website/images/milestone_1.svg') }}" alt="Students Icon">
						</div>
						<div class="milestone_counter" data-end-value="250">0</div>
						<div class="milestone_text group-hover:text-yellow-500">
							{{ __('website.milestones.current_students') }}
						</div>
					</div>
				</div>

				<!-- Milestone: Certified Teachers -->
				<div class="col-lg-3 milestone_col group">
					<div class="milestone text-center">
						<div class="milestone_icon">
							<img src="{{ asset('website/images/milestone_2.svg') }}" alt="Teachers Icon">
						</div>
						<div class="milestone_counter" data-end-value="25">0</div>
						<div class="milestone_text group-hover:text-yellow-500">
							{{ __('website.milestones.certified_teachers') }}
						</div>
					</div>
				</div>

				<!-- Milestone: Approved Courses -->
				<div class="col-lg-3 milestone_col group">
					<div class="milestone text-center">
						<div class="milestone_icon">
							<img src="{{ asset('website/images/milestone_3.svg') }}" alt="Courses Icon">
						</div>
						<div class="milestone_counter" data-end-value="19">0</div>
						<div class="milestone_text group-hover:text-yellow-500">
							{{ __('website.milestones.approved_courses') }}
						</div>
					</div>
				</div>

				<!-- Milestone: Graduate Students -->
				<div class="col-lg-3 milestone_col group">
					<div class="milestone text-center">
						<div class="milestone_icon">
							<img src="{{ asset('website/images/milestone_4.svg') }}" alt="Graduates Icon">
						</div>
						<div class="milestone_counter" data-end-value="500" data-sign-before="+">0</div>
						<div class="milestone_text group-hover:text-yellow-500">
							{{ __('website.milestones.graduate_students') }}
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Become an Instructor Section -->
	<div class="become">
		<div class="container">
			<div class="row row-eq-height">

				<div class="col-lg-6 order-2 order-lg-1 rtl:text-right">
					<div class="become_title">
						<h1>{{ __('website.become_teacher.title') }}</h1>
					</div>
					<p class="become_text">
						{{ __('website.become_teacher.text') }}
					</p>
					<div class="become_button text-center trans_200">
						<a href="#">{{ __('website.become_teacher.button') }}</a>
					</div>
				</div>

				<div class="col-lg-6 order-1 order-lg-2">
					<div class="become_image">
						<img src="{{ asset('website/images/become.jpg') }}" alt="Become an Instructor">
					</div>
				</div>

			</div>
		</div>
	</div>


@endsection

@push('scripts')
	<script src="{{asset('website/js/teachers_custom.js')}}"></script>
@endpush
