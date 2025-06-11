<?php
/**
 * Bootstrap 5 Walker Class for WordPress
 * 
 * This class extends WordPress's Walker_Nav_Menu to work with Bootstrap 5
 */

if (!class_exists('Bootstrap_Walker_Nav_Menu')) {
    
    class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
        
        // Start Level
        public function start_lvl(&$output, $depth = 0, $args = null) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
        }

        // Start Element
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

            $item_output = isset($args->before) ? $args->before : '';
            $item_output .= '<a'. $attributes .'>';
            $item_output .= isset($args->link_before) ? $args->link_before : '';
            $item_output .= apply_filters('the_title', $item->title, $item->ID);
            $item_output .= isset($args->link_after) ? $args->link_after : '';
            $item_output .= '</a>';
            $item_output .= isset($args->after) ? $args->after : '';

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }
    }
}