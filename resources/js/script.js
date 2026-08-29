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
    
    if (slides.length > 0 && dots.length > 0) {
        // Dynamicly find the initial active slide
        let currentSlide = Array.from(slides).findIndex(s => s.classList.contains('active'));
        if (currentSlide === -1) currentSlide = 0;
        
        console.log("Hero Slider initialized. Start index:", currentSlide, "Total slides:", slides.length);
        
        let slideInterval;

        const goToSlide = (nextIndex) => {
            // Remove active from current
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');
            
            // Update to next
            currentSlide = (nextIndex + slides.length) % slides.length;
            
            // Add active to next
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
            
            console.log("Switched to slide:", currentSlide);
            
            // Handle Video
            const activeVid = slides[currentSlide].querySelector('video');
            if (activeVid) {
                activeVid.muted = true;
                activeVid.play().catch(e => console.warn("Video play error:", e));
            }
        };

        const startAutoSlide = () => {
            slideInterval = setInterval(() => {
                goToSlide(currentSlide + 1);
            }, 6000); // 6 seconds for better viewing
        };

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                console.log("Manual navigation to slide:", index);
                clearInterval(slideInterval);
                goToSlide(index);
                startAutoSlide();
            });
        });

        startAutoSlide();
    }

    // --- Review Form Interactivity ---
    const toggleBtn = document.getElementById('toggleReviewForm');
    const formOverlay = document.getElementById('reviewFormContainer');
    const cancelBtn = document.getElementById('cancelReview');
    const starRatingValue = document.getElementById('reviewRatingValue');
    const ratingStars = document.querySelectorAll('.rating-star');
    const reviewsList = document.getElementById('reviewsList');
    const ajaxForm = document.getElementById('ajaxReviewForm');

    if (toggleBtn && formOverlay) {
        toggleBtn.addEventListener('click', () => {
            formOverlay.style.display = 'flex';
            reviewsList.style.display = 'none';
        });

        cancelBtn.addEventListener('click', () => {
            formOverlay.style.display = 'none';
            reviewsList.style.display = 'block';
        });

        // Star Rating Logic
        ratingStars.forEach(star => {
            star.addEventListener('click', () => {
                const rating = star.getAttribute('data-rating');
                starRatingValue.value = rating;
                
                // Update visual stars
                ratingStars.forEach(s => {
                    if (s.getAttribute('data-rating') <= rating) {
                        s.classList.add('text-warning');
                    } else {
                        s.classList.remove('text-warning');
                    }
                });
            });
        });

        // AJAX Form Submission
        ajaxForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = ajaxForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerText;
            submitBtn.disabled = true;
            submitBtn.innerText = 'Submitting...';

            const formData = new FormData(ajaxForm);
            
            try {
                const response = await fetch('/reviews', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (data.success) {
                    // Prepend new review to the list
                    const newReview = data.review;
                    const starsHtml = '<i class="fa-solid fa-star"></i>'.repeat(newReview.rating);
                    const reviewHtml = `
                        <div class="review-item mb-4 animate__animated animate__fadeIn">
                            <div class="d-flex align-items-start mb-2">
                                <div class="avatar-sm rounded-circle me-3 d-flex align-items-center justify-content-center bg-white bg-opacity-25 text-white fw-bold">
                                    ${newReview.name.charAt(0).toUpperCase()}
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 text-white fw-bold small">${newReview.name}</h6>
                                        <div class="text-warning small" style="font-size: 0.7rem;">
                                            ${starsHtml}
                                        </div>
                                    </div>
                                    <p class="text-white opacity-75 mb-0 small mt-1" style="font-size: 0.85rem; line-height: 1.4;">
                                        "${newReview.comment}"
                                    </p>
                                </div>
                            </div>
                        </div>
                    `;

                    // Remove empty message if it exists
                    const emptyMsg = reviewsList.querySelector('.text-center');
                    if (emptyMsg) emptyMsg.remove();

                    reviewsList.insertAdjacentHTML('afterbegin', reviewHtml);
                    
                    // Reset and hide form
                    ajaxForm.reset();
                    formOverlay.style.display = 'none';
                    reviewsList.style.display = 'block';

                    // Optional: Show success alert (could use a toast)
                    alert('Thank you for your review!');
                } else if (data.errors) {
                    // Collect errors
                    let errorMsg = Object.values(data.errors).flat().join('\n');
                    alert(errorMsg);
                } else {
                    alert(data.message || 'Something went wrong. Please check your inputs.');
                }
            } catch (error) {
                console.error('Submission error:', error);
                alert('Connection error. Please try again later.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerText = originalText;
            }
        });
    }

    // --- Mega Menu Flyout Interactivity ---
    const serviceItems = document.querySelectorAll('.service-item-btn');
    const previewTitle = document.getElementById('preview-title');
    const previewDesc = document.getElementById('preview-desc');

    if (serviceItems.length > 0 && previewTitle && previewDesc) {
        const defaultTitle = previewTitle.innerText;
        const defaultDesc = previewDesc.innerText;

        serviceItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                const name = item.getAttribute('data-name');
                const overview = item.getAttribute('data-overview');

                if (name && overview) {
                    previewTitle.innerText = name;
                    previewDesc.innerText = overview;
                }
            });

            // Optional: reset to default when moving mouse out of the left column
            // But usually, it's better to keep the last hovered item's content
        });
    }
});
