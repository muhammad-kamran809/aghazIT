
  // Prevent Bootstrap dropdown from toggling on click
  document.querySelectorAll('.dropdown-toggle').forEach(item => {
    item.removeAttribute('data-bs-toggle');
  });

// conter code here
$(document).ready(function () {
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to animate counter
    function animateCounter($counter) {
        const target = +$counter.attr("data-target");
        const duration = 2000; // 2 seconds
        const stepTime = Math.abs(Math.floor(duration / target));
        let count = 0;

        const timer = setInterval(function () {
            count += 1;
            $counter.text(count);
            if (count >= target) {
                clearInterval(timer);
                $counter.text(target);
            }
        }, stepTime);
    }

    // Check for counters in viewport on scroll
    $(window).on('scroll', function () {
        $('.counter').each(function () {
            const $this = $(this);
            if (isInViewport(this) && !$this.hasClass('counted')) {
                $this.addClass('counted');
                animateCounter($this);
            }
        });
    });

    // Initial check for counters in viewport
    $('.counter').each(function () {
        const $this = $(this);
        if (isInViewport(this) && !$this.hasClass('counted')) {
            $this.addClass('counted');
            animateCounter($this);
        }
    });
});

// slider logo code here
document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.logo-track');
    const items = document.querySelectorAll('.logo-item');
    const nextBtn = document.querySelector('.next-btn');
    const prevBtn = document.querySelector('.prev-btn');
    const indicators = document.querySelectorAll('.indicator');

    // Clone items for infinite loop effect
    items.forEach(item => {
        const clone = item.cloneNode(true);
        track.appendChild(clone);
    });

    let currentPosition = 0;
    let scrollAmount = items[0].offsetWidth + 30; // width + margin
    let autoScrollInterval;
    let currentIndicator = 0;

    // Start autoplay
    function startAutoplay() {
        autoScrollInterval = setInterval(() => {
            currentPosition -= scrollAmount;
            track.style.transition = 'transform 0.5s ease';
            track.style.transform = `translateX(${currentPosition}px)`;

            // Update indicators
            currentIndicator = (currentIndicator + 1) % indicators.length;
            updateIndicators();

            // Reset position when reaching the end
            if (Math.abs(currentPosition) >= track.scrollWidth / 2) {
                setTimeout(() => {
                    track.style.transition = 'none';
                    currentPosition = 0;
                    track.style.transform = `translateX(${currentPosition}px)`;
                }, 500);
            }
        }, 3000);
    }

    // Manual navigation
    nextBtn.addEventListener('click', () => {
        clearInterval(autoScrollInterval);
        currentPosition -= scrollAmount;
        track.style.transition = 'transform 0.5s ease';
        track.style.transform = `translateX(${currentPosition}px)`;

        // Update indicators
        currentIndicator = (currentIndicator + 1) % indicators.length;
        updateIndicators();

        // Restart autoplay
        setTimeout(startAutoplay, 5000);
    });

    prevBtn.addEventListener('click', () => {
        clearInterval(autoScrollInterval);
        currentPosition += scrollAmount;
        track.style.transition = 'transform 0.5s ease';
        track.style.transform = `translateX(${currentPosition}px)`;

        // Update indicators
        currentIndicator = (currentIndicator - 1 + indicators.length) % indicators.length;
        updateIndicators();

        // Restart autoplay
        setTimeout(startAutoplay, 5000);
    });

    // Indicator navigation
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            clearInterval(autoScrollInterval);
            currentIndicator = index;
            currentPosition = -index * scrollAmount * 3; // 3 items per "slide"
            track.style.transition = 'transform 0.5s ease';
            track.style.transform = `translateX(${currentPosition}px)`;
            updateIndicators();
            setTimeout(startAutoplay, 5000);
        });
    });

    // Update active indicator
    function updateIndicators() {
        indicators.forEach((indicator, index) => {
            if (index === currentIndicator) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

    // Start autoplay on load
    startAutoplay();
});

// our team section code here
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('teamTrack');
    const items = document.querySelectorAll('.team-member');
    const nextBtn = document.querySelector('.next-btn');
    const prevBtn = document.querySelector('.prev-btn');
    const indicators = document.querySelectorAll('.indicator');

    let currentPosition = 0;
    let currentSlide = 0;
    let slidesPerView = 3;
    let autoScrollInterval;

    // Update slides per view based on screen size
    function updateSlidesPerView() {
        if (window.innerWidth < 1200 && window.innerWidth >= 768) {
            slidesPerView = 2;
        } else if (window.innerWidth < 768) {
            slidesPerView = 1;
        } else {
            slidesPerView = 3;
        }
    }

    // Update carousel position
    function updateCarousel() {
        updateSlidesPerView();
        const itemWidth = items[0].offsetWidth + 30; // width + margin
        track.style.transform = `translateX(${currentPosition}px)`;

        // Update indicators
        const totalSlides = Math.ceil(items.length / slidesPerView);
        document.getElementById('carouselIndicators').innerHTML = '';
        for (let i = 0; i < totalSlides; i++) {
            const indicator = document.createElement('div');
            indicator.className = `indicator ${i === currentSlide ? 'active' : ''}`;
            indicator.dataset.index = i;
            indicator.addEventListener('click', () => {
                currentSlide = i;
                currentPosition = -i * slidesPerView * itemWidth;
                updateCarousel();
            });
            document.getElementById('carouselIndicators').appendChild(indicator);
        }
    }

    // Next slide
    function nextSlide() {
        updateSlidesPerView();
        const itemWidth = items[0].offsetWidth + 30; // width + margin
        const maxPosition = -((items.length - slidesPerView) * itemWidth);

        currentPosition -= slidesPerView * itemWidth;
        currentSlide++;

        if (currentPosition < maxPosition) {
            currentPosition = 0;
            currentSlide = 0;
        }

        updateCarousel();
    }

    // Previous slide
    function prevSlide() {
        updateSlidesPerView();
        const itemWidth = items[0].offsetWidth + 30; // width + margin

        currentPosition += slidesPerView * itemWidth;
        currentSlide--;

        if (currentPosition > 0) {
            currentPosition = -((items.length - slidesPerView) * itemWidth);
            currentSlide = Math.ceil(items.length / slidesPerView) - 1;
        }

        updateCarousel();
    }

    // Event listeners
    nextBtn.addEventListener('click', () => {
        clearInterval(autoScrollInterval);
        nextSlide();
        startAutoplay();
    });

    prevBtn.addEventListener('click', () => {
        clearInterval(autoScrollInterval);
        prevSlide();
        startAutoplay();
    });

    // Start autoplay
    function startAutoplay() {
        autoScrollInterval = setInterval(() => {
            nextSlide();
        }, 5000);
    }

    // Initialize
    updateCarousel();
    startAutoplay();

    // Update on window resize
    window.addEventListener('resize', updateCarousel);
});

// contact form code here
// Form validation and submission
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Simple validation
        let isValid = true;
        const inputs = form.querySelectorAll('input, textarea');

        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (isValid) {
            // Show success message
            alert('Thank you! Your message has been sent successfully.');
            form.reset();

            // Visual feedback
            const submitBtn = form.querySelector('.submit-btn');
            submitBtn.innerHTML = '<i class="fas fa-check me-2"></i> Message Sent!';
            submitBtn.disabled = true;

            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-paper-plane me-2"></i> Send Message';
                submitBtn.disabled = false;
            }, 3000);
        }
    });

    // Remove invalid class when user starts typing
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('input', function () {
            if (this.value.trim()) {
                this.classList.remove('is-invalid');
            }
        });
    });
});


// FAQ section code here
document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.accordion-button');

    items.forEach(btn => {
        btn.addEventListener('click', function () {
            const icon = this.querySelector('.toggle-icon');
            // Remove active class from all other icons
            document.querySelectorAll('.toggle-icon').forEach(i => {
                i.classList.remove('fa-minus');
                i.classList.add('fa-plus');
            });

            // Toggle current icon
            setTimeout(() => {
                if (this.classList.contains('collapsed')) {
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                } else {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                }
            }, 300); // Slight delay to wait for collapse transition
        });
    });
});

// footer section code here
// Simple hover effect for hotspots
document.querySelectorAll('.hotspot').forEach(hotspot => {
    hotspot.addEventListener('mouseenter', function () {
        const tooltip = this.querySelector('.hotspot-tooltip');
        tooltip.style.opacity = '1';
        tooltip.style.transform = 'translateY(0)';
    });

    hotspot.addEventListener('mouseleave', function () {
        const tooltip = this.querySelector('.hotspot-tooltip');
        tooltip.style.opacity = '0';
        tooltip.style.transform = 'translateY(10px)';
    });
});


// Mobile submenu toggle
document.querySelectorAll('.has-submenu > a').forEach(link => {
    link.addEventListener('click', function (e) {
        if (window.innerWidth < 992) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        }
    });
});

