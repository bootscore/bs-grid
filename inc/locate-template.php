<?php

/**
 * Locate templates
 *
 * @author   Bootscore
 * @package  bs Grid
 * @version  5.8.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Locate template.
 *
 * Search order:
 * 1. /themes/theme/bs-grid/$template_name
 * 2. /themes/theme/bs-grid-main/$template_name
 * 3. /plugins/bs-grid/templates/$template_name
 *
 * @param string $template_name Template to load.
 * @param string $template_path Path to templates (unused, kept for compatibility).
 * @param string $default_path  Default path to template files.
 * @return string               Full path to the template file.
 */
function bs_grid_locate_template( $template_name, $template_path = '', $default_path = '' ) {

  // Default plugin templates path (go up one level from /inc/)
  if ( ! $default_path ) {
    $default_path = plugin_dir_path( __DIR__ ) . 'templates/';
  }

  // Theme override: /bs-grid/
  $bs_grid_path = get_theme_file_path( 'bs-grid/' . $template_name );
  if ( file_exists( $bs_grid_path ) ) {
    return $bs_grid_path;
  }

  // Theme override: /bs-grid-main/ (legacy support)
  $bs_grid_main_path = get_theme_file_path( 'bs-grid-main/' . $template_name );
  if ( file_exists( $bs_grid_main_path ) ) {
    return $bs_grid_main_path;
  }

  // Plugin fallback
  return $default_path . $template_name;
}


/**
 * Get template.
 *
 * Locate and include the template file.
 *
 * @param string $template_name Template to load.
 * @param array  $args          Arguments passed to the template.
 * @param string $template_path Path to templates.
 * @param string $default_path  Default path to template files.
 */
function bs_grid_get_template( $template_name, $args = [], $template_path = '', $default_path = '' ) {

  if ( is_array( $args ) && ! empty( $args ) ) {
    extract( $args, EXTR_SKIP );
  }

  $template_file = bs_grid_locate_template( $template_name, $template_path, $default_path );

  if ( ! file_exists( $template_file ) ) {
    _doing_it_wrong(
      __FUNCTION__,
      sprintf( '<code>%s</code> does not exist.', esc_html( $template_file ) ),
      '1.0.0'
    );
    return;
  }

  include $template_file;
}


/**
 * Template helpers
 * These output templates from /templates
 */

function bs_grid() {
  return bs_grid_get_template( 'sc-grid.php' );
}
add_action( 'wp_head', 'bs_grid' );


function bs_grid_list() {
  return bs_grid_get_template( 'sc-list.php' );
}
add_action( 'wp_head', 'bs_grid_list' );


function bs_grid_hero() {
  return bs_grid_get_template( 'sc-hero.php' );
}
add_action( 'wp_head', 'bs_grid_hero' );


function bs_grid_accordion() {
  return bs_grid_get_template( 'sc-accordion.php' );
}
add_action( 'wp_head', 'bs_grid_accordion' );


function bs_grid_tabs() {
  return bs_grid_get_template( 'sc-tabs.php' );
}
add_action( 'wp_head', 'bs_grid_tabs' );
