<?php 

function utilite () {

  ob_start();

  ?>

  <?php

    $HTML = ob_get_contents();

    ob_end_clean();

    return $HTML;
}
