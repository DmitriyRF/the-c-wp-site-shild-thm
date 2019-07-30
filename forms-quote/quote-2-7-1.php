<?php /* Template Name: Quote form 2.7.1 */
   $row = 0;
?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_2_7_1">


            <?php

              $title = 'FREE RECYCLE FURNITURE QUOTE';

              echo row_with_title____group_of_single___page_title( $row++, $title);

            ?>

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>

              <input type="hidden" name="quote_form_type" value="recycle_furniture_quote">

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

                $header = 'What would you like to do with your un-needed furniture?';

                $radio_array = [
                  'name' => 'what_do_with_un_needed_furniture',
                  'values' => [
                    'Recycle',
                    'Store',
                    'Sell'
                    ]
                ];

                echo row_with_header___group_of_multiple_radioInputs___one_line_2_from_3( $row++, $header, $radio_array);

              ?>

              <?php 

                  $header = 'SELECT TYPES OF GOODS';

                  $types_of_furniture_to_install = [
                    'input_type_furniture' => ['label' => 'Furniture', 'placeholder' => 'Describe #size of table,desks,etc.' ],
                    'input_type_cubicles_partition_walls' => ['label' => 'Cubicles and Partition Walls', 'placeholder' => 'Describe  #of units,etc.' ],
                    'input_type_seating' => ['label' => 'Seating', 'placeholder' => 'Describe  #of units,etc.' ],
                    'input_type_electronics' => ['label' => 'Electronics', 'placeholder' => 'Describe  #of units,etc.' ],
                    'input_type_other' => ['label' => 'Other', 'placeholder' => 'Describe...' ]
                  ];

                  echo row_with_header___group_of_multiple_checkboxInputs_with_text( $row++, $header, $types_of_furniture_to_install );
              ?>

              <?php 
                  
                  $header = 'How would you like to recycle your goods?';

                  $radio_array = [
                    'name' => 'how_recycle_your_goods',
                    'values' => [
                      'Donate',
                      'Dispose (goes to landfill)'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>

              <?php 
                  
                  $header = 'WHEN WOULD YOU LIKE TO MOVE YOUR FURNITURE?';

                  $radio_array = [
                    'name' => 'when_move_your_furniture',
                    'values' => [
                      'Don’t have a date',
                      'As soon as possible'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( $row++, $header, $radio_array );
  
              ?>

              <?php

                  $radio_item = [
                    'name' => 'when_remove_your_furniture',
                    'value' => 'Choose the date',
                    'placeholder' => 'Pick a date'
                  ];

                  echo row_______________group_of_single___radioInputs_with_date( $row++, $radio_item );

              ?>  



              <?php

                $header = 'HOW LONG DO YOU NEED TO STORE YOUR GOODS?';

                $radio_array = [
                  'name' => 'how_long_store_your_goods',
                  'values' => [
                    'Long Term',
                    'Short Term',
                    'Don\'t Know'
                    ]
                ];

                echo row_with_header___group_of_multiple_radioInputs___one_line_2_from_3( $row++, $header, $radio_array);

              ?>

              <?php

                $header = 'SELECT YOUR STORAGE DATES';

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

                $header = 'PICK-UP ADDRESS';

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
                    "gtagFunction" => "function gtagFunction(){ gtag('event', 'Submit-Quote', {'event_category' : 'Free-Estimate', 'event_label' : 'Furniture-Recycle'});}",
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