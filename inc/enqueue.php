<?php

/**
 * Enqueue styles & scripts
 *
 * @author   Bootscore
 * @package  bs Grid
 * @version  5.8.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Register Scripts
 */
function bs_grid_scripts() {

  // Base plugin directory (go up one level from /inc/)
  $plugin_dir = plugin_dir_path(__DIR__);
  $plugin_url = plugin_dir_url(__DIR__);

  // File paths
  $bs_grid_js      = $plugin_dir . 'assets/js/bs-grid.min.js';
  
  // Versions based on file modification time
  $bs_grid_js_ver      = file_exists($swiper_js) ? date('YmdHi', filemtime($swiper_js)) : false;
  
  // Enqueue scripts with versioning
  wp_enqueue_script('bs-grid-js', $plugin_url . 'assets/js/bs-grid.min.js', [], $swiper_js_ver, true);
  
}
add_action('wp_enqueue_scripts', 'bs_grid_scripts');


/**
 * Editor-only styles for bs-grid
 */
function bs_grid_enqueue_editor_styles() {

  // Base plugin directory (go up one level from /inc/)
  $plugin_dir = plugin_dir_path( __DIR__ );
  $plugin_url = plugin_dir_url( __DIR__ );

  // File path
  $editor_css = $plugin_dir . 'assets/css/block-editor.css';

  if ( ! file_exists( $editor_css ) ) {
    return;
  }

  wp_enqueue_style(
    'bs-grid-editor',
    $plugin_url . 'assets/css/block-editor.css',
    [],
    filemtime( $editor_css )
  );
}

add_action( 'enqueue_block_editor_assets', 'bs_grid_enqueue_editor_styles' );


/**
 * Site Editor + Pattern iframe (still editor, not frontend)
 */
function bs_grid_enqueue_site_editor_styles() {

  if ( ! is_admin() ) {
    return;
  }

  // Base plugin directory (go up one level from /inc/)
  $plugin_dir = plugin_dir_path( __DIR__ );
  $plugin_url = plugin_dir_url( __DIR__ );

  // File path
  $editor_css = $plugin_dir . 'assets/css/block-editor.css';

  if ( ! file_exists( $editor_css ) ) {
    return;
  }

  wp_enqueue_style(
    'bs-grid-editor',
    $plugin_url . 'assets/css/block-editor.css',
    [],
    filemtime( $editor_css )
  );
}

add_action( 'enqueue_block_assets', 'bs_grid_enqueue_site_editor_styles' );
