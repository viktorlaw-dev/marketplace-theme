<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Marketplace_Nav_Walker extends Walker_Nav_Menu {

    // Output opening tag for submenu
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    // Close submenu
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Output each menu item
    public function start_el( &$output, $menu_item, $depth = 0, $args = null, $current_object_id = 0 ) {
        $has_children = in_array( 'menu-item-has-children', $menu_item->classes );

        if ( $depth === 0 ) {
            // Top-level menu item
            $li_class = $has_children ? 'nav-item dropdown' : 'nav-item';
            $a_class  = $has_children ? 'nav-link dropdown-toggle' : 'nav-link';
            $a_attr   = $has_children ? ' data-bs-toggle="dropdown" role="button" aria-expanded="false"' : '';

            $output .= '<li class="' . $li_class . '">';
            $output .= '<a href="' . $menu_item->url . '" class="' . $a_class . '"' . $a_attr . '>';
            $output .= $menu_item->title;
            $output .= '</a>';
        } else {
            // Submenu item
            $output .= '<li>';
            $output .= '<a href="' . $menu_item->url . '" class="dropdown-item">';
            $output .= $menu_item->title;
            $output .= '</a>';
        }
    }

    // Close each <li>
    public function end_el( &$output, $menu_item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }

}