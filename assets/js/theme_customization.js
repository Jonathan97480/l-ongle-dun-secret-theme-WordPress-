
(function ($) {

    /* HERO HOME */
    wp.customize('title_hero_home', (value) => {
        value.bind((newVal) => {
            $('#title_hero_home').text(newVal);
        });
    });

    wp.customize('background_hero_home', (value) => {
        value.bind((newVal) => {
            $('#background_hero_home').attr('src', newVal);
        });
    });
    
     wp.customize('background_image', (value) => {
        value.bind((newVal) => {
            $('#background_image').css('background-image', 'url('+newVal+')');
        });
    });

    /* PRESENTATION */
    wp.customize('text_presentation', (value) => {
        value.bind((newVal) => {
            $('#text_presentation').text(newVal);
        });
    });
    wp.customize('url_img_presentation', (value) => {
        value.bind((newVal) => {
            $('#url_img_presentation').attr('src', newVal);
        });
    });

    /* RESEAUX SOCIAUX */

    /* Reseaux  */
    wp.customize('twitter-link', (value) => {
        value.bind((newVal) => {
            $('#twitter-link').attr('href', newVal);
        });

    });

    wp.customize('instagram-link', (value) => {
        value.bind((newVal) => {
            $('#instagram-link').attr('href', newVal);
        });
    });
    wp.customize('youtube-link', (value) => {
        value.bind((newVal) => {
            $('#youtube-link').attr('href', newVal);
        });
    });

})(jQuery)
