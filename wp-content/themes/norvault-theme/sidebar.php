<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Norvault
 */

if (!is_active_sidebar('sidebar-primary')) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-primary'); ?>
</aside>