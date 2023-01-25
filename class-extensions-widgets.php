<?php

namespace EFB;

use EFB\Widgets\EFB_Widgets;//we need this so we can access the class

//exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

//creating a main class that runs on init
class EFB_Extensions_Widgets {

  //constructor runs on init
  public function __construct() {
    $this->require_files();
    $this->init_actions();
  }

  //get all the files we need
  private function require_files() {

    //includes elements
    require_once EFB_PLUGIN_DIR . '/class-widgets.php'; //Initiate all Bricks Elements

  }

  private function init_actions() {
    //register init actions
    add_action('init', [$this, 'EFB_init'], 11); //must be 11 or higher to run after Bricks

    //plugins loaded
    add_action('plugins_loaded', [$this, 'EFB_plugins_loaded']);
  }

  public function EFB_init() {
    new EFB_Widgets(); //call class to make Bricks Element/s
  }

  function EFB_plugins_loaded() {
    //Load the textdomain for plugin
    load_plugin_textdomain(EFB_TEXTDOMAIN);

    add_filter( 'bricks/builder/i18n', function( $i18n ) {
        // Example: Provide translatable string for element category 'custom'
        $i18n['efb-cat'] = esc_html__('Extension', EFB_TEXTDOMAIN);
        return $i18n;
      });
  }
}
