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
        <a class="navbar-brand d-flex align-items-center" href="<?php echo esc_url(home_url('/')); ?>">
            <!-- Custom SVG Logo -->
            <svg width="40" height="40" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="me-2">
                <!-- Shield base with gradient -->
                <defs>
                    <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#8B5CF6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#EC4899;stop-opacity:1" />
                    </linearGradient>
                    <linearGradient id="logoGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#0052CC;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#00D4AA;stop-opacity:1" />
                    </linearGradient>
                </defs>
                
                <!-- Modern shield shape -->
                <path d="M100 20 L160 50 L160 120 Q160 160 100 180 Q40 160 40 120 L40 50 Z" 
                      fill="url(#logoGradient)" 
                      opacity="0.1"/>
                
                <!-- Inner shield -->
                <path d="M100 30 L150 55 L150 115 Q150 150 100 165 Q50 150 50 115 L50 55 Z" 
                      fill="none" 
                      stroke="url(#logoGradient2)" 
                      stroke-width="3"/>
                
                <!-- Lock icon in center -->
                <g transform="translate(100, 90)">
                    <!-- Lock body -->
                    <rect x="-20" y="-10" width="40" height="30" rx="5" fill="url(#logoGradient2)"/>
                    <!-- Lock shackle -->
                    <path d="M -15 -10 Q -15 -25 0 -25 Q 15 -25 15 -10" 
                          fill="none" 
                          stroke="url(#logoGradient2)" 
                          stroke-width="6" 
                          stroke-linecap="round"/>
                    <!-- Keyhole -->
                    <circle cx="0" cy="5" r="4" fill="white"/>
                </g>
                
                <!-- Decorative dots -->
                <circle cx="100" cy="35" r="3" fill="url(#logoGradient2)" opacity="0.6"/>
                <circle cx="85" cy="40" r="2" fill="url(#logoGradient2)" opacity="0.4"/>
                <circle cx="115" cy="40" r="2" fill="url(#logoGradient2)" opacity="0.4"/>
            </svg>
            <span class="fw-bold gradient-text fs-4">Norvault</span>
        </a>
        
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