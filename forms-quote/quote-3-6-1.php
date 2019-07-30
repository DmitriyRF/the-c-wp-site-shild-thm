<?php /* Template Name: Quote form 3.6.1 */
   $row = 0;
?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_3_6_1">


            <?php

              $title = 'FREE HEALTHCARE FURNITURE SERVICES QUOTE';

              echo row_with_title____group_of_single___page_title( $row++, $title);

            ?>

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>

              <input type="hidden" name="quote_form_type" value="healthcare_furniture_services_quote">

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

                  $header = 'NEED HEALTHCARE FURNITURE INSTALLATION SERVICES?';

                  $types_of_furniture_to_install = [
                    'input_type_hospital_room_installation' => ['label' => 'Hospital Room Installation', 'placeholder' => 'Describe...' ],
                    'input_type_medical_laboratory_installation' => ['label' => 'Medical Laboratory Installation', 'placeholder' => 'Describe...' ],
                    'input_type_treatment_area_installation' => ['label' => 'Treatment Area Installation', 'placeholder' => 'Describe...' ],
                    'input_type_other' => ['label' => 'Other', 'placeholder' => 'Describe...' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php 
                  
                  $header = 'Need to move healthcare facilities?';

                  $radio_array = [
                    'name' => 'need_move_healthcare_facilities',
                    'values' => [
                      'YES',
                      'NO'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>

              <?php 
                  
                  $header = 'When would you like to get the service ?';

                  $radio_array = [
                    'name' => 'when_get_service',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );

                  $radio_item = [
                    'name' => 'when_get_service',
                    'value' => 'Choose the date',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___radioInputs_with_date( $row++, $radio_item );

              ?> 

              <?php

                  $header = "Would you like additional service?";

                  $radio_array = [
                    'name' => 'would_you_like_additional_service',
                    'values' => [
                      'Steam Cleaning Service',
                      'Disposal'
                      ]
                  ];

                  $radio_item = [
                    'name' => 'would_you_like_additional_service',
                    'value' => 'Other',
                    'placeholder' => 'Describe the service'
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

                $object = [
                    "gtagFunction" => "function gtagFunction(){ gtag('event', 'Submit-Quote', {'event_category' : 'Free-Estimate', 'event_label' : 'Healthcare'});}",
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