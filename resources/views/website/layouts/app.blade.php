<!DOCTYPE html>
<html lang="{{app()->getLocale() == 'ar' ? 'ar':'en'}}" dir="{{app()->getLocale() == 'ar' ? 'rtl':'ltr'}}">
<head>
<title>Course | @yield('title') </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap4/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/plugins/OwlCarousel2-2.2.1/animate.css')}}">
@if(app()->getLocale() == 'en')
<link rel="stylesheet" type="text/css" href="{{asset('website/css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/responsive.css')}}">
@else
<link rel="stylesheet" type="text/css" href="{{asset('website/ar/css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/ar/css/responsive.css')}}">
@endif

@stack('styles')

{{-- tailwind --}}
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        darkMode: 'class',
        plugins: [
            function({ addVariant }) {
                addVariant('dark', '&:where(.dark, .dark *)');
            }
        ]
    }
</script>
<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<!-- Alpine.js for simple mobile menu toggle (Optional but helpful) -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>

<div class="super_container">
@include('website.partials.navbar')
@yield('content')
@include('website.partials.footer')
</div>

<script src="{{asset('website/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('website/css/bootstrap4/popper.js')}}"></script>
<script src="{{asset('website/css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('website/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('website/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('website/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('website/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('website/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('website/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('website/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
@stack('scripts')
<script src="{{asset('website/plugins/easing/easing.js')}}"></script>

@if(app()->getLocale() == 'en')
<script src="{{asset('website/js/custom.js')}}"></script>
@else
<script src="{{asset('website/ar/js/custom.js')}}"></script>
@endif

</body>
</html>
