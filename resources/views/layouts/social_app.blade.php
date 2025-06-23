<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softbreeze - Creative Development Company</title>
    <link rel="stylesheet" href="/social.css">
    <link rel="stylesheet" href="/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />


</head>

<body>
    <!-- Navigation -->
    <div class="">

        <!-- Navbar -->
        <nav class=" container-box navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="#">
                    <i class="fas fa-code me-2"></i>DevNav
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>








        <!-- Main Content -->
        @yield('content')



        {{-- footer  --}}
        <section class="footer-section mt-5">
            <div class="footer-overlay"></div>
            <div class="glow-effect glow-1"></div>
            <div class="glow-effect glow-2"></div>

            <div class="container footer-content">
                <div class="row align-items-start">
                    <!-- Left Column - Company Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="company-card">
                            <img src="https://softbreeze.org/my_content/uploads/2022/06/SOFTBREEZELOGO.png"
                                alt="Company Logo" class="company-logo">
                            <p class="company-description">
                                Soft Breeze is a certified Web and Mobile App Development Company. Our bespoke,
                                customer-centric
                                web & mobile app development services cater to the digital needs of all-scale
                                businesses.
                            </p>
                            <div class="social-icons">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Middle Column - Quick Links -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="links-container mb-5">
                            <h6 class="fw-bold">Quick Links</h6>
                            <ul class="nav-menu ">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#team">Portfolio</a></li>
                                <li><a href="#technologies">Blog</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column - Location and Map/Address -->
                    <div class="col-lg-5 col-md-12">
                        <!-- Address Section -->
                        <div class="address-container">
                            <h6 class="fw-bold">Location Address</h6>
                            <p class="address-text mt-5">Know where to find us? Let's take a look and get in touch! We
                                have
                                offices
                                in multiple locations to serve you better.</p>
                        </div>

                        <div class="row align-items-start">
                            <!-- Map Column -->
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="map-container">
                                    <img src="https://softbreeze.org/my_content/uploads/2022/03/businext-img1.png"
                                        alt="World Map" class="map-image">
                                    <!-- Hotspots -->
                                    <div class="hotspot" style="top: 30%; left: 45%;">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="hotspot-tooltip " style="top: -50px; left: -30px;">Islamabad</div>
                                    </div>
                                    <div class="hotspot mt-2" style="top: 35%; left: 50%;">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="hotspot-tooltip" style="top: -50px; left: -30px;">Peshawar</div>
                                    </div>
                                    <div class="hotspot mt-4" style="top: 40%; left: 55%;">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="hotspot-tooltip" style="top: -50px; left: -40px;">Saudi Arabia
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Address with Icons Column -->
                            <div class="col-md-6">
                                <div class="contact-container">
                                    <ul class="contact-list">
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="contact-text">Peshawar Office, Pakistan</div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="contact-text">+92 328 0782667</div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="contact-text">Riyadh Office, Saudi Arabia</div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="contact-text">+966 55 659 7921</div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="contact-text">info@softbreeze.org</div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="contact-text">Mon-Fri: 9AM - 6PM</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright -->
                {{-- <div class="row">
                <div class="col-12">
                    <p class="copyright">Copyright © 2024 Soft Breeze. All rights reserved.</p>
                </div>
            </div> --}}
            </div>
        </section>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="/social.js"></script>

        <!-- Smooth Scrolling and Active Navigation -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Smooth scrolling for navigation links
                const navLinks = document.querySelectorAll('.nav-link[href^="#"]');

                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();

                        const targetId = this.getAttribute('href');
                        const targetSection = document.querySelector(targetId);

                        if (targetSection) {
                            // Close mobile menu if open
                            const navbarCollapse = document.querySelector('.navbar-collapse');
                            if (navbarCollapse.classList.contains('show')) {
                                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                                bsCollapse.hide();
                            }

                            // Smooth scroll to target
                            targetSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });

                            // Update URL without page reload
                            history.pushState(null, null, targetId);
                        }
                    });
                });

                // Active navigation highlighting
                const sections = document.querySelectorAll('section[id]');
                const navItems = document.querySelectorAll('.nav-link[href^="#"]');

                function updateActiveNav() {
                    let current = '';
                    const scrollPosition = window.scrollY + 100; // Offset for navbar height

                    sections.forEach(section => {
                        const sectionTop = section.offsetTop;
                        const sectionHeight = section.offsetHeight;

                        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                            current = section.getAttribute('id');
                        }
                    });

                    // Remove active class from all nav links
                    navItems.forEach(item => {
                        item.classList.remove('active');
                    });

                    // Add active class to current nav link
                    const activeLink = document.querySelector(`.nav-link[href="#${current}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }

                // Update active nav on scroll
                window.addEventListener('scroll', updateActiveNav);

                // Update active nav on page load
                updateActiveNav();

                // Handle browser back/forward buttons
                window.addEventListener('popstate', function() {
                    const hash = window.location.hash;
                    if (hash) {
                        const targetSection = document.querySelector(hash);
                        if (targetSection) {
                            targetSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });
        </script>

</body>

</html>
