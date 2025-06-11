<?php
/**
 * The template for displaying all pages
 *
 * @package Norvault
 */

get_header(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <?php while (have_posts()) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header text-center mb-5">
                        <?php the_title('<h1 class="entry-title display-4 fw-bold">', '</h1>'); ?>
                    </header>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail mb-5">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="entry-content">
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