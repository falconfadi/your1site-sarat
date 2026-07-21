@extends('website.layouts.app')

@section('title') News @endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('website/css/news_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/news_responsive.css')}}">
@endpush
@section('content')
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{asset('website/images/news_background.jpg')}})"></div>
		</div>
		<div class="home_content">
			<h1>{{__('website.news')}}</h1>
		</div>
	</div>

	<!-- News -->
	<div class="news">
		<div class="container">
			<div class="row rtl:text-right">
				
				<!-- News / Blog Posts Column -->
				<div class="col-lg-8">
					<div class="news_posts">

						<!-- News Post 1 -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="{{ asset('website/images/news_1.jpg') }}" alt="News Image">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="{{route('newsPost')}}">{{ __('website.news_page.post_1_title') }}</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">
											<a href="#">{{ __('website.news_page.by') }} Christian Smith</a>
										</span>
										<span>|</span>
										<span class="news_post_comments">
											<a href="#">{{ trans_choice('website.news_page.comments', 3, ['count' => 3]) }}</a>
										</span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>{{ __('website.news_page.post_1_text') }}</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="{{route('newsPost')}}">{{ __('website.news_page.read_more') }}</a>
							</div>
						</div>

						<!-- News Post 2 -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="{{ asset('website/images/news_2.jpg') }}" alt="News Image">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="{{route('newsPost')}}">{{ __('website.news_page.post_2_title') }}</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">
											<a href="#">{{ __('website.news_page.by') }} Christian Smith</a>
										</span>
										<span>|</span>
										<span class="news_post_comments">
											<a href="#">{{ trans_choice('website.news_page.comments', 3, ['count' => 3]) }}</a>
										</span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>{{ __('website.news_page.post_2_text') }}</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="{{route('newsPost')}}">{{ __('website.news_page.read_more') }}</a>
							</div>
						</div>

						<!-- News Post 3 -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="{{ asset('website/images/news_3.jpg') }}" alt="News Image">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="{{route('newsPost')}}">{{ __('website.news_page.post_3_title') }}</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">
											<a href="#">{{ __('website.news_page.by') }} Christian Smith</a>
										</span>
										<span>|</span>
										<span class="news_post_comments">
											<a href="#">{{ trans_choice('website.news_page.comments', 3, ['count' => 3]) }}</a>
										</span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>{{ __('website.news_page.post_3_text') }}</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="{{route('newsPost')}}">{{ __('website.news_page.read_more') }}</a>
							</div>
						</div>

					</div>

					<!-- Page Navigation -->
					<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div>
				</div>

				<!-- Sidebar Column -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives Section -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>{{ __('website.news_page.sidebar.archives') }}</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">{{ __('website.news_page.sidebar.arc_design') }}</a></li>
								<li class="sidebar_list_item"><a href="#">{{ __('website.news_page.sidebar.arc_knowledge') }}</a></li>
								<li class="sidebar_list_item"><a href="#">{{ __('website.news_page.sidebar.arc_uncategorized') }}</a></li>
								<li class="sidebar_list_item"><a href="#">{{ __('website.news_page.sidebar.arc_departments') }}</a></li>
								<li class="sidebar_list_item"><a href="#">{{ __('website.news_page.sidebar.arc_insights') }}</a></li>
							</ul>
						</div>

						<!-- Latest Posts Section -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>{{ __('website.news_page.sidebar.latest_posts') }}</h3>
							</div>

							<div class="latest_posts">

								<!-- Latest Post 1 -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="{{ asset('website/images/latest_1.jpg') }}" alt="Post Thumbnail">
									</div>
									<div class="latest_post_title">
										<a href="{{route('newsPost')}}">{{ __('website.news_page.sidebar.post_1_title') }}</a>
									</div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">{{ __('website.news_page.sidebar.by') }} Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">{{ trans_choice('sidebar.comments', 3, ['count' => 3]) }}</a></span>
									</div>
								</div>

								<!-- Latest Post 2 -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="{{ asset('website/images/latest_2.jpg') }}" alt="Post Thumbnail">
									</div>
									<div class="latest_post_title">
										<a href="{{route('newsPost')}}">{{ __('website.news_page.sidebar.post_2_title') }}</a>
									</div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">{{ __('website.news_page.sidebar.by') }} Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">{{ trans_choice('sidebar.comments', 0, ['count' => 0]) }}</a></span>
									</div>
								</div>

								<!-- Latest Post 3 -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="{{ asset('website/images/latest_3.jpg') }}" alt="Post Thumbnail">
									</div>
									<div class="latest_post_title">
										<a href="{{route('newsPost')}}">{{ __('website.news_page.sidebar.post_3_title') }}</a>
									</div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">{{ __('website.news_page.sidebar.by') }} Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">{{ trans_choice('sidebar.comments', 12, ['count' => 12]) }}</a></span>
									</div>
								</div>

							</div>
						</div>

						<!-- Tags Section -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>{{ __('website.news_page.sidebar.tags') }}</h3>
							</div>
							<div class="tags d-flex flex-row flex-wrap">
								<div class="tag"><a href="#">{{ __('website.news_page.sidebar.tag_course') }}</a></div>
								<div class="tag"><a href="#">{{ __('website.news_page.sidebar.tag_design') }}</a></div>
								<div class="tag"><a href="#">{{ __('website.news_page.sidebar.tag_faq') }}</a></div>
								<div class="tag"><a href="#">{{ __('website.news_page.sidebar.tag_teachers') }}</a></div>
								<div class="tag"><a href="#">{{ __('website.news_page.sidebar.tag_school') }}</a></div>
								<div class="tag"><a href="#">{{ __('website.news_page.sidebar.tag_graduate') }}</a></div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

@endsection
