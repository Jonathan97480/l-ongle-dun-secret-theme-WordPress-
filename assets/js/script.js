
document.addEventListener("DOMContentLoaded", function () {

    const nav=document.querySelector("#nav");
    const burger=document.querySelector("#burger");

    if (burger&&nav) {
        burger.addEventListener("click", function () {
            nav.classList.toggle("lds-header__content-open");
            nav.classList.toggle("lds-header__content-close");
        });
        nav.querySelectorAll("li").forEach(function (li) {
            li.addEventListener("click", function () {
                nav.classList.remove("lds-header__content-open");
                nav.classList.add("lds-header__content-close");
            });
        });
    }





});

$(document).on('ready', function () {

    $(".regular").slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,

        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1110,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 584,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

});