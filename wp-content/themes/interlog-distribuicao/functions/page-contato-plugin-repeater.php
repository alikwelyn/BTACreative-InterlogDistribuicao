<?php
if (!defined('ABSPATH')) {
  exit;
}

function customize_add_button_atts( $attributes ) {
  return array_merge( $attributes, array(
    'text' => 'ADICIONAR MAIS UM PRODUTO',
  ) );
}
add_filter( 'wpcf7_field_group_add_button_atts', 'customize_add_button_atts' );

function customize_remove_button_atts( $attributes ) {
  return array_merge( $attributes, array(
    'text' => 'REMOVER PRODUTO',
  ) );
}
add_filter( 'wpcf7_field_group_remove_button_atts', 'customize_remove_button_atts' );