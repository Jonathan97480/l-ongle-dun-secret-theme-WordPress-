
(function ($) {

    /* HERO HOME */
    wp.customize('email', (value) => {
        value.bind((newVal) => {
            $('#email').text(newVal);
        });
    });

    wp.customize('phone', (value) => {
        value.bind((newVal) => {
            $('#phone').text(newVal);
        });
    });





})(jQuery)

