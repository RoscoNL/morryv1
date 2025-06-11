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
    // Theme stylesheet
    wp_enqueue_style('norvault-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    
    // Bootstrap CSS via CDN
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    
    // Custom CSS
    if (file_exists(get_template_directory() . '/assets/css/custom.css')) {
        wp_enqueue_style('norvault-custom', get_template_directory_uri() . '/assets/css/custom.css', array('norvault-style'), wp_get_theme()->get('Version'));
    }
    
    // jQuery (WordPress includes it)
    wp_enqueue_script('jquery');
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    
    // Custom scripts
    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        wp_enqueue_script('norvault-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap'), wp_get_theme()->get('Version'), true);
    }
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
 * Include Bootstrap Walker Nav Menu
 */
require_once get_template_directory() . '/inc/class-bootstrap-walker.php';

/**
 * Custom Post Types
 */
function norvault_register_post_types() {
    // Register Services Custom Post Type
    register_post_type('services', array(
        'labels' => array(
            'name'               => __('Diensten', 'norvault'),
            'singular_name'      => __('Dienst', 'norvault'),
            'add_new'            => __('Nieuwe Dienst', 'norvault'),
            'add_new_item'       => __('Voeg Nieuwe Dienst Toe', 'norvault'),
            'edit_item'          => __('Bewerk Dienst', 'norvault'),
            'new_item'           => __('Nieuwe Dienst', 'norvault'),
            'view_item'          => __('Bekijk Dienst', 'norvault'),
            'search_items'       => __('Zoek Diensten', 'norvault'),
            'not_found'          => __('Geen diensten gevonden', 'norvault'),
            'not_found_in_trash' => __('Geen diensten gevonden in prullenbak', 'norvault'),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'diensten'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-shield',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    ));

    // Register Cases Custom Post Type
    register_post_type('cases', array(
        'labels' => array(
            'name'               => __('Cases', 'norvault'),
            'singular_name'      => __('Case', 'norvault'),
            'add_new'            => __('Nieuwe Case', 'norvault'),
            'add_new_item'       => __('Voeg Nieuwe Case Toe', 'norvault'),
            'edit_item'          => __('Bewerk Case', 'norvault'),
            'new_item'           => __('Nieuwe Case', 'norvault'),
            'view_item'          => __('Bekijk Case', 'norvault'),
            'search_items'       => __('Zoek Cases', 'norvault'),
            'not_found'          => __('Geen cases gevonden', 'norvault'),
            'not_found_in_trash' => __('Geen cases gevonden in prullenbak', 'norvault'),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'cases'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    ));
}
add_action('init', 'norvault_register_post_types');

/**
 * Custom Fields using ACF (if available) or native metaboxes
 */
function norvault_add_custom_metaboxes() {
    // Add metabox for pricing packages
    add_meta_box(
        'pricing_details',
        __('Pricing Details', 'norvault'),
        'norvault_pricing_metabox_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'norvault_add_custom_metaboxes');

function norvault_pricing_metabox_callback($post) {
    // Add nonce for security
    wp_nonce_field('norvault_save_pricing_data', 'norvault_pricing_nonce');
    
    // Get existing values
    $pricing_data = get_post_meta($post->ID, '_norvault_pricing_data', true);
    
    // Output fields
    ?>
    <div class="norvault-metabox">
        <p>
            <label for="package_price"><?php _e('Package Price', 'norvault'); ?></label>
            <input type="text" id="package_price" name="package_price" value="<?php echo esc_attr($pricing_data['price'] ?? ''); ?>" />
        </p>
        <p>
            <label for="package_features"><?php _e('Package Features (one per line)', 'norvault'); ?></label>
            <textarea id="package_features" name="package_features" rows="10" cols="50"><?php echo esc_textarea($pricing_data['features'] ?? ''); ?></textarea>
        </p>
    </div>
    <?php
}

/**
 * Save metabox data
 */
function norvault_save_pricing_data($post_id) {
    // Check nonce
    if (!isset($_POST['norvault_pricing_nonce']) || !wp_verify_nonce($_POST['norvault_pricing_nonce'], 'norvault_save_pricing_data')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save data
    $pricing_data = array(
        'price' => sanitize_text_field($_POST['package_price'] ?? ''),
        'features' => sanitize_textarea_field($_POST['package_features'] ?? ''),
    );

    update_post_meta($post_id, '_norvault_pricing_data', $pricing_data);
}
add_action('save_post', 'norvault_save_pricing_data');

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
 * Customizer Settings
 */
function norvault_customize_register($wp_customize) {
    // Add section for company info
    $wp_customize->add_section('norvault_company_info', array(
        'title'    => __('Company Information', 'norvault'),
        'priority' => 30,
    ));

    // Phone number
    $wp_customize->add_setting('norvault_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('norvault_phone', array(
        'label'    => __('Phone Number', 'norvault'),
        'section'  => 'norvault_company_info',
        'type'     => 'text',
    ));

    // Email
    $wp_customize->add_setting('norvault_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('norvault_email', array(
        'label'    => __('Email Address', 'norvault'),
        'section'  => 'norvault_company_info',
        'type'     => 'email',
    ));

    // Address
    $wp_customize->add_setting('norvault_address', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('norvault_address', array(
        'label'    => __('Address', 'norvault'),
        'section'  => 'norvault_company_info',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'norvault_customize_register');

/**
 * Custom excerpt length
 */
function norvault_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'norvault_excerpt_length');

/**
 * Custom excerpt more
 */
function norvault_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'norvault_excerpt_more');

/**
 * Disable Gutenberg for specific post types if needed
 */
function norvault_disable_gutenberg($use_block_editor, $post_type) {
    // Keep Gutenberg for posts and pages
    if ($post_type === 'post' || $post_type === 'page') {
        return $use_block_editor;
    }
    return false;
}
add_filter('use_block_editor_for_post_type', 'norvault_disable_gutenberg', 10, 2);

/**
 * Add theme support for WooCommerce if needed
 */
function norvault_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'norvault_add_woocommerce_support');

/**
 * Security headers
 */
function norvault_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
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
 * Custom login logo
 */
function norvault_login_logo() {
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/logo.png);
            height: 65px;
            width: 320px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'norvault_login_logo');

/**
 * Polylang Support Functions
 */

// Add language switcher to navigation
function norvault_add_language_switcher($items, $args) {
    if (function_exists('pll_the_languages') && $args->theme_location === 'primary') {
        $languages = pll_the_languages(array(
            'show_flags' => 1,
            'show_names' => 1,
            'echo' => 0,
            'hide_if_empty' => 0,
            'dropdown' => 0,
            'raw' => 1
        ));
        
        if (!empty($languages)) {
            $lang_html = '<li class="nav-item dropdown language-switcher">';
            $lang_html .= '<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
            
            // Get current language
            $current_lang = pll_current_language('slug');
            foreach ($languages as $lang) {
                if ($lang['current_lang']) {
                    if ($lang['flag']) {
                        $lang_html .= '<img src="' . $lang['flag'] . '" alt="' . $lang['name'] . '" width="16" height="11" class="me-1">';
                    }
                    $lang_html .= '<span>' . strtoupper($lang['slug']) . '</span>';
                    break;
                }
            }
            
            $lang_html .= '</a>';
            $lang_html .= '<ul class="dropdown-menu" aria-labelledby="languageDropdown">';
            
            foreach ($languages as $lang) {
                $lang_html .= '<li><a class="dropdown-item' . ($lang['current_lang'] ? ' active' : '') . '" href="' . $lang['url'] . '">';
                if ($lang['flag']) {
                    $lang_html .= '<img src="' . $lang['flag'] . '" alt="' . $lang['name'] . '" width="16" height="11" class="me-2">';
                }
                $lang_html .= $lang['name'] . '</a></li>';
            }
            
            $lang_html .= '</ul></li>';
            
            $items .= $lang_html;
        }
    }
    
    return $items;
}
add_filter('wp_nav_menu_items', 'norvault_add_language_switcher', 10, 2);

// Register strings for translation
function norvault_register_strings() {
    if (function_exists('pll_register_string')) {
        // Hero section
        pll_register_string('hero_title', 'Jouw betrouwbare partner in informatiebeveiliging.', 'Norvault Theme');
        pll_register_string('hero_subtitle', 'Onze vCISO-dienst helpt je moeiteloos te voldoen aan ISO 27001 en NIS2. Voor bedrijven die slim willen beveiligen – zonder onnodige kosten.', 'Norvault Theme');
        pll_register_string('hero_cta', 'Ontvang vrijblijvend advies', 'Norvault Theme');
        
        // Section titles
        pll_register_string('why_vciso_title', 'Waarom kiezen voor een virtuele CISO?', 'Norvault Theme');
        pll_register_string('why_vciso_subtitle', 'Niet elk bedrijf heeft een eigen securityteam – en dat is ook helemaal niet nodig. Met een virtuele CISO krijg je deskundige begeleiding bij informatiebeveiliging, zonder dat je iemand hoeft aan te nemen of intern hoeft te beleggen.', 'Norvault Theme');
        pll_register_string('our_services_title', 'Onze diensten', 'Norvault Theme');
        pll_register_string('our_services_subtitle', 'Als jouw virtuele CISO verzorgen we alles wat nodig is voor effectieve informatiebeveiliging – strategisch én operationeel.', 'Norvault Theme');
        pll_register_string('testimonials_title', 'Wat onze klanten zeggen', 'Norvault Theme');
        pll_register_string('contact_title', 'Contact', 'Norvault Theme');
        
        // Benefits
        pll_register_string('benefit_1_title', 'Volledig compliant', 'Norvault Theme');
        pll_register_string('benefit_1_text', 'Cybersecurity naar een hoger niveau tillen? We helpen je voldoen aan ISO 27001, NIS2 en andere normenkaders.', 'Norvault Theme');
        pll_register_string('benefit_2_title', 'Eén vast aanspreekpunt', 'Norvault Theme');
        pll_register_string('benefit_2_text', 'Altijd iemand die jouw situatie kent en direct helpt. Wij zorgen dat wij de organisatie kennen en bieden altijd de juiste ondersteuning.', 'Norvault Theme');
        pll_register_string('benefit_3_title', 'Geen securityteam nodig', 'Norvault Theme');
        pll_register_string('benefit_3_text', 'Wij regelen alles wat nodig is – van beleid en risicomanagement tot privacy pentest.', 'Norvault Theme');
        
        // Packages
        pll_register_string('package_basic', 'Basis', 'Norvault Theme');
        pll_register_string('package_plus', 'Plus', 'Norvault Theme');
        pll_register_string('package_premium', 'Premium', 'Norvault Theme');
        pll_register_string('package_basic_desc', 'Voor organisaties die een solide basis willen leggen.', 'Norvault Theme');
        pll_register_string('package_plus_desc', 'Voor bedrijven die audit-ready willen zijn.', 'Norvault Theme');
        pll_register_string('package_premium_desc', 'Voor bedrijven met hoge eisen en complexe behoeften.', 'Norvault Theme');
        
        // Form labels
        pll_register_string('form_name', 'Naam', 'Norvault Theme');
        pll_register_string('form_email', 'E-mailadres', 'Norvault Theme');
        pll_register_string('form_message', 'Bericht', 'Norvault Theme');
        pll_register_string('form_submit', 'Verstuur', 'Norvault Theme');
        pll_register_string('form_success', 'Je bericht is succesvol verzonden!', 'Norvault Theme');
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

// Add hreflang tags
function norvault_add_hreflang_tags() {
    if (function_exists('pll_the_languages')) {
        $languages = pll_the_languages(array('echo' => 0, 'raw' => 1));
        foreach ($languages as $lang) {
            echo '<link rel="alternate" hreflang="' . $lang['slug'] . '" href="' . $lang['url'] . '" />' . "\n";
        }
    }
}
add_action('wp_head', 'norvault_add_hreflang_tags');

/**
 * Get placeholder image URL
 */
function norvault_get_placeholder_image($width = 600, $height = 400, $text = '') {
    if (empty($text)) {
        $text = 'Norvault Security';
    }
    return "https://via.placeholder.com/{$width}x{$height}/0052CC/ffffff?text=" . urlencode($text);
}

// Modify language switcher for mobile
function norvault_mobile_language_switcher() {
    if (function_exists('pll_the_languages')) {
        echo '<div class="mobile-language-switcher d-lg-none text-center mt-3">';
        echo '<div class="btn-group" role="group">';
        
        $languages = pll_the_languages(array('echo' => 0, 'raw' => 1));
        foreach ($languages as $lang) {
            $active = $lang['current_lang'] ? ' active' : '';
            echo '<a href="' . $lang['url'] . '" class="btn btn-sm btn-outline-primary' . $active . '">';
            echo strtoupper($lang['slug']);
            echo '</a>';
        }
        
        echo '</div>';
        echo '</div>';
    }
}