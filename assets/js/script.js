
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