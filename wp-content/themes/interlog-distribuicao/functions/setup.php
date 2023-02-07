<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
register_nav_menu('main-menu', 'Main menu');
add_action('after_setup_theme', 'custom_image_sizes');