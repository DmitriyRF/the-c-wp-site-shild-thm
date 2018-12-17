<?php /* Template Name: Quote form 2.1.1 */?>

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

              <div class="et_pb_row et_pb_row_1">

                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">

                      <h2 class="form-main-header">Send project details</h2>

                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->

              </div><!-- .et_pb_row_1 -->

              <div class="et_pb_row et_pb_row_2">

                <div class="et_pb_column et_pb_column_1_2">

                    <div class="et_pb_contact">

                      <p class="contact_field">
                        <label for="contact_name" class="hidden" >Name</label>
                        <input type="text" id="contact_name" class="input" value="" name="contact_name" placeholder="*Name">
                      </p>

                    </div> <!-- .et_pb_contact -->

                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_contact">

                      <p class="contact_field">
                        <label for="contact_company" class="hidden" >Company</label>
                        <input type="text" id="contact_company" class="input" value="" name="contact_company" placeholder="*Company">
                      </p>

                    </div> <!-- .et_pb_contact -->

                </div>

                <div class="et_pb_column et_pb_column_1_2">

                    <div class="et_pb_contact">

                      <p class="contact_field">
                        <label for="contact_email" class="hidden" >Email</label>
                        <input type="email" id="contact_email" class="input" value="" name="contact_email" placeholder="*Email">
                      </p>

                    </div> <!-- .et_pb_contact -->

                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_contact">

                      <p class="contact_field">
                        <label for="contact_phone" class="hidden" >Phone number</label>
                        <input type="tel" id="contact_phone" class="input" value="" name="contact_phone" placeholder="*Phone numbe">
                      </p>

                    </div> <!-- .et_pb_contact -->

                </div>

              </div><!-- .et_pb_row_2 -->
              <div class="et_pb_row et_pb_row_3">

                <div class="et_pb_column et_pb_column_4_4 et-last-child">

                  <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center">

                    <div class="et_pb_text_inner">

                      <h3 class="form-header-center">Type of installation service needed</h3>

                    </div>

                  </div> <!-- .et_pb_text -->

                </div> <!-- .et_pb_column -->

                <div class="et_pb_column et_pb_column_1_2">

                  <div class="et_pb_radio_check_tooltips">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_service_type" value="TURNKEY" >
                      <div class="radio_check_tooltip_wrapper">
                        <button class="checkmark"></button>
                        <span class="radio_check-label_text">C-SERV TURNKEY INSTALLATION SERVICE</span>
                        <button type="button" class="radio_check-tooltips">
                          <span>?</span>
                          <p class="radio_check-tooltips_text" ></p>
                        </button><!-- .radio_check-tooltips -->
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_tooltips -->
                </div>

                <div class="et_pb_column et_pb_column_1_2 et-last-child">

                  <div class="et_pb_radio_check_tooltips">
                    <label class="radio_check-label">
                      <input class="radio_check-input" type="radio" name="installation_service_type" value="STANDARD" >
                      <div class="radio_check_tooltip_wrapper">
                        <button class="radio_check_checkmark"></button>
                        <span class="radio_check-label_text">C-SERV STANDARD INSTALLATION SERVICE</span>
                        <button type="button" class="radio_check-tooltips">
                          <span>?</span>
                          <p class="radio_check-tooltips_text" ></p>
                        </button><!-- .radio_check-tooltips -->
                      </div>
                    </label>
                  </div><!-- .et_pb_radio_check_tooltips -->

                </div>

              </div><!-- .et_pb_row_3 -->

            </form><!-- .cserv_form_2_1_1 -->

          </div><!-- .et_pb_section -->

        </div><!-- .et_builder_inner_content -->

      </div> <!-- .entry-content -->

  </article> <!-- .et_pb_post -->

</div> <!-- #main-content -->

<?php get_footer();?>