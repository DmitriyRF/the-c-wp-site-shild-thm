<?php

add_shortcode('form_estimate', 'cservaustin__shortcodes_form_estimate');

// [form_estimate foo="foo-value"]
function cservaustin__shortcodes_form_estimate($atts, $content)
{
    $a = shortcode_atts(array(
        //  'foo' => 'default',
    ), $atts); //"foo = {$a['foo']}"

    ob_start();
    ?>

<div class=" shortcodes-form-wrapper shortcodes-estimate_now_form">
  <form id="js-estimate_now_form" class="form-container">
    <div class="form-row">
      <div class="input-group">
        <?php wp_nonce_field('estimate_now_form', 'estimateNonce');?>
      </div>
      <div class="input-group col-50">
        <label for="estimateName">
          <input type="text" class="form-shortcode-input-text" name="estimateName" id="estimateName" placeholder="*Name" required>
        </label>
      </div>
      <div class="input-group col-50">
        <label for="estimateEmail">
          <input type="email" class="form-shortcode-input-text" name="estimateEmail" id="estimateEmail" placeholder="*E-mail" required>
        </label>
      </div>
      <div class="input-group col-50">
        <label for="estimatePhone">
          <input type="tel" class="form-shortcode-input-text" name="estimatePhone" id="estimatePhone" placeholder="*Phone Number" required>
        </label>
      </div>
      <div class="input-group col-50">
        <label for="estimateCompany">
          <input type="text" class="form-shortcode-input-text" name="estimateCompany" id="estimateCompany" placeholder="*Company" required>
        </label>
      </div>
      <div class="textarea-group">
        <label for="estimateDetails">
          <textarea class="form-shortcode-textarea" name="estimateDetails" id="estimateDetails" placeholder="*Type service request details"
            rows="3" required></textarea>
        </label>
      </div>
      <div class="input-group col-50">

        <!-- <label for="shortcodeFormFile"><span class="file-attacment-label"><i class="far fa-file-alt"></i> <u>attach
              documents</u></span>
          <input type="file" class="form-shortcode-file" name="shortcodeFormFile[]" id="shortcodeFormFile" multiple>
        </label> -->

      </div>
      <div class="input-group col-50">
        <label class="form-shortcode-submit">
          <input type="submit" id="form-shortcode-submit" value="Submit for Pricing »">
        </label>
      </div>
    </div>


    <div id="wrapper-ajax-loader">
      <div class="cserv-ajax-ripple">
        <div></div>
        <div></div>
      </div>
    </div>
  </form>
</div>

<?php

    $innerHTML = ob_get_contents();

    ob_end_clean();

    return $innerHTML;
}