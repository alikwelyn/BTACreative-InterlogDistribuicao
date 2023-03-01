<?php
if (!defined('ABSPATH')) {
  exit;
}

/*
* Theme Options
*/

if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
      'page_title'    => 'Opções Gerais do Tema',
      'menu_title'    => 'Opções do Tema',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));
  
  acf_add_options_sub_page(array(
      'page_title'    => 'Pagina Principal',
      'menu_title'    => 'Homepage',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Pagina Sobre',
    'menu_title'    => 'Sobre',
    'parent_slug'   => 'theme-general-settings',
));
  
}