<?php /* Template Name: Quote form 2.6.1 */
  $quote_form_title = 'FREE FURNITURE<br>STEAM CLEANING QUOTE';
  $quote_form_type = "furniture_steam_cleaning_quote";
  $quote_form_event = "Furniture_Cleaning";
  $quote_form_number = [
    "dot" => "2.6.1",
    "underscore" => "2_6_1"
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

                  $header = 'SELECT REQUESTED FURNITURE STEAM CLEANING PROGRAM';

                  $radio_array_with_tooltip = [
                    [
                      'name' => 'requested_furniture_steam_cleaning_program',
                      'label' => 'IN-DEPTH CLEANING PROGRAM',
                      'value' => 'IN-DEPTH CLEANING PROGRAM',
                      'tooltip' => 'We provide a deep steam cleaning of desks, cubicles, chairs, and file cabinets. 
                        This cleaning process requires employees to be away from their workstation area 
                        for a short time as we need to disassemble cubicles when needed. ' 
                    ],
                    [
                      'name' => 'requested_furniture_steam_cleaning_program',
                      'label' => 'CONVENIENT CLEANING PROGRAM',
                      'value' => 'CONVENIENT CLEANING PROGRAM',
                      'tooltip' => 'We provide steam cleaning and sanitization of desk and 
                        file cabinet surfaces without moving any furniture or having any employees leave their workstation area.'
                    ],
                  ];

                  echo row_______________group_of_multiple_radioInputs_with_tooltip( $row++, $header, $radio_array_with_tooltip );
              ?>

              <?php 

                  $header = 'TYPES OF C-SERV CLEANING SERVICES';

                  $types_of_furniture_to_install = [
                    'input_type_cubicle_panel_cleaning' => ['label' => 'CUBICLE PANEL CLEANING', 'placeholder' => 'Add notes...' ],
                    'input_type_upholstery_cleaning' => ['label' => 'UPHOLSTERY CLEANING', 'placeholder' => 'Add notes...' ],
                    'input_type_sanitize_desk_cabinets' => ['label' => 'SANITIZE DESK & CABINETS', 'placeholder' => 'Add notes...' ],
                    'input_type_chair_cleaning' => ['label' => 'CHAIR CLEANING', 'placeholder' => 'Add notes...' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php 
                  
                  $header = 'WHEN WOULD YOU LIKE THE FURNITURE TO BE STEAM CLEANED?';

                  $radio_array = [
                    'name' => 'when_furniture_assembled',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>

              <?php

                  $radio_item = [
                    'name' => 'when_furniture_assembled',
                    'value' => 'Choose the date',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___radioInputs_with_date( $row++, $radio_item );

              ?>  

              <?php

              $header = "SELECT SERVICE FREQUENCY";

              $radio_array = [
                'name' => 'select_service_frequency',
                'values' => [
                  'One-time',
                  'Bi-weekly',
                  'Once a month',
                  'Once a quarter',
                  'Every 6 months',
                  'Once a year'
                  ]
              ];

              $radio_item = [
                'name' => 'select_service_frequency',
                'value' => 'Other',
                'placeholder' => 'Describe frequency'
              ];

              echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );

              echo row_with_header___group_of_single___radioInputs_with_text( $row++, null, $radio_item );

              ?>

              <?php 

                $header = 'SERVICE ADDRESS';

                $array_of_fields = [
                  'address' => [
                    'label' => '*Address',
                    'name' => 'contact_address',
                    'is_required' => true
                  ],
                  'city' => [
                    'label' => '*City',
                    'name' => 'contact_city',
                    'is_required' => true
                  ],
                  'state' => [
                    'label' => '*State',
                    'name' => 'contact_state',
                    'is_required' => true
                  ],
                  'zip_code' => [
                    'label' => '*Zip Code',
                    'name' => 'contact_zip_code',
                    'is_required' => true
                  ]
                ];

                echo row_with_header___group_of_multiple_textInputs____addresses_custom( $row++, $header, $array_of_fields );

              ?>

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