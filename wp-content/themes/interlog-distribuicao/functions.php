<?php
if (!defined('ABSPATH')) {
  exit;
}

// Setup
require get_template_directory() . '/functions/setup.php';

// ACF Theme Options
require get_template_directory() . '/functions/acf-theme-options.php';

// ACF Theme Options
require get_template_directory() . '/functions/page-contato-plugin-repeater.php';

// Enqueues
require get_template_directory() . '/functions/enqueues.php';