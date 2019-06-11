<?php /* Template Name: Quote Second Template*/?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_background" class="et_pb_section  form_section et_pb_form_section_2_1_1">

            <?php

            $title = 'Free Furniture <br>Installation Quote <br> Second template';

            echo row_with_title____group_of_single___page_title('0', $title);

            ?>

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>
              <input type="hidden" name="quote_form_type" value="quote_second_template">

              <?php

                $main_header = 'Share More Details for<br>an Accurate Project Estimate';

                echo row_with_header___group_of_single___main_header('0', $main_header);

              ?>

              <?php

                $header = 'Is there a loading duck access?';

                $radio_array = [
                  'name' => 'loading_duck_access',
                  'values' => [
                    'YES',
                    'NO'
                    ]
                ];

                echo row_with_header___group_of_multiple_radioInputs___one_line_2_from_3('1', $header, $radio_array);

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

                echo row_with_header___group_of_multiple_radioInputs___one_line_2_from_3('12', $header, $radio_array);

              ?>

              
              <?php
                  $header = "Is the install in";

                  $pairs_radioInput_array_with_text = [
                    ['name' => 'install_in_rooms', 'value_only' => 'ONE ROOM' , 'value_text' => 'MULTIPLE ROOMS', 'placeholder' => '# of rooms' ],
                  ];

                  echo row_with_header___group_of_multiple_pair_radioInputs_with_text( '61', $header, $pairs_radioInput_array_with_text );

              ?>

              <?php
                  $header = "Is there a freight elevator?";

                  $pairs_radioInput_array_with_text = [
                    ['name' => 'freight_elevator', 'value_only' => 'YES' , 'value_text' => 'NO', 'placeholder' => 'freight elevator' ],
                  ];

                  echo row_with_header___group_of_multiple_pair_radioInputs_with_text( '62', $header, $pairs_radioInput_array_with_text );

              ?>
              
              <?php
                  $header = "Do C-Serv installers require any permits<br>or paperwork to enter the
                  facility?";

                  $pairs_radioInput_array_with_text = [
                    ['name' => 'facility_permits_required', 'value_only' => 'NO' , 'value_text' => 'YES', 'placeholder' => 'Describe please' ],
                  ];

                  echo row_with_header___group_of_multiple_pair_radioInputs_with_text( '63', $header, $pairs_radioInput_array_with_text );

              ?>

              <?php
                  $header = "Is there a dumpster at the installation place<br> or we need to haul it
                  off?";

                  $radio_array = [
                    'name' => 'is_there_dumpster',
                    'values' => [
                      'DUMPSTER AVAILABLE',
                      'HAUL IT OFF'
                      ]
                  ];

                  echo row_with_header___group_of_multiple_radioInputs( '7', $header, $radio_array );

              ?>


              <?php
                  $header = "DELIVERY PREFERENCE";

                  $radio_item = [
                    'name' => 'delivery_preference',
                    'value' => 'DURING BUSINESS HOURS',
                    'placeholder' => 'Describe the workplace'
                  ];

                  $radio_array = [
                    'name' => 'delivery_preference',
                    'values' => [
                      'DURING AFTER HOURS',
                      'DURING WEEKEND',
                      'NO PREFERENCE'
                      ]
                  ];

                  echo row_with_header___group_of_single___radioInputs_with_text( '71', $header, $radio_item );

                  echo row_with_header___group_of_multiple_radioInputs( '72', null, $radio_array );

              ?>

              <?php 
                  
                  $header = 'Delivery preference';
  
                  $checkbox_array = [
                    'input_type_system_furniture_1'   => 'System Furniture 1',
                    'input_type_system_furniture_2'  => 'System Furniture 2',
                    'input_type_system_furniture_3'    => 'System Furniture 3',
                    'input_type_system_furniture_4'    => 'System Furniture 4',
                    'input_type_system_furniture_5'    => 'System Furniture 5'
                  ];
  
                  echo row_with_header___group_of_multiple_checkboxInputs( '7', $header, $checkbox_array );
  
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