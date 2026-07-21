@extends('website.layouts.app')

@section('title') Corses @endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('website/css/courses_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/courses_responsive.css')}}">
@endpush
@section('content')
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{asset('website/images/courses_background.jpg')}})"></div>
		</div>
		<div class="home_content">
			<h1>{{__('website.courses')}}</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
	            <div class="col">
	                <div class="section_title text-center">
	                    <h1>{{ __('website.course_sec.popular_courses') }}</h1>
	                </div>
	            </div>
	        </div>

			<div class="row course_boxes">
				<!-- Course Item: Design -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_1.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.design_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.design_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Course Item: HTML -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_2.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.html_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.html_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Course Item: Photoshop -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_3.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.photoshop_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.photoshop_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Course Item: Design -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_4.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.design_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.design_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Course Item: HTML -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_5.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.html_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.html_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Course Item: Photoshop -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_6.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.photoshop_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.photoshop_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Course Item: Design -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_7.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.design_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.design_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Course Item: HTML -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_8.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.html_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.html_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Course Item: Photoshop -->
	            <div class="col-lg-4 course_box">
	                <div class="card">
	                    <img class="card-img-top" src="{{ asset('website/images/course_9.jpg') }}" alt="Course Cover">
	                    <div class="card-body text-center">
	                        <div class="card-title">
	                            <a href="courses.html">{{ __('website.course_sec.photoshop_title') }}</a>
	                        </div>
	                        <div class="card-text">{{ __('website.course_sec.photoshop_desc') }}</div>
	                    </div>
	                    <div class="price_box d-flex flex-row align-items-center">
	                        <div class="course_author_image">
	                            <img src="{{ asset('website/images/author.jpg') }}" alt="Author Image">
	                        </div>
	                        <div class="course_author_name">
	                            Michael Smith, <span>{{ __('website.course_sec.author') }}</span>
	                        </div>
	                        <div class="course_price d-flex flex-column align-items-center justify-content-center">
	                            <span>$29</span>
	                        </div>
	                    </div>
	                </div>
	            </div>
			</div>
		</div>		
	</div>

	@endsection
