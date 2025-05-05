(function ($) {
    "use strict";

//  ================================== Sticky Navbar  ==================================
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 40) {
            $('.navbar').addClass('sticky-top');
        } else {
            $('.navbar').removeClass('sticky-top');
        }
    });

    // .cta-button-banner

    document.querySelectorAll('.cta-button-banner').forEach(button => {
    button.addEventListener('click', (e) => {
        console.log('Button clicked! Destination:', button.href);
        // e.preventDefault(); // Uncomment to test if other JS is blocking
    });
});

    // Gallery Section
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.gallery-swiper', {
            direction: 'vertical',
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: { crossFade: true },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            on: {
                init: function () {
                    const slides = this.slides;
                    slides.forEach((slide, index) => {
                        slide.classList.toggle('active-slide', index === this.activeIndex);
                    });
                },
                slideChange: function () {
                    const slides = this.slides;
                    slides.forEach((slide, index) => {
                        slide.classList.toggle('active-slide', index === this.activeIndex);
                    });
                }
            }
        });

        const images = document.querySelectorAll('.column img');
        images.forEach(img => {
            img.addEventListener('mouseenter', () => img.classList.add('img-hover'));
            img.addEventListener('mouseleave', () => img.classList.remove('img-hover'));
        });

        const columns = document.querySelectorAll('.column');
        columns.forEach(column => {
            column.addEventListener('mouseenter', () => {
                const group = column.querySelector('.image-group');
                if (group) group.style.animationPlayState = 'paused';
            });
            column.addEventListener('mouseleave', () => {
                const group = column.querySelector('.image-group');
                if (group) group.style.animationPlayState = 'running';
            });
        });

        const imageGrids = document.querySelectorAll('.image-group');
        imageGrids.forEach(grid => {
            let scrollAmount = 0;
            const scrollSpeed = 1;
            const scrollInterval = 20;

            function autoScroll() {
                if (scrollAmount >= grid.scrollHeight - grid.clientHeight) {
                    scrollAmount = 0;
                } else {
                    scrollAmount += scrollSpeed;
                }
                grid.scrollTop = scrollAmount;
            }

            setInterval(autoScroll, scrollInterval);
        });
    });


// Category Section Swiper
    $(document).ready(function () {
        new Swiper('.category-swiper', {
            slidesPerView: 3,
            spaceBetween: 15,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: { slidesPerView: 4 },
                768: { slidesPerView: 5 },
                1024: { slidesPerView: 6 },
                1280: { slidesPerView: 7 }
            }
        });

        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });

        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').hover(
                    function () {
                        $('.dropdown-toggle', this).trigger('click');
                    },
                    function () {
                        $('.dropdown-toggle', this).trigger('click').blur();
                    }
                );
            } else {
                $('.navbar .dropdown').off('mouseover mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });

    // Back to Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


//  ================================== Facts counter  ==================================

    // $('[data-toggle="counter-up"]').counterUp({
    //     delay: 10,
    //     time: 2000
    // });

    const counters = document.querySelectorAll('.stat-number');
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.floor(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target.toLocaleString();
            }
        };

        counter.classList.add('animate');
        updateCounter();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));

    // Product Carousel
    $(".product-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 45,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            992: { items: 3 },
            1200: { items: 4 }
        }
    });

    // Testimonials Carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ]
    });

})(jQuery);

// Gallery slider on About page
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.gallery-slider', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 600,
        grabCursor: true,
        slidesPerView: 'auto',
        spaceBetween: 15,
        pagination: {
            el: '.gallery-slider .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.gallery-slider .swiper-button-next',
            prevEl: '.gallery-slider .swiper-button-prev',
        },
        breakpoints: {
            576: { slidesPerView: 3, spaceBetween: 20 },
            768: { slidesPerView: 4, spaceBetween: 25 },
            992: { slidesPerView: 5, spaceBetween: 30 }
        }
    });
});

// FAQ Toggle
document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
        document.querySelectorAll('.faq-item.active').forEach(i => {
            if (i !== item) i.classList.remove('active');
        });
        item.classList.toggle('active');
    });
});

// Range Slider
const rangeSlider = document.querySelector('input[type="range"]');
if (rangeSlider) {
    const updateRangeValue = () => {
        const value = rangeSlider.value;
        const min = parseInt(rangeSlider.min) || 0;
        const max = parseInt(rangeSlider.max) || 100;
        const percentage = ((value - min) / (max - min)) * 100;

        rangeSlider.style.setProperty('--range-percent', `${percentage}%`);

        const minLabel = document.querySelector('.range-labels span:first-child');
        const maxLabel = document.querySelector('.range-labels span:last-child');
        if (minLabel && maxLabel) {
            minLabel.textContent = `$${value - 500}`;
            maxLabel.textContent = `$${parseInt(value) + 500}`;
        }
    };

    rangeSlider.addEventListener('input', updateRangeValue);
    updateRangeValue();
}

// Contact Form
const contactForm = document.querySelector('.contact-form-section form');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const fullName = document.getElementById('fullName');
        const email = document.getElementById('email');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');

        let isValid = true;
        const inputs = [fullName, email, subject, message];
        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('error');
            } else {
                input.classList.remove('error');
            }
        });

        if (email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
            isValid = false;
            email.classList.add('error');
        }

        if (isValid) {
            const submitBtn = contactForm.querySelector('.submit-btn');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';

            setTimeout(() => {
                showSuccessMessage();
                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit';
            }, 1500);
        }
    });
}

        // Helper Functions
        function showError(input, message) {
            const formGroup = input.parentElement;
            const errorDiv = formGroup.querySelector('.error-message') || document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.textContent = message;
            
            if (!formGroup.querySelector('.error-message')) {
                formGroup.appendChild(errorDiv);
            }
            
            input.classList.add('error');
        }

        function removeError(input) {
            const formGroup = input.parentElement;
            const errorDiv = formGroup.querySelector('.error-message');
            if (errorDiv) {
                formGroup.removeChild(errorDiv);
            }
            input.classList.remove('error');
        }

        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        function showSuccessMessage() {
            const successMessage = document.createElement('div');
            successMessage.className = 'success-message';
            successMessage.textContent = 'Thank you! Your message has been sent successfully.';
            
            const form = document.querySelector('.contact-form-section');
            form.insertBefore(successMessage, form.firstChild);
            
            setTimeout(() => {
                successMessage.remove();
            }, 5000);
        }

        // Add some CSS for error and success messages
        const style = document.createElement('style');
        style.textContent = `
            .error-message {
                color: #dc3545;
                font-size: 14px;
                margin-top: 5px;
            }
            
            .success-message {
                background-color: var(--primary);
                color: white;
                padding: 15px;
                border-radius: var(--radius);
                margin-bottom: 20px;
                text-align: center;
            }
            
            input.error,
            textarea.error {
                border-color: #dc3545 !important;
            }
            
            .submit-btn:disabled {
                opacity: 0.7;
                cursor: not-allowed;
            }
        `;
        document.head.appendChild(style);