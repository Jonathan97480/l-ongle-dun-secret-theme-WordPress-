<?php
$pathTheme = get_template_directory_uri();
?>
</main>
<footer class="lds-footer">
    <div class="lds-footer__content">
        <img src="<?= $pathTheme . '/assets/images/logo_a_longle_dun_secret_n_title.png' ?>" alt="logo a l'ongle dun secret avec titre" width="157" height="161" loading="lazy">
        <div class="lds-footer__content__liste">
            <h2>Navigations</h2>
            <ul class="lds-header__content__nav__list">
                <li><a href="<?= home_url() ?>">Accueil</a></li>
                <li><a href="<?= home_url() . '/#about' ?>">À-propos</a></li>
                <li><a href="<?= home_url() . '/#services' ?>">Services</a></li>
                <li><a href="<?= home_url() . '/#products' ?>">Nos produits </a></li>
                <li><a href="<?= home_url() . '/#appointment' ?>">Prendre un rendez vous </a></li>
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
            <h2>Réseaux sociaux</h2>
            <span>
                <a href="<?= get_theme_mod('facebook') ?>" target="_blank">
                    <img src="<?= $pathTheme . "/assets/images/logos_facebook.png" ?>" width="30" height="30" alt="Logo facebook" loading="lazy" title="Logo facebook">
                    Facebook
                </a>

                <a href="<?= get_theme_mod('instagram') ?>" target="_blank" title="Logo instagram">
                    <img src="<?= $pathTheme . "/assets/images/logo_instagram.svg" ?>" width="30" height="30" alt="Logo instagram" loading="lazy">
                    Instagram
                </a>
                <a href="<?= get_theme_mod('tiktok') ?>" target="_blank" title="Logo tiktok">
                    <img src="<?= $pathTheme . "/assets/images/logo_tiktok.webp" ?>" width="30" height="30" alt="Logo tiktok" loading="lazy">
                    Tiktok
                </a>
            </span>
        </div>
        <div class="lds-footer__content__liste">
            <h2>Nous contacter</h2>
            <span>
                <a href="tel:+<?= get_theme_mod('phone') ?>">
                    <img src="<?= $pathTheme . "/assets/images/logo_phone.png" ?>" width="30" height="30" alt="Logo téléphone" loading="lazy" title="numéro de téléphone">
                    <span id="phone"> <?= get_theme_mod('phone') ?></span>
                </a>
                <a href="mailto:<?= get_theme_mod('email') ?>">
                    <img src="<?= $pathTheme . "/assets/images/logo_mail.png" ?>" width="30" height="30" alt="Logo mail" loading="lazy" title="adresse email">
                    <span id="email"> <?= get_theme_mod('email') ?></span>
                </a>
                <a href="http://maps.google.com/?q=<?= get_theme_mod('adresse') ?>" target="_blank">
                    <img src="<?= $pathTheme . "/assets/images/address-marker.svg" ?>" width="30" height="30" alt="Logo mail" loading="lazy" title="adresse postal">
                    <span id="adresse"><?= get_theme_mod('adresse') ?></span>
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