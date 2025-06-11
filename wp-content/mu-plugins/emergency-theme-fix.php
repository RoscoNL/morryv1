<?php
/**
 * Emergency Theme Deactivator
 * This mu-plugin will automatically switch to a default theme if there's an error
 */

// Only run in admin or if there's an error
if (is_admin() || (defined('WP_DEBUG') && WP_DEBUG)) {
    
    // Get current theme
    $current_theme = get_option('stylesheet');
    
    // If it's our problematic theme, switch to default
    if ($current_theme === 'norvault-theme') {
        // Switch to Twenty Twenty-Four or any available theme
        $themes = wp_get_themes();
        
        foreach ($themes as $theme_slug => $theme) {
            if ($theme_slug !== 'norvault-theme') {
                switch_theme($theme_slug);
                
                // Add admin notice
                add_action('admin_notices', function() {
                    echo '<div class="notice notice-warning"><p><strong>Emergency Theme Switch:</strong> Your theme was causing a critical error and has been deactivated. The site is now using a default theme.</p></div>';
                });
                
                break;
            }
        }
    }
}