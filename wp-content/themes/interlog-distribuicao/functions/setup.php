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
    register_nav_menu('footer-menu', 'Menu - Footer');
}
add_action( 'init', 'register_menu' );

/*
    * Adds a specific class to a specific menu item
*/
function add_specific_class_menu_item( $atts, $item, $args ) {
    if( $item->title === 'ORÇAMENTO' ){
        $class = 'button';
        $atts['class'] .= ' ' . $class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_class_menu_item', 10, 3 );

/*
    * Remove a specific class to a specific menu item
*/
function remove_current_menu_item_class( $classes, $item, $args ) {
    if ( in_array( 'current-menu-item', $classes ) && $item->title === 'ORÇAMENTO' ) {
        $key = array_search( 'current-menu-item', $classes );
        unset( $classes[$key] );
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'remove_current_menu_item_class', 10, 3 );

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

/*
    * Unregister Default Widgets
*/
function unregister_default_widgets(){
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Widget_Custom_HTML');
    unregister_widget('WP_Widget_Media_Video');
    unregister_widget('WP_Widget_Media_Image');
    unregister_widget('WP_Widget_Media_Audio');
    unregister_widget('WP_Widget_Media_Gallery');
    unregister_widget('WP_Nav_Menu_Widget');
}
add_action( 'widgets_init', 'unregister_default_widgets' );
  
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/* 
    * Remove Comments From Admin Menu
*/
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'my_remove_admin_menus' );

/* 
    * Removes Comments From Post and Pages
*/
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'remove_comment_support', 100 );

/* 
    * Removes Comments From Admin Bar
*/
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

/* 
    * Removes comments URL Field
*/
function remove_comment_fields($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter( 'comment_form_default_fields','remove_comment_fields' );

/* 
    * Wordpress - Change Footer Text
*/
function remove_footer_admin () { 
  echo 'By <a href="https://btacreative.com.br" target="_new">BTA Creative</a> & <a href="https://wedeploy.com.br" target="_new">WEDEPLOY</a> made with <a href="http://wordpress.org" target="_new">WordPress</a>.'; 
  } 
add_filter( 'admin_footer_text', 'remove_footer_admin' ); 