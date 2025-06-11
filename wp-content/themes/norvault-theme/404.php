<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Norvault
 */

get_header(); ?>

<section class="error-404 not-found py-5">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-1 fw-bold text-primary mb-4" data-aos="zoom-in">404</h1>
                <h2 class="display-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <?php _e('Oeps! Pagina niet gevonden', 'norvault'); ?>
                </h2>
                <p class="lead text-muted mb-5" data-aos="fade-up" data-aos-delay="200">
                    <?php _e('De pagina die je zoekt bestaat niet meer of is verplaatst.', 'norvault'); ?>
                </p>
                
                <div class="error-actions" data-aos="fade-up" data-aos-delay="300">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg me-3 mb-3">
                        <i class="bi bi-house-door"></i> <?php _e('Naar homepage', 'norvault'); ?>
                    </a>
                    <a href="/contact" class="btn btn-outline-primary btn-lg mb-3">
                        <i class="bi bi-envelope"></i> <?php _e('Contact opnemen', 'norvault'); ?>
                    </a>
                </div>
                
                <div class="mt-5" data-aos="fade-up" data-aos-delay="400">
                    <h4 class="mb-3"><?php _e('Misschien zoek je een van deze pagina\'s?', 'norvault'); ?></h4>
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-4">
                            <a href="/diensten" class="text-decoration-none">
                                <div class="card h-100 hover-shadow">
                                    <div class="card-body text-center">
                                        <i class="bi bi-shield-check display-6 text-primary mb-3"></i>
                                        <h5><?php _e('Onze diensten', 'norvault'); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/over-ons" class="text-decoration-none">
                                <div class="card h-100 hover-shadow">
                                    <div class="card-body text-center">
                                        <i class="bi bi-people display-6 text-primary mb-3"></i>
                                        <h5><?php _e('Over ons', 'norvault'); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/prijzen" class="text-decoration-none">
                                <div class="card h-100 hover-shadow">
                                    <div class="card-body text-center">
                                        <i class="bi bi-tag display-6 text-primary mb-3"></i>
                                        <h5><?php _e('Onze prijzen', 'norvault'); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.error-404 {
    min-height: 60vh;
    display: flex;
    align-items: center;
}

.hover-shadow {
    transition: all 0.3s ease;
    border: 1px solid #e0e0e0;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.card-body h5 {
    color: #333;
    margin: 0;
}
</style>

<?php get_footer(); ?>