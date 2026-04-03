document.addEventListener('DOMContentLoaded', function() {
    // --- Navigation Scroll Logic ---
    const nav = document.getElementById('mainNav');
    const aboutSection = document.getElementById('about');

    if (nav && aboutSection) {
        const changeNavOnScroll = () => {
            if (window.scrollY >= 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        };

        window.addEventListener('scroll', changeNavOnScroll);
        changeNavOnScroll();
    }

    // --- Counter Animation for Statistics ---
    const counters = document.querySelectorAll('.counter');
    const animationDuration = 2000; // 2 seconds duration

    const startCounterAnimation = (counter) => {
        const target = parseFloat(counter.getAttribute('data-target'));
        const suffix = counter.getAttribute('data-suffix') || '';
        const decimals = parseInt(counter.getAttribute('data-decimals')) || 0;
        const startTime = performance.now();

        const updateCount = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / animationDuration, 1);
            
            // Easing function: easeOutExpo for a smoother finish
            const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            
            const currentValue = easeProgress * target;
            counter.innerText = currentValue.toFixed(decimals) + suffix;

            if (progress < 1) {
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target.toFixed(decimals) + suffix;
            }
        };

        requestAnimationFrame(updateCount);
    };

    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const parentItem = counter.closest('.stat-item') || counter.closest('.stat-card');
                    
                    // Stagger the reveal and counting
                    setTimeout(() => {
                        if (parentItem) parentItem.classList.add('reveal');
                        startCounterAnimation(counter);
                    }, index * 100); 

                    observer.unobserve(counter);
                }
            });
        }, {
            threshold: 0.15
        });

        counters.forEach(counter => {
            counterObserver.observe(counter);
        });
    }

    // --- Hero Video Slider Logic ---
    const slides = document.querySelectorAll('.video-slide');
    const dots = document.querySelectorAll('.indicator-dot');
    let currentSlide = 0;
    let slideInterval;

    if (slides.length > 0 && dots.length > 0) {
        const sliderContainer = document.querySelector('.video-slider');

        const goToSlide = (n) => {
            // Remove active classes
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');
            
            currentSlide = (n + slides.length) % slides.length;
            
            // Add active classes
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
            
            // Handle Video Autoplay in active slide
            const activeVid = slides[currentSlide].querySelector('video');
            if (activeVid) {
                activeVid.play().catch(() => {});
            }
        };

        const startSlider = () => {
            slideInterval = setInterval(() => {
                goToSlide(currentSlide + 1);
            }, 5000); 
        };

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
                clearInterval(slideInterval);
                startSlider();
            });
        });

        startSlider();
    }
});
