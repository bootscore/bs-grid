<?php

/**
 * Patterns
 *
 * @author   Bootscore
 * @package  bs Grid
 * @version  5.8.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Register bs Grid pattern category
 */
function bs_grid_register_pattern_category() {

  if ( ! function_exists( 'register_block_pattern_category' ) ) {
    return;
  }

  register_block_pattern_category(
    'bs-grid',
    [
      'label' => __( 'bs Grid', 'bs-grid' ),
    ]
  );
}
add_action( 'init', 'bs_grid_register_pattern_category', 5 ); // lower priority = earlier


/**
 * Register bs Grid patterns automatically from patterns folder
 */
function bs_grid_register_patterns() {

  if ( ! function_exists( 'register_block_pattern' ) ) {
    return;
  }

  // Base plugin directory (go up one level from /inc/)
  $plugin_dir   = plugin_dir_path( __DIR__ );
  $patterns_dir = $plugin_dir . 'patterns/';

  if ( ! is_dir( $patterns_dir ) ) {
    return;
  }

  foreach ( glob( $patterns_dir . '*.php' ) as $pattern_file ) {

    $pattern = require $pattern_file;

    if ( ! is_array( $pattern ) || empty( $pattern['content'] ) ) {
      continue;
    }

    $slug = basename( $pattern_file, '.php' );

    register_block_pattern(
      'bs-grid/' . $slug,
      $pattern
    );
  }
}
add_action( 'init', 'bs_grid_register_patterns' );
