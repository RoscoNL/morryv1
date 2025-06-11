<?php
/**
 * The main template file
 *
 * @package Norvault
 */

get_header(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <?php if (have_posts()) : ?>
                
                <?php if (is_home() && !is_front_page()) : ?>
                    <header>
                        <h1 class="page-title"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>
                
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
                        <header class="entry-header">
                            <?php
                            if (is_singular()) :
                                the_title('<h1 class="entry-title">', '</h1>');
                            else :
                                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                            endif;
                            ?>
                            
                            <?php if ('post' === get_post_type()) : ?>
                                <div class="entry-meta text-muted mb-3">
                                    <small>
                                        <?php
                                        printf(
                                            esc_html__('Posted on %s by %s', 'norvault'),
                                            '<time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>',
                                            '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
                                        );
                                        ?>
                                    </small>
                                </div>
                            <?php endif; ?>
                        </header>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail mb-3">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="entry-content">
                            <?php
                            if (is_singular()) :
                                the_content();
                                
                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'norvault'),
                                    'after'  => '</div>',
                                ));
                            else :
                                the_excerpt();
                                ?>
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary btn-sm">
                                    <?php esc_html_e('Read More', 'norvault'); ?>
                                </a>
                                <?php
                            endif;
                            ?>
                        </div>
                        
                        <?php if (is_singular() && ('post' === get_post_type())) : ?>
                            <footer class="entry-footer mt-4">
                                <div class="entry-categories">
                                    <?php esc_html_e('Categories: ', 'norvault'); ?>
                                    <?php the_category(', '); ?>
                                </div>
                                <?php if (has_tag()) : ?>
                                    <div class="entry-tags">
                                        <?php the_tags(esc_html__('Tags: ', 'norvault'), ', '); ?>
                                    </div>
                                <?php endif; ?>
                            </footer>
                        <?php endif; ?>
                    </article>
                    
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                    
                <?php endwhile; ?>
                
                <?php
                // Pagination
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => esc_html__('&laquo; Previous', 'norvault'),
                    'next_text' => esc_html__('Next &raquo;', 'norvault'),
                ));
                ?>
                
            <?php else : ?>
                
                <article>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php esc_html_e('Nothing Found', 'norvault'); ?></h1>
                    </header>
                    
                    <div class="entry-content">
                        <?php if (is_home() && current_user_can('publish_posts')) : ?>
                            
                            <p><?php printf(wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'norvault'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>
                            
                        <?php elseif (is_search()) : ?>
                            
                            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'norvault'); ?></p>
                            <?php get_search_form(); ?>
                            
                        <?php else : ?>
                            
                            <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'norvault'); ?></p>
                            <?php get_search_form(); ?>
                            
                        <?php endif; ?>
                    </div>
                </article>
                
            <?php endif; ?>
        </div>
        
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>