<?php
/*Plugin Name: bS Grid
Plugin URI: https://bootscore.me/plugins/bs-grid/
Description: Displays posts from category, child pages from parent id or custom post types by parent taxonomy id in post or page via shortcode. <a href="https://bootscore.me/documentation/bs-grid/">Documentation</a> | <a href="https://bootscore.me/documentation/bs-grid/#Changelog">Changelog</a>
Version: 5.5.0
Tested up to: 6.4.1
Requires at least: 5.0
Requires PHP: 7.4
Author: bootScore
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

  wp_enqueue_script('bs-grid-js', plugins_url('/js/bs-grid.min.js', __FILE__), array(), false, true);
  
}
add_action('wp_enqueue_scripts', 'bs_grid_scripts');


/**
 * Locate template.
 *
 * Locate the called template.
 * Search Order:
 * 1. /themes/theme/bs-grid-main/$template_name
 * 2. /themes/theme/$template_name
 * 3. /plugins/bs-grid-main/templates/$template_name.
 *
 * @since 1.0.0
 *
 * @param 	string 	$template_name			Template to load.
 * @param 	string 	$string $template_path	Path to templates.
 * @param 	string	$default_path			Default path to template files.
 * @return 	string 							Path to the template file.
 */
function bs_grid_locate_template($template_name, $template_path = '', $default_path = '') {

  // Set variable to search in bs-grid folder of theme.
  if (!$template_path) :
    $template_path = 'bs-grid-main/';
  endif;

  // Set default plugin templates path.
  if (!$default_path) :
    $default_path = plugin_dir_path(__FILE__) . 'templates/'; // Path to the template folder
  endif;

  // Search template file in theme folder.
  $template = locate_template(array(
    $template_path . $template_name,
    $template_name
  ));

  // Get plugins template file.
  if (!$template) :
    $template = $default_path . $template_name;
  endif;

  return apply_filters('bs_grid_locate_template', $template, $template_name, $template_path, $default_path);
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
