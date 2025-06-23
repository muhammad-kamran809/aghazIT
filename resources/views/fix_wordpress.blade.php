<x-sections.nav_social />
@extends('layouts.social_app')
@section('content')
    {{-- hero section --}}
    <div class="container-fluid text-center">
        <div class="row align-items-center bg-dark text-white p-4  shadow-lg">
            <div class="col-md-6 mb-4 mb-md-0 text-start">
                <h4 class="fw-bold mb-3">One of three columns</h4>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. In laudantium neque ipsa obcaecati iusto atque
                    quae quod adipisci placeat laborum eos cum rerum incidunt perspiciatis, aliquam facere non, inventore
                    ipsam?
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
                    class="img-fluid shadow" alt="Responsive image">
            </div>
        </div>
    </div>



    <!-- Pricing Section -->
    <section id="pricing-section">
        <div class="container" id="pricing-container">
            <div id="plan-columns">
                <!-- Basic Plan -->
                <div id="basic-plan">
                    <h3 id="basic-plan-title">BASIC</h3>
                    <ul id="basic-features" class="text-white">
                        <li><i class="fas fa-check"></i> Up to 5 pages</li>
                        <li><i class="fas fa-check"></i> Color branding</li>
                        <li><i class="fas fa-check"></i> Contact form</li>
                        <li><i class="fas fa-check"></i> Social media integration</li>
                        <li><i class="fas fa-check"></i> Stock images</li>
                        <li><i class="fas fa-clock" id="delivery-icon"></i> 7 Days Delivery</li>
                        <li><i class="fas fa-recycle" id="revision-icon"></i> 2 Revisions</li>
                    </ul>
                </div>

                <!-- Standard Plan -->
                <div id="standard-plan">
                    <h3 id="standard-plan-title">STANDARD</h3>
                    <ul id="standard-features" class="text-white">
                        <li><i class="fas fa-check"></i> Basic + 3 more pages</li>
                        <li><i class="fas fa-check"></i> SEO</li>
                        <li><i class="fas fa-check"></i> SPEED and 2 weeks support after completion of project</li>
                        <li><i class="fas fa-clock" id="delivery-icon"></i> 10 Days Delivery</li>
                        <li><i class="fas fa-recycle" id="revision-icon"></i> 3 Revisions</li>
                    </ul>
                </div>

                <!-- Premium Plan -->
                <div id="premium-plan">
                    <h3 id="premium-plan-title">PREMIUM</h3>
                    <ul id="premium-features" class="text-white">
                        <li><i class="fas fa-check"></i> 10 pages + e-commerce with 10 products</li>
                        <li><i class="fas fa-check"></i> 1 month free support</li>
                        <li><i class="fas fa-clock" id="delivery-icon"></i> 13 Days Delivery</li>
                        <li><i class="fas fa-recycle" id="revision-icon"></i> 3 Revisions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Package Section -->
    <section id="package-section">
        <div id="package-container" class="container">
            <div class="row g-4">
                <!-- Left Column - About Package -->
                <div class="col-md-6">
                    <div id="about-column">
                        <h2 id="section-title">About This Package</h2>
                        <p class="package-description">
                            Are you searching for a creative companion to curate content for your business?
                            Look no further – you've found your perfect match! Managing everything on your
                            own can be overwhelming, but fear not. We are here to lend a helping hand with
                            our skills, knowledge, and expertise in social media marketing.
                        </p>
                        <p class="package-description">
                            <span id="highlight">Elite Digital Marketing</span> is our ambitious venture,
                            dedicated to collaborating with businesses of all sizes. From startups to large
                            corporations, we take pride in delivering comprehensive solutions to meet all your
                            digital marketing needs effortlessly.
                        </p>
                    </div>
                </div>

                <!-- Right Column - Features -->
                <div class="col-md-6">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
                            class="img-fluid shadow" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
