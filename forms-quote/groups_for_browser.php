<?php

function row_with_header___group_of_multiple_textInputs( $row_number, $header, $multiple_inputs ) {

    ob_start();

    $count = 0;

      ?>

        <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">

        <?php if( isset( $header ) && !empty( $header )){ ?>

          <div class="et_pb_column et_pb_column_4_4 et-last-child">
            <div class="et_pb_module et_pb_text et_pb_text_align_center">

              <div class="et_pb_text_inner">
                <h3 class="form-header-center"> <?php echo $header; ?></h3>
              </div>

            </div> <!-- .et_pb_text -->
          </div> <!-- .et_pb_column -->

        <?php } ?>

          <?php 
            foreach ($multiple_inputs as $name_for_id => $input_data ){
              ?>
                <div class="et_pb_column et_pb_column_1_2 <?php echo  $count++%2 ? ' et-last-child': '' ?>" >
                  <div class="et_pb_contact">
                    <p class="contact_field">

                      <label 
                        for="<?php echo $name_for_id ?>"
                        class="hidden"
                      ><?php echo $input_data['label'] ?></label>

                      <input 
                        type="text"
                        id="<?php echo $name_for_id ?>"
                        class="input"
                        value=""
                        name="<?php echo $name_for_id ?>"
                        placeholder="<?php echo $input_data['placeholder'] ?>"
                        required
                      >

                    </p> <!-- .contact_field -->
                  </div> <!-- .et_pb_contact -->
                </div> <!-- .et_pb_column -->
              <?php
            }
          ?>

        </div><!-- .et_pb_row_<?php echo $row_number ?> -->

      <?php

    $innerHTML = ob_get_contents();

    ob_end_clean();

    return $innerHTML;
}

function row_with_header___group_of_multiple_textInputs____addresses( $row_number, $header ) {

  ob_start();

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">

        <?php echo __________________group_of_single___header( $header ); ?>

        <div class="et_pb_column et_pb_column_4_4 et-last-child">
          <div class="et_pb_column et_pb_column_1_2 et-last-child">
            <div class="et_pb_contact">
              <p class="contact_field">

                <label for="contact_address" class="hidden">*Address</label>
                <input type="text" id="contact_address" class="input" value="" name="contact_address"
                  placeholder="*Address" required>

              </p>
            </div> <!-- .et_pb_contact -->
          </div><!-- .et_pb_column_1_2 -->
        </div><!-- .et_pb_column_4_4 -->

        <div class="et_pb_column et_pb_column_1_2">
          <div class="et_pb_contact">
            <p class="contact_field">

              <label for="contact_city" class="hidden">*City</label>
              <input type="text" id="contact_city" class="input" value="" name="contact_city"
                placeholder="*City" required>

            </p>
          </div> <!-- .et_pb_contact -->
        </div><!-- .et_pb_column_1_2 -->

        <div class="et_pb_column et_pb_column_1_4">
          <div class="et_pb_contact">
            <p class="contact_field">

              <label for="contact_state" class="input-arrow-down">
                <select id="contact_state" class="select" name="contact_state" placeholder="*State" required>
                  <option value="State">*State</option>
                  <?php echo get_state_options(); ?>
                </select>
              </label>

            </p>
          </div> <!-- .et_pb_contact -->
        </div><!-- .et_pb_column_1_4 -->

        <div class="et_pb_column et_pb_column_1_4 et-last-child">
          <div class="et_pb_contact">
            <p class="contact_field">

              <label for="contact_zip_code" class="hidden">*Zip Code</label>
              <input type="text" id="contact_zip_code" class="input" value="" name="contact_zip_code"
                placeholder="*Zip Code" required>

            </p>
          </div> <!-- .et_pb_contact -->
        </div><!-- .et_pb_column_1_4 -->

      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php


  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_______________group_of_single___fileInput____attach_file( $row_number ) {

  ob_start();

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number; ?> p-y-20">

        <div class="et_pb_column et_pb_column_2_5">
          <div class="input-file-group">
            <label for="contact_files">

              <span class="file-attacment-label">
                <i class="far fa-file-alt"></i>
                <u>attach documents</u>
              </span>
              <input type="file" class="input-file" name="contact_files[]" id="contact_files" multiple="true">

            </label>
          </div><!-- .input-file-group -->
        </div><!-- .et_pb_column -->

        <div class="et_pb_column et_pb_column_3_5 et-last-child">
          <div class="et_pb_module et_pb_text  et_pb_text_align_left">
            <div class="input-file-description">

              <p>
                Please attach any document that will help us with installation quote (such as furniture layout,
                ID&E drawings, etc.)
              </p>

            </div><!-- .input-file-description -->
          </div><!-- .et_pb_module -->
        </div><!-- .et_pb_column -->

      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_______________group_of_single___textarea____comment( $row_number ) {

  ob_start();

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">

        <div class="et_pb_column et_pb_column_4_4 et-last-child">
          <div class="textarea-group">
            <label for="contact_details">

              <textarea class="textarea" name="contact_details" id="contact_details"
                placeholder="Additional Comments" rows="3"></textarea>

            </label> <!-- .contact_details -->
          </div> <!-- .textarea-group -->
        </div> <!-- .et_pb_column -->

      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_______________group_of_single___submitInput____button( $row_number ) {

  ob_start();

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?> last-submit-button-row et_pb_equal_columns">

        <div class="et_pb_column et_pb_column_4_4 et-last-child">
          <div class="submit-button-wrapper">
            <label class="form-quote-submit">

              <input type="submit" id="submit-quote-form" value="Submit for Pricing »">

            </label>
          </div><!-- .submit-button-wrapper -->
        </div><!-- .et_pb_column_4_4 -->

      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_with_header___group_of_multiple_checkboxInputs( $row_number, $header, $checkbox_array ) {

  ob_start();

  $count = 0;

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">

        <?php echo __________________group_of_single___header( $header ); ?>

        <?php 
          foreach ($checkbox_array as $name_for_id => $vlaue ){
            ?>

              <div class="et_pb_column et_pb_column_1_2 <?php echo  $count++%2 ? ' et-last-child': '' ?>">
                <div class="type-checkbox-single-input-group">

                  <input 
                    id="<?php echo $name_for_id; ?>"
                    class="checkbox-type-input"
                    type="checkbox"
                    name="<?php echo $name_for_id; ?>"
                    value="<?php echo $vlaue; ?>" 
                  />

                  <div class="et_pb_column checkbox-self-wrapper">
                    <label class="checkbox-description" for="<?php echo $name_for_id; ?>">
                      <span class="checkbox-square"></span>
                      <span class="checkbox-text"><?php echo $vlaue; ?></span>
                    </label>
                  </div>

                </div><!-- type-checkbox-input-single-group -->
              </div><!-- .et_pb_column -->

            <?php
          }
        ?>
      
      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_with_header___group_of_multiple_checkboxInputs_with_text( $row_number, $header, $types_of_furniture_to_install ) {

  ob_start();

  $count = 0;

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">

        <?php echo __________________group_of_single___header( $header ); ?>

        <?php 
            foreach ($types_of_furniture_to_install as $checkbox_input_group => $types_of_furniture){
              ?>

                <div class="type-checkbox-input-group">

                  <input id="<?php echo $checkbox_input_group; ?>" class="checkbox-type-input" type="checkbox"
                    name="<?php echo $checkbox_input_group; ?>" value="<?php echo $types_of_furniture['label']; ?>"
                    data-text-required="<?php echo $checkbox_input_group; ?>_text"  />

                  <div class="et_pb_column checkbox-self-wrapper">
                    <label class="checkbox-description" for="<?php echo $checkbox_input_group; ?>">
                      <span class="checkbox-square"></span>
                      <span class="checkbox-text"><?php echo $types_of_furniture['label']; ?></span>
                    </label>
                  </div>

                  <div class="et_pb_column et-last-child input-text-wrapper">
                    <input type="text" class="input-for-checkbox"
                      placeholder="<?php echo $types_of_furniture['placeholder']; ?>"
                      name="<?php echo $checkbox_input_group; ?>_text" disabled>
                  </div>

                </div><!-- type-checkbox-input-group -->

              <?php
            }
        ?>
      
      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_with_header___group_of_single___header( $row_number, $header ) {

  ob_start();

    ?>  

      <?php if( isset( $row_number ) && !empty( $row_number )){ ?>

        <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">

           <?php echo __________________group_of_single___header($header); ?>

        </div><!-- .et_pb_row_<?php echo $row_number ?> -->

      <?php } ?>

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function __________________group_of_single___header( $header ) {

  ob_start();

    ?>  

      <?php if( isset( $header ) && !empty( $header )){ ?>

          <div class="et_pb_column et_pb_column_4_4 et-last-child">
            <div class="et_pb_module et_pb_text_align_center">

              <div class="et_pb_text_inner">
                <h3 class="form-header-center"> <?php echo $header; ?> </h3>
              </div>

            </div> <!-- .et_pb_text -->
          </div> <!-- .et_pb_column -->

      <?php } ?>

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_______________group_of_multiple_radioInputs_with_tooltip( $row_number, $radio_array_with_tooltip ) {

  ob_start();

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?>  et_pb_equal_columns">

        <?php 
          foreach ($radio_array_with_tooltip as $radio_data ){
            ?>

              <div class="et_pb_column et_pb_column_1_2 <?php echo  $count++%2 ? ' et-last-child': '' ?>">
                <div class="et_pb_radio_check_tooltips">
                  <label class="radio_check-label">

                    <input class="radio_check-input" type="radio" name="<?php echo $radio_data['name']; ?>" value="<?php echo $radio_data['value']; ?>">

                    <div class="radio_check_tooltip_wrapper">
                      <div class="centralize_content">
                        <button type="button" class="radio_check_checkmark"></button>
                        <span class="radio_check-label_text"><?php echo $radio_data['label']; ?></span>
                        <button type="button" class="radio_check-tooltips"
                          data-tooltip-text="<?php echo empty( $radio_data['tooltip'] ) ? '' : $radio_data['tooltip']; ?>">
                          <span>?</span>
                        </button><!-- .radio_check-tooltips -->
                      </div><!-- .centralize_content -->
                    </div><!-- .radio_check_tooltip_wrapper -->

                  </label><!-- .radio_check-label -->
                </div><!-- .et_pb_radio_check_tooltips -->
              </div><!-- .et_pb_column -->

            <?php
          }
        ?>

      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_with_header___group_of_multiple_pair_radioInputs_with_text( $row_number, $header, $pairs_radioInput_array_with_text ) {

  ob_start();

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">

        <?php echo __________________group_of_single___header( $header ); ?>
        <?php 
          foreach ($pairs_radioInput_array_with_text as $one_pair_radio_data ){
            ?>
              <div class="et_pb_column et_pb_column_1_3">
                <div class="et_pb_radio_check_multiple_choice">
                  <label class="radio_check-label">
                    <input class="radio_check-input" type="radio" name="<?php echo $one_pair_radio_data['name']; ?>" value="<?php echo $one_pair_radio_data['value_only']; ?>">
                    <div class="radio_check_tooltip_wrapper">
                      <div class="centralize_content">
                        <button type="button" class="radio_check_checkmark"></button>
                        <span class="radio_check-label_text"><?php echo $one_pair_radio_data['value_only']; ?></span>
                      </div>
                    </div>
                  </label>
                </div><!-- .et_pb_radio_check_multiple_choice -->
              </div><!-- .et_pb_column_1_3 -->
              <div class="et_pb_column et_pb_column_2_3 et-last-child">
                <div class="et_pb_column et_pb_column_2_5_no_margin">
                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="<?php echo $one_pair_radio_data['name']; ?>"
                        data-text-required="<?php echo $one_pair_radio_data['name']; ?>_text" value="<?php echo $one_pair_radio_data['value_text']; ?>">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text"><?php echo $one_pair_radio_data['value_text']; ?></span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->
                </div><!-- .et_pb_column_2_5_no_margin -->
                <div class="et_pb_column et_pb_column_3_5 et-last-child">

                  <div class="input-text-wrapper-for-multiple-radio">
                    <input type="text" class="input-for-multiple-radio" name="<?php echo $one_pair_radio_data['name']; ?>_text"
                      placeholder="Make and model of the furniture" disabled>
                  </div><!-- .input-text-wrapper-for-multiple-radio -->

                </div><!-- .et_pb_column_3_5 -->
              </div><!-- .et_pb_column_2_3 -->
            <?php
          }
        ?>
      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_with_header___group_of_multiple_radioInputs( $row_number, $header, $radio_array ) {

  ob_start();

  $count = 0;

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">

        <?php echo __________________group_of_single___header( $header ); ?>

        <?php 
          foreach ($radio_array['values'] as $value ){
            ?>

              <div class="et_pb_column et_pb_column_1_2 <?php echo  $count++%2 ? ' et-last-child': '' ?>">
                <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">

                      <input class="radio_check-input" type="radio" name="<?php echo $radio_array['name']; ?>"
                        value="<?php echo $value; ?>">

                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text"><?php echo $value; ?></span>
                        </div>
                      </div>

                    </label><!-- .radio_check-label -->
                </div><!-- .et_pb_radio_check_multiple_choice -->
              </div><!-- .et_pb_column -->

            <?php
          }
        ?>
      
      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

function row_______________group_of_single___dateInput____date( $row_number, $dataInputData ) {

  ob_start();

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number; ?> p-y-20 et_pb_equal_columns">
        
        <div class="et_pb_column et_pb_column_2_5_no_margin">
          <div class="centralize_content_vertical">
            <span class="radio_check-label"><?php echo $dataInputData['label']; ?></span>
          </div>
        </div><!-- .et_pb_column et_pb_column_2_5_no_margin -->

        <div class="et_pb_column et_pb_column_3_5 et-last-child">
          <label class="input-datepicker-wrapper">
            <input type="text" class="input-datepicker-installation" placeholder="<?php echo $dataInputData['placeholder']; ?>"
              name="<?php echo $dataInputData['name']; ?>">
          </label>
        </div><!-- .et_pb_column et_pb_column_3_5 -->

      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

// row_______________group_of_
// row_with_header___group_of_

// single___
// multiple_

// radioInputs_
// checkboxInputs_
// textInputs_
// textInput_
// dateInput_

// with_text
// ___and_text

function row_______________group_of_single_input___default( $row_number ) {

  ob_start();

    ?>  

      <div class="et_pb_row et_pb_row_<?php echo $row_number ?>">


      

      </div><!-- .et_pb_row_<?php echo $row_number ?> -->

    <?php

  $innerHTML = ob_get_contents();

  ob_end_clean();

  return $innerHTML;
}

