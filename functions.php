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
            'primary' => 'Główne menu'
        );
        register_nav_menus($locations);
    }
    add_action('init', 'balcerzak_menu');
?>