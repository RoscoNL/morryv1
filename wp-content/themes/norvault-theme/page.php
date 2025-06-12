<?php
/**
 * The template for displaying all pages
 *
 * @package Norvault
 */

get_header(); ?>

<!-- Page Hero Section -->
<section class="page-hero-section position-relative overflow-hidden">
    <div class="page-hero-particles"></div>
    <div class="hero-gradient-overlay"></div>
    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center py-5">
            <div class="col-lg-8 mx-auto text-center">
                <?php the_title('<h1 class="display-4 fw-bold text-dark mb-4" data-aos="fade-up">', '</h1>'); ?>
                <?php if (has_excerpt()) : ?>
                    <p class="lead text-dark" data-aos="fade-up" data-aos-delay="100"><?php echo get_the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Subtle wave -->
    <div class="page-wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,40L48,45.3C96,51,192,61,288,58.7C384,56,480,40,576,37.3C672,35,768,45,864,48C960,51,1056,45,1152,42.7C1248,40,1344,40,1392,40L1440,40L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"></path>
        </svg>
    </div>
</section>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <?php while (have_posts()) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail mb-5" data-aos="fade-up">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded shadow-lg')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="entry-content" data-aos="fade-up" data-aos-delay="100">
                        <?php
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'norvault'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </article>
                
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>