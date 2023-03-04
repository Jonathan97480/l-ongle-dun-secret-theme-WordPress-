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


    /* Define section About */
    $manager->add_section('About-section', [
        'title' => 'Section à propos',
    ]);

    $manager->add_setting('Text-section1', [
        'default' => "Bienvenue à tous A l'ongle d'un secret Nous sommes un Un institut qui mise sur les produits bio et vegan pour vous apporter le meilleur de la nature.",
        'transport' => 'postMessage'
    ]);

    $manager->add_control('Text-section1', [
        'section' => 'About-section',
        'seting' => 'Text-section1',
        'label' => 'Paragraphe 1 de la section à propos',
        'type' => 'textarea',

    ]);

    $manager->add_setting('Text-section2', [
        'default' => " Dans un monde où le temps passe trop vite, venez prendre une pause dans un environnement calme et serein un lieu paisible où tout le monde peut se sentir à l'aise et en harmonie.",
        'transport' => 'postMessage'
    ]);

    $manager->add_control('Text-section2', [
        'section' => 'About-section',
        'seting' => 'Text-section2',
        'label' => 'Paragraphe 2 de la section à propos',
        'type' => 'textarea',

    ]);

    /* Define section Contact */
    $manager->add_section('page-contact', [
        'title' => 'Page contact',
    ]);
    $manager->add_setting('Text-headerContact1', [
        'default' => " Bonjour et merci de prendre le temps de nous contacter !",
        'transport' => 'postMessage'
    ]);
    $manager->add_control('Text-headerContact1', [
        'section' => 'page-contact',
        'seting' => 'Text-headerContact1',
        'label' => "phrase d’accroche de la section contact",
        'type' => 'textarea',

    ]);
    $manager->add_setting(
        'Text-headerContact2',
        [
            'default' => "A l'ongle d'un secret , nous sommes ravis de pouvoir répondre à toutes vos questions et de vous aider à planifier votre visite dans notre institut de beauté. Nous sommes fiers de notre engagement envers la nature et la santé de nos clients, et nous sommes heureux de partager nos connaissances et notre expertise avec vous.",
            'transport' => 'postMessage'
        ]
    );
    $manager->add_control('Text-headerContact2', [
        'section' => 'page-contact',
        'seting' => 'Text-headerContact2',
        'label' => "phrase d’accroche 2 de la section contact",
        'type' => 'textarea',

    ]);

    /* Define section appointment */
    $manager->add_section('appointment-section', [
        'title' => 'Section Rendez-vous',
    ]);
    $manager->add_setting(
        'Text-appointment',
        [
            'default' => "Nous sommes ravis que vous envisagiez de prendre rendez-vous A l'ongle d'un secret ! Notre institut de beauté propose une large gamme de services de beauté et de bien-être, tous conçus pour vous aider à vous sentir détendu et revitalisé.",
            'transport' => 'postMessage'
        ]
    );
    $manager->add_control('Text-appointment', [
        'section' => 'appointment-section',
        'seting' => 'Text-appointment',
        'label' => "phrase d’accroche de la section rendez-vous",
        'type' => 'textarea',

    ]);
});



/* add js apparence  */
add_action('customize_preview_init', function () {
    wp_enqueue_script('custom_theme_apparence', get_template_directory_uri() . '/assets/js/theme_customization.js', ['jquery', 'customize-preview'], '', true);
});
