<?php /* Template Name: Quote form 2.6.1 */
   $row = 0;
?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_2_6_1">


            <?php

              $title = 'FREE FURNITURE STEAM CLEANING QUOTE';

              echo row_with_title____group_of_single___page_title( $row++, $title);

            ?>

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>

              <input type="hidden" name="quote_form_type" value="furniture_steam_cleaning_quote">

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
                  
                  $header = 'When would you like the furniture assembled?';

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

                $header = 'INSTALLATION ADDRESS';

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

                $object = [
                    "gtagFunction" => "function gtagFunction(){ gtag('event', 'Submit-Quote', {'event_category' : 'Free-Estimate', 'event_label' : 'Furniture-Cleaning'});}",
                  ];
              
                echo java_script_object_in_tag( $object ); 
                
              ?>

              <div id="wrapper-ajax-loader-full">
                <div class="cserv-ajax-ripple">
                  <div></div>
                  <div></div>
                </div>
              </div>

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