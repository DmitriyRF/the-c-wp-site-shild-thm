<?php /* Template Name: Quote form 2.4.1 */
  
  $quote_form_title = 'FREE STORAGE & LOGISTICS QUOTE';
  $quote_form_type = "storage_logistics_quote";
  $quote_form_event = "Logistics_Storage";
  $quote_form_number = [
    "dot" => "2.4.1",
    "underscore" => "2_4_1"
  ];
  $quote_form_nonce = [
    "input_name" => "quote_form",
    "nonce_value" => "estimateNonce"
  ];
   $row = 0;
?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_<?php echo $quote_form_number['underscore']; ?>">

            <?php

              $title = $quote_form_title;

              echo row_with_title____group_of_single___page_title( $row++, $title);

            ?>

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field($quote_form_nonce['input_name'], $quote_form_nonce['nonce_value']);?>

              <input type="hidden" name="quote_form_type" value="<?php echo $quote_form_type; ?>">

              <?php

                $main_header = 'Send project details';

                echo row_with_header___group_of_single___main_header( $row++, $main_header);

              ?>
              
              <?php 

                  $multiple_inputs = [
                    'contact_name' => ['label' => 'Name', 'placeholder' => '*Name' ],
                    'contact_company' => ['label' => 'Company', 'placeholder' => '*Company' ],
                    'contact_email' => ['label' => 'Email', 'placeholder' => '*Email' ],
                    'contact_phone' => ['label' => 'Phone number', 'placeholder' => '*Phone number' ]
                  ];

                  echo row_with_header___group_of_multiple_textInputs( $row++, null, $multiple_inputs );

              ?>

              <?php 
                  
                  $header = 'DO YOU NEED RIDI (Receive/Inspect/Deliver/Install) INCLUDED or ONLY STORAGE SERVICES?';

                  $radio_array = [
                    'name' => 'do_you_need_ridi',
                    'values' => [
                      'INCLUDE RIDI',
                      'ONLY STORAGE SERVICES'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>

              <?php 

                  $header = 'ENTER PICK-UP ADDRESS';

                  $array_of_fields = [
                    'address' => [
                      'label' => '*Pick-up Address',
                      'name' => 'contact_address_pick_up',
                      'is_required' => true
                    ],
                    'city' => [
                      'label' => '*Pick-up City',
                      'name' => 'contact_city_pick_up',
                      'is_required' => true
                    ],
                    'state' => [
                      'label' => '*State',
                      'name' => 'contact_state_pick_up',
                      'is_required' => true
                    ],
                    'zip_code' => [
                      'label' => '*Zip Code',
                      'name' => 'contact_zip_code_pick_up',
                      'is_required' => true
                    ]
                  ];

                  echo row_with_header___group_of_multiple_textInputs____addresses_custom( $row++, $header, $array_of_fields ); 

              ?>

              <?php 

                  $header = 'ENTER DELIVERY ADDRESS';

                  $array_of_fields = [
                    'address' => [
                      'label' => '*Delivery Address',
                      'name' => 'contact_address_delivery',
                      'is_required' => false
                    ],
                    'city' => [
                      'label' => '*Delivery City',
                      'name' => 'contact_city_delivery',
                      'is_required' => false
                    ],
                    'state' => [
                      'label' => '*State',
                      'name' => 'contact_state_delivery',
                      'is_required' => false
                    ],
                    'zip_code' => [
                      'label' => '*Zip Code',
                      'name' => 'contact_zip_code_delivery',
                      'is_required' => false
                    ]
                  ];

                  echo row_with_header___group_of_multiple_textInputs____addresses_custom( $row++, $header, $array_of_fields );

              ?>

              <?php 
                  
                  $header = 'HOW LONG DO YOU NEED TO STORE YOUR GOODS?';

                  $radio_array = [
                    'name' => 'how_long_store_goods',
                    'values' => [
                      'Long Term',
                      'Short Term',
                      'Don\'t Know'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>

              <?php

                $header = 'SELECT YOUR STORAGE DATES (optional)';

                echo row_with_header___group_of_single___header( $row++, $header );
              ?>

              <?php

                  $dataInputData = [
                    'name' => 'start_date',
                    'label' => 'Start Date:',
                    'placeholder' => 'Pick a start date'
                  ];

                  echo row_______________group_of_single___dateInput____date( $row++, $dataInputData );

              ?>  
              <?php

                  $dataInputData = [
                    'name' => 'end_date',
                    'label' => 'End Date:',
                    'placeholder' => 'Pick a end date'
                  ];

                  echo row_______________group_of_single___dateInput____date( $row++, $dataInputData );

              ?>  

              <?php 

                  $header = 'SELECT TYPES OF GOODS TO BE STORED';

                  $types_of_furniture_to_install = [
                    'input_type_table'            => ['label' => 'TABLE',     'placeholder' => 'Describe #size of table,desks,etc.' ],
                    'input_type_chair'            => ['label' => 'CHAIR',     'placeholder' => 'Describe #of units,chair,sofa,etc.' ],
                    'input_type_cubicles'         => ['label' => 'CUBICLES',  'placeholder' => 'Describe  #of units,etc.' ],
                    'input_type_storage_racking'  => ['label' => 'STORAGE & RACKING', 'placeholder' => 'Describe  #of units,type of rack,etc.' ],
                    'input_type_electronocs'      => ['label' => 'ELECTRONICS', 'placeholder' => 'Describe  #of units,etc.' ],
                    'input_type_miscellaneous'    => ['label' => 'MISCELLANEOUS', 'placeholder' => 'Describe...' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php
                  $header = "WHAT IS THE ESTIMATED VALUE OF STORED GOODS?";

                  $pairs_radioInput_array_with_text = [
                    ['name' => 'estimated_value_of_goods', 'value_only' => 'Don’t know' , 'value_text' => 'Estimate Value', 'placeholder' => 'Value' ],
                  ];

                  echo row_with_header___group_of_multiple_pair_radioInputs_with_text( $row++, $header, $pairs_radioInput_array_with_text );

              ?>

              <?php 
                  
                  $header = 'TYPE BILLING ADDRESS';

                  $radio_array = [
                    'name' => 'type_billing_address',
                    'values' => [
                      'Same as pick-up address',
                      'Same as delivery address',
                      'Enter new  address' => "[\"#billing-address\"]"
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>


              <div id="billing-address" style="display:none;">
                <?php 

                  $header = 'BILLING ADDRESS';

                  $array_of_fields = [
                    'address' => [
                      'label' => '*Address',
                      'name' => 'contact_address',
                      'is_required' => false
                    ],
                    'city' => [
                      'label' => '*City',
                      'name' => 'contact_city',
                      'is_required' => false
                    ],
                    'state' => [
                      'label' => '*State',
                      'name' => 'contact_state',
                      'is_required' => false
                    ],
                    'zip_code' => [
                      'label' => '*Zip Code',
                      'name' => 'contact_zip_code',
                      'is_required' => false
                    ]
                  ];

                  echo row_with_header___group_of_multiple_textInputs____addresses_custom( $row++, $header, $array_of_fields );

                ?>
              </div> 

              <?php// echo row_______________group_of_single___fileInput____attach_file( $row++ ); ?>

              <?php

                $textarea_opt = [
                'name' => 'contact_details',
                'placeholder' => 'Additional Comments',
                ];
              
                echo row_______________group_of_single___textarea____comment_custom( $row++, $textarea_opt );
              ?>

              <?php echo row_______________group_of_single___submitInput____button( $row++ ); ?>

              <?php 
                //quote_form_object will be js global object
                $object = [
                    "gtagFunction" => "function gtagFunction(){".
                                        "console.log('gtag for ".$quote_form_event."');".
                                        "gtag('event', 'Submit-Quote', {'event_category' : 'Free-Estimate', 'event_label' : ".wrap_string_to_quotes_for_html( $quote_form_event )."});".
                                      "}",
                    "formTItle"  => wrap_string_to_quotes_for_html( $quote_form_title ),
                    "formEvent" => wrap_string_to_quotes_for_html( $quote_form_event ),
                    "formAction" => wrap_string_to_quotes_for_html( $quote_form_event .'_Quote' ),
                    "formType"  => wrap_string_to_quotes_for_html($quote_form_type )
                  ];
              
                echo java_script_object_in_tag( $object ); 
                
              ?>

              <?php
                
                $page_loader = [
                  "id" => "wrapper-ajax-loader-full",
                  "class" => "cserv-ajax-ripple",
                  "divs_inside" => 2
                ];

                echo div_______________wrapper_ajax_loader___default( $page_loader );
              ?>

            </form><!-- .cserv_form -->

          </div><!-- .et_pb_section -->

        </div><!-- .et_builder_inner_content -->

      </div> <!-- .entry-content -->

  </article> <!-- .et_pb_post -->

</div> <!-- #main-content -->

<?php 

  $content = [
    "header" => "Thank you for your submission.",
    "message" => "One of C-Serv Project Managers will contact you with the pricing within two business days!"
  ];

  echo section_for_thank_you_message( $content ) 
  
?>

<?php get_footer();?>