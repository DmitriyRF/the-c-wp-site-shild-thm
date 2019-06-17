<?php /* Template Name: Quote form 2.3.1 */
   $row = 0;
?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_2_3_1">


            <?php

              $title = 'Free Workplace <br> Moving Quote';

              echo row_with_title____group_of_single___page_title( $row++, $title);

            ?>

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>

              <input type="hidden" name="quote_form_type" value="moving_quote">

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
                  
                  $header = 'TYPE OF MOVING SERVICES NEEDED: ';

                  echo row_with_header___group_of_single___header( $row++, $header );
              ?>

              <?php 

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

                  echo row_______________group_of_multiple_radioInputs_with_tooltip( $row++, $radio_array_with_tooltip );
              ?>

              <?php 

                  $header = 'Types of SERVICES REQUESTED (Select all that applies): ';

                  $types_of_furniture_to_install = [
                    'input_type_corporate_move' => ['label' => 'CORPORATE MOVE', 'placeholder' => 'Describe' ],
                    'input_type_office_move' => ['label' => 'OFFICE MOVE', 'placeholder' => 'Describe' ],
                    'input_type_government_move' => ['label' => 'GOVERNMENT MOVE', 'placeholder' => 'Describe' ],
                    'input_type_industrial_move' => ['label' => 'INDUSTRIAL MOVE', 'placeholder' => 'Describe' ],
                    'input_type_it_move' => ['label' => 'IT MOVE', 'placeholder' => 'Describe' ],
                    'input_type_lab_medical_equipment_move' => ['label' => 'LAB / MEDICAL EQUIPMENT MOVE', 'placeholder' => 'Describe' ],
                    'input_type_other' => ['label' => 'OTHER', 'placeholder' => 'Describe' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php

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
                  
                  $header = 'Would you like any additional services?';
  
                  $checkbox_array = [
                    'checkbox_lease_end_moving_services'      => 'Lease-end moving services',
                    'checkbox_disassemble_existing_furniture' => 'Disassemble existing furniture',
                    'checkbox_steam_clean_existing_furniture' => 'Steam clean existing furniture',
                    'checkbox_office_layout_design_services'  => 'Office layout design services'
                  ];
  
                  echo row_with_header___group_of_multiple_checkboxInputs( $row++, $header, $checkbox_array );
  
              ?>

              <?php 

                  $header = null;

                  $types_of_furniture_to_install = [
                    'checkbox_other' => ['label' => 'Other', 'placeholder' => 'Describe the service request' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php 
                  
                  $header = 'When would you like to move?';

                  $radio_array = [
                    'name' => 'when_move_happen',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>

              <?php

                  $radio_item = [
                    'name' => 'when_move_happen',
                    'value' => 'Choose the date',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___radioInputs_with_date( $row++, $radio_item );

              ?>     

              <?php 

                $header = 'WHERE ARE YOU MOVING TO?';

                $array_of_fields = [
                  'address' => [
                    'label' => '*Address to...',
                    'name' => 'contact_address_to',
                    'is_required' => true
                  ],
                  'city' => [
                    'label' => '*City',
                    'name' => 'contact_city_to',
                    'is_required' => true
                  ],
                  'state' => [
                    'label' => '*State',
                    'name' => 'contact_state_to',
                    'is_required' => true
                  ],
                  'zip_code' => [
                    'label' => '*Zip Code',
                    'name' => 'contact_zip_code_to',
                    'is_required' => true
                  ]
                ];

                echo row_with_header___group_of_multiple_textInputs____addresses_custom( $row++, $header, $array_of_fields ); 
              ?>

              <?php 

                $header = 'WHERE ARE YOU MOVING FROM?';

                $array_of_fields = [
                  'address' => [
                    'label' => '*Address from...',
                    'name' => 'contact_address_from',
                    'is_required' => true
                  ],
                  'city' => [
                    'label' => '*City',
                    'name' => 'contact_city_from',
                    'is_required' => true
                  ],
                  'state' => [
                    'label' => '*State',
                    'name' => 'contact_state_from',
                    'is_required' => true
                  ],
                  'zip_code' => [
                    'label' => '*Zip Code',
                    'name' => 'contact_zip_code_from',
                    'is_required' => true
                  ]
                ];

                echo row_with_header___group_of_multiple_textInputs____addresses_custom( $row++, $header, $array_of_fields );

              ?>

              <?php echo row_______________group_of_single___fileInput____attach_file( $row++ ); ?>

              <?php echo row_______________group_of_single___textarea____comment( $row++ ); ?>

              <?php echo row_______________group_of_single___submitInput____button( $row++ ); ?>


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

<?php get_footer();?>