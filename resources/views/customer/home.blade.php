@extends('layouts.customer')

@section('title', 'NADAPRO | Customer Support')

@section('description', 'NADAPRO provides reliable professional services and responsive customer support.')

@section('content')


    {{-- =====================================================
    HERO SECTION
    ===================================================== --}}

    <section class="hero">

        <div class="hero-background"></div>

        <div class="container hero-container">

            <div class="hero-content">

                <div class="eyebrow">

                    <span class="eyebrow-line"></span>

                    NADAPRO CUSTOMER SUPPORT

                </div>


                <h1>

                    Reliable Service.
                    <span>Trusted Support.</span>

                </h1>


                <p class="hero-description">

                    We are committed to providing reliable services
                    and making sure every customer receives the support
                    they deserve.

                </p>


                <div class="hero-actions">

                    <a href="{{ url('/report') }}" class="primary-button">
                        Report an Issue

                        <span>
                            →
                        </span>

                    </a>


                    <a href="#services" class="secondary-button">
                        Explore Our Services
                    </a>

                </div>


                <div class="hero-support-info">

                    <div class="support-info-item">

                        <div class="support-info-icon">
                            ✓
                        </div>

                        <div>

                            <strong>
                                Customer Focused
                            </strong>

                            <span>
                                Your satisfaction matters
                            </span>

                        </div>

                    </div>


                    <div class="support-info-divider"></div>


                    <div class="support-info-item">

                        <div class="support-info-icon">
                            2–3
                        </div>

                        <div>

                            <strong>
                                Quick Response
                            </strong>

                            <span>
                                We aim to respond promptly
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- HERO SUPPORT CARD --}}

            <div class="hero-card-wrapper">

                <div class="hero-card">

                    <div class="hero-card-header">

                        <span class="online-dot"></span>

                        CUSTOMER SUPPORT

                    </div>


                    <div class="hero-card-icon">
                        ?
                    </div>


                    <h2>
                        Need Help?
                    </h2>


                    <p>
                        Experiencing a problem with our service?
                        Tell us what happened and our team will
                        review your concern.
                    </p>


                    <a href="{{ url('/report') }}" class="hero-card-button">

                        Report Your Issue

                        <span>
                            →
                        </span>

                    </a>


                    <div class="hero-card-footer">

                        <span>
                            ●
                        </span>

                        Your concern matters to us.

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
    SERVICES
    ===================================================== --}}

    <section class="services-section" id="services">

        <div class="container">

            <div class="section-heading">

                <span class="section-label">
                    WHAT WE DO
                </span>

                <h2>
                    Our Services
                </h2>

                <p>
                    Professional service solutions focused on
                    quality, reliability and customer satisfaction.
                </p>

            </div>


            <div class="services-grid">


                {{-- SERVICE 01 --}}

                <article class="service-card">

                    <span class="service-number">
                        01
                    </span>

                    <div class="service-icon">
                        ◇
                    </div>

                    <h3>
                        Professional Services
                    </h3>

                    <p>
                        Reliable professional solutions designed
                        to meet the needs of our customers.
                    </p>

                    <a href="{{ url('/services') }}">
                        Learn More →
                    </a>

                </article>


                {{-- SERVICE 02 --}}

                <article class="service-card featured">

                    <span class="service-number">
                        02
                    </span>

                    <div class="service-icon">
                        ✓
                    </div>

                    <h3>
                        Quality & Reliability
                    </h3>

                    <p>
                        We maintain high service standards and
                        focus on delivering dependable solutions.
                    </p>

                    <a href="{{ url('/services') }}">
                        Learn More →
                    </a>

                </article>


                {{-- SERVICE 03 --}}

                <article class="service-card">

                    <span class="service-number">
                        03
                    </span>

                    <div class="service-icon">
                        +
                    </div>

                    <h3>
                        Customer Support
                    </h3>

                    <p>
                        Our support process helps us understand
                        and resolve customer concerns.
                    </p>

                    <a href="{{ url('/report') }}">
                        Get Support →
                    </a>

                </article>

            </div>

        </div>

    </section>



    {{-- =====================================================
    ABOUT
    ===================================================== --}}

    <section class="about-section" id="about">

        <div class="container about-container">

            <div class="about-visual">

                <div class="about-card">

                    <span>
                        NADAPRO
                    </span>

                    <strong>
                        NP
                    </strong>

                    <p>
                        Service with responsibility.
                    </p>

                </div>

            </div>


            <div class="about-content">

                <span class="section-label">
                    ABOUT NADAPRO
                </span>


                <h2>

                    Good service
                    starts with
                    <span>listening.</span>

                </h2>


                <p>
                    Our goal is simple — provide dependable services
                    while maintaining a strong relationship with our
                    customers.
                </p>


                <p>
                    If something does not go as expected, we want to
                    know about it. Your feedback helps us improve our
                    services and provide a better customer experience.
                </p>


                <a href="{{ url('/report') }}" class="text-button">

                    Tell Us About an Issue

                    <span>
                        →
                    </span>

                </a>

            </div>

        </div>

    </section>



    {{-- =====================================================
    CUSTOMER SUPPORT CTA
    ===================================================== --}}

    <section class="support-cta">

        <div class="container">

            <div class="support-cta-card">

                <div>

                    <span class="section-label light">
                        CUSTOMER SUPPORT
                    </span>


                    <h2>
                        Something isn't right?
                    </h2>


                    <p>
                        Tell us what happened. Our support team will
                        review your report and work towards resolving
                        the issue.
                    </p>

                </div>


                <a href="{{ route('customer.access') }}">
                    Report a Service Issue
                    <span>→</span>
                </a>

            </div>

        </div>

    </section>


@endsection