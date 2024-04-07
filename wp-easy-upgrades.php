<?php
/**
 * Plugin Name: WP Easy Upgrades
 * Plugin URI: http://yourwebsite.com/wp-easy-upgrades
 * Description: Easily upgrade themes and plugins via ZIP files with automatic backups.
 * Version: 2.0.3
 * Author: Your Name
 * Author URI: http://yourwebsite.com
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Plugin version.
if ( ! defined( 'WPEU_VERSION' ) ) {
    define( 'WPEU_VERSION', '2.0.3' );
}

// Include the main class.
if ( ! class_exists( 'WPEasyUpgrades' ) ) {
    include_once dirname( __FILE__ ) . '/includes/class-wpeasyupgrades.php';
}

function WPEU() {
    return WPEasyUpgrades::instance();
}

// Global for backwards compatibility.
$GLOBALS['wp_easy_upgrades'] = WPEU();
