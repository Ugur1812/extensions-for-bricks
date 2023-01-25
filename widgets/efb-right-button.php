<?php

namespace EFB\Widgets;

if (!defined('ABSPATH')) {
  exit;
}

class EFB_Right_Button extends \Bricks\Element {
  // Element properties
  public $category = 'efb-cat'; //nameof the category
  public $name = 'efb-right-button'; //must be same as name when you registered it
  public $icon = 'ti-shift-left-alt'; //use Themify icons. At least I always use them. https://yookits.com/demo/materialx-pro/icons/themify-icons.html
  public $css_selector = ''; //keep default one
  public $scripts = []; //do we need scripts to rin when render?
  public $nestable = true; // true || @since 1.5

  // Methods: Builder-specific
  public function get_label() {
    return esc_html__('Right Button', EFB_TEXTDOMAIN);
  }
  public function get_keywords() {
    return ["button", "position", "border"];
  }
  public function set_control_groups() {
    $this->control_groups['icon_group'] = [
      'title' => esc_html__('Icon controls', EFB_TEXTDOMAIN),
      'tab' => 'content'
    ];

    $this->control_groups['text_group'] = [
      'title' => esc_html__('Text controls', EFB_TEXTDOMAIN),
      'tab' => 'content'
    ];
  }
  public function set_controls() {

    /*Repeater control */
    $this->controls['_children'] = [
      'type' => 'repeater',
      'titleProperty' => 'label',
      'items' => 'children'
    ];

    //Is expanded in builder only
    $this->controls['is_expanded'] = [
      'tab' => 'content',
      'label' => esc_html__(
        'Expand buttons',
        EFB_TEXTDOMAIN
      ),
      'type' => 'checkbox',
      //'inline' => false,
      //'small' => false,
      'default' => false,
      'description' => esc_html__(
        'Expand buttons in builder. Does not effect frontend',
        EFB_TEXTDOMAIN
      ),
    ];




    /* GENERAL SETTINGS */
    $this->controls['general_settings_separator'] = [
      'tab' => 'content',
      'label' => esc_html__('General settings', EFB_TEXTDOMAIN),
      'type'  => 'separator',
    ];

    $this->controls['button_position'] = [
      'tab' => 'content',
      'label' => esc_html__('Button Position', EFB_TEXTDOMAIN),
      'type' => 'select',
      'options' => [
        'efb-right' => 'Right',
        'efb-left' => 'Left',
      ],
      'inline' => true,
      //'small' => true,
      'multiple' => false,
      'searchable' => false,
      'clearable' => false,
      'default' => 'efb-right',
    ];

    /* Visible width control */
    $this->controls['collapsed_width'] = [
      'tab' => 'content', //style,
      'label' => esc_html__('Collapsed Width', EFB_TEXTDOMAIN),
      'type' => 'number',
      'unit' => 'px',
      'inline' => true,
      'css' => [
        [
          'property' => '--efb-rb-collapsed-width',
          'selector' => ''
        ],
      ],
      'default' => "80px",
    ];

    /* Visible width control */
    $this->controls['extended_width'] = [
      'tab' => 'content', //style,
      'label' => esc_html__('Extended Width', EFB_TEXTDOMAIN),
      'type' => 'number',
      'unit' => 'px',
      'inline' => true,
      'css' => [
        [
          'property' => '--efb-rb-extended-width',
          'selector' => ''
        ],
      ],
      'default' => "400px",
    ];

    $this->controls['buttons_gap'] = [
      'tab' => 'content', //style,
      'label' => esc_html__('Gap', EFB_TEXTDOMAIN),
      'type' => 'number',
      'unit' => 'px',
      'inline' => true,
      'css' => [
        [
          'property' => 'gap',
          'selector' => ''
        ],
      ],
      'default' => '0px',
    ];

    /* padding control icon */
    $this->controls['padding_icon_wrapper'] = [
      'tab' => 'content', //style
      'group' => 'icon_group',
      'label' => esc_html__('Icon Padding ', EFB_TEXTDOMAIN),
      'type' => 'dimensions',
      'css' => [
        [
          'property' => 'padding',
          'selector' => '.efb-right-button_icon'
        ],
      ],
      'default' => [
        'top' => '10px',
        'right' => '10px',
        'bottom' => '10px',
        'left' => '10px',
      ],
    ];

    /* ICON CONTROLLS */
    $this->controls['icon_size'] = [
      'tab' => 'content', //style
      'group' => 'icon_group',
      'label' => esc_html__('Icon Size', EFB_TEXTDOMAIN),
      'type' => 'number',
      'unit' => 'px',
      'inline' => true,
      'css' => [
        [
          'property' => 'font-size',
          'selector' => '.efb-right-button_icon'
        ],
      ],
      'default' => "30px",
    ];

    $this->controls['icon_color'] = [
      'tab' => 'content', //style
      'group' => 'icon_group',
      'label' => esc_html__('Icon Color', EFB_TEXTDOMAIN),
      'type' => 'color',
      'inline' => true,
      'css' => [
        [
          'property' => 'color',
          'selector' => '.efb-right-button_icon'
        ],
      ],
      'default' => [
        'hex' => '#000000',
      ],
    ];


    /*$this->controls['content'] = [
      // Unique control identifier (lowercase, no spaces)
      'tab' => 'content',
      // Control tab: content/style
      'group' => 'testGroupButton',
      // Show under control group
      'label' => esc_html__('Content', EFB_TEXTDOMAIN),
      // Control label
      'type' => 'text',
      // Control type 
      'default' => esc_html__('Content goes here ..', EFB_TEXTDOMAIN), // Default setting
    ];
    */

    // Background color applied to '.efb-right-button'
    $this->controls['BackgroundColor'] = [
      'tab' => 'content',
      'label' => esc_html__('Background color', 'bricks'),
      'type' => 'color',
      'inline' => true,
      'css' => [
        [
          'property' => 'background-color',
          'selector' => '.efb-right-button',
        ]
      ],
      'default' => [
        'hex' => '#FFFFFF',
      ],
    ];

    /* TEXT CONTROLLS */
    $this->controls['text_size'] = [
      'tab' => 'content', //style
      'group' => 'text_group',
      'label' => esc_html__('Text Size', EFB_TEXTDOMAIN),
      'type' => 'number',
      'unit' => 'px',
      'inline' => true,
      'css' => [
        [
          'property' => 'font-size',
          'selector' => '.efb-right-button_text'
        ],
      ],
      'default' => "16px",
    ];

    $this->controls['text_color'] = [
      'tab' => 'content', //style
      'group' => 'text_group',
      'label' => esc_html__('Text Color', EFB_TEXTDOMAIN),
      'type' => 'color',
      'inline' => true,
      'css' => [
        [
          'property' => 'color',
          'selector' => '.efb-right-button_text'
        ],
      ],
      'default' => [
        'hex' => '#000000',
      ],
    ];
  }

  public function get_nestable_item() {
    return [
      'name' => 'div',
      'label' => esc_html__('Right Button', EFB_TEXTDOMAIN),
      'settings' => [
        'tag' => 'a',
        '_cssClasses' => 'efb-right-button'
      ],
      'children' => [
        [
          'name' => 'div',
          'label' => esc_html__('Icon Wrapper', EFB_TEXTDOMAIN),
          'settings' => [
            '_cssClasses' => 'efb-right-button_icon-wrapper'
          ],
          'children' => [
            [
              'name' => 'icon',
              'settings' => [
                'icon' => [
                  'library' => 'themify',
                  'icon' => 'ti-star'
                ],
                '_cssClasses' => 'efb-right-button_icon'
              ]
            ]
          ]
        ],
        [
          'name' => 'div',
          'label' => esc_html__('Content Wrapper', EFB_TEXTDOMAIN),
          'settings' => [
            '_cssClasses' => 'efb-right-button_content-wrapper'
          ],
          'children' => [
            [
              'name' => 'text-basic',
              'label' => esc_html__('Button text', EFB_TEXTDOMAIN),
              'settings' => [
                'text' => 'email@test.com',
                '_cssClasses' => 'efb-right-button_text'
              ]
            ]
          ]
        ],

      ]
    ];
  }
  public function get_nestable_children() {

    $children = [];

    for ($i = 0; $i < 2; $i++) {
      $children[] = $this->get_nestable_item();
    }

    return $children;
  }
  // Methods: Frontend-specific
  public function enqueue_scripts() {
    wp_enqueue_style('efb-right-button-style', EFB_PLUGIN_URL . 'assets/right-button/style.css', [], EFB_PLUGIN_VERSION);
    //wp_enqueue_script('efb-right-button-script', EFB_PLUGIN_URL . 'assets/right-button/script.js', [], EFB_PLUGIN_VERSION, true);

  }

  public function render() {

    //root_classes = [];
    $root_classes[] = "efb-right-button-wrapper";

     //root_classes = [efb-right-button-wrapper];

    $what_side_user_choose = $this->settings['button_position'];//efb-right OR efb-left

    $root_classes[] = $what_side_user_choose;

    //root_classes = ["efb-right-button-wrapper", "efb-left"];

    //efb-right-button-wrapper.efb-right

    $this->set_attribute('_root', 'class', $root_classes);

?>

    <div <?php echo $this->render_attributes('_root'); ?>>

      <?php
      if (class_exists("\Bricks\Frontend")) {
        echo \Bricks\Frontend::render_children($this);
      }
      ?>
    </div>
  <?php

  }

  // Render element HTML in builder
  public static function render_builder() {
  ?>
    <script type="text/x-template" id="tmpl-bricks-element-efb-right-button">
      <component 
      is="div"
      :class="[
        'efb-right-button-wrapper',
        settings.button_position,
        {
          'efb-expanded': settings.is_expanded
        }
        ]"
      >
         <bricks-element-children :element="element"/>
    </component>
    </script>
<?php
  }

}
?>
