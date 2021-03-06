<?php /* Template Name: Quote First Template*/?>


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

            <form id="quote_form" class="cserv_form">

              <?php wp_nonce_field('quote_form', 'estimateNonce');?>
              <input type="hidden" name="quote_form_type" value="installation_form">

              <div class="et_pb_row border_top_10 et_pb_equal_columns">

                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">

                      <h2 class="form-main-header">Send project details</h2>

                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->

              </div><!-- .border_top_10 -->

              <div class="et_pb_row et_pb_row_2">

                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_contact">

                    <p class="contact_field">
                      <label for="contact_name" class="hidden">Name</label>
                      <input type="text" id="contact_name" class="input" value="" name="contact_name"
                        placeholder="*Name" required>
                    </p>

                  </div> <!-- .et_pb_contact -->

                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_contact">

                    <p class="contact_field">
                      <label for="contact_company" class="hidden">Company</label>
                      <input type="text" id="contact_company" class="input" value="" name="contact_company"
                        placeholder="*Company" required>
                    </p>

                  </div> <!-- .et_pb_contact -->

                </div>

                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_contact">

                    <p class="contact_field">
                      <label for="contact_email" class="hidden">Email</label>
                      <input type="email" id="contact_email" class="input" value="" name="contact_email"
                        placeholder="*Email" required>
                    </p>

                  </div> <!-- .et_pb_contact -->

                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_contact">

                    <p class="contact_field">
                      <label for="contact_phone" class="hidden">Phone number</label>
                      <input type="tel" id="contact_phone" class="input" value="" name="contact_phone"
                        placeholder="*Phone numbe" required>
                    </p>

                  </div> <!-- .et_pb_contact -->

                </div>

              </div><!-- .et_pb_row_2 -->

              <div class="et_pb_row et_pb_row_3 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Type of installation service needed</h3>
                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->
              </div><!-- .et_pb_row_3 -->

              <div class="et_pb_row et_pb_row_4 et_pb_equal_columns">

                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_radio_check_tooltips">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_service_type" value="TURNKEY">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">C-SERV TURNKEY INSTALLATION SERVICE</span>
                          <button type="button" class="radio_check-tooltips">
                            <span>?</span>
                            <p class="radio_check-tooltips_text"></p>
                          </button><!-- .radio_check-tooltips -->
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_tooltips -->
                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_radio_check_tooltips">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_service_type" value="STANDARD">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">C-SERV STANDARD INSTALLATION SERVICE</span>
                          <button type="button" class="radio_check-tooltips">
                            <span>?</span>
                            <p class="radio_check-tooltips_text"></p>
                          </button><!-- .radio_check-tooltips -->
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_tooltips -->

                </div>

              </div><!-- .et_pb_row_4 -->

              <div class="et_pb_row et_pb_row_5 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">
                  <div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_center">

                    <div class="et_pb_text_inner">

                      <h3 class="form-header-center">Types of furniture to install (Select all that applies):</h3>

                    </div>

                  </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
              </div><!-- .et_pb_row_5 -->

              <div class="et_pb_row et_pb_row_6 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="type-checkbox-input-group">

                    <input id="input_type_modular_furniture" class="checkbox-type-input" type="checkbox"
                      name="input_type_modular_furniture" value="Modular Furniture" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_modular_furniture">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">Modular Furniture</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox" placeholder="Describe ( # of units, desks, etc. )"
                        name="input_type_modular_furniture_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                  <div class="type-checkbox-input-group">

                    <input id="input_type_system_furniture" class="checkbox-type-input" type="checkbox"
                      name="input_type_system_furniture" value="System Furniture" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_system_furniture">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">System Furniture</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox"
                        placeholder="Describe (the furniture brand, #, etc.)" name="input_type_system_furniture_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                  <div class="type-checkbox-input-group">

                    <input id="input_type_cubicles_partition_walls" class="checkbox-type-input" type="checkbox"
                      name="input_type_cubicles_partition_walls" value="Cubicles and Partition Walls" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_cubicles_partition_walls">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">Cubicles and Partition Walls</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox" placeholder="Describe ( # of units, desks, etc. )"
                        name="input_type_cubicles_partition_walls_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                  <div class="type-checkbox-input-group">

                    <input id="input_type_conference_room_furniture" class="checkbox-type-input" type="checkbox"
                      name="input_type_conference_room_furniture" value="Conference Room Furniture" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_conference_room_furniture">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">Conference Room Furniture</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox" placeholder="Describe (size of table, brand, etc.)"
                        name="input_type_conference_room_furniture_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                  <div class="type-checkbox-input-group">

                    <input id="input_type_casework_lab_furniture" class="checkbox-type-input" type="checkbox"
                      name="input_type_casework_lab_furniture" value="Casework or Lab Furniture" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_casework_lab_furniture">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">Casework or Lab Furniture</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox"
                        placeholder="Describe (worksurface material, upper...)"
                        name="input_type_casework_lab_furniture_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                  <div class="type-checkbox-input-group">

                    <input id="input_type_industrial_worksrations" class="checkbox-type-input" type="checkbox"
                      name="input_type_industrial_worksrations" value="Industrial Workstations" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_industrial_worksrations">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">Industrial Workstations</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox" placeholder="Describe (# of units, conveyors, etc.)"
                        name="input_type_industrial_worksrations_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                  <div class="type-checkbox-input-group">

                    <input id="input_type_trade_show_setup" class="checkbox-type-input" type="checkbox"
                      name="input_type_trade_show_setup" value="Trade Show Setup" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_trade_show_setup">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">Trade Show Setup</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox"
                        placeholder="Describe (square ft of booth, furniture ...)"
                        name="input_type_trade_show_setup_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                  <div class="type-checkbox-input-group">

                    <input id="input_type_srorage_racking_system" class="checkbox-type-input" type="checkbox"
                      name="input_type_srorage_racking_system" value="Storage & Racking Systems" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_srorage_racking_system">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">Storage & Racking Systems</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox"
                        placeholder="Describe (# of units, material, type ...)"
                        name="input_type_srorage_racking_system_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                  <div class="type-checkbox-input-group">

                    <input id="input_type_seating_systems" class="checkbox-type-input" type="checkbox"
                      name="input_type_seating_systems" value="Seating Systems" />

                    <div class="et_pb_column checkbox-self-wrapper">
                      <label class="checkbox-description" for="input_type_seating_systems">
                        <span class="checkbox-square"></span>
                        <span class="checkbox-text">Seating Systems</span>
                      </label>
                    </div>

                    <div class="et_pb_column et-last-child input-text-wrapper">
                      <input type="text" class="input-for-checkbox"
                        placeholder="Describe (the furniture brand, #, etc.)" name="input_type_seating_systems_text">
                    </div>

                  </div><!-- type-checkbox-input-group -->

                </div>
              </div><!-- .et_pb_row_6 -->

              <div class="et_pb_row et_pb_row_7 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">
                  <div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Define the Installation Space:</h3>
                    </div>

                  </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
              </div><!-- .et_pb_row_7 -->

              <div class="et_pb_row et_pb_row_8 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_space" value="OFFICE SPACE">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">OFFICE SPACE</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_space"
                        value="ACTIVE CONSTRUCTION">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">ACTIVE CONSTRUCTION</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div>

              </div><!-- .et_pb_row_8 -->

              <div class="et_pb_row et_pb_row_9 et_pb_equal_columns">

                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_space" value="LABORATORY">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">LABORATORY</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_space"
                        value="INDUSTRIAL FACILITY">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">INDUSTRIAL FACILITY</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div>
              </div><!-- .et_pb_row_9 -->

              <div class="et_pb_row border_top_101 et_pb_equal_columns">

                <div class="et_pb_column et_pb_column_2_5_no_margin">

                  <div class="et_pb_radio_check_multiple_choice">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_space" data-text-required="installation_space_other" value="OTHER">
                      <div class="radio_check_tooltip_wrapper">
                        <div class="centralize_content">
                          <button type="button" class="radio_check_checkmark"></button>
                          <span class="radio_check-label_text">OTHER</span>
                        </div>
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_multiple_choice -->

                </div>

                <div class="et_pb_column et_pb_column_3_5 et-last-child">

                  <div class="input-text-wrapper-for-multiple-radio">
                    <input type="text" class="input-for-multiple-radio" name="installation_space_other"
                      placeholder="Describe the workplace" disabled>
                  </div>

                </div>
              </div><!-- .border_top_101 -->

              <div class="et_pb_row border_top_102 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_4_4 et-last-child">
                  <div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_center">

                    <div class="et_pb_text_inner">
                      <h3 class="form-header-center">Installation Date:</h3>
                    </div>

                  </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
              </div><!-- .border_top_102 -->

              <div class="et_pb_row border_top_103 p-y-5 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_2_5_no_margin">
                  <div class="centralize_content_vertical">
                    <span class="radio_check-label">Install Must Happen By:</span>
                  </div>
                </div>

                <div class="et_pb_column et_pb_column_3_5 et-last-child">
                  <label class="input-datepicker-wrapper">
                    <input type="text" class="input-datepicker-installation" placeholder="Pick a date"
                      name="install_must_happen_by">
                  </label>
                </div>
              </div><!-- .border_top_103 -->

              <div class="et_pb_row border_top_104 p-y-5 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_2_5_no_margin">
                  <div class="centralize_content_vertical">
                    <span class="radio_check-label">Tentative Date:</span>
                  </div>
                </div>

                <div class="et_pb_column et_pb_column_3_5 et-last-child">
                  <label class="input-datepicker-wrapper">
                    <input type="text" class="input-datepicker-installation" placeholder="Pick a date"
                      name="tentative_date">
                  </label>
                </div>
              </div><!-- .border_top_104 -->

              <div class="et_pb_row border_top_105 p-y-5 et_pb_equal_columns">
                <div class="et_pb_column et_pb_column_2_5_no_margin">
                  <div class="centralize_content_vertical">
                    <span class="radio_check-label">Install Cannot Happen Before:</span>
                  </div>
                </div>

                <div class="et_pb_column et_pb_column_3_5 et-last-child">
                  <label class="input-datepicker-wrapper">
                    <input type="text" class="input-datepicker-installation" placeholder="Pick a date"
                      name="install_cannot_happen_before">
                  </label>
                </div>
              </div><!-- .border_top_105 -->

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

            </form><!-- .cserv_form -->

          </div><!-- .et_pb_section -->

        </div><!-- .et_builder_inner_content -->

      </div> <!-- .entry-content -->

  </article> <!-- .et_pb_post -->

</div> <!-- #main-content -->

<?php get_footer();?>