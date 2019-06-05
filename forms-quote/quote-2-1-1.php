<?php /* Template Name: Quote form 2.1.1 */?>

<?php require_once('groups_for_browser.php'); ?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_2_1_1">

            <div class="et_pb_row row_for_form_title">

              <div class="et_pb_column et_pb_column_4_4 et-last-child">

                <div class="et_pb_module et_pb_text form_title et_pb_bg_layout_dark  et_pb_text_align_center">

                  <div class="et_pb_text_inner">

                    <h1>Free Furniture <br>Installation Quote</h1>

                  </div>

                </div> <!-- .et_pb_text -->

              </div> <!-- .et_pb_column -->

            </div> <!-- .row_for_form_title -->

            <form id="quote_form"  onsubmit="return false" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>
              <input type="hidden" name="quote_form_type" value="furniture_installation">

              <div class="et_pb_row border_top_10 et_pb_equal_columns">

                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text  et_pb_text_align_center">

                    <div class="et_pb_text_inner">

                      <h2 class="form-main-header">Send project details</h2>

                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->

              </div><!-- .et_pb_row -->
              
              <?php 

                  $multiple_inputs = [
                    'contact_name' => ['label' => 'Name', 'placeholder' => '*Name' ],
                    'contact_company' => ['label' => 'Company', 'placeholder' => '*Company' ],
                    'contact_email' => ['label' => 'Email', 'placeholder' => '*Email' ],
                    'contact_phone' => ['label' => 'Phone number', 'placeholder' => '*Phone number' ]
                  ];

                  echo row_with_header___group_of_multiple_textInputs('2', null, $multiple_inputs );

              ?>

              <?php 
                  
                  $header = 'Type of installation service needed: ';

                  echo row_with_header___group_of_single___header( '3', $header );
              ?>

              <?php 

                  $radio_array_with_tooltip = [
                    [
                      'name' => 'installation_service_type',
                      'label' => 'C-SERV TURNKEY INSTALLATION SERVICE',
                      'value' => 'C-SERV TURNKEY INSTALLATION SERVICE',
                      'tooltip' => 'The C-Serv Turnkey Installation Service Plan provides end-to-end project management,
                      including coordinating (and procuring, as necessary) all sub-contractor services for your
                      project. We manage all phases start to finish to ensure you or your client’s full
                      satisfaction.' 
                    ],
                    [
                      'name' => 'installation_service_type',
                      'label' => 'C-SERV STANDARD INSTALLATION SERVICE',
                      'value' => 'C-SERV STANDARD INSTALLATION SERVICE',
                      'tooltip' => 'The C-Serv Standard Installation Service Plan delivers expert installation and furniture
                      assembly services working under your direction. You tell us what you need and when you
                      need it, we’ll provide experienced, expert services.'
                    ],
                  ];

                  echo row_______________group_of_multiple_radioInputs_with_tooltip( '4', $radio_array_with_tooltip );
              ?>
              <?php 

                  $header = 'Types of furniture to install (Select all that applies): ';

                  $types_of_furniture_to_install = [
                    'input_type_modular_furniture' => ['label' => 'Modular Furniture', 'placeholder' => 'Describe ( # of units, desks, etc. )' ],
                    'input_type_system_furniture' => ['label' => 'System Furniture', 'placeholder' => 'Describe (the furniture brand, #, etc.)' ],
                    'input_type_cubicles_partition_walls' => ['label' => 'Cubicles and Partition Walls', 'placeholder' => 'Describe ( # of units, desks, etc. )' ],
                    'input_type_conference_room_furniture' => ['label' => 'Conference Room Furniture', 'placeholder' => 'Describe (size of table, brand, etc.)' ],
                    'input_type_casework_lab_furniture' => ['label' => 'Casework or Lab Furniture', 'placeholder' => 'Describe (worksurface material, upper...)' ],
                    'input_type_industrial_worksrations' => ['label' => 'Industrial Workstations', 'placeholder' => 'Describe (# of units, conveyors, etc.)' ],
                    'input_type_trade_show_setup' => ['label' => 'Trade Show Setup', 'placeholder' => 'Describe (square ft of booth, furniture ...)' ],
                    'input_type_srorage_racking_system' => ['label' => 'Storage & Racking Systems', 'placeholder' => 'Describe (# of units, material, type ...)' ],
                    'input_type_seating_systems' => ['label' => 'Seating Systems', 'placeholder' => 'Describe (the furniture brand, #, etc.)' ],
                    'input_type_other' => ['label' => 'Others', 'placeholder' => 'Describe (# of units, material, type ...)' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( '5', $header, $types_of_furniture_to_install );
              ?>

              <?php
                  $header = "Are you able to provide assembly instructions?";

                  $pairs_radioInput_array_with_text = [
                    ['name' => 'provide_assembly_instructions', 'value_only' => 'YES' , 'value_text' => 'NO' ],
                  ];

                  echo row_with_header___group_of_multiple_pair_radioInputs_with_text( '6', $header, $pairs_radioInput_array_with_text );

              ?>

              <?php 
                  
                  $header = 'Would you like any additional services?';
  
                  $checkbox_array = [
                    'pick_up_and_deliver_furniture'   => 'Pick up and deliver furniture',
                    'disassemble_existing_furniture'  => 'Disassemble existing furniture',
                    'no_additional_service_needed'    => 'No additional service needed',
                    'haul_away_existing_furniture'    => 'Haul away existing furniture' 
                  ];
  
                  echo row_with_header___group_of_multiple_checkboxInputs( '7', $header, $checkbox_array );
  
              ?>

              <?php 

                  $header = null;

                  $types_of_furniture_to_install = [
                    'additional_services_other' => ['label' => 'Other', 'placeholder' => 'Describe the service request' ],
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( '7_1', $header, $types_of_furniture_to_install );
              ?>

              <?php
                  $header = "When would you like the furniture assembled?";

                  $radio_array = [
                    'name' => 'furniture_assembled_date',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( '8', $header, $radio_array );

              ?>

              <?php

                  $dataInputData = [
                    'name' => 'install_date',
                    'label' => 'Choose the date:',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___dateInput____date( '9', $dataInputData );

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

                echo row_with_header___group_of_multiple_checkboxInputs( '9', $header, $checkbox_array );

              ?>

              <?php 

                $header = 'Installation Address:';

                echo row_with_header___group_of_multiple_textInputs____addresses( '10', $header ); 
              ?>

              <?php echo row_______________group_of_single___fileInput____attach_file( '11' ); ?>

              <?php echo row_______________group_of_single___textarea____comment( '12' ); ?>

              <?php echo row_______________group_of_single___submitInput____button( '13' ); ?>


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