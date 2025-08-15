<?php
/**
 * Plugin Name: TWY Core
 * Description: Site functionality for Tiffany Wood Yoga. Keep non-presentation code here (CPTs, shortcodes, Woo tweaks, etc).
 * Version:     0.1.0
 * Author:      TWY
 * License:     GPL-2.0-or-later
 * Text Domain: twy-core
 */

defined('ABSPATH') || exit;

define('TWY_CORE_VERSION', '0.1.0');
define('TWY_CORE_DIR', plugin_dir_path(__FILE__));
define('TWY_CORE_URL', plugin_dir_url(__FILE__));

/**
 * Activate/Deactivate (safe no-ops for now).
 */
register_activation_hook(__FILE__, function () {
	// place DB setup, caps, rewrite flush, etc.
	flush_rewrite_rules();
});
register_deactivation_hook(__FILE__, function () {
	flush_rewrite_rules();
});

/**
 * Bootstrap.
 */
add_action('plugins_loaded', function () {

	// Example: enqueue a tiny site CSS file if/when you need it.
	// keep presentation in theme; use sparingly.
	// add_action('wp_enqueue_scripts', function () {
	// 	wp_enqueue_style('twy-core', TWY_CORE_URL . 'assets/css/site.css', [], TWY_CORE_VERSION);
	// });

	// Example: utility – keep XML-RPC off
	// add_filter('xmlrpc_enabled', '__return_false');

	// Example: add a short [twy-year]
	// add_shortcode('twy-year', fn()=> wp_kses_post(date('Y')) );
});