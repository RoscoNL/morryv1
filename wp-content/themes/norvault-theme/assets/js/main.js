/**
 * Norvault Security - Main JavaScript
 * High-performance, SEO-friendly interactions
 */

(function($) {
    'use strict';
    
    // Performance: Use passive event listeners
    jQuery.event.special.touchstart = {
        setup: function(_, ns, handle) {
            this.addEventListener("touchstart", handle, { passive: true });
        }
    };
    
    // Initialize when DOM is ready
    $(document).ready(function() {
        initParticles();
        initNavbar();
        initAnimations();
        initCounters();
        initSmoothScroll();
        initFormValidation();
        initLazyLoading();
        initTestimonials();
        initDarkMode();
        initSEOOptimizations();
    });
    
    // Particles.js configuration
    function initParticles() {
        if ($('#particles-js').length && typeof particlesJS !== 'undefined') {
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: ['#ffffff', '#00D4AA', '#667eea']
                    },
                    shape: {
                        type: 'circle'
                    },
                    opacity: {
                        value: 0.5,
                        random: true,
                        anim: {
                            enable: true,
                            speed: 1,
                            opacity_min: 0.1,
                            sync: false
                        }
                    },
                    size: {
                        value: 3,
                        random: true,
                        anim: {
                            enable: true,
                            speed: 2,
                            size_min: 0.1,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#ffffff',
                        opacity: 0.2,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: false,
                        straight: false,
                        out_mode: 'out',
                        bounce: false,
                        attract: {
                            enable: false,
                            rotateX: 600,
                            rotateY: 1200
                        }
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'grab'
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 140,
                            line_linked: {
                                opacity: 1
                            }
                        },
                        push: {
                            particles_nb: 4
                        }
                    }
                },
                retina_detect: true
            });
        }
    }
    
    // Navbar scroll effects
    function initNavbar() {
        let lastScroll = 0;
        const navbar = $('.navbar');
        const navbarHeight = navbar.outerHeight();
        
        $(window).on('scroll', throttle(function() {
            const currentScroll = $(this).scrollTop();
            
            // Add/remove scrolled class
            if (currentScroll > 50) {
                navbar.addClass('scrolled');
            } else {
                navbar.removeClass('scrolled');
            }
            
            // Hide/show navbar on scroll
            if (currentScroll > lastScroll && currentScroll > navbarHeight) {
                navbar.css('transform', 'translateY(-100%)');
            } else {
                navbar.css('transform', 'translateY(0)');
            }
            
            lastScroll = currentScroll;
        }, 100));
    }
    
    // Initialize animations
    function initAnimations() {
        // Intersection Observer for better performance
        if ('IntersectionObserver' in window) {
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '50px'
            });
            
            animateElements.forEach(el => observer.observe(el));
        }
        
        // Parallax effects
        $(window).on('scroll', throttle(function() {
            const scrolled = $(window).scrollTop();
            
            $('.hero-section').css('transform', `translateY(${scrolled * 0.5}px)`);
            $('.floating-shapes .shape').each(function(index) {
                const speed = 0.5 + (index * 0.2);
                $(this).css('transform', `translateY(${scrolled * -speed}px)`);
            });
        }, 16));
    }
    
    // Animated counters
    function initCounters() {
        const counters = $('.counter');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                    animateCounter(entry.target);
                    entry.target.classList.add('counted');
                }
            });
        }, {
            threshold: 0.5
        });
        
        counters.each(function() {
            counterObserver.observe(this);
        });
    }
    
    function animateCounter(element) {
        const $el = $(element);
        const target = parseInt($el.attr('data-target'));
        const duration = 2000;
        const steps = 60;
        const stepDuration = duration / steps;
        const increment = target / steps;
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                $el.text(target);
                clearInterval(timer);
            } else {
                $el.text(Math.floor(current));
            }
        }, stepDuration);
    }
    
    // Smooth scrolling
    function initSmoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            const target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                const offset = $('.navbar').outerHeight() + 20;
                
                $('html, body').animate({
                    scrollTop: target.offset().top - offset
                }, 800, 'easeInOutQuad');
                
                // Update URL without jumping
                if (history.pushState) {
                    history.pushState(null, null, this.getAttribute('href'));
                }
            }
        });
    }
    
    // Form validation and submission
    function initFormValidation() {
        const forms = document.querySelectorAll('.needs-validation');
        
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                event.preventDefault();
                event.stopPropagation();
                
                if (form.checkValidity()) {
                    handleFormSubmission(form);
                }
                
                form.classList.add('was-validated');
            }, false);
        });
    }
    
    function handleFormSubmission(form) {
        const $form = $(form);
        const $submitBtn = $form.find('button[type="submit"]');
        const $btnText = $submitBtn.find('.btn-text');
        const $btnLoading = $submitBtn.find('.btn-loading');
        
        // Show loading state
        $btnText.addClass('d-none');
        $btnLoading.removeClass('d-none');
        $submitBtn.prop('disabled', true);
        
        // Prepare form data
        const formData = new FormData(form);
        formData.append('action', 'norvault_contact_form');
        formData.append('nonce', norvault_ajax.nonce);
        
        // Submit via AJAX
        $.ajax({
            url: norvault_ajax.ajax_url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    // Show success message
                    $('#formSuccess').removeClass('d-none').hide().fadeIn();
                    form.reset();
                    form.classList.remove('was-validated');
                    
                    // Track conversion
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'conversion', {
                            'send_to': 'AW-CONVERSION_ID/CONVERSION_LABEL',
                            'value': 1.0,
                            'currency': 'EUR'
                        });
                    }
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        $('#formSuccess').fadeOut();
                    }, 5000);
                } else {
                    showNotification('error', response.data || 'Er is een fout opgetreden.');
                }
            },
            error: function() {
                showNotification('error', 'Er is een fout opgetreden. Probeer het later opnieuw.');
            },
            complete: function() {
                // Reset button state
                $btnText.removeClass('d-none');
                $btnLoading.addClass('d-none');
                $submitBtn.prop('disabled', false);
            }
        });
    }
    
    // Lazy loading for images
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const lazyImages = document.querySelectorAll('img[data-lazy]');
            
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.lazy;
                        img.removeAttribute('data-lazy');
                        imageObserver.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px'
            });
            
            lazyImages.forEach(img => imageObserver.observe(img));
        }
    }
    
    // Testimonials carousel
    function initTestimonials() {
        const carousel = $('#testimonialCarousel');
        if (carousel.length) {
            // Auto-play carousel
            carousel.carousel({
                interval: 5000,
                pause: 'hover'
            });
            
            // Pause on hover
            carousel.hover(
                function() { $(this).carousel('pause'); },
                function() { $(this).carousel('cycle'); }
            );
        }
    }
    
    // Dark mode toggle
    function initDarkMode() {
        const darkModeToggle = $('.toggle-btn');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const savedMode = localStorage.getItem('darkMode');
        
        // Set initial mode
        if (savedMode === 'enabled' || (!savedMode && prefersDark)) {
            $('body').addClass('dark-mode');
            darkModeToggle.html('☀️');
        }
        
        // Toggle handler
        darkModeToggle.on('click', function() {
            $('body').toggleClass('dark-mode');
            const isDark = $('body').hasClass('dark-mode');
            
            localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
            $(this).html(isDark ? '☀️' : '🌙');
        });
    }
    
    // SEO optimizations
    function initSEOOptimizations() {
        // Structured data for organization
        const structuredData = {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Norvault Security",
            "description": "Virtuele CISO diensten voor ISO 27001 en NIS2 compliance",
            "url": window.location.origin,
            "logo": window.location.origin + "/assets/images/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+31-20-123-4567",
                "contactType": "customer service",
                "areaServed": ["NL", "BE", "SK"],
                "availableLanguage": ["Dutch", "English", "Slovak"]
            },
            "sameAs": [
                "https://www.linkedin.com/company/norvault-security",
                "https://twitter.com/norvaultsec"
            ]
        };
        
        // Add structured data to head
        const script = document.createElement('script');
        script.type = 'application/ld+json';
        script.text = JSON.stringify(structuredData);
        document.head.appendChild(script);
        
        // Optimize external links
        $('a[href^="http"]:not([href*="' + window.location.hostname + '"])').attr({
            'target': '_blank',
            'rel': 'noopener noreferrer'
        });
        
        // Add loading=lazy to images without it
        $('img:not([loading])').attr('loading', 'lazy');
    }
    
    // Utility functions
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }
    
    function showNotification(type, message) {
        const notification = $(`
            <div class="notification notification-${type}">
                <i class="bi bi-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
                <span>${message}</span>
            </div>
        `);
        
        $('body').append(notification);
        
        setTimeout(() => {
            notification.addClass('show');
        }, 100);
        
        setTimeout(() => {
            notification.removeClass('show');
            setTimeout(() => notification.remove(), 300);
        }, 5000);
    }
    
    // Performance monitoring
    if ('PerformanceObserver' in window) {
        const perfObserver = new PerformanceObserver((list) => {
            for (const entry of list.getEntries()) {
                // Log slow resources
                if (entry.duration > 3000) {
                    console.warn('Slow resource:', entry.name, entry.duration);
                }
            }
        });
        
        perfObserver.observe({ entryTypes: ['resource'] });
    }
    
    // Service Worker registration for PWA
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js').then(registration => {
                console.log('ServiceWorker registered');
            }).catch(err => {
                console.log('ServiceWorker registration failed');
            });
        });
    }
    
})(jQuery);