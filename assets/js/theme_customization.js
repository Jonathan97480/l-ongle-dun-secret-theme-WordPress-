
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
    wp.customize('adresse', (value) => {
        value.bind((newVal) => {
            $('#adresse').text(newVal);
        });
    });
    wp.customize('Text-section1', (value) => {
        value.bind((newVal) => {
            $('#Text-section1').text(newVal);
        });
    });
    wp.customize('Text-section2', (value) => {
        value.bind((newVal) => {
            $('#Text-section2').text(newVal);
        });
    });
    wp.customize('Text-appointment', (value) => {
        value.bind((newVal) => {
            $('#Text-appointment').text(newVal);
        });
    });
    wp.customize('Text-headerContact1', (value) => {
        value.bind((newVal) => {
            $('#Text-headerContact1').text(newVal);
        });
    });
    wp.customize('Text-headerContact2', (value) => {
        value.bind((newVal) => {
            $('#Text-headerContact2').text(newVal);
        });
    });


})(jQuery)

