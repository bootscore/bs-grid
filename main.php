<?php
/*Plugin Name: bs Grid
Plugin URI: https://bootscore.me/documentation/bs-grid/
Description: Displays posts from category, child pages from parent id or custom post types by parent taxonomy id in post or page via shortcode.
Version: 5.7.2
Tested up to: 6.8
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
require 'inc/update/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/bootscore/bs-grid/',
	__FILE__,
	'bs-grid'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


/**
 * Load required files
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/locate-template.php'; // Template overrides
require_once plugin_dir_path( __FILE__ ) . 'inc/enqueue.php';         // Scripts & styles
require_once plugin_dir_path( __FILE__ ) . 'inc/patterns.php';        // Block patterns
