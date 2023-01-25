<?php

/**
 * Plugin Name:       Extensions For Bricks
 * Plugin URI:
 * Description:       Border button with hover effects
 * Version:           1.0.0
 * Author:            Ugur Ayvaz
 * Author URL:        https://github.com/Ugur1812
 * License: 
 * License URI:   
 * Text Domain:       extensions
 * Domain path: 
 * Network:           no 
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
  exit;
}

if (!defined('EFB_PLUGIN_DIR')) {
  define('EFB_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

if (!defined('EFB_PLUGIN_URL')) {
  define('EFB_PLUGIN_URL', plugin_dir_url(__FILE__));
}

if (!defined('EFB_PLUGIN_VERSION')) {
  define('EFB_PLUGIN_VERSION', '1.0.0');
}

//textdomain
if(!defined('EFB_TEXTDOMAIN')){
    define('EFB_TEXTDOMAIN', 'extensions');
}

use \EFB\EFB_Extensions_Widgets;

require_once EFB_PLUGIN_DIR . 'class-extensions-widgets.php';

new EFB_Extensions_Widgets();
