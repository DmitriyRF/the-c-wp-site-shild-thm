<?php /* Template Name: Quote form 3.7.1 */
   $row = 0;
?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_3_7_1">


            <?php

              $title = 'FREE GOVERNMENT CONTRACT SERVICES QUOTE';

              echo row_with_title____group_of_single___page_title( $row++, $title);

            ?>

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>

              <input type="hidden" name="quote_form_type" value="government_contract_services_quote">

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

                  $header = "Do you require any government sales contract?";

                  $radio_array = [
                    'name' => 'require_government_sales_contract',
                    'values' => [
                      'TXMAS',
                      'GSA'
                      ]
                  ];

                  $radio_item = [
                    'name' => 'require_government_sales_contract',
                    'value' => 'Other',
                    'placeholder' => 'Describe the services'
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );

                  echo row_with_header___group_of_single___radioInputs_with_text( $row++, null, $radio_item );

              ?>

              <?php 

                  $header = 'REQUIRED SERVICE TYPE';

                  $radio_array_with_tooltip = [
                    [
                      'name' => 'required_service_type',
                      'label' => 'GOVERNMENT FURNITURE INSTALLATION',
                      'value' => 'GOVERNMENT FURNITURE INSTALLATION',
                      'tooltip' => null
                    ],
                    [
                      'name' => 'required_service_type',
                      'label' => 'GOVERNMENT FACILITIES MOVING',
                      'value' => 'GOVERNMENT FACILITIES MOVING',
                      'tooltip' => null
                    ],
                  ];

                  echo row_______________group_of_multiple_radioInputs_with_tooltip( $row++, $header, $radio_array_with_tooltip );
              ?>


              <?php 

                  $header = 'Types of furniture to install: ';

                  $types_of_furniture_to_install = [
                    'input_type_modular_furniture' => ['label' => 'Modular Furniture', 'placeholder' => 'Describe ( # of units, desks, etc. )' ],
                    'input_type_system_furniture' => ['label' => 'System Furniture', 'placeholder' => 'Describe (the furniture brand, #, etc.)' ],
                    'input_type_cubicles_partition_walls' => ['label' => 'Cubicles and Partition Walls', 'placeholder' => 'Describe ( # of units, desks, etc. )' ],
                    'input_type_conference_room_furniture' => ['label' => 'Conference Room Furniture', 'placeholder' => 'Describe (size of table, brand, etc.)' ],
                    'input_type_casework_lab_furniture' => ['label' => 'Casework or Lab Furniture', 'placeholder' => 'Describe (worksurface material, upper...)' ],
                    'input_type_industrial_worksrations' => ['label' => 'Industrial Workstations', 'placeholder' => 'Describe (# of units, conveyors, etc.)' ],
                    'input_type_srorage_racking_system' => ['label' => 'Storage & Racking Systems', 'placeholder' => 'Describe (# of units, material, type ...)' ],
                    'input_type_seating_systems' => ['label' => 'Seating Systems', 'placeholder' => 'Describe (the furniture brand, #, etc.)' ],
                    'input_type_other' => ['label' => 'Others', 'placeholder' => 'Describe (# of units, material, type ...)' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text(  $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php
                  $header = "Are you able to provide assembly instructions?";

                  $pairs_radioInput_array_with_text = [
                    ['name' => 'provide_assembly_instructions', 'value_only' => 'YES' , 'value_text' => 'NO', 'placeholder' => 'Make and model of the furniture' ],
                  ];

                  echo row_with_header___group_of_multiple_pair_radioInputs_with_text( $row++, $header, $pairs_radioInput_array_with_text );

              ?>

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

              <?php 
                  
                  $header = 'When would you like to move';

                  $radio_array = [
                    'name' => 'when_you_like_move',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );

                  $radio_item = [
                    'name' => 'when_you_like_move',
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

                $object = [
                    "gtagFunction" => "function gtagFunction(){ gtag('event', 'Submit-Quote', {'event_category' : 'Free-Estimate', 'event_label' : 'Government'});}",
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