<?php
function lds_GetBodyForm()
{
    $pathTheme = get_template_directory_uri();

    $lds_body = "<div class='lds-contact__body ajax' >
    
    <img src='" . $pathTheme . "./assets/images/contact-cover.png" . " '  />" . do_shortcode('[contact-form-7 id="43" title="Formulaire de contact 1"]') . "
    

</div> ";

    return $lds_body;
}
