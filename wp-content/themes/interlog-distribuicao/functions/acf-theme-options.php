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
    'menu_slug'     => 'theme-general-homepage',
    'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Pagina Sobre',
    'menu_title'    => 'Sobre',
    'menu_slug'     => 'theme-general-sobre',
    'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Pagina Serviços',
    'menu_title'    => 'Serviços',
    'menu_slug'     => 'theme-general-servicos',
    'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Pagina Estrutura',
    'menu_title'    => 'Estrutura',
    'menu_slug'     => 'theme-general-estrutura',
    'parent_slug'   => 'theme-general-settings',
  ));
  
}