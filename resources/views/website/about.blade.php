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
            <div class="lg:col-span-7 bg-gradient-to-r from-[#f47e52] to-[#f47e30] p-8 md:p-12 rounded-2xl border border-slate-800/60 shadow-xl flex flex-col justify-center">
                <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-6 flex items-center gap-3">
                    <span class="w-1 h-8 bg-white rounded-full"></span>
                    {{ __('website.about_page.mission_title') }}
                </h2>
                <p class="text-slate-100 leading-relaxed text-lg mb-2">
                    {{ __('website.about_page.mission_text_1') }}
                </p>
                <p class="text-slate-200 leading-relaxed text-lg">
                    {{ __('website.about_page.mission_text_2') }}
                </p>
            </div>


            <div class="lg:col-span-5 bg-gradient-to-br from-sarat-primary/90 to-sarat-accent/90 p-8 md:p-10 rounded-2xl shadow-xl flex flex-col justify-between text-white relative overflow-hidden">
                <!-- Abstract Design Accent -->
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/5 rounded-full pointer-events-none"></div>

                <div class="text-9xl opacity-30 text-black font-serif">“</div>
                <p class="text-lg font-semibold relative z-10 mb-8 leading-snug">
                    {{ __('website.about_page.quote') }}
                </p>
            </div>
        </div>

        {{-- vision --}}
        <div class="relative overflow-hidden bg-gradient-to-r from-[#f47e52] to-[#f47e30] p-5 md:p-10 rounded-2xl text-center border border-slate-800 shadow-2xl mb-24">
            <h2 class="text-2xl md:text-4xl font-black text-white mb-4 relative z-10">
                {{ __('website.about_page.vision') }}
            </h2>
            <p class="text-slate-100 max-w-xl mx-auto mb-8 relative z-10 text-2xl md:text-pretty">
                {{ __('website.about_page.vision_desc') }}
            </p>
        </div>
        
        {{-- mission --}}
        <div class="relative overflow-hidden bg-gradient-to-r from-[#f47e52] to-[#f47e30] p-5 md:p-10 rounded-2xl text-center border border-slate-800 shadow-2xl mb-24">
            <h2 class="text-2xl md:text-4xl font-black text-white mb-4 relative z-10">
                {{ __('website.about_page.mission') }}
            </h2>
            <p class="text-slate-100 max-w-xl mx-auto mb-8 relative z-10 text-2xl md:text-pretty">
                {{ __('website.about_page.mission_desc') }}
            </p>
        </div>
        
        {{-- charter --}}
        <div class="relative overflow-hidden bg-gradient-to-r from-[#f47e52] to-[#f47e30] p-5 md:p-10 rounded-2xl text-center border border-slate-800 shadow-2xl mb-24">
            <h2 class="text-2xl md:text-4xl font-black text-white mb-4 relative z-10">
                {{ __('website.about_page.charter') }}
            </h2>
            @for($i=0;$i<=5;$i++)
                <p class="text-slate-100 max-w-xl mx-auto mb-8 relative z-10 text-2xl md:text-pretty">
                    {{ __("website.about_page.charter_desc.{$i}") }}
                </p>
            @endfor
        </div>

        <!-- High Impact Call to Action Block -->
        <div class="relative overflow-hidden bg-gradient-to-r from-[#f47e52] to-[#f47e30] p-10 md:p-16 rounded-2xl text-center border border-slate-800 shadow-2xl">
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

