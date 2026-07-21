<!doctype html>
<html lang="en" @if(app()->getLocale() == 'ar') dir="rtl" @endif>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EduYouth | @yield('title')</title>
    <script>
        ! function() {
            try {
                var t = localStorage.getItem("dash26-theme"),
                    e = window.matchMedia("(prefers-color-scheme: dark)").matches;
                document.documentElement.setAttribute("data-theme", t || (e ?
                    "dark" : "light"))
            } catch (t) {
                document.documentElement.setAttribute("data-theme", "light")
            }
        }()
    </script>
    <script defer="defer" src="{{ asset('assets/js/runtime.js') }} "></script>
    <script defer="defer" src="{{ asset('assets/js/vendor-fullcalendar.js') }} ">
    </script>
    <script defer="defer" src="{{ asset('assets/js/vendor-chartjs.js') }} ">
    </script>
    <script defer="defer" src="{{ asset('assets/js/vendors.js') }} "></script>
    <script defer="defer" src="{{ asset('assets/js/2026.js') }} "></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
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
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Alpine.js for simple mobile menu toggle (Optional but helpful) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body data-active="dashboard" data-crumbs="Workspace | Dashboard">
    @if (auth()->guard('admin')->check())
        <div class="shell">
            @include('admin.partials.sidebar')
            <div class="main">
                @include('admin.partials.topbar')
                @yield('content')
                @include('admin.partials.footer')
            </div>
        </div>
    @else
        @yield('content')
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- jQuery (Required for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $key => $error)
                    <script>
                        toastr['error']({!! json_encode($error) !!}, {
                            closeButton: true,
                            tapToDismiss: false,
                            timeOut: 5,
                        });
                    </script>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('error'))
        <script>
            toastr['error']({!! json_encode(Session::get('error')) !!}, {
                closeButton: true,
                tapToDismiss: false,
                timeOut: 5,
            });
        </script>
    @endif
    @if (Session::has('success'))
        <script>
            toastr['success']({!! json_encode(Session::get('success')) !!}, {
                closeButton: true,
                tapToDismiss: false,
                timeOut: 5,
            });
        </script>
    @endif
    <script>
        const themeToggleBtn = document.getElementById('themeToggle');
        themeToggleBtn.addEventListener('click', function () {

            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });

        function changeLang(langCode) {
            const htmlElement = document.documentElement;
            htmlElement.setAttribute('lang', langCode);

            if (langCode === 'ar') {
                htmlElement.setAttribute('dir', 'rtl');
            } else {
                htmlElement.setAttribute('dir', 'ltr');
            }
        }

        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</body>

</html>
