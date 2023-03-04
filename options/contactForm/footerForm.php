<?php

function lds_GetFooterForm()
{
    $facebook_url = get_theme_mod('facebook');
    $instagram_url = get_theme_mod('instagram');
    $tiktok_url = get_theme_mod('tiktok');
    $phone = get_theme_mod('phone');
    $email = get_theme_mod('email');

    $pathTheme = get_template_directory_uri();
    $lds_footer = '<div class="lds-contact__footer" >
    <p>Vous pouvez également nous contacter par téléphone au
    <span>
    <img src="' . $pathTheme . '/assets/images/logo_mail.png " width="30" height="30" alt="Logo téléphone" loading="lazy" title="numéro de téléphone">
    <a href="tel:' . $phone . '" >' . $phone . '</a></span> ou par email à l\'adresse:
    <span>
     <img src="' . $pathTheme . '/assets/images/logo_phone.png " width="30" height="30" alt="Logo téléphone" loading="lazy" title="adresse email">
    <a href="mailto:' . $email . '">' . $email . '</a></span></p>
    <div class="lds-contact__footer__reseaux">
            <h2>-Nos Réseaux sociaux- </h2>
            <span>
                <a href="' . $facebook_url . '" target="_blank">
                    <img src="' . $pathTheme . "/assets/images/logos_facebook.png" . '" width="30" height="30" alt="Logo facebook">
                    Facebook
                </a>

                <a href="' . $instagram_url . '" target="_blank">
                    <img src="' . $pathTheme . "/assets/images/logo_instagram.svg" . '" width="30" height="30" alt="Logo instagram">
                    Instagram
                </a>
                <a href="' . $tiktok_url . '" target="_blank">
                    <img src="' . $pathTheme . "/assets/images/logo_tiktok.webp" . '" width="30" height="30" alt="Logo tiktok">
                    Tiktok
                </a>
            </span>
        </div>
    </div>
       ';
    return $lds_footer;
}
