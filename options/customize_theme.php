<?php

add_action('customize_register', function (WP_Customize_Manager $manager) {

    /* Define section social-network */

    $manager->add_section('social-network', [
        'title' => 'Réseaux sociaux',
    ]);

    /* Facebook  */

    $manager->add_setting('facebook', [
        'default' => 'www.facebook.com',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('facebook', [
        'section' => 'social-network',
        'seting' => 'facebook',
        'label' => 'Liens Facebook',
        'type' => 'text',

    ]);

    /* Instagram  */
    $manager->add_setting('instagram', [
        'default' => 'www.instagram.com',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('instagram', [
        'section' => 'social-network',
        'seting' => 'instagram',
        'label' => 'Liens Instagram',
        'type' => 'text',

    ]);
    /* Tiktok */
    $manager->add_setting('tiktok', [
        'default' => 'www.tiktok.com/fr',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('tiktok', [
        'section' => 'social-network',
        'seting' => 'tiktok',
        'label' => 'Liens Tiktok',
        'type' => 'text',

    ]);

    /* Define section social-network */

    $manager->add_section('contact-link', [
        'title' => 'Informations de contact',
    ]);

    /* email */
    $manager->add_setting('email', [
        'default' => 'exemple@gmail.com',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('email', [
        'section' => 'contact-link',
        'seting' => 'email',
        'label' => 'Votre adresse email',
        'type' => 'text',

    ]);

    /* phone */
    $manager->add_setting('phone', [
        'default' => '+3302484546',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('phone', [
        'section' => 'contact-link',
        'seting' => 'phone',
        'label' => 'Votre numéro de téléphone',
        'type' => 'text',

    ]);

    /* Adresse */
    $manager->add_setting('adresse', [
        'default' => '6 rue .......',
        'transport' => 'postMessage'
    ]);


    $manager->add_control('adresse', [
        'section' => 'contact-link',
        'seting' => 'adresse',
        'label' => 'Votre numéro de téléphone',
        'type' => 'text',

    ]);


});



/* add js apparence  */
add_action('customize_preview_init', function () {
    wp_enqueue_script('custom_theme_apparence', get_template_directory_uri() . '/assets/js/theme_customization.js', ['jquery', 'customize-preview'], '', true);
});
