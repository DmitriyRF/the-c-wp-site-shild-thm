<?php /* Template Name: Quote Second Template*/?>

<?php get_header();?>

<?php $page_ID = get_queried_object_id();?>

<div id="main-content">

  <article id="form-<?php echo $page_ID; ?>" class="post-<?php echo $page_ID; ?> form">

    <div class="entry-content">

      <div id="et-boc" class="et-boc">

        <div class="et_builder_inner_content et_pb_gutters3">

          <div id="form_page_2_1_1" class="et_pb_section  et_pb_section_0 et_pb_form_section_2_1_1">

            <div class="et_pb_row et_pb_row_0">

              <div class="et_pb_column et_pb_column_4_4 et-last-child">

                <div class="et_pb_module et_pb_text et_pb_text_0 et_pb_bg_layout_dark  et_pb_text_align_center">

                  <div class="et_pb_text_inner">

                    <h1>Free Furniture <br>Installation Quote</h1>

                  </div>

                </div> <!-- .et_pb_text -->

              </div> <!-- .et_pb_column -->

            </div> <!-- .et_pb_row_0 -->

            <form id="quote_form" class="cserv_form_2_1_1">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>
              <input type="hidden" name="quote_form_type" value="quote_second_template">

              <div class="et_pb_row et_pb_row_1 et_pb_equal_columns">

                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">

                      <h2 class="form-main-header">Share More Details for an Accurate Project Estimate</h2>

                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->

              </div><!-- .et_pb_row_1 -->

              <div class="et_pb_row et_pb_row_2">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Is there a loading duck access?</h3>
                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->
                <div class="et_pb_column et_pb_column_1_3">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="loading_duck_access" value="YES">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">YES</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->
                </div>

                <div class="et_pb_column et_pb_column_1_3 et-last-child">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="loading_duck_access" value="NO">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">NO</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div>
              </div><!-- .et_pb_row_2 -->

              <div class="et_pb_row et_pb_row_3">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Is there a freight elevator?</h3>
                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->
                <div class="et_pb_column et_pb_column_1_3">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="freight_elevator" value="YES">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">YES</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->
                </div>

                <div class="et_pb_column et_pb_column_1_3 et-last-child">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="freight_elevator" value="NO">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">NO</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div>
              </div><!-- .et_pb_row_3 -->

              <div class="et_pb_row et_pb_row_4">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Is the install in</h3>
                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->
                <div class="et_pb_column et_pb_column_1_3">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="install_in_rooms" value="ONE ROOM">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">ONE ROOM</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->
                </div>

                <div class="et_pb_column et_pb_column_2_3 et-last-child">

                  <div class="et_pb_column et_pb_column_2_5_no_margin">

                    <div class="et_pb_radio_check_multiple_choice">
                      <label class="radio_check-label">
                        <input class="radio_check-input" type="radio" name="install_in_rooms"
                          data-text-required="install_in_rooms_text" value="MULTIPLE ROOMS">
                        <div class="radio_check_tooltip_wrapper">
                          <div class="centralize_content">
                            <button class="radio_check_checkmark"></button>
                            <span class="radio_check-label_text">MULTIPLE ROOMS:</span>
                          </div>
                        </div>
                      </label>
                    </div><!-- .et_pb_radio_check_multiple_choice -->

                  </div>

                  <div class="et_pb_column et_pb_column_3_5 et-last-child">

                    <div class="input-text-wrapper-for-multiple-radio">
                      <input type="text" class="input-for-multiple-radio" name="install_in_rooms_text"
                        placeholder="# of rooms" disabled>
                    </div>

                  </div>

                </div>
              </div><!-- .et_pb_row_4 -->

              <div class="et_pb_row et_pb_row_5">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Is there a freight elevator?</h3>
                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->
                <div class="et_pb_column et_pb_column_1_3">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="freight_elevator" value="YES">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">YES</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->
                </div>

                <div class="et_pb_column et_pb_column_2_3 et-last-child">

                  <div class="et_pb_column et_pb_column_2_5_no_margin">

                    <div class="et_pb_radio_check_multiple_choice">
                      <label class="radio_check-label">
                        <input class="radio_check-input" type="radio" name="freight_elevator"
                          data-text-required="freight_elevator_text" value="NO">
                        <div class="radio_check_tooltip_wrapper">
                          <div class="centralize_content">
                            <button class="radio_check_checkmark"></button>
                            <span class="radio_check-label_text">NO</span>
                          </div>
                        </div>
                      </label>
                    </div><!-- .et_pb_radio_check_multiple_choice -->

                  </div>

                  <div class="et_pb_column et_pb_column_3_5 et-last-child">

                    <div class="input-text-wrapper-for-multiple-radio">
                      <input type="text" class="input-for-multiple-radio" name="freight_elevator_text"
                        placeholder="freight elevator" disabled>
                    </div>

                  </div>

                </div>
              </div><!-- .et_pb_row_5 -->

              <div class="et_pb_row et_pb_row_6">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Do C-Serv installers require any permits or paperwork to enter the
                        facility?</h3>
                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->
                <div class="et_pb_column et_pb_column_1_3">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="facility_permits_required" value="NO">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">NO</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->
                </div>

                <div class="et_pb_column et_pb_column_2_3 et-last-child">

                  <div class="et_pb_column et_pb_column_2_5_no_margin">

                    <div class="et_pb_radio_check_multiple_choice">
                      <label class="radio_check-label">
                        <input class="radio_check-input" type="radio" name="facility_permits_required"
                          data-text-required="facility_permits_required_text" value="YES">
                        <div class="radio_check_tooltip_wrapper">
                          <div class="centralize_content">
                            <button class="radio_check_checkmark"></button>
                            <span class="radio_check-label_text">YES</span>
                          </div>
                        </div>
                      </label>
                    </div><!-- .et_pb_radio_check_multiple_choice -->

                  </div>

                  <div class="et_pb_column et_pb_column_3_5 et-last-child">

                    <div class="input-text-wrapper-for-multiple-radio">
                      <input type="text" class="input-for-multiple-radio" name="facility_permits_required_text"
                        placeholder="Describe" disabled>
                    </div>

                  </div>

                </div>
              </div><!-- .et_pb_row_6 -->

              <div class="et_pb_row et_pb_row_7">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Is there a dumpster at the installation place or we need to haul it
                        off?</h3>
                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->
                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="is_there_dumpster" value="DUMPSTER AVAILABLE">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">DUMPSTER AVAILABLE</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->
                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="is_there_dumpster" value="HAUL IT OFF">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">HAUL IT OFF</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div>
              </div><!-- .et_pb_row_7 -->


              <div class="et_pb_row et_pb_row_8">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">
                  <div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Delivery preference</h3>
                    </div>

                  </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_column et_pb_column_2_5_no_margin">

                    <div class="et_pb_radio_check_multiple_choice">
                      <label class="radio_check-label">
                        <input class="radio_check-input" type="radio" name="delivery_preference"
                          data-text-required="delivery_preference_text" value="DURING BUSINESS HOURS">
                        <div class="radio_check_tooltip_wrapper">
                          <div class="centralize_content">
                            <button class="radio_check_checkmark"></button>
                            <span class="radio_check-label_text">DURING BUSINESS HOURS:</span>
                          </div>
                        </div>
                      </label>
                    </div><!-- .et_pb_radio_check_multiple_choice -->

                  </div>

                  <div class="et_pb_column et_pb_column_3_5 et-last-child">

                    <div class="input-text-wrapper-for-multiple-radio">
                      <input type="text" class="input-for-multiple-radio" name="delivery_preference_text"
                        placeholder="Describe the workplace" disabled>
                    </div>

                  </div><!-- .et_pb_column -->
                </div><!-- .et_pb_column -->
                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="delivery_preference"
                        value="DURING AFTER HOURS">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">DURING AFTER HOURS</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div><!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="delivery_preference" value="DURING WEEKEND">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">DURING WEEKEND</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div><!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="delivery_preference" value="NO PREFERENCE">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">NO PREFERENCE</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div><!-- .et_pb_column -->

              </div><!-- .et_pb_row_8 -->

              <div class="et_pb_row et_pb_row_8_2">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">
                  <div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Delivery preference</h3>
                    </div>

                  </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_1_2">

                  <div class="type-checkbox-single-input-group">
                    <input id="input_type_system_furniture_1" class="checkbox-type-input" type="checkbox"
                      name="input_type_system_furniture_1" value="System Furniture" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_system_furniture_1">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">System Furniture 1</span>
                      </label>
                    </div>

                  </div><!-- type-checkbox-input-single-group -->

                </div><!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                <div class="type-checkbox-single-input-group">
                    <input id="input_type_system_furniture_2" class="checkbox-type-input" type="checkbox"
                      name="input_type_system_furniture_2" value="System Furniture" />

                    <div class="et_pb_column checkbox-self-wrapper ">
                      <label class="checkbox-description" for="input_type_system_furniture_2">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">System Furniture 2</span>
                      </label>
                    </div>

                  </div><!-- type-checkbox-input-single-group -->

                </div><!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_1_2">
                <div class="type-checkbox-single-input-group">
                    <input id="input_type_system_furniture_3" class="checkbox-type-input" type="checkbox"
                      name="input_type_system_furniture_3" value="System Furniture" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_system_furniture_3">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">System Furniture 3</span>
                      </label>
                    </div>

                  </div><!-- type-checkbox-input-single-group -->

                </div><!-- .et_pb_column -->

              </div><!-- .et_pb_row_8_2 -->


              <div class="et_pb_row et_pb_row_9">

                <div class="et_pb_column et_pb_column_4_4 et-last-child">
                  <div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Installation Address:</h3>
                    </div>

                  </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_column et_pb_column_1_2 et-last-child">

                    <div class="et_pb_contact">

                      <p class="contact_field">
                        <label for="contact_address" class="hidden">*Address</label>
                        <input type="text" id="contact_address" class="input" value="" name="contact_address"
                          placeholder="*Address" required>
                      </p>

                    </div> <!-- .et_pb_contact -->

                  </div><!-- .et_pb_column -->

                </div><!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_contact">

                    <p class="contact_field">
                      <label for="contact_city" class="hidden">*City</label>
                      <input type="text" id="contact_city" class="input" value="" name="contact_city"
                        placeholder="*City" required>
                    </p>

                  </div> <!-- .et_pb_contact -->

                </div><!-- .et_pb_column -->

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

                </div><!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_1_4 et-last-child">

                  <div class="et_pb_contact">

                    <p class="contact_field">
                      <label for="contact_zip_code" class="hidden">*Zip Code</label>
                      <input type="text" id="contact_zip_code" class="input" value="" name="contact_zip_code"
                        placeholder="*Zip Code" required>
                    </p>

                  </div> <!-- .et_pb_contact -->

                </div><!-- .et_pb_column -->

              </div><!-- .et_pb_row_9 -->

              <div class="et_pb_row et_pb_row_10 p-y-20">

                <div class="et_pb_column et_pb_column_2_5">

                  <div class="input-file-group">

                    <label for="contact_files">

                      <span class="file-attacment-label">
                        <i class="far fa-file-alt"></i>
                        <u>attach documents</u>
                      </span>
                      <input type="file" class="input-file" name="contact_files[]" id="contact_files" multiple="true">

                    </label>

                  </div>

                </div><!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_3_5 et-last-child">
                  <div class="et_pb_module et_pb_text  et_pb_text_align_left">
                    <div class="input-file-description">

                      <p>
                        Please attach any document that will help us with installation quote (such as furniture layout,
                        ID&E drawings, etc.)
                      </p>

                    </div>
                  </div>
                </div><!-- .et_pb_column -->

              </div><!-- .et_pb_row_10 -->


              <div class="et_pb_row et_pb_row_11">

                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="textarea-group">

                    <label for="contact_details">

                      <textarea class="textarea" name="contact_details" id="contact_details"
                        placeholder="Additional Comments" rows="3"></textarea>

                    </label>

                  </div>

                </div> <!-- .et_pb_column -->

              </div><!-- .et_pb_row_11 -->

              <div class="et_pb_row et_pb_row_99 last-submit-button-row et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">
                  <div class="submit-button-wrapper">
                    <label class="form-quote-submit">
                      <input type="submit" id="submit-quote-form" value="Submit for Pricing »">
                    </label>
                  </div>
                </div>
              </div><!-- .et_pb_row_99 -->

              <div id="wrapper-ajax-loader-full">
                <div class="cserv-ajax-ripple">
                  <div></div>
                  <div></div>
                </div>
              </div>

            </form><!-- .cserv_form_2_1_1 -->

          </div><!-- .et_pb_section -->

        </div><!-- .et_builder_inner_content -->

      </div> <!-- .entry-content -->

  </article> <!-- .et_pb_post -->

</div> <!-- #main-content -->

<?php get_footer();?>