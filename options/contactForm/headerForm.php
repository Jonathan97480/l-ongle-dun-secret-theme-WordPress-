<?php

function lds_GetHeaderForm()
{

    $paragraphe1 = get_theme_mod('Text-headerContact1', 'Bonjour et merci de prendre le temps de nous contacter !');
    $paragraphe2 = get_theme_mod('Text-headerContact2', "A l'ongle d'un secret , nous sommes ravis de pouvoir répondre à toutes vos questions et de vous aider à planifier votre visite dans notre institut de beauté. Nous sommes fiers de notre engagement envers la nature et la santé de nos clients, et nous sommes heureux de partager nos connaissances et notre expertise avec vous.");





    $lds_header = "<div class='lds-contact__header' >
    <p id='Text-headerContact1' >  " . $paragraphe1 . "</p>
    <p id='Text-headerContact2'>" . $paragraphe2 . "</p>
    </div>
    ";
    return $lds_header;
}
