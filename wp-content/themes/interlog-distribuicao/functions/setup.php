<?php
if (!defined('ABSPATH')) {
    exit;
}

/*
    * Theme support
*/
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

/*
    * Title and thumbnails
*/
function add_title_thumbnails() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size('homepage-icon-services', 149, 136, true);
    add_image_size('icon-services', 308, 281, true);
}
add_action( 'after_setup_theme', 'add_title_thumbnails' );

/*
    * Register menus
*/
function register_menu() {
    register_nav_menu('top-menu', 'Menu - Top');
    register_nav_menu('main-menu', 'Menu - Header');
}
add_action( 'init', 'register_menu' );

/*
    * Adds a specific class to a specific menu item
*/
function add_specific_class_menu_item( $atts, $item, $args ) {
    if($item->title === 'ORÇAMENTO'){
        $class = 'button';
        $atts['class'] = $class;
    }
   return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_class_menu_item', 10, 3 );

/*
    * Remove <p> from <img> tags
*/
function filter_ptags_on_images( $content ){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter( 'the_content', 'filter_ptags_on_images' );

/*
    * Remove <p> from Contact Form 7
*/
add_filter('wpcf7_autop_or_not', '__return_false');