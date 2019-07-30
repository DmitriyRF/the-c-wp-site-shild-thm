<?php /* Template Name: Quote form 2.5.1 */
   $row = 0;
?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_2_5_1">


            <?php

              $title = 'FREE FURNITURE PROJECT MANAGEMENT QUOTE';

              echo row_with_title____group_of_single___page_title( $row++, $title);

            ?>

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>

              <input type="hidden" name="quote_form_type" value="furniture_project_management_quote">

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

                  $header = 'SELECT REQUESTED FURNITURE SERVICE SCOPE';

                  $radio_array_with_tooltip = [
                    [
                      'name' => 'requested_furniture_service',
                      'label' => 'TURNKEY PROJECT MANAGEMENT SERVICES',
                      'value' => 'TURNKEY PROJECT MANAGEMENT SERVICES',
                      'tooltip' => 'We take care of all the details and coordination so you can appreciate 
                        a stress-free workplace transformation experience.' 
                    ],
                    [
                      'name' => 'requested_furniture_service',
                      'label' => 'STANDARD FURNITURE SERVICES',
                      'value' => 'STANDARD FURNITURE SERVICES',
                      'tooltip' => 'We serve as your commercial furniture service team working with your project manager, 
                        project transition team or contractor. Tell us what you need and when you need it.'
                    ],
                  ];

                  echo row_______________group_of_multiple_radioInputs_with_tooltip( $row++, $header, $radio_array_with_tooltip );
              ?>


              <?php 

                  $header = 'SELECT TYPES OF FURNITURE SERVICES SCOPE';

                  $types_of_furniture_to_install = [
                    'input_type_site_visit' => [
                          'label' => 'SITE VISIT', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We conduct a survey to determine your needs and timeline.' 
                    ],
                    'input_type_risk_management_plan' => [
                          'label' => 'RISK MANAGEMENT & PLAN', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We list all the project details and risks.' 
                    ],
                    'input_type_space_planning' => [
                          'label' => 'SPACE PLANNING', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We can create new layouts and seating charts.' 
                    ],
                    'input_type_coordination' => [
                          'label' => 'COORDINATION', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We coordinate with your vendors including property managers, interior designers, and service professionals such as electricians, data and cable installers, painters, plumbing and flooring specialists.' 
                    ],
                    'input_type_scheduling' => [
                          'label' => 'SCHEDULING', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We schedule and manage all necessary tasks and proactively communicate throughout the process.' 
                    ],
                    'input_type_pre_moving_plan' => [
                          'label' => 'PRE-MOVING PLAN', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'Give instructions to your employees on how to use crates and properly label boxes.' 
                    ],
                    'input_type_logistic_and_storage' => [
                          'label' => 'LOGISTIC AND STORAGE', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We load, transport, unload, and store your furniture and other office equipments.' 
                    ],
                    'input_type_receive' => [
                          'label' => 'RECEIVE', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We accept your shipments, verify paperwork accuracy, tag and store at the C-Serv warehouse.' 
                    ],
                    'input_type_inspect' => [
                          'label' => 'INSPECT', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We unwrap and visually inspect received shipments for damaged or missing parts.' 
                    ],
                    'input_type_deliver' => [
                          'label' => 'DELIVER', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We deliver your stored goods from the C-Serv warehouse to the project site.' 
                    ],
                    'input_type_install' => [
                          'label' => 'INSTALL', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We install the furniture at the project site.' 
                    ],
                    'input_type_reconfiguration' => [
                          'label' => 'RECONFIGURATION', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We can reconfigure to adjust the layout and orientation of the office space (including cubicles, chairs, filing cabinets, etc.).' 
                    ],
                    'input_type_move_date_availability' => [
                          'label' => 'MOVE DATE AVAILABILITY', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We provide a C-Serv team member at your workplace on the move day to address any moving related questions.' 
                    ],
                    'input_type_recycling_furniture' => [
                          'label' => 'RECYCLING FURNITURE', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We can dispose of un-needed furniture.' 
                    ],
                    'input_type_office_furniture_cleaning_sanitization' => [
                          'label' => 'OFFICE FURNITURE CLEANING AND SANITIZATION', 
                          'placeholder' => 'Add your notes...' ,
                          'note' => 'We can steam clean cubicle panels and chairs, plus sanitize desk surfaces and file cabinets.' 
                    ],
                    'input_type_end_of_lease_services' => [
                          'label' => 'END OF LEASE SERVICES', 
                          'placeholder' => 'Add your notes...',
                          'note' => 'We can help you avoid paying end of lease penalties or fees that might be required in the lease agreement at your old office.'
                    ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php 
                  
                  $header = 'When would you like to start furniture project management?';

                  $radio_array = [
                    'name' => 'start_furniture_project_managemen',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>
              <?php

                  $radio_item = [
                    'name' => 'start_furniture_project_managemen',
                    'value' => 'Choose the date',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___radioInputs_with_date( $row++, $radio_item );

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
                    "gtagFunction" => "function gtagFunction(){ gtag('event', 'Submit-Quote', {'event_category' : 'Free-Estimate', 'event_label' : 'Furniture-Project-Management'});}",
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