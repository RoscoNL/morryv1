<?php
/**
 * Emergency Theme Switcher
 * Upload dit bestand naar je WordPress root directory
 * Bezoek: https://www.norvaultsecurity.com/emergency-fix.php
 */

// Load WordPress
define('WP_USE_THEMES', false);
require('wp-load.php');

// Check if user is admin (for security)
if (!current_user_can('manage_options')) {
    die('Access denied. Please login as admin first.');
}

// Switch to default theme
$result = switch_theme('twentytwentyfour');

if ($result === null) {
    echo '<h1>Theme Successfully Switched!</h1>';
    echo '<p>Your site is now using the default WordPress theme.</p>';
    echo '<p><a href="/wp-admin/themes.php">Go to Themes Page</a></p>';
    echo '<p><strong>IMPORTANT:</strong> Delete this file after use!</p>';
} else {
    echo '<h1>Error switching theme</h1>';
    echo '<p>Please try manually via FTP.</p>';
}

// Show current theme
$current_theme = wp_get_theme();
echo '<p>Current active theme: ' . $current_theme->get('Name') . '</p>';
?>