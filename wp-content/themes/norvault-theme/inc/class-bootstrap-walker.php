<?php
/**
 * Bootstrap 5 Walker for WordPress Navigation
 */

if (!class_exists('Bootstrap_Walker_Nav_Menu')) {
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

            if (in_array('menu-item-has-children', $