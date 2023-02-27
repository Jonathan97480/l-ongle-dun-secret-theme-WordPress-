<?php


require_once('options/customize_theme.php');
require_once('options/contactForm/contactForm.php');
require_once('options/servicesDetails/servicesDetails.php');


add_action('after_setup_theme', function () {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    /* Ajout du menu */
    add_theme_support('menus');
    register_nav_menu('header-menu', 'En tête du menu');
    register_nav_menu('footer-menu', 'footer menu');

    /* Ajout d'une category personnaliser a l'activation du theme */
    wp_insert_term(
        'services',
        'category',
        array(
            'description' => 'Category services',
            'slug' => 'services'
        )


    );

    wp_insert_term(
        'Masque-capillaire',
        'category',
        array(
            'description' => 'Category Masque capillaire',
            'slug' => 'Masque-capillaire'
        )


    );
});




add_action('wp_enqueue_scripts', function () {

    /* Css */
    wp_register_style('lds-style',  get_template_directory_uri() . '/assets/css/style.css');
    wp_register_style('lds-slick',  get_template_directory_uri() . '/assets/js/slick/slick.css');
    wp_register_style('lds-slick-theme',  get_template_directory_uri() . '/assets/js/slick/slick-theme.css');
    wp_enqueue_style('lds-style');
    wp_enqueue_style('lds-slick');
    wp_enqueue_style('lds-slick-theme');


    /* Scripts */
    wp_register_script('lds-appJs',  get_template_directory_uri() . '/assets/js/script.js', [], false, true);
    wp_register_script('lds-slick-script',  get_template_directory_uri() . '/assets/js/slick/slick.min.js', [], false, true);
    wp_register_script('lds-custom',  get_template_directory_uri() . '/assets/js/theme_customization.js', [], false, true);
    wp_register_script('lds-jquery',  get_template_directory_uri() . '/assets/js/jquery/jquery-2.2.0.min.js', [], false, false);
    wp_enqueue_script('lds-jquery');
    wp_enqueue_script('lds-appJs');
    wp_enqueue_script('lds-slick-script');
    wp_enqueue_script('lds-custom');
});
