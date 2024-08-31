<?php
/*Plugin Name: bs Grid
Plugin URI: https://bootscore.me/documentation/bs-grid/
Description: Displays posts from category, child pages from parent id or custom post types by parent taxonomy id in post or page via shortcode.
Version: 5.7.1
Tested up to: 6.6
Requires at least: 5.0
Requires PHP: 7.4
Author: Bootscore
Author URI: https://bootscore.me
License: MIT License
*/


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Update checker
 */
require 'update/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/bootscore/bs-grid/',
	__FILE__,
	'bs-grid'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


/**
 * Register Scripts
 */
function bs_grid_scripts(){

  wp_enqueue_script('bs-grid-js', plugins_url('/assets/js/bs-grid.min.js', __FILE__), array(), false, true);
  
}
add_action('wp_enqueue_scripts', 'bs_grid_scripts');


/**
 * Locate template.
 *
 * Locate the called template.
 * Search Order:
 * 1. /themes/theme/bs-grid/$template_name
 * 2. /themes/theme/bs-grid-main/$template_name
 * 3. /themes/theme/$template_name
 * 4. /plugins/bs-grid-main/templates/$template_name.
 *
 * @since 5.6.0
 *
 * @param 	string 	$template_name			Template to load.
 * @param 	string 	$string $template_path	Path to templates.
 * @param 	string	$default_path			Default path to template files.
 * @return 	string 							Path to the template file.
 */
function bs_grid_locate_template($template_name, $template_path = '', $default_path = '') {

  // Set default plugin templates path.
  if (!$default_path) :
    $default_path = plugin_dir_path(__FILE__) . 'templates/'; // Path to the template folder
  endif;

  // Check if 'bs-grid/' exists in the theme.
  $bs_grid_path = get_theme_file_path('bs-grid/' . $template_name);
  if (file_exists($bs_grid_path)) {
    return $bs_grid_path;
  }

  // Check if 'bs-grid-main/' exists in the theme.
  // Fallback for existing 'bs-grid-main/' folders in child theme
  $bs_grid_main_path = get_theme_file_path('bs-grid-main/' . $template_name);
  if (file_exists($bs_grid_main_path)) {
    return $bs_grid_main_path;
  }

  // If neither 'bs-grid/' nor 'bs-grid-main/' exists, return the default path.
  return $default_path . $template_name;
}


/**
 * Get template.
 *
 * Search for the template and include the file.
 *
 * @since 1.0.0
 *
 * @see bs_grid_locate_template()
 *
 * @param string 	$template_name			Template to load.
 * @param array 	$args					Args passed for the template file.
 * @param string 	$string $template_path	Path to templates.
 * @param string	$default_path			Default path to template files.
 */
function bs_grid_get_template($template_name, $args = array(), $tempate_path = '', $default_path = '') {

  if (is_array($args) && isset($args)) :
    extract($args);
  endif;

  $template_file = bs_grid_locate_template($template_name, $tempate_path, $default_path);

  if (!file_exists($template_file)) :
    _doing_it_wrong(__FUNCTION__, sprintf('<code>%s</code> does not exist.', $template_file), '1.0.0');
    return;
  endif;

  include $template_file;
}


/**
 * Templates.
 *
 * This func tion will output the templates
 * file from the /templates.
 *
 * @since 1.0.0
 */

function bs_grid() {

  return bs_grid_get_template('sc-grid.php');
}
add_action('wp_head', 'bs_grid');


function bs_grid_list() {

  return bs_grid_get_template('sc-list.php');
}
add_action('wp_head', 'bs_grid_list');


function bs_grid_hero() {

  return bs_grid_get_template('sc-hero.php');
}
add_action('wp_head', 'bs_grid_hero');


function bs_grid_accordion() {

  return bs_grid_get_template('sc-accordion.php');
}
add_action('wp_head', 'bs_grid_accordion');


function bs_grid_tabs() {

  return bs_grid_get_template('sc-tabs.php');
}
add_action('wp_head', 'bs_grid_tabs');
