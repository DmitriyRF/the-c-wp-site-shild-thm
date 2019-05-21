<?php

add_shortcode('career_form', 'cservaustin__shortcodes_career_form');

// [career_form foo="foo-value"]
function cservaustin__shortcodes_career_form($atts, $content)
{
    $a = shortcode_atts(array(
        //  'foo' => 'default',
    ), $atts); //"foo = {$a['foo']}"

    ob_start();
    ?>

<div class="shortcodes-form-wrapper shortcodes-career_form">
  <form id="js-career_form" class="form-container">
    <div class="form-row">
      <div class="input-group">
        <?php wp_nonce_field('career_form', 'careerNonce');?>
      </div>
      <div class="input-group col-50">
        <label for="careerName">
          <input type="text" class="form-shortcode-input-text" name="careerName" id="careerName" placeholder="*Name" required>
        </label>
      </div>
      <div class="input-group col-50">
        <label for="careerEmail">
          <input type="email" class="form-shortcode-input-text" name="careerEmail" id="careerEmail" placeholder="*E-mail" required>
        </label>
      </div>
      <div class="input-group col-50">
        <label for="careerPhone">
          <input type="tel" class="form-shortcode-input-text" name="careerPhone" id="careerPhone" placeholder="*Phone Number" required>
        </label>
      </div>
      <div class="input-group col-50">
        <label for="careerInterest">
          <input type="text" class="form-shortcode-input-text" name="careerInterest" id="careerInterest" placeholder="*Areas of Interest" required>
        </label>
      </div>
      <div class="textarea-group">
        <label for="careerDetails">
          <textarea class="form-shortcode-textarea" name="careerDetails" id="careerDetails" placeholder="*Cover Letter"
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
          <input type="submit" id="form-shortcode-submit" value="Apply Now »">
        </label>
      </div>
    </div>

    <?php echo recaptcha_HTML(); ?>
    
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