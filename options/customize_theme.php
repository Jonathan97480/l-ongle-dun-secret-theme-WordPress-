<?php

add_action('customize_register', function (WP_Customize_Manager $manager) {

    /* Define section */

    /*   $manager->add_section('hero-home', [
        'title' => 'Hero Home',
    ]);
 */
    /* title home  */
    /*    $manager->add_setting('title_hero_home', [
        'default' => 'VOYAGER MALIN',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('title_hero_home', [
        'section' => 'hero-home',
        'seting' => 'title_hero_home',
        'label' => 'Titre de la Section Hero Home',
        'type' => 'text',

    ]);
 */
    /* home Background */
           /* add ooption change background image  */
    /* $manager->add_setting('background_image', [
        'default' => get_template_directory_uri() . '/assets/img/hero-home.jpg',
        'transport' => 'postMessage'
    ]);

    $manager->add_control(new WP_Customize_Image_Control($manager, 'background_image', [
        'label' => 'Image de fond',
        'section' => 'hero-home',
        'settings' => 'background_image',
    ])); */
});



/* add js apparence  */
add_action('customize_preview_init', function () {
    wp_enqueue_script('custom_theme_apparence', get_template_directory_uri() . '/assets/js/theme_customization.js', ['jquery', 'customize-preview'], '', true);
});
