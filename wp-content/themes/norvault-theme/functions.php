<?php
/**
 * Norvault Security Theme Functions
 *
 * @package Norvault
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function norvault_theme_setup() {
    // Load text domain for translations
    load_theme_textdomain('norvault', get_template_directory() . '/languages');
    
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'norvault'),
        'footer'  => __('Footer Menu', 'norvault'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1140;
    }
}
add_action('after_setup_theme', 'norvault_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function norvault_enqueue_scripts() {
    // Google Fonts - Inter
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    
    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3');
    
    // Animate CSS
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1');
    
    // AOS CSS
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.4/dist/aos.css', array(), '2.3.4');
    
    // Theme stylesheet
    wp_enqueue_style('norvault-style', get_stylesheet_uri(), array('bootstrap'), wp_get_theme()->get('Version'));
    
    // Custom CSS
    wp_enqueue_style('norvault-custom', get_template_directory_uri() . '/assets/css/custom.css', array('norvault-style'), wp_get_theme()->get('Version'));
    
    // jQuery (WordPress includes it)
    wp_enqueue_script('jquery');
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    
    // Particles.js
    wp_enqueue_script('particles', 'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js', array(), '2.0.0', true);
    
    // AOS JS
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.4/dist/aos.js', array(), '2.3.4', true);
    
    // jQuery Easing
    wp_enqueue_script('jquery-easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), '1.4.1', true);
    
    // Custom scripts
    wp_enqueue_script('norvault-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap', 'aos', 'particles', 'jquery-easing'), wp_get_theme()->get('Version'), true);
    
    // Localize script for AJAX
    wp_localize_script('norvault-script', 'norvault_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('norvault_nonce'),
        'site_url' => home_url(),
        'theme_url' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'norvault_enqueue_scripts');

/**
 * Register Widget Areas
 */
function norvault_widgets_init() {
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'norvault'),
        'id'            => 'sidebar-primary',
        'description'   => __('Main sidebar that appears on the right.', 'norvault'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'norvault'),
        'id'            => 'footer-widgets',
        'description'   => __('Footer widget area', 'norvault'),
        'before_widget' => '<div id="%1$s" class="col-md-4 widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'norvault_widgets_init');

/**
 * Custom Walker for Bootstrap Navigation - Fixed for PHP 8.2
 */
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        if (in_array('menu-item-has-children', $classes)) {
            $classes[] = 'dropdown';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $attributes = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) .'"' : '';
        $attributes .= ! empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) .'"' : '';
        $attributes .= ! empty($item->url) ? ' href="' . esc_attr($item->url) .'"' : '';

        if ($depth === 0) {
            $attributes .= ' class="nav-link"';
        } else {
            $attributes .= ' class="dropdown-item"';
        }

        if (in_array('menu-item-has-children', $classes)) {
            $attributes .= ' data-bs-toggle="dropdown" role="button" aria-expanded="false"';
            $attributes = str_replace('nav-link', 'nav-link dropdown-toggle', $attributes);
        }

        $item_output = '';
        if (is_object($args)) {
            $item_output = $args->before ?? '';
        }
        
        $item_output .= '<a'. $attributes .'>';
        
        if (is_object($args)) {
            $item_output .= ($args->link_before ?? '') . apply_filters('the_title', $item->title, $item->ID) . ($args->link_after ?? '');
        } else {
            $item_output .= apply_filters('the_title', $item->title, $item->ID);
        }
        
        $item_output .= '</a>';
        
        if (is_object($args)) {
            $item_output .= $args->after ?? '';
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Contact Form Handler
 */
function norvault_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'norvault_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all fields');
    }

    // Create email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    // Send email
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('Your message has been sent successfully!');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_norvault_contact_form', 'norvault_handle_contact_form');
add_action('wp_ajax_nopriv_norvault_contact_form', 'norvault_handle_contact_form');

/**
 * Get placeholder image URL
 */
function norvault_get_placeholder_image($width = 600, $height = 400, $text = '') {
    if (empty($text)) {
        $text = 'Norvault Security';
    }
    return "https://via.placeholder.com/{$width}x{$height}/0052CC/ffffff?text=" . urlencode($text);
}

/**
 * Polylang Support Functions
 */

// Register strings for translation
function norvault_register_strings() {
    if (function_exists('pll_register_string')) {
        // Hero section
        pll_register_string('hero_title', 'Jouw betrouwbare partner in informatiebeveiliging.', 'Norvault Theme');
        pll_register_string('hero_subtitle', 'Onze vCISO-dienst helpt je moeiteloos te voldoen aan ISO 27001 en NIS2. Voor bedrijven die slim willen beveiligen – zonder onnodige kosten.', 'Norvault Theme');
        pll_register_string('hero_cta', 'Ontvang vrijblijvend advies', 'Norvault Theme');
        
        // Section titles
        pll_register_string('why_vciso_title', 'Waarom kiezen voor een virtuele CISO?', 'Norvault Theme');
        pll_register_string('our_services_title', 'Onze diensten', 'Norvault Theme');
        pll_register_string('testimonials_title', 'Wat onze klanten zeggen', 'Norvault Theme');
        pll_register_string('contact_title', 'Contact', 'Norvault Theme');
    }
}
add_action('init', 'norvault_register_strings');

// Helper function to get translated string
function norvault_get_string($name) {
    if (function_exists('pll__')) {
        return pll__($name);
    }
    return $name;
}

/**
 * Custom excerpt length
 */
function norvault_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'norvault_excerpt_length');

/**
 * Security headers
 */
function norvault_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
add_action('send_headers', 'norvault_security_headers');

/**
 * Remove WordPress version from head
 */
remove_action('wp_head', 'wp_generator');

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Theme activation hook
 */
function norvault_theme_activation() {
    // Create pages on theme activation
    include_once(get_template_directory() . '/setup-pages.php');
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'norvault_theme_activation');