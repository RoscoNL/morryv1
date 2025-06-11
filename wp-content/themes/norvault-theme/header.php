<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigatie -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <a class="navbar-brand fw-bold" href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        <?php endif; ?>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'navbar-nav ms-auto',
                'container'      => false,
                'walker'         => new Bootstrap_Walker_Nav_Menu(),
                'fallback_cb'    => '__return_false',
            ));
            ?>
        </div>
    </div>
</nav>

<!-- Toggle Dark Mode -->
<button class="toggle-btn" onclick="document.body.classList.toggle('dark-mode')">🌙</button>