<?php 

function recaptcha_HTML () {

  ob_start();

  ?>

  <div id='recaptcha' class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI" data-size="invisible"></div>

  <?php

    $HTML = ob_get_contents();

    ob_end_clean();

    return $HTML;
}
