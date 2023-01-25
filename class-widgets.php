<?php

namespace EFB\Widgets;

if (!defined('ABSPATH')) {
  exit;
}

class EFB_Widgets {

  private $element_list;

  public function __construct() {
    $this->element_list = [
      'right-button' => [
        'name' => 'efb-right-button',
        'class' => 'EFB_Right_Button',
      ]
    ]; 
    
    $this->register_elements();
  }

  private function register_elements() {
    $path = EFB_PLUGIN_DIR . 'widgets/';


    //register only if Bricks is active
    if (class_exists('\Bricks\Elements')) {
      foreach ($this->element_list as $element_name => $element_data) {
        
        $file = $path . $element_data['name'] . '.php';
        $name = $element_data['name'];
        $class = $element_data['class'];

        /* error_log("File: " . print_r($file, true));
        error_log("Name: " . print_r($name, true));
        error_log("Class: " . print_r($class, true));*/

        \Bricks\Elements::register_element($file, $name, $class);
      }
    }
  }
}
