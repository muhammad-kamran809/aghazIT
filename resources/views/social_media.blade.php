<x-sections.nav_social />
@extends('layouts.social_app')
@section('content')
    {{-- hero section --}}
    <section class="hero" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p>Pricing Plan</p>
                    <p class="lead mb-4 fw-bold">
                        Social Media Marketing
                        Packages
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Cards Section -->
    <section class="pricing-section mb-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-white">Social Media Packages</h2>
                <p class="text-white">Choose the perfect plan to elevate your social media presence. All packages include professional
                    management and optimization.</p>
            </div>

            <div class="row g-4">
                <!-- Basic Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card basic">
                        <div class="card-header">
                            <h3>BASIC</h3>
                        </div>
                        <div class="card-body">
                            <ul class="feature-list">
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">Manage Facebook/Instagram page</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">Business logo and theme</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">Profile image and background design</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">3 posts/week (12 posts/month)</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">Content writing</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">Replying to comments</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">Targeted audience</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">No paid advertisement</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="text-gray">Monthly performance reporting</div>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="card-footer mb-5">
                            <a href="#" class="price-btn">Get Started</a>
                        </div> --}}
                    </div>
                </div>

                <!-- Standard Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card standard card-highlight">
                        {{-- <di/v class="popular-badge">MOST POPULAR</di> --}}
                        <div class="card-header">
                            <h3>STANDARD</h3>
                        </div>
                        <div class="card-body">
                            <ul class="feature-list">
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Manage Facebook/Instagram page</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Business logo and theme</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Profile image and background design</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">4 posts/week (16 posts/month)</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Content writing</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Replying to comments</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Targeted audience</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Registration on Google Map</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Create/manage Instagram account</div>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="card-footer mb-5">
                            <a href="#" class="price-btn">Get Started</a>
                        </div> --}}
                    </div>
                </div>

                <!-- Premium Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card premium">
                        <div class="card-header">
                            <h3>PREMIUM</h3>
                        </div>
                        <div class="card-body">
                            <ul class="feature-list">
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Manage Facebook/Instagram page</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Business logo and theme</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Profile image and background design</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">5 posts/week (20 posts/month)</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Creative posts for special days/events</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Content writing</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Generating keywords</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Targeted audience</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <div class="feature-text">Registration on Google Map</div>
                                </li>

                            </ul>
                        </div>
                        {{-- <div class="card-footer">
                                <a href="#" class="price-btn">Get Started</a>
                            </div> --}}
                    </div>
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
                    <div id="features-column">
                        <h5 id="feature-title">Feature Includes:</h5>
                        <ul id="feature-list">
                            <li>Content Strategy</li>
                            <li>Social Media Management</li>
                            <li>Viral Content Creation</li>
                            <li>Hashtag Research</li>
                            <li>Analytics and Reporting</li>
                            <li>Competitor Analysis</li>
                            <li>Engaging Content Creation</li>
                            <li>Unique Graphic Designs and Captions</li>
                            <li>Trending Research Generation</li>
                            <li>Scheduled Posts (After Client Approval)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
