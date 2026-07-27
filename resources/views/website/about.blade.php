@extends('website.layouts.app')

@section('title') Contact @endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('website/css/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/contact_responsive.css')}}">
@endpush

@section('content')

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{asset('website/images/contact_background.jpg')}})"></div>
		</div>
		<div class="home_content">
			<h1>{{__('website.about')}}</h1>
		</div>
	</div>

    <!-- Main Content Body -->
    <main class="max-w-6xl mx-auto px-4 py-12 rtl:text-right">

        <!-- Interactive Value Statement Section -->
        <div class="grid lg:grid-cols-12 gap-8 items-stretch mb-24">
            <!-- Strategic Narrative Block -->
            <div class="lg:col-span-7 bg-gradient-to-r from-yellow-500 to-yellow-800 p-8 md:p-12 rounded-3xl border border-slate-800/60 shadow-xl flex flex-col justify-center">
                <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-6 flex items-center gap-3">
                    <span class="w-2 h-8 bg-sarat-secondary rounded-full"></span>
                    {{ __('website.about_page.mission_title') }}
                </h2>
                <p class="text-slate-100 leading-relaxed text-base mb-4">
                    {{ __('website.about_page.mission_text_1') }}
                </p>
                <p class="text-slate-200 leading-relaxed text-sm">
                    {{ __('website.about_page.mission_text_2') }}
                </p>
            </div>


            <div class="lg:col-span-5 bg-gradient-to-br from-sarat-primary/90 to-sarat-accent/90 p-8 md:p-10 rounded-3xl shadow-xl flex flex-col justify-between text-white relative overflow-hidden">
                <!-- Abstract Design Accent -->
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/5 rounded-full pointer-events-none"></div>

                <div class="text-9xl opacity-30 text-black font-serif">“</div>
                <p class="text-lg font-semibold relative z-10 mb-8 leading-snug">
                    {{ __('website.about_page.quote') }}
                </p>
            </div>
        </div>

        <!-- Sarat Grid Features Grid Architecture -->
        <div class="mb-24">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-black text-black mb-4">
                    {{ __('website.about_page.features_title') }}
                </h2>
                <div class="h-1 w-20 bg-gradient-to-r from-sarat-primary to-sarat-secondary mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature 1: Faculty -->
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-800 p-8 rounded-2xl border border-slate-800/80 hover:border-sarat-primary/50 transition-all duration-300 shadow-md hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('website.about_page.feature_faculty_title') }}</h3>
                    <p class="text-slate-100 text-sm leading-relaxed">{{ __('website.about_page.feature_faculty_desc') }}</p>
                </div>

                <!-- Feature 2: Flexible Modalities -->
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-800 p-8 rounded-2xl border border-slate-800/80 hover:border-sarat-accent/50 transition-all duration-300 shadow-md hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('website.about_page.feature_flex_title') }}</h3>
                    <p class="text-slate-100 text-sm leading-relaxed">{{ __('website.about_page.feature_flex_desc') }}</p>
                </div>

                <!-- Feature 3: Accredited Pathways -->
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-800 p-8 rounded-2xl border border-slate-800/80 hover:border-sarat-secondary/50 transition-all duration-300 shadow-md hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('website.about_page.feature_diploma_title') }}</h3>
                    <p class="text-slate-100 text-sm leading-relaxed">{{ __('website.about_page.feature_diploma_desc') }}</p>
                </div>

                <!-- Feature 4: Library -->
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-800 p-8 rounded-2xl border border-slate-800/80 hover:border-sarat-primary/50 transition-all duration-300 shadow-md hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('website.about_page.feature_library_title') }}</h3>
                    <p class="text-slate-100 text-sm leading-relaxed">{{ __('website.about_page.feature_library_desc') }}</p>
                </div>

                <!-- Feature 5: Global Community -->
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-800 p-8 rounded-2xl border border-slate-800/80 hover:border-sarat-accent/50 transition-all duration-300 shadow-md hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('website.about_page.feature_community_title') }}</h3>
                    <p class="text-slate-100 text-sm leading-relaxed">{{ __('website.about_page.feature_community_desc') }}</p>
                </div>
            </div>
        </div>

        <!-- High Impact Call to Action Block -->
        <div class="relative overflow-hidden bg-gradient-to-r from-yellow-500 to-yellow-800 p-10 md:p-16 rounded-3xl text-center border border-slate-800 shadow-2xl">
            <!-- Neon background splash elements -->
            <div class="absolute -left-16 -top-16 w-48 h-48 bg-sarat-primary/20 rounded-full blur-2xl pointer-events-none"></div>
            <div class="absolute -right-16 -bottom-16 w-48 h-48 bg-sarat-secondary/20 rounded-full blur-2xl pointer-events-none"></div>

            <h2 class="text-2xl md:text-4xl font-black text-white mb-4 relative z-10">
                {{ __('website.about_page.cta_title') }}
            </h2>
            <p class="text-slate-100 max-w-xl mx-auto mb-8 relative z-10 text-sm md:text-base">
                {{ __('website.about_page.cta_desc') }}
            </p>
            <a href="/courses" class="inline-block relative z-10 bg-gradient-to-r from-sarat-primary via-sarat-accent to-sarat-secondary hover:opacity-95 text-white font-bold tracking-wide px-10 py-4 rounded-xl transition-all shadow-xl shadow-sarat-primary/20 hover:scale-[1.02]">
                {{ __('website.about_page.cta_button') }}
            </a>
        </div>

    </main>





@endsection

