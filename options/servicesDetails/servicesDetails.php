<?php

/**
 * Plugin Name: lds-services-details
 * Plugin URI: https://www.jon-dev.fr/
 * Description: Test.
 * Version: 0.1
 * Author: Gauvin Jonathan
 * Author URI: https://www.jon-dev.fr/
 **/
/* load script js */

function lds_GetServicesDetailsView($atts)
{
    $a = shortcode_atts(array(
        'category' => '',
    ), $atts);

    $category = $a['category'];

    $args = array(
        'post_type' => 'service_',
        'category_name' => $category,
    );



    $listeCard = "<section class='lds-serviceDetails' >";


    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $listeCard .= "<a href='" . get_the_permalink() . "' class='lds-serviceDetails__link' >";
            $listeCard .= "<div class='lds-serviceDetails__card'>";
            $listeCard .= "<div class='lds-serviceDetails__card__title'>";
            $listeCard .= "<h2>" . get_the_title() . "</h2>";
            $listeCard .= "</div>";
            $listeCard .= "<div class='lds-serviceDetails__card__content'>";
            $listeCard .= "<img src='" . get_the_post_thumbnail_url() . "' >";
            $listeCard .= "<div class='lds-serviceDetails__card__content__right' > ";
            $listeCard .= "<p>" . get_field('description') . "</p>";
            $listeCard .= "<div>";
            $listeCard .= "<p>Durée : " . get_field('duree_') . "</p>";
            $listeCard .= "<p>Prix : " . get_field('prix') . "</p>";
            $listeCard .= "</div>";
            $listeCard .= "</div>";
            $listeCard .= "</div>";
            $listeCard .= "</div>";

            $listeCard .= "</a>";
        }
    } else {
        $listeCard = "<p>Il n'y a pas de service dans cette catégorie</p>";
    }
    $listeCard .= "</section>";
    return $listeCard;
}

add_shortcode('lds-services-details', 'lds_GetServicesDetailsView');
