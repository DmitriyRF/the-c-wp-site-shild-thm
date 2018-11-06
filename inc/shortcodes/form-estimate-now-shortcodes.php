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

<div class="shortcodes-form-estimate-wrapper">
  <form id="js-form-estimate" class="form-container">
    <div class="form-row">
      <div class="input-group">
        <?php wp_nonce_field('estimate_now_form', 'estimateNonce');?>
      </div>
      <div class="input-group col-50">
        <label for="estimateName">
          <input type="text" class="form-estimate-input" name="estimateName" id="estimateName" placeholder="*Name">
        </label>
      </div>
      <div class="input-group col-50">
        <label for="estimateEmail">
          <input type="email" class="form-estimate-input" name="estimateEmail" id="estimateEmail" placeholder="*Enter">
        </label>
      </div>
      <div class="input-group col-50">
        <label for="estimatePhone">
          <input type="tel" class="form-estimate-input" name="estimatePhone" id="estimatePhone" placeholder="*Phone Number">
        </label>
      </div>
      <div class="input-group col-50">
        <label for="estimateCompany">
          <input type="text" class="form-estimate-input" name="estimateCompany" id="estimateCompany" placeholder="*Company">
        </label>
      </div>
      <div class="textarea-group">
        <label for="estimateDetails">
          <textarea class="form-estimate-textarea" name="estimateDetails" id="estimateDetails" placeholder="*Type service request details"
            rows="3"></textarea>
        </label>
      </div>
      <div class="input-group col-50">
        <label for="estimateFile"><span class="file-attacment-label"><i class="far fa-file-alt"></i> <u>attach
              documents</u></span>
          <input type="file" class="form-estimate-file" name="estimateFile" id="estimateFile" multiple>
        </label>
      </div>
      <div class="input-group col-50">
        <label class="form-estimate-submit">
          <input type="submit" id="submit-estimate" value="Submit for Pricing »">
        </label>
      </div>
    </div>
    <div id='recaptcha' class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI" data-size="invisible"></div>
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