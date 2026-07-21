@extends('website.layouts.app')

@section('title') Home @endsection
@section('content')

<!-- Home -->
<div class="home">
    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">

            <!-- Slide 1: General/Branding -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('website/images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"
                        class="text-pretty text-5xl text-white font-bold">
                            {!! __('website.hero.slide_1_title') !!}
                        </h1>
                        <p class="mt-4 hero_subtitlex text-2xl text-white font-semibold " data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" data-delay-in="0.2">
                            {{ __('website.hero.slide_1_subtitle') }}
                        </p>
                        <div class="hero_button" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" data-delay-in="0.4">
                            <a href="{{route('teachers')}}" class="bg-yellow-500 px-12 py-2 rounded-md flex
                            justify-center items-center w-fit mx-auto text-white hover:bg-yellow-300">{{ __('website.hero.learn_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Skill Building / Career -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('website/images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"
                        class="text-pretty text-5xl text-white font-bold">
                            {!! __('website.hero.slide_2_title') !!}
                        </h1>
                        <p class="mt-4 hero_subtitlex text-2xl text-white font-semibold " data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" data-delay-in="0.2">
                            {{ __('website.hero.slide_2_subtitle') }}
                        </p>
                        <div class="hero_button" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" data-delay-in="0.4">
                            <a href="{{route('courses')}}" class="bg-yellow-500 px-12 py-2 rounded-md flex
                            justify-center items-center w-fit mx-auto text-white hover:bg-yellow-300">{{ __('website.hero.get_started') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Community / Flexibility -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('website/images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"
                        class="text-pretty text-5xl text-white font-bold">
                            {!! __('website.hero.slide_3_title') !!}
                        </h1>
                        <p class="mt-4 hero_subtitlex text-2xl text-white font-semibold " data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" data-delay-in="0.2">
                            {{ __('website.hero.slide_3_subtitle') }}
                        </p>
                        <div class="hero_button" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" data-delay-in="0.4">
                            <a href="{{route('contact')}}" class="bg-yellow-500 px-12 py-2 rounded-md flex
                            justify-center items-center w-fit mx-auto text-white hover:bg-yellow-300">{{ __('website.hero.contact_us') }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="hero_slider_left hero_slider_nav trans_200 rounded-full">
            <i class="bi bi-arrow-left text-3xl text-black"></i>
        </div>
        <div class="hero_slider_right hero_slider_nav trans_200 rounded-full">
            <i class="bi bi-arrow-right text-3xl text-black"></i>
        </div>
    </div>
</div>

<div class="hero_boxes mt-20">
    <div class="hero_boxes_inner">
        <div class="container">
            <div class="row">

                <!-- Box 1: Online Courses -->
                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box h-24 d-flex flex-row align-items-center justify-content-start rounded-lg">
                        <img src="{{ asset('website/images/earth-globe.svg') }}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">{{ __('website.hero.box_1_title') }}</h2>
                            <a href="{{ route('courses') }}" class="hero_box_link">{{ __('website.hero.view_more') }}</a>
                        </div>
                    </div>
                </div>

                <!-- Box 2: Our Library -->
                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box h-24 d-flex flex-row align-items-center justify-content-start rounded-lg">
                        <img src="{{ asset('website/images/books.svg') }}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">{{ __('website.hero.box_2_title') }}</h2>
                            <a href="{{ route('news') }}" class="hero_box_link">{{ __('website.hero.view_more') }}</a>
                        </div>
                    </div>
                </div>

                <!-- Box 3: Our Teachers -->
                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box h-24 d-flex flex-row align-items-center justify-content-start rounded-lg">
                        <img src="{{ asset('website/images/professor.svg') }}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">{{ __('website.hero.box_3_title') }}</h2>
                            <a href="{{ route('teachers') }}" class="hero_box_link">{{ __('website.hero.view_more') }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Popular Courses Section -->
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

        </div>
    </div>
</div>

<!-- Register -->
<div class="register">
    <div class="container-fluid">
        <div class="row row-eq-height">

            <!-- Register Section -->
            <div class="col-lg-6 nopadding">
                <div class="register_section d-flex flex-column align-items-center justify-content-center">
                    <div class="register_content text-center">
                        <h1 class="register_title">
                            {!! __('website.register.promo_title') !!}
                        </h1>
                        <p class="register_text">
                            {{ __('website.register.promo_text') }}
                        </p>
                        <div class="button button_1 register_button mx-auto trans_200">
                            <a href="{{ route('contact') }}">{{ __('website.register.btn_register') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Section -->
            <div class="col-lg-6 nopadding">
                <div class="search_section d-flex flex-column align-items-center justify-content-center">
                    <div class="search_background" style="background-image:url({{ asset('website/images/search_background.jpg') }});"></div>
                    <div class="search_content text-center">
                        <h1 class="search_title">{{ __('website.register.search_title') }}</h1>

                        <form id="search_form" class="search_form" action="{{ url('/courses/search') }}" method="GET">
                            <input
                                id="search_form_name"
                                class="input_field search_form_name"
                                type="text"
                                name="query"
                                placeholder="{{ __('website.register.input_name_placeholder') }}"
                                required="required"
                                data-error="{{ __('website.register.input_name_error') }}"
                            >
                            <input
                                id="search_form_category"
                                class="input_field search_form_category"
                                type="text"
                                name="category"
                                placeholder="{{ __('website.register.input_category_placeholder') }}"
                            >
                            <input
                                id="search_form_degree"
                                class="input_field search_form_degree"
                                type="text"
                                name="degree"
                                placeholder="{{ __('website.register.input_degree_placeholder') }}"
                            >
                            <button id="search_submit_button" type="submit" class="search_submit_button trans_200">
                                {{ __('website.register.btn_search') }}
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Services -->
<div class="services page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>{{ __('website.services.section_title') }}</h1>
                </div>
            </div>
        </div>

        <div class="row services_row">

            <!-- Service 1: Online Courses -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{ asset('website/images/earth-globe.svg') }}" alt="">
                </div>
                <h3>{{ __('website.services.service_1_title') }}</h3>
                <p>{{ __('website.services.service_1_desc') }}</p>
            </div>

            <!-- Service 2: Indoor Courses -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{ asset('website/images/exam.svg') }}" alt="">
                </div>
                <h3>{{ __('website.services.service_2_title') }}</h3>
                <p>{{ __('website.services.service_2_desc') }}</p>
            </div>

            <!-- Service 3: Amazing Library -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{ asset('website/images/books.svg') }}" alt="">
                </div>
                <h3>{{ __('website.services.service_3_title') }}</h3>
                <p>{{ __('website.services.service_3_desc') }}</p>
            </div>

            <!-- Service 4: Exceptional Professors -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{ asset('website/images/professor.svg') }}" alt="">
                </div>
                <h3>{{ __('website.services.service_4_title') }}</h3>
                <p>{{ __('website.services.service_4_desc') }}</p>
            </div>

            <!-- Service 5: Top Programs -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{ asset('website/images/blackboard.svg') }}" alt="">
                </div>
                <h3>{{ __('website.services.service_5_title') }}</h3>
                <p>{{ __('website.services.service_5_desc') }}</p>
            </div>

            <!-- Service 6: Graduate Diploma -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{ asset('website/images/mortarboard.svg') }}" alt="">
                </div>
                <h3>{{ __('website.services.service_6_title') }}</h3>
                <p>{{ __('website.services.service_6_desc') }}</p>
            </div>

        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="testimonials page_section">
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url({{ asset('website/images/testimonials_background.jpg') }})"></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>{{ __('website.testimonials.title') }}</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme testimonials_slider">

                        <!-- Testimonials Item 1 -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">“</div>
                                <p class="testimonials_text">{{ __('website.testimonials.student_1_text') }}</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="{{ asset('website/images/testimonials_user.jpg') }}" alt="James Cooper">
                                    </div>
                                    <div class="testimonial_name">James Cooper</div>
                                    <div class="testimonial_title">{{ __('website.testimonials.student_1_title') }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Item 2 -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">“</div>
                                <p class="testimonials_text">{{ __('website.testimonials.student_2_text') }}</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="{{ asset('website/images/testimonials_user.jpg') }}" alt="Alex Morgan">
                                    </div>
                                    <div class="testimonial_name">Alex Morgan</div>
                                    <div class="testimonial_title">{{ __('website.testimonials.student_2_title') }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Item 3 -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">“</div>
                                <p class="testimonials_text">{{ __('website.testimonials.student_3_text') }}</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="{{ asset('website/images/testimonials_user.jpg') }}" alt="Sarah Ahmed">
                                    </div>
                                    <div class="testimonial_name">Sarah Ahmed</div>
                                    <div class="testimonial_title">{{ __('website.testimonials.student_3_title') }}</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Events -->
<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>{{ __('website.events.section_title') }}</h1>
                </div>
            </div>
        </div>

        <div class="event_items">
            <!-- Event Item 1 -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">07</div>
                                <div class="event_month">
                                    {{-- Automatically translates the month name based on current locale --}}
                                    {{ now()->translatedFormat('F') }}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name">
                                    <a class="trans_200" href="{{ url('/events/student-festival') }}">
                                        {{ __('website.events.event_1_title') }}
                                    </a>
                                </div>
                                <div class="event_location">{{ __('website.events.event_1_location') }}</div>
                                <p>{{ __('website.events.event_1_desc') }}</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="{{ asset('website/images/event_1.jpg') }}" alt="Student Festival">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Event Item 2 -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">15</div>
                                <div class="event_month">
                                    {{ now()->addDays(3)->translatedFormat('F') }}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name">
                                    <a class="trans_200" href="{{ url('/events/campus-open-day') }}">
                                        {{ __('website.events.event_2_title') }}
                                    </a>
                                </div>
                                <div class="event_location">{{ __('website.events.event_2_location') }}</div>
                                <p>{{ __('website.events.event_2_desc') }}</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="{{ asset('website/images/event_2.jpg') }}" alt="Campus Open Day">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Event Item 3 -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">28</div>
                                <div class="event_month">
                                    {{ now()->addDays(5)->translatedFormat('F') }}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name">
                                    <a class="trans_200" href="{{ url('/events/graduation-ceremony') }}">
                                        {{ __('website.events.event_3_title') }}
                                    </a>
                                </div>
                                <div class="event_location">{{ __('website.events.event_3_location') }}</div>
                                <p>{{ __('website.events.event_3_desc') }}</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="{{ asset('website/images/event_3.jpg') }}" alt="Graduation Ceremony">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




