<?php /* Template Name: Quote form 3.4.1 */
  
  $quote_form_title = 'FREE LAB FURNITURE<br> SERVICES QUOTE';
  $quote_form_type = "lab_furniture_services_quote";
  $quote_form_event = "Lab_Furniture'";
  $quote_form_number = [
    "dot" => "3.4.1",
    "underscore" => "3_4_1"
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

                  $header = 'NEED LAB FURNITURE INSTALLATION SERVICES?';

                  $types_of_furniture_to_install = [
                    'input_type_laboratory_furniture_installation' => ['label' => 'LABORATORY FURNITURE INSTALLATION', 'placeholder' => 'Describe' ],
                    'input_type_cleanroom_installation' => ['label' => 'CLEANROOM INSTALLATION', 'placeholder' => 'Describe' ],
                    'input_type_chemical_resistant_countertop_installation' => ['label' => 'CHEMICAL RESISTANT COUNTERTOP INSTALLATION', 'placeholder' => 'Describe' ],
                    'input_type_other' => ['label' => 'OTHER', 'placeholder' => 'Describe' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php

                $header = 'Need to move laboratory facilities?';

                $radio_array = [
                  'name' => 'need_move_laboratory_facilities',
                  'values' => [
                    'YES' => "[\"#moving-services\"]",
                    'NO'
                    ]
                ];

                echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array);

              ?>

              <div id="moving-services" style="display:none;">

                <?php 

                    $header = 'TYPE OF MOVING SERVICES NEEDED';

                    $radio_array_with_tooltip = [
                      [
                        'name' => 'moving_services_needed',
                        'label' => 'MOVING TO A NEW LOCATION',
                        'value' => 'MOVING TO A NEW LOCATION',
                        'tooltip' => 'C-Serv’s Standard Moving Plan supplies a labor-only 
                          commercial services team. Additional services, such as RDI,
                          can be requested during quote stage.' 
                      ],
                      [
                        'name' => 'moving_services_needed',
                        'label' => 'MOVING WITHIN CAMPUS',
                        'value' => 'MOVING WITHIN CAMPUS',
                        'tooltip' => 'Our Turnkey Moving Services handles all details for your 
                          in-campus move – to another building, up three flights,
                          or down the hall – so your relocation is painless and smooth.'
                      ],
                    ];

                    echo row_______________group_of_multiple_radioInputs_with_tooltip( $row++, $header, $radio_array_with_tooltip );
                ?>

              </div>

              <?php 
                  
                  $header = 'When would you like to get service?';

                  $radio_array = [
                    'name' => 'when_get_services',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );

                  $radio_item = [
                    'name' => 'when_get_services',
                    'value' => 'Choose the date',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___radioInputs_with_date( $row++, $radio_item );

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

              <?php //echo row_______________group_of_single___fileInput____attach_file( $row++ ); ?>

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

  echo section_for_thank_you_message( $content );
  
?>

<?php get_footer();?>