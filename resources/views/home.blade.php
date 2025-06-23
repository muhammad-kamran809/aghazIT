@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    {{-- <x-sections.hero-section /> --}}
    <section class="hero" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Creative Development Company</h1>
                    <p class="lead mb-4">
                        We design and build great software and websites with passion and dedication.
                    </p>
                    <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    {{-- about section code here --}}
    {{-- <x-sections.about-section /> --}}

    <section class="py-5 bg-light" id="about">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Left Empty Column (optional, for design balance) -->
                <div class="col-lg-3 d-none d-lg-block"></div>

                <!-- Main Content Column -->
                <div class="col-lg-6 col-md-10 text-center">
                    <!-- Anchor Link -->
                    <div id="7"></div>

                    <!-- Headings -->
                    <h2 class="fw-bold mb-3">About Our SoftBreeze</h2>
                    <h2 class="mb-4">We love what we do &amp; we do it with passion!</h2>

                    <!-- Description -->
                    <p class="mb-4">
                        We design and build great software and websites. Every website or software that we create is
                        built
                        and designed by our team with full passion, dedication and their best work.
                        We have different ways of working, removing unnecessary costs, offering lower prices than
                        other
                        similar agencies. We have been helping companies to achieve their goals.
                    </p>

                    <!-- Divider -->
                    <hr class="w-25 mx-auto my-4 text-warning">

                    <!-- Read More Button -->
                    <a href="#why-choose-us" class="btn btn-primary px-4 py-2">Read More</a>
                </div>

                <!-- Right Empty Column (optional) -->
                <div class="col-lg-3 d-none d-lg-block"></div>
            </div>
        </div>
    </section>

    {{-- about cards here --}}
    <section class="services-section" id="features">
        <div class="container">
            <div class="row">
                <!-- Web Design Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="icon-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3><span>Web Design</span></h3>
                        <p>Our experts create most affordable web design and development services considering the size
                            of
                            every business.</p>
                        <a href="#" class="card-link">Learn More →</a>
                    </div>
                </div>

                <!-- Development Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="icon-card">
                        <div class="icon-wrapper">
                            <a href="https://softbreeze.org/website-development/" class="icon-link" tabindex="-1"
                                aria-label="Development">
                                <i class="fab fa-connectdevelop"></i>
                            </a>
                        </div>
                        <h3><a href="https://softbreeze.org/website-development/">Development</a></h3>
                        <p>A resource that provides the correct display of information on any devices. Attracts mobile
                            users, increases business competitiveness.</p>
                        <a href="https://softbreeze.org/website-development/" class="card-link">Learn More →</a>
                    </div>
                </div>

                <!-- Branding Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="icon-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3><span>Branding</span></h3>
                        <p>A resource that provides the correct display of information on any devices. Attracts mobile
                            users, increases business competitiveness.</p>
                        <a href="#" class="card-link">Learn More →</a>
                    </div>
                </div>

                <!-- Marketing Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="icon-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3><span>Marketing</span></h3>
                        <p>We know what is required to make your business a sensation and we have highly skillful team
                            which
                            can turn the table around as far as your business growth is concerned.</p>
                        <a href="#" class="card-link">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-white" id="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="fw-bold">Why Choose Us?</h2>
                    <h4 class="fw-bold">Some Words about us.</h4>
                    <p class="mb-4">
                        Softbreeze is the best Software company in Pakistan. We provide Website,
                        Software, and Android-related services. Our aim is to create an impact
                        socially and economically on our country & across the globe and become
                        a renowned high-quality IT services provider.
                    </p>
                    <a href="#" class="btn btn-primary">Click here</a>
                </div>

                <!-- Image -->
                <div class="col-md-6">
                    <img src="https://softbreeze.org/my_content/uploads/2023/03/intro.jpg" alt="Softbreeze Internship Intro"
                        class="img-fluid rounded shadow" />
                </div>
            </div>
        </div>
    </section>


    <!-- counter Stats Section -->
    <section class="counter-section" id="stats">
        <div class="container">
            <div class="row text-center">
                <!-- Counter Card 1 -->
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="counter-box">
                        <h2>
                            <span class="counter" data-target="98">0</span><span>%</span>
                        </h2>
                        <h5 class="fw-bold">CUSTOMER SATISFACTION</h5>
                    </div>
                </div>
                <!-- Counter Card 2 -->
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="counter-box">
                        <h2>
                            <span class="counter" data-target="60">0</span><span>+</span>
                        </h2>
                        <h5 class="fw-bold">SPECIALISTS IN OUR TEAM</h5>
                    </div>
                </div>
                <!-- Counter Card 3 -->
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="counter-box">
                        <h2>
                            <span class="counter" data-target="7">0</span><span>+</span>
                        </h2>
                        <h5 class="fw-bold">INDUSTRY AWARDS</h5>
                    </div>
                </div>
                <!-- Counter Card 4 -->
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="counter-box">
                        <h2>
                            <span class="counter" data-target="671">0</span><span>+</span>
                        </h2>
                        <h5 class="fw-bold">SUCCESSFUL PROJECTS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- over services section --}}
    {{-- <x-sections.services-section /> --}}
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <!-- Anchor -->
            <div id="2"></div>

            <!-- Heading -->
            <div class="row mb-4">
                <div class="col text-center">
                    <h2 class="fw-bold">Our Services</h2>
                </div>
            </div>

            <!-- Description -->
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <p>
                        We are resourceful in our field and know web development and marketing.
                        We have provided excellent digital marketing services in Pakistan.
                        We know what it takes to make your business a sensation,
                        and we have a highly skilled team that can transform your business.
                        <strong>SEO technique is essential</strong> to grow your brand and we have SEO experience all over
                        Pakistan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- over services card --}}
    <section class="py-5 bg-gray text-white" id="service-cards">
        <div class="container">
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 ">
                    <div class="service-card p-4 text-center rounded shadow">
                        <i class="fas fa-laptop-code fa-2x mb-3"></i>
                        <h5 class="fw-bold">Website Development</h5>
                        <p class="small">We specialize in mobile-friendly and user-friendly website designs.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card p-4 text-center rounded">
                        <i class="fas fa-paint-brush fa-2x mb-3"></i>
                        <h5 class="fw-bold">Logo Design</h5>
                        <p class="small">Custom logo designs that represent your brand effectively.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card p-4 text-center rounded">
                        <i class="fas fa-file-alt fa-2x mb-3"></i>
                        <h5 class="fw-bold">Brochure/Profile</h5>
                        <p class="small">Quality brochure and profile designs to enhance your brand.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card p-4 text-center rounded">
                        <i class="fas fa-vector-square fa-2x mb-3"></i>
                        <h5 class="fw-bold">Graphic Design</h5>
                        <p class="small">Professional graphic designs for brochures, leaflets, and flyers.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card p-4 text-center rounded">
                        <i class="fas fa-shopping-cart fa-2x mb-3"></i>
                        <h5 class="fw-bold">ECommerce</h5>
                        <p class="small">We create unique and growth-driven eCommerce solutions.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card p-4 text-center rounded">
                        <i class="fas fa-server fa-2x mb-3"></i>
                        <h5 class="fw-bold">Web Hosting</h5>
                        <p class="small">Fast, secure, and reliable hosting for your websites.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- min feature cards code here --}}
    {{-- <x-sections.feature-section /> --}}
    <section class="features-section" id="main-features">
        <div class="container">
            <div class="text-center mb-5 main-h">
                <h2>Main Features</h2>
            </div>

            <!-- First row of features -->
            <div class="row feature-row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-img">
                            <img src="https://softbreeze.org/my_content/uploads/2023/04/idea.png" alt="Creative Team">
                        </div>
                        <h3>Creative Team</h3>
                        <p>We bring the right people together to challenge established thinking and drive transform</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-img">
                            <img src="https://softbreeze.org/my_content/uploads/2023/04/24-hours.png" alt="24/7 Support">
                        </div>
                        <h3>24 / 7 Online Support</h3>
                        <p>Our team is always there to serve their best expertise to client all over 24/7 online support to
                            get best product and client business success and comfort.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-img">
                            <img src="https://softbreeze.org/my_content/uploads/2023/04/price-tag.png" alt="Budget Price">
                        </div>
                        <h3>Budget Price</h3>
                        <p>Our main focus is to produce high quality product to respectful clients with great expertise and
                            experience applying as well as on budget prices.</p>
                    </div>
                </div>
            </div>

            <!-- Second row of features -->
            <div class="row feature-row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-img">
                            <img src="https://softbreeze.org/my_content/uploads/2023/04/implementation.png"
                                alt="Brainstorming">
                        </div>
                        <h3>Brainstorming and Ideation</h3>
                        <p>With the help of Brainstorming and Ideation establish a great way to generate many ideas by
                            leveraging the collective thinking of the group, engaging with each other, listening, and
                            building on other ideas.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-img">
                            <img src="https://softbreeze.org/my_content/uploads/2023/04/goal.png" alt="Experience">
                        </div>
                        <h3>Well Of Experience</h3>
                        <p>Our "high-performance work team" goal-focused individuals with specialized expertise and
                            complementary skills to collaborate, innovate and produce consistently superior results.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-img">
                            <img src="https://softbreeze.org/my_content/uploads/2023/04/discount.png" alt="Satisfaction">
                        </div>
                        <h3>100% Satisfaction</h3>
                        <p>Your satisfaction is our very first priority. If you have any concern about your product, we are
                            here to solve them in every possible manner with flexibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- slider logo code here --}}
    {{-- <x-sections.logo_slider-section /> --}}
    <section class="logo-carousel-section mt-5" id="technologies">
        <!-- Decorative elements -->
        <div class="decoration circle-1"></div>
        <div class="decoration circle-2"></div>

        <div class="container">
            <div class="section-header">
                <h2>We are working on these Technologies</h2>
                {{-- <p>We leverage cutting-edge technologies to deliver innovative solutions for your business</p> --}}
            </div>

            <div class="logo-carousel-container">
                <div class="logo-carousel">
                    <div class="logo-track">
                        <!-- Logo items -->
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/24d452e8cbc8d61372743a076220fbd2.png"
                                    alt="CodeIgniter">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/best-software-house-in-wah-cantt.jpg"
                                    alt="Laravel">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-9.png"
                                    alt="ASP.NET">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-8.png"
                                    alt="Android">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-7.png"
                                    alt="Bootstrap">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-6.png"
                                    alt="WordPress">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-5.png"
                                    alt="Node.js">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-4.png"
                                    alt="React">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-3.png"
                                    alt="iOS">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-12.png"
                                    alt="JavaScript">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-11.png"
                                    alt="C#">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-10.png"
                                    alt="Laravel">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-19.png"
                                    alt="Vue.js">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-18.png"
                                    alt="DBManago">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-17.png"
                                    alt="HTML">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-16.png"
                                    alt="CSS">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-15.png"
                                    alt="CSS3">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-14.png"
                                    alt="PHP MySQL">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-img">
                                <img src="https://softbreeze.org/my_content/uploads/2023/03/Untitled-design-20.png"
                                    alt="MySQL">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-controls">
                    <div class="carousel-btn prev-btn">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="carousel-btn next-btn">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>

            <div class="carousel-indicators">
                <div class="indicator active"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
            </div>
        </div>
    </section>


    <!-- FAQ Section -->
    {{-- <x-sections.faq-section /> --}}
    <section class="faq-section mt-5" id="faq">
        <div class="text-center mb-5">
            <h2 class="text-center faq-h">Frequently Asked Questions</h2>
            {{-- <div class="divider"></div> --}}
        </div>
        <div class="container " id="cont-id">
            <div class="accordion" id="faqAccordion">
                <!-- FAQ Item 1 -->
                <div class="accordion-item ">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button d-flex justify-content-between align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <span>I need a small team of developers. Can you help?</span>
                            <i class="fas fa-plus toggle-icon ms-auto"></i> <!-- minus because default is shown -->
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body ">
                            <p>Of course. We understand that each project is different and needs various team sizes to
                                accomplish tasks.
                                Whether you need just one developer or a small team of 2-5 developers, feel free to contact
                                us and share
                                your requirements. We will take it up from there and align you with the best-suited
                                resources for your
                                specific project.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed d-flex justify-content-between align-items-center"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <span>What is the process of custom software development?</span>
                            <i class="fas fa-plus toggle-icon ms-auto"></i>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>We implement an outcome-oriented approach that helps you overcome significant business
                                challenges. Our software development company works closely with you during our pre-project
                                consulting. We then move ahead with our research, design, and planning process keeping in
                                mind your specific business requirements. Next, we begin coding and testing your software
                                for a successful launch. We ensure your software is deployed safely, hosted responsibly,
                                and
                                regularly maintained for future enhancements with proactive support.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed d-flex justify-content-between align-items-center"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <span>How much does custom software cost?</span>
                            <i class="fa-solid fa-plus ms-auto toggle-icon"></i>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>The cost of developing custom software in our software development company depends on
                                several
                                factors such as the size and build of the application, the features and third-party
                                integrations, API development costs, animations, localizations, backend, cross-platform
                                toolsets, platforms, etc. If you share your basic idea, we can provide you an ETA and
                                estimated cost.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team Member Section code here -->
    {{-- <x-sections.team_member-section /> --}}
    <section class="team-section mt-5 rounded" id="team">
        <!-- Decorative elements -->
        <div class="decoration circle-1"></div>
        <div class="decoration circle-2"></div>

        <div class="container">
            <div class="section-header">
                <h2>Our Team Members</h2>
                <p>Meet the talented professionals who make our success possible</p>
            </div>

            <div class="team-carousel-container">
                <div class="team-carousel">
                    <div class="team-track" id="teamTrack">
                        <!-- Team Member 1 -->
                        <div class="team-member">
                            <div class="member-card">
                                <div class="profile-img">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Shukria Naz Khoshbo">
                                </div>
                                <div class="member-info">
                                    <h3>Shukria Naz Khoshbo</h3>
                                    <div class="position">WordPress Developer</div>
                                </div>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 2 -->
                        <div class="team-member">
                            <div class="member-card">
                                <div class="profile-img">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Abuzar Shinwari">
                                </div>
                                <div class="member-info">
                                    <h3>Abuzar Shinwari</h3>
                                    <div class="position">Project Coordinator</div>
                                </div>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 3 -->
                        <div class="team-member">
                            <div class="member-card">
                                <div class="profile-img">
                                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Shukria Naz Khoshbo">
                                </div>
                                <div class="member-info">
                                    <h3>Shukria Naz Khoshbo</h3>
                                    <div class="position">WordPress Developer</div>
                                </div>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 4 -->
                        <div class="team-member">
                            <div class="member-card">
                                <div class="profile-img">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Amna">
                                </div>
                                <div class="member-info">
                                    <h3>Amna</h3>
                                    <div class="position">Graphics Designer</div>
                                </div>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 5 -->
                        <div class="team-member">
                            <div class="member-card">
                                <div class="profile-img">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Amir Khan">
                                </div>
                                <div class="member-info">
                                    <h3>Amir Khan</h3>
                                    <div class="position">Chief Executive Officer</div>
                                </div>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 6 -->
                        <div class="team-member">
                            <div class="member-card">
                                <div class="profile-img">
                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Ikram Ullah">
                                </div>
                                <div class="member-info">
                                    <h3>Ikram Ullah</h3>
                                    <div class="position">Web Developer</div>
                                </div>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 7 -->
                        <div class="team-member">
                            <div class="member-card">
                                <div class="profile-img">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Muhammad Ayub">
                                </div>
                                <div class="member-info">
                                    <h3>Muhammad Ayub</h3>
                                    <div class="position">Front End Developer</div>
                                </div>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-controls">
                    <div class="carousel-btn prev-btn">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="carousel-btn next-btn">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>


            </div>
            <div class="carousel-indicators mt-5" id="carouselIndicators">
                <div class="indicator active" data-index="0"></div>
                <div class="indicator" data-index="1"></div>
                <div class="indicator" data-index="2"></div>
            </div>
        </div>
    </section>


    {{-- contact form here --}}
    {{-- <x-sections.contact_form-section /> --}}
    <section class="contact-section mt-5 rounded" id="contact">
        <a class="nav-link" href="{{ url('/contact') }}">
            <div class="container my-5">
                <div class="text-center">
                    <h3 class="display-5 fw-bold mb-3 ">
                        Talk In Details About Your <br class="d-none d-md-block">
                        Project With Us!
                    </h3>
                </div>
            </div>

            <div class="container contact-container">
                <div class="row">
                    <!-- Contact Information -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="contact-info">
                            <h2>Get In Touch</h2>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Call me:</h3>
                                    <p>+966 55 659 7921<br>+92 091-5700792</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Email:</h3>
                                    <p>info@softbreeze.org</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Address:</h3>
                                    <p>Softbreeze Company<br>IT Park Peshawar</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-7">
                        <div class="contact-form-container">
                            <h3 class="form-title">Send us a Message</h3>

                            <form>
                                <div class="name-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" required>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message" required></textarea>
                                </div>

                                <button type="submit" class="submit-btn">
                                    <i class="fas fa-paper-plane me-2"></i> Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
