<?php /* Template Name: Quote form 2.2.1 */
  $quote_form_title = 'FREE WORKPLACE <br> RECONFIGURATION QUOTE';
  $quote_form_type = "reconfiguration_quote";
  $quote_form_event = "Workplace_Reconfiguration";
  $quote_form_number = [
    "dot" => "2.2.1",
    "underscore" => "2_2_1"
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

                  $header = 'Types of SERVICES REQUESTED (Select all that applies): ';

                  $types_of_furniture_to_install = [
                    'input_type_move_furniture_within_campus' => ['label' => 'Move Furniture within Campus', 'placeholder' => 'Add Notes' ],
                    'input_type_pick_up_and_deliver_furniture' => ['label' => 'Pick up and Deliver Furniture', 'placeholder' => 'Add Notes' ],
                    'input_type_assemble_install_new_furniture' => ['label' => 'Assemble/Install New Furniture', 'placeholder' => 'Add Notes' ],
                    'input_type_coordinate_with_service_providers' => ['label' => 'Coordinate with Service Providers', 'placeholder' => 'List here (property manager, electrician, etc.)' ],
                    'input_type_disassemble_old_furniture' => ['label' => 'Disassemble Old Furniture', 'placeholder' => 'Add Notes' ],
                    'input_type_haul_away_old_furniture' => ['label' => 'Haul Away Old Furniture', 'placeholder' => 'Add Notes' ],
                    'input_type_store_old_furniture_office_equipment' => ['label' => 'Store Old Furniture & Office Equipment', 'placeholder' => 'Add Notes (long term, short term, etc.)' ],
                    'input_type_help_designing_new_office_layout' => ['label' => 'Help Designing New Office Layout', 'placeholder' => 'Add Notes' ],
                    'input_type_provide_furniture_steam_cleaning' => ['label' => 'Provide Furniture Steam Cleaning', 'placeholder' => 'Add Notes' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php

                // if input_type_assemble_install_new_furniture checked

                $header = 'Is there a freight elevator?';

                $radio_array = [
                  'name' => 'freight_elevator',
                  'values' => [
                    'YES',
                    'NO'
                    ]
                ];

                echo row_with_header___group_of_multiple_radioInputs___one_line_2_from_3( $row++, $header, $radio_array);

              ?>

              <?php
                  $header = "Are you able to provide assembly instructions?";

                  $pairs_radioInput_array_with_text = [
                    ['name' => 'provide_assembly_instructions', 'value_only' => 'YES' , 'value_text' => 'NO', 'placeholder' => 'Make and model of the furniture' ],
                  ];

                  echo row_with_header___group_of_multiple_pair_radioInputs_with_text( $row++, $header, $pairs_radioInput_array_with_text );

              ?>

              <?php 
                  
                  $header = 'When would you like the office reconfiguration happen?';

                  $radio_array = [
                    'name' => 'when_office_reconfiguration_happen',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>

              <?php

                  $radio_item = [
                    'name' => 'when_office_reconfiguration_happen',
                    'value' => 'Choose the date',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___radioInputs_with_date( $row++, $radio_item );

              ?>     

              <?php
                /*
                  $dataInputData = [
                    'name' => 'install_date',
                    'label' => 'Choose the date:',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___dateInput____date( $row++, $dataInputData );
                */
              ?>     

              <?php 
                  
                  $header = 'What is the best time in the day to install the furniture?';
  
                  $checkbox_array = [
                    'time_to_install_early_morning'   => 'Early Morning (before 9am)',
                    'time_to_install_morning'         => 'Morning (9am - 12 pm)',
                    'time_to_install_afternoon'       => 'Afternoon (12pm - 3pm)',
                    'time_to_install_late_afternoon'  => 'Late Afternoon (3pm - 6pm)',
                    'time_to_install_evening'         => 'Evening (after 6pm)',
                    'time_to_install_no_preference'   => 'No preference'
                  ];
  
                  echo row_with_header___group_of_multiple_checkboxInputs( $row++, $header, $checkbox_array );
  
              ?>

              <?php 

                // $header = 'Installation Address:';

                // echo row_with_header___group_of_multiple_textInputs____addresses( $row++, $header ); 
              ?>

              <?php 

                $header = 'Installation Address:';

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

              <?php // echo row_______________group_of_single___fileInput____attach_file( $row++ ); ?>

              <?php //echo row_______________group_of_single___textarea____comment( $row++ ); ?>
              
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