<!-- Footer -->
<footer>
    <div class="container">
        <?php if (is_active_sidebar('footer-widgets')) : ?>
            <div class="row mb-4">
                <?php dynamic_sidebar('footer-widgets'); ?>
            </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – Alle rechten voorbehouden</p>
                
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'list-inline mt-3',
                    'container'      => false,
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                    'walker'         => new class extends Walker_Nav_Menu {
                        public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                            $output .= '<li class="list-inline-item">';
                            $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                            $output .= '</li>';
                        }
                    }
                ));
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
// Initialize AOS
if (typeof AOS !== 'undefined') {
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
}

// Counter animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const duration = 2000; // 2 seconds
        const step = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.innerText = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = target;
            }
        };
        
        updateCounter();
    };
    
    // Intersection Observer for counter animation
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                animateCounter(entry.target);
                entry.target.classList.add('animated');
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});

// Contact form handler
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            formData.append('action', 'norvault_contact_form');
            formData.append('nonce', norvault_ajax.nonce);
            
            // Show loading state
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerText;
            submitBtn.disabled = true;
            submitBtn.innerText = 'Verzenden...';
            
            // Send AJAX request
            fetch(norvault_ajax.ajax_url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    document.getElementById('formSuccess').classList.remove('d-none');
                    contactForm.reset();
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        document.getElementById('formSuccess').classList.add('d-none');
                    }, 5000);
                } else {
                    alert(data.data || 'Er is een fout opgetreden. Probeer het opnieuw.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Er is een fout opgetreden. Probeer het opnieuw.');
            })
            .finally(() => {
                // Reset button
                submitBtn.disabled = false;
                submitBtn.innerText = originalText;
            });
        });
        
        // Form validation
        contactForm.addEventListener('submit', function(event) {
            if (!contactForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            contactForm.classList.add('was-validated');
        }, false);
    }
});
</script>

</body>
</html>