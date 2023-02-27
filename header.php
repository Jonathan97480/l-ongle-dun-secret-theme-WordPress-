<?php
$pathTheme = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= get_bloginfo('description') ?>">
    <meta name="keywords" content="<?= get_theme_mod('keywords') ?>">
    <meta name="title" content="<?= get_bloginfo('name') ?>">
    <meta name="author" content="Gauvin Jonathan">
    <meta name="robots" content="index, follow">
    <meta name="image" content="<?= $pathTheme . "/assets/images/logo_a_longle_dun_secret_n_title.png" ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@jonathanfrt9741">
    <meta name="twitter:title" content="<?= get_bloginfo('name') ?>">
    <meta name="twitter:description" content="<?= get_bloginfo('description') ?>">
    <meta name="twitter:image" content="<?= $pathTheme . "/assets/images/logo_a_longle_dun_secret_n_title.png" ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= get_bloginfo('name') ?>">
    <meta property="og:description" content="<?= get_bloginfo('description') ?>">
    <meta property="og:image" content="<?= $pathTheme . "/assets/images/logo_a_longle_dun_secret_n_title.png" ?>">
    <meta property="og:url" content="<?= home_url() ?>">
    <meta property="og:site_name" content="<?= get_bloginfo('name') ?>">
    <meta property="og:locale" content="fr_FR">
    <meta name="googlebot" content="index, follow">

    <script type="text/javascript">
        const wp_curentUrl = '<?= home_url($wp->request); ?>';
    </script>

    <?= wp_head() ?>
    <title><?= get_bloginfo('name') ?></title>

</head>

<body>

    <header class="lds-header">
        <div id="burger" class="lds-header__hamburger">
            <img src="<?= $pathTheme . '/assets/images/icons_hamburger-menu.svg' ?>" width="50" height="50" alt="icon hamburger">
        </div>

        <div id="nav" class="lds-header__content lds-header__content-close">

            <a class="lds-header__content__logoLink" href="<?= home_url() ?>">
                <img class="lds-header__content__logoLink__pic" src="<?= $pathTheme . "/assets/images/logo_a_longle_dun_secret_n_20230219_124822_0000.webp" ?>" width="41" height="60" alt="Logo a l’ongle dun secret">
            </a>
            <nav class="lds-header__content__nav">
                <ul class="lds-header__content__nav__list">
                    <li><a href="<?= home_url() ?>">Accueil</a></li>
                    <li><a href="<?= home_url() . '/#about' ?>">À-propos</a></li>
                    <li><a href="<?= home_url() . '/#services' ?>">Services</a></li>
                    <li><a href="<?= home_url() . '/#products' ?>">Nos produits </a></li>
                    <li><a href="<?= home_url() . '/#appointment' ?>">Prendre un rendez vous </a></li>

                    <li>
                        <?php

                        $customMenu = wp_nav_menu([
                            'theme_location' => "header-menu",
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
            </nav>

            <div class="lds-header__content__reseaux">

                <a href="<?= get_theme_mod('facebook') ?>" target="_blank">
                    <img src="<?= $pathTheme . "/assets/images/logos_facebook.png" ?>" width="30" height="30" alt="Logo facebook">
                </a>
                <a href="<?= get_theme_mod('instagram') ?>" target="_blank">
                    <img src="<?= $pathTheme . "/assets/images/logo_instagram.svg" ?>" width="30" height="30" alt="Logo instagram">
                </a>
                <a href="<?= get_theme_mod('tiktok') ?>" target="_blank">
                    <img src="<?= $pathTheme . "/assets/images/logo_tiktok.webp" ?>" width="30" height="30" alt="Logo tiktok">
                </a>
            </div>
        </div>



    </header>

    <main>