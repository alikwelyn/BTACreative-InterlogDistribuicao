<?php
if (!defined('ABSPATH')) {
  exit;
}

function customize_add_button_atts( $attributes ) {
  return array_merge( $attributes, array(
    'additional_classes' => 'btn-default mb-5',
    'text' => '<i class="fa fa-plus-circle" aria-hidden="true"></i> ADICIONAR PRODUTO',
  ) );
}
add_filter( 'wpcf7_field_group_add_button_atts', 'customize_add_button_atts' );

function customize_remove_button_atts( $attributes ) {
  return array_merge( $attributes, array(
    'additional_classes' => 'btn-default mb-5',
    'text' => '<i class="fa fa-minus-circle" aria-hidden="true"></i> REMOVER PRODUTO',
  ) );
}
add_filter( 'wpcf7_field_group_remove_button_atts', 'customize_remove_button_atts' );