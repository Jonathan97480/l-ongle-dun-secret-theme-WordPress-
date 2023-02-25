<?php

/**
 * Plugin Name: lds-contact-form
 * Plugin URI: https://www.jon-dev.fr/
 * Description: Test.
 * Version: 0.1
 * Author: Gauvin Jonathan
 * Author URI: https://www.jon-dev.fr/
 **/
/* load script js */

require_once('headerForm.php');
require_once('bodyForm.php');
require_once('footerForm.php');

function lds_GetView()
{
    $lds_from = "<section class='lds-contact' >";
    $lds_from .= lds_GetHeaderForm();
    $lds_from .= lds_GetBodyForm();
    $lds_from .= lds_GetFooterForm();
    $lds_from .= "</section>";
    return $lds_from;
}
add_shortcode('lds-formContact', 'lds_GetView');
