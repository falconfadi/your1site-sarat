@extends('admin.layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="auth-shell">
        <aside class="auth-aside">
            <div class="auth-brand">
                <div class="logo">
                    EY
                </div>
                <div class="name">EduYouth</div>
            </div>
            <div class="auth-aside-body">
                <span class="auth-aside-eyebrow">2026 · 2027</span>
                <h1>The dashboard you want to have.</h1>
                <p>
                    Faster builds, cleaner tokens, and a design system that scales
                    from
                    a single chart to a 12-screen ops cockpit.
                </p>

            </div>
            <div class="auth-aside-footer">
                <span>© 2026</span> <span>BUILT IN RIGA, LV</span>
            </div>
        </aside>
        <main class="auth-main">
            {{-- <div class="auth-main-top">
                <a href="index.html"
                    style="
              font-size: 12.5px;
              color: var(--t-muted);
              display: inline-flex;
              align-items: center;
              gap: 6px;
            "><svg
                        viewBox="0 0 24 24" width="13" height="13"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7" />
                    </svg>
                    Back to home</a>
                <div class="switch-link">
                    New here? <a href="signup.html">Create account</a>
                </div>
            </div> --}}
            <div class="auth-card">
                <h2>Welcome back</h2>
                <p class="sub">
                    Sign in to your workspace .
                </p>
                <form class="auth-form" method="post"
                    action="{{ route('admin.login') }}">
                    @csrf
                    <div class="field">
                        <label class="field-label" for="email">Email</label>
                        <div class="input-icon">
                            <span class="ico">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input id="email"
                                class="input @error('email') input--error @enderror"
                                name="email" type="email"
                                placeholder="you@company.com"
                                value="{{ old('email') }}" autocomplete="email"
                                required />
                        </div>
                        @error('email')
                            <span class="error-message"
                                style="color: red; font-size: 0.85rem; display: block; margin-top: 0.25rem;">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="field-row">
                            <label class="field-label"
                                for="password">Password</label>
                            {{-- <a href="#">Forgot?</a> --}}
                        </div>
                        <div class="input-icon">
                            <span class="ico">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input id="password"
                                class="input @error('password') input--error @enderror"
                                name="password" type="password"
                                placeholder="••••••••"
                                autocomplete="current-password" required />
                        </div>
                        @error('password')
                            <span class="error-message"
                                style="color: red; font-size: 0.85rem; display: block; margin-top: 0.25rem;">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- <label class="check">
                            <input type="checkbox" checked="checked" />
                            <span class="box"></span> 
                            Keep me signed in for 30 days
                        </label> --}}
                    <button class="btn btn--primary auth-submit" type="submit">
                        Sign in
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </form>

            </div>
            <div class="auth-main-bottom">
            </div>
        </main>
    </div>
@endsection
