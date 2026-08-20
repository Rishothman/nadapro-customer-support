<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'NADAPRO')</title>

    <meta
        name="description"
        content="@yield('description', 'NADAPRO customer service and support')"
    >

    <link
        rel="icon"
        type="image/png"
        href="{{ asset('images/nadapro-logo.png') }}"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body>

    {{-- ================================
         NAVBAR
    ================================= --}}

    <header class="site-header">

        <div class="container navbar">

            <a href="{{ url('/') }}" class="brand">
                <img
                    src="{{ asset('images/nadapro-logo.png') }}"
                    alt="NADAPRO"
                >
            </a>

            <nav class="desktop-nav">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <a href="{{ url('/about') }}">
                    About
                </a>

                <a href="{{ url('/services') }}">
                    Services
                </a>

                <a href="{{ url('/contact') }}">
                    Contact
                </a>

                <a
                    href="{{ url('/report') }}"
                    class="nav-report-btn"
                >
                    Report an Issue
                </a>

            </nav>

            <button
                type="button"
                class="mobile-menu-button"
                id="mobileMenuButton"
                aria-label="Open navigation"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

        {{-- Mobile Navigation --}}

        <div
            class="mobile-nav"
            id="mobileNav"
        >

            <a href="{{ url('/') }}">
                Home
            </a>

            <a href="{{ url('/about') }}">
                About
            </a>

            <a href="{{ url('/services') }}">
                Services
            </a>

            <a href="{{ url('/contact') }}">
                Contact
            </a>

            <a
                href="{{ url('/report') }}"
                class="mobile-report-btn"
            >
                Report an Issue
            </a>

        </div>

    </header>


    {{-- ================================
         PAGE CONTENT
    ================================= --}}

    <main>
        @yield('content')
    </main>


    {{-- ================================
         FOOTER
    ================================= --}}

    <footer class="site-footer">

        <div class="container footer-grid">

            <div class="footer-company">

                <img
                    src="{{ asset('images/nadapro-logo.png') }}"
                    alt="NADAPRO"
                    class="footer-logo"
                >

                <p>
                    Professional service solutions built around
                    reliability, quality and customer satisfaction.
                </p>

            </div>


            <div class="footer-column">

                <h4>
                    Quick Links
                </h4>

                <a href="{{ url('/') }}">
                    Home
                </a>

                <a href="{{ url('/about') }}">
                    About
                </a>

                <a href="{{ url('/services') }}">
                    Services
                </a>

                <a href="{{ url('/contact') }}">
                    Contact
                </a>

            </div>


            <div class="footer-column">

                <h4>
                    Customer Support
                </h4>

                <p>
                    Experiencing an issue with our service?
                </p>

                <a
                    href="{{ url('/report') }}"
                    class="footer-report-link"
                >
                    Report an Issue →
                </a>

            </div>

        </div>


        <div class="footer-bottom">

            <div class="container">

                <p>
                    © {{ date('Y') }} NADAPRO.
                    All rights reserved.
                </p>

            </div>

        </div>

    </footer>


    @stack('scripts')

</body>
</html>