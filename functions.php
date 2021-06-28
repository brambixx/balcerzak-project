<?php
    /* Theme functions */
    function theme_slug_setup() {
        add_theme_support( 'title-tag' );
    }
    add_action( 'after_setup_theme', 'theme_slug_setup' );
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    function balcerzak_menu() {
        $locations = array(
            'primary' => 'Główne menu',
            'secondary' => 'Footer menu'
        );
        register_nav_menus($locations);
    }
    add_action('init', 'balcerzak_menu');
    add_filter('nav_menu_item_id','clear_nav_menu_item_id', 10, 3);
    function clear_nav_menu_item_id($id, $item, $args) {
        return "";
    }
    add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
    function clear_nav_menu_item_class($classes, $item, $args) {
        return array();
    }

    add_filter('nav_menu_css_class', 'add_classes');
    function add_classes($classes) {
        $classes[] = 'nav__button';
        return $classes;
    }

    
?>