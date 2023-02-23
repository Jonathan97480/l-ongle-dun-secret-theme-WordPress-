<?php
$pathTheme = get_template_directory_uri();
?>
</main>
<footer class="lds-footer">
    <div class="lds-footer__content">
        <img src="<?= $pathTheme . './assets/images/logo_a_longle_dun_secret_n_title.png' ?>" alt="logo a l'ongle dun secret avec titre" width="157" height="161">
        <div class="lds-footer__content__liste">
            <h2>-Navigations-</h2>
            <ul class="lds-header__content__nav__list">
                <li><a href="<?= home_url() ?>">Accueil</a></li>
                <li><a href="#about">À-propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#products">Nos produits </a></li>
                <li><a href="#appointment">Prendre un rendez vous </a></li>
                <li>
                    <?php

                    $customMenu = wp_nav_menu([
                        'theme_location' => "footer-menu",
                        'menu' => 0,
                        'container' => 'ul',
                        'fallback_cb' => false,
                    ]);

                    /* get li in menu */
                    $li = explode('</li>', $customMenu);
                    /* echo li */
                    foreach ($li as $value) {
                        echo $value . '</li>';
                    }

                    ?>
                </li>
            </ul>
        </div>
        <div class="lds-footer__content__liste">
            <h2>-Réseaux sociaux- </h2>
            <span>
                <a href="https://www.facebook.com/Alongledunsecret" target="_blank">
                    <img src="<?= $pathTheme . "./assets/images/logos_facebook.png" ?>" width="30" height="30" alt="Logo facebook">
                    Facebook
                </a>

                <a href="https://www.instagram.com/a_l_ongle_d_un_secret/?igshid=ZDdkNTZiNTM%3D" target="_blank">
                    <img src="<?= $pathTheme . "./assets/images/logo_instagram.svg" ?>" width="30" height="30" alt="Logo instagram">
                    Instagram
                </a>
                <a href="https://tiktok.com/@alongledunsecret" target="_blank">
                    <img src="<?= $pathTheme . "./assets/images/logo_tiktok.webp" ?>" width="30" height="30" alt="Logo tiktok">
                    Tiktok
                </a>
            </span>
        </div>
        <div class="lds-footer__content__liste">
            <h2>-Nous contacter -</h2>
            <span>
                <a href="tel:+336 12 34 56 78">
                    <img src="<?= $pathTheme . "./assets/images/logo_phone.png" ?>" width="30" height="30" alt="Logo téléphone">
                    06 12 34 56 78
                </a>
                <a href="mailto: example@gmail.com">
                    <img src="<?= $pathTheme . "./assets/images/logo_mail.png" ?>" width="30" height="30" alt="Logo mail">
                    example@gmail.com
                </a>
            </span>
        </div>
    </div>
    <span class="lds-footer__copy">© Copyright A l'ongle d'un secret 2023</span>
</footer>
</body>
<?=
wp_footer();
?>

</html>