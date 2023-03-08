<?php
if (!defined('ABSPATH')) {
  exit;
}

function custom_enqueue_scripts()
{
  // * styles *

  // Bootstrap 5
  wp_register_style('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', false, '5.2.3', null);
  wp_enqueue_style('bootstrap5');

  // FontAwesome 4
  wp_register_style('font-awesome4', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', null);
  wp_enqueue_style('font-awesome4');

  // SwiperJS 4
  wp_register_style('swiperjs', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css', false, '4.5.0', null);
  wp_enqueue_style('swiperjs');

  // Aos
  wp_register_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', false, '2.3.1', null);
  wp_enqueue_style('aos');

  // main style
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', false, '1.0.0', null);
  wp_enqueue_style('main');

  // responsive style
  wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', false, '1.0.0', null);
  wp_enqueue_style('responsive');

  // preloader
  wp_register_style('preloader', get_template_directory_uri() . '/css/preloader.css', false, '1.0.0', null);
  wp_enqueue_style('preloader');

  // * scripts *

  // Bundle Bootstrap 5
  wp_register_script('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', false, '5.2.3', true);
  wp_enqueue_script('bootstrap5');

  // SwiperJS 4
  wp_register_script('swiperjs', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', false, '4.5.0', true);
  wp_enqueue_script('swiperjs');

  // AOR
  wp_register_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', false, '2.3.1', true);
  wp_enqueue_script('aos');

  // Custom Scripts
  wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', false, '1.0.0', true);
  wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts', 100);