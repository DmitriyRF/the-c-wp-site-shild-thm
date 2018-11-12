<?php

function ex_divi_child_theme_setup()
{

    if (class_exists('ET_Builder_Module')) {
        class SIMP_CservService extends ET_Builder_Module
        {
            // public $slug = 'cserv_service';
            public $vb_support = 'on';
            public function init()
            {
                $this->name = esc_html__('Service', 'et_builder');
                $this->plural = esc_html__('Services', 'et_builder');
                $this->slug = 'cserv_service';

                $this->settings_modal_toggles = array(
                    //fields for content tab
                    'general' => array(
                        'toggles' => array(
                            'main_content' => esc_html__('Front of Card', 'et_builder'),
                            'main_content_h' => esc_html__('Front of Card on Hover', 'et_builder'),
                        ),
                    ),
                    //fields for design tab
                    'advanced' => array(
                        'toggles' => array(
                            'text' => array(
                                'title' => esc_html__('Text', 'et_builder'),
                                'priority' => 49,
                            ),
                            'width' => array(
                                'title' => esc_html__('Card Sizing', 'et_builder'),
                                'priority' => 65,
                            ),
                        ),
                    ),
                    //fields for advanced tab
                    'custom_css' => array(
                        'toggles' => array(
                            'animation' => array(
                                'title' => esc_html__('Animation', 'et_builder'),
                                'priority' => 90,
                            ),
                            'attributes' => array(
                                'title' => esc_html__('Attributes', 'et_builder'),
                                'priority' => 95,
                            ),
                        ),
                    ),
                );

                //Default settings
                $this->advanced_fields = array(
                    'fonts' => array(
                        'card_heading' => array(
                            'label' => esc_html__('Title', 'et_builder'),
                            'css' => array(
                                'main' => "{$this->main_css_element} h4, {$this->main_css_element} h4 a, {$this->main_css_element} h1.et_pb_module_header, {$this->main_css_element} h1.et_pb_module_header a, {$this->main_css_element} h2.et_pb_module_header, {$this->main_css_element} h2.et_pb_module_header a, {$this->main_css_element} h3.et_pb_module_header, {$this->main_css_element} h3.et_pb_module_header a, {$this->main_css_element} h5.et_pb_module_header, {$this->main_css_element} h5.et_pb_module_header a, {$this->main_css_element} h6.et_pb_module_header, {$this->main_css_element} h6.et_pb_module_header a",
                            ),
                            'header_level' => array(
                                'default' => 'h4',
                            ),
                        ),
                        'body' => array(
                            'label' => esc_html__('Body', 'et_builder'),
                            'css' => array(
                                'line_height' => "{$this->main_css_element} p",
                                'text_align' => "{$this->main_css_element} .et_pb_service_description",
                                'text_shadow' => "{$this->main_css_element} .et_pb_service_description",
                            ),
                        ),
                    ),
                    'background' => array(
                        'settings' => array(
                            'color' => 'alpha',
                        ),
                    ),
                    'borders' => array(
                        'default' => array(),
                        'image' => array(
                            'css' => array(
                                'main' => array(
                                    'border_radii' => "%%order_class%% .et_pb_main_service_image .et_pb_image_wrap",
                                    'border_styles' => "%%order_class%% .et_pb_main_service_image .et_pb_image_wrap",
                                ),
                            ),
                            'label_prefix' => esc_html__('Image', 'et_builder'),
                            'tab_slug' => 'advanced',
                            'toggle_slug' => 'icon_settings',
                            'depends_on' => array('use_icon'),
                            'depends_show_if' => 'off',
                        ),
                    ),
                    'box_shadow' => array(
                        'default' => array(),
                        'image' => array(
                            'label' => esc_html__('Image Box Shadow', 'et_builder'),
                            'option_category' => 'layout',
                            'tab_slug' => 'advanced',
                            'toggle_slug' => 'icon_settings',
                            'depends_show_if' => 'off',
                            'css' => array(
                                'main' => '%%order_class%% .et_pb_main_service_image .et_pb_image_wrap',
                                'show_if_not' => array(
                                    'use_icon' => 'on',
                                ),
                            ),
                            'default_on_fronts' => array(
                                'color' => '',
                                'position' => '',
                            ),
                        ),
                    ),
                    'margin_padding' => array(
                        'css' => array(
                            'important' => 'all',
                        ),
                    ),
                    'max_width' => array(
                        'css' => array(
                            'main' => $this->main_css_element,
                            'module_alignment' => '%%order_class%%.et_pb_service.et_pb_module',
                        ),
                    ),
                    'text' => array(
                        'use_background_layout' => true,
                        'css' => array(
                            'text_shadow' => "{$this->main_css_element} .et_pb_service_container",
                        ),
                        'options' => array(
                            'background_layout' => array(
                                'default_on_front' => 'light',
                                'hover' => 'tabs',
                            ),
                            'text_orientation' => array(
                                'default_on_front' => 'left',
                            ),
                        ),
                    ),
                    'filters' => array(
                        'child_filters_target' => array(
                            'tab_slug' => 'advanced',
                            'toggle_slug' => 'icon_settings',
                            'depends_show_if' => 'off',
                            'css' => array(
                                'main' => '%%order_class%% .et_pb_main_service_image',
                            ),
                        ),
                    ),
                    'icon_settings' => array(
                        'css' => array(
                            'main' => '%%order_class%% .et_pb_main_service_image',
                        ),
                    ),
                    'button' => false,
                );
            }

            public function get_fields()
            {
                return array(
                    'card_heading' => array(
                        'label' => esc_html__('Card Title', 'et_builder'),
                        'type' => 'text',
                        'option_category' => 'basic_option',
                        'description' => esc_html__('Input your desired heading here.', 'et_builder'),
                        'toggle_slug' => 'main_content',
                    ),
                    'card_image' => array(
                        'label' => esc_html__('Image', 'et_builder'),
                        'type' => 'upload',
                        'option_category' => 'basic_option',
                        'upload_button_text' => esc_attr__('Upload an image', 'et_builder'),
                        'choose_text' => esc_attr__('Choose an Image', 'et_builder'),
                        'update_text' => esc_attr__('Set As Image', 'et_builder'),
                        'depends_show_if' => 'off',
                        'description' => esc_html__('Upload an image to display at the top of your service.', 'et_builder'),
                        'toggle_slug' => 'main_content',
                        'dynamic_content' => 'image',
                    ),
                    'card_cta_text_m' => array(
                        'label' => esc_html__('Card call to action for mobile', 'et_builder'),
                        'type' => 'text',
                        'option_category' => 'basic_option',
                        'description' => esc_html__('Input your CTA here.', 'et_builder'),
                        'toggle_slug' => 'main_content',
                    ),

                    'card_image_h' => array(
                        'label' => esc_html__('Image on Hover', 'et_builder'),
                        'type' => 'upload',
                        'option_category' => 'basic_option',
                        'upload_button_text' => esc_attr__('Upload an image', 'et_builder'),
                        'choose_text' => esc_attr__('Choose an Image', 'et_builder'),
                        'update_text' => esc_attr__('Set As Image', 'et_builder'),
                        'depends_show_if' => 'off',
                        'description' => esc_html__('Upload an image to display at the top of your service.', 'et_builder'),
                        'toggle_slug' => 'main_content_h',
                        'dynamic_content' => 'image',
                    ),
                    'content' => array(
                        'label' => esc_html__('Content on Hover', 'et_builder'),
                        'type' => 'tiny_mce',
                        'option_category' => 'basic_option',
                        'description' => esc_html__('Content entered here will appear below the heading text.', 'et_builder'),
                        'toggle_slug' => 'main_content_h',
                    ),
                    'card_cta_text_h' => array(
                        'label' => esc_html__('Card call to action on Hover', 'et_builder'),
                        'type' => 'text',
                        'option_category' => 'basic_option',
                        'description' => esc_html__('Input your CTA here.', 'et_builder'),
                        'toggle_slug' => 'main_content_h',
                    ),
                    'card_url' => array(
                        'label' => esc_html__('Service Link URL', 'et_builder'),
                        'type' => 'text',
                        'option_category' => 'basic_option',
                        'description' => esc_html__('If you would like to make your blurb a link, input your destination URL here.', 'et_builder'),
                        'toggle_slug' => 'link_options',
                        'dynamic_content' => 'url',
                    ),
                );
            }
            public function render($unprocessed_props, $content = null, $render_slug)
            {

                $title = $this->props['card_heading'];
                $header_level = $this->props['header_level'];

                if ('' !== $title) {
                    $title ='<h4 class="et_pb_module_header">'. html_entity_decode($title).'</h4>';
                }

                $card_content_h = $this->_esc_attr('card_content_h');
                $card_cta_text_m = $this->_esc_attr('card_cta_text_m');
                $card_cta_text_h = $this->_esc_attr('card_cta_text_h');

                $url = $this->props['card_url'];

                $card_image = $this->props['card_image'];

                $card_image = ('' !== trim($card_image)) ? sprintf(
                    '<img src="%1$s" alt="%2$s" class="%3$s" />',
                    esc_attr($card_image),
                    et_esc_previously($alt),
                    esc_attr(" et_pb_animation_{$animation}")
                ) : '';

                $video_background = $this->video_background();
                $parallax_image_background = $this->get_parallax_image_background();

                $data_background_layout = '';
                $data_background_layout_hover = '';
                if ($background_layout_hover_enabled) {
                    $data_background_layout = sprintf(
                        ' data-background-layout="%1$s"',
                        esc_attr($background_layout)
                    );
                    $data_background_layout_hover = sprintf(
                        ' data-background-layout-hover="%1$s"',
                        esc_attr($background_layout_hover)
                    );
                }

                $card_image_h = $this->props['card_image_h'];

                $card_image_h = ('' !== trim($card_image_h)) ? sprintf(
                    '<img src="%1$s" alt="%2$s" class="%3$s" />',
                    esc_attr($card_image_h),
                    et_esc_previously($alt),
                    esc_attr(" et_pb_animation_{$animation}")
                ) : '';

                //<div%8$s class="%7$s"%11$s%12$s>

                $output = sprintf(
                    '%9$s
				%10$s
                <div class="et_pb_service_content_wrapper">
                    <a href="%4$s" class="et_pb_service_link_to" target="_blank">
                    <div class="line-color"></div>
                    <div class="et_pb_service_content">
                        <div class="et_pb_service_header">
                            %1$s
                        </div>
                        <div class="et_pb_service_icon">
                            %3$s
                        </div>
                        <div class="et_pb_service_cta_mobile">
                            %5$s
                        </div>
                    </div> <!-- .et_pb_service_content -->
                    <div class="et_pb_service_content_hover">
                        <div class="et_pb_service_icon_hover">
                            %13$s
                        </div>
                        <div class="et_pb_service_description_hover">
                            %2$s
                        </div><!-- .et_pb_service_description_hover -->
                        <div class="et_pb_service_cta_hover">
                            %6$s
                        </div>
                    </div> <!-- .et_pb_service_content_hover -->
                    </a>
				</div> <!-- .et_pb_service_content_wrapper -->',
                    $title, //1
                    $this->content, //2
                    $card_image, // 3
                    $url, // 4
                    $card_cta_text_m, // 5
                    $card_cta_text_h, // 6
                    $this->module_classname($render_slug), // 7
                    $this->module_id(), // 8
                    $video_background, // 9
                    $parallax_image_background, // 10
                    et_esc_previously($data_background_layout), // 11
                    et_esc_previously($data_background_layout_hover), // 12
                    $card_image_h //13
                );
                return $output;

                //      </div> <!-- .et_pb_service -->

            }
        }
        new SIMP_CservService;
    }

}
add_action('et_builder_ready', 'ex_divi_child_theme_setup');