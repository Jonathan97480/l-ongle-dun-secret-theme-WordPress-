<?php
$pathTheme = get_template_directory_uri();
?>
<?php
get_header();
?>

<section class="lds-hero">
    <?php echo do_shortcode('[sp_wpcarousel id="5"]'); ?>
</section>
<!-- YOUR CODE HTML  -->
<section class="lds-services">
    <h1>A l'ongle d'un secret</h1> <br>
    <h2 class="lds-services__title lds-title__primary">
        -Nos Services-
    </h2>
    <div class="lds-services__content" id="services">
        <?php

        /* get post type produit */
        $args = [
            'category_name' => 'Service',

        ];

        $query = new WP_Query($args);

        ?>

        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <!-- link open article -->

                <a href="<?= get_the_permalink() ?>">
                    <div class="lds-services__card">
                        <span class="lds-services__card__title">
                            <h3><?= get_the_title() ?></h3>

                        </span>
                        <img class="lds-services__card__pic" src="<?= get_the_post_thumbnail_url() ?>" alt="card service <?= get_the_title() ?>" loading="lazy" width="232" height="244">
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>


    </div>
</section>

<section class="lds-about" id="about">
    <h2 class="lds-about__title lds-title__secondary">-A l'ongle d'un secret-</h2>


    <div class="lds-about__content">
        <img class="lds-about__pic" src="<?= $pathTheme . '/assets/images/nancy-sergoynne.webp' ?>" alt="Nancy Sergoynne photo profile" width="263" height="292" loading="lazy">
        <div class="lds-about__content__info">
            <p id="Text-section1">
                <?= get_theme_mod('Text-section1', " Bienvenue à tous A l'ongle d'un secret Nous sommes un Un institut qui mise sur les produits bio et vegan pour vous apporter le meilleur de la nature.")  ?>

            </p>
            <p id="Text-section2">
                <?= get_theme_mod('Text-section2', "Dans un monde où le temps passe trop vite, venez prendre une pause dans un environnement calme et serein un lieu paisible où tout le monde peut se sentir à l'aise et en harmonie.")  ?>

            </p>
            <div class="lds-about__content__btn">
                <a class="lds-btn lds-btn-primary" href="/beauty/a-longle-dun-secret-notre-histoire">En savoir plus</a>
                <a class="lds-btn lds-btn-primary" href="#appointment">Prendre un rendez-vous </a>
            </div>
        </div>
    </div>
</section>

<section class="lds-products" id="products">

    <h2 class="lds-title__primary">-Nos incontournables-</h2>
    <div class="regular slider">
        <?php

        /* get post type produit */
        $args = array(
            'post_type' => 'produit',
        );

        $query = new WP_Query($args);

        ?>

        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                foreach (get_the_terms(get_the_ID(), 'category') as &$value) {
                    $cat = $value->name;
                }
                ?>
                <a href="<?= get_the_permalink() ?>">
                    <div class="lds-products__card">
                        <img class="lds-products__card__logoApprouve" src="<?= $pathTheme . '/assets/images/logo-vegan-aprouve.png' ?>" width="58" height="68" alt="logo produits vegan a prouve" loading="lazy">
                        <div class="lds-products__card__content">
                            <img class="lds-products__card__content__cover" src="<?= get_the_post_thumbnail_url() ?>" alt="card produit <?= get_the_title() ?>" loading="lazy" width="183" height="183">
                            <div>
                                <h3><?= get_the_title() ?></h3>
                                <p>
                                    <?= get_field('type_de_produit_') ?>
                                </p>
                                <p>
                                    <?= $cat ?>
                                </p>
                            </div>
                        </div>

                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
</section>

<section class="lds-appointment" id="appointment">
    <h2 class="lds-title__secondary">-Prendre rendez-vous- </h2>

    <div class="lds-appointment__content">
        <img class="lds-appointment__content__cover" src="<?= $pathTheme . '/assets/images/Rendez-vous-cover.jpg' ?>" alt="Rendez-vous cover" loading="lazy" width="304" height="202">

        <div class="lds-appointment__content__info">
            <p id="Text-appointment">
                <?= get_theme_mod('Text-appointment', "Nous sommes ravis que vous envisagiez de prendre rendez-vous A l'ongle d'un secret ! Notre institut de beauté propose une large gamme de services de beauté et de bien-être, tous conçus pour vous aider à vous sentir détendu et revitalisé.") ?>
            </p>

            <div>
                <h3>Par numéro téléphone </h3>
                <a href="tel:+<?= get_theme_mod('phone') ?>" title="Téléphonez pour prendre un rendez vous ">
                    <img src="<?= $pathTheme . '/assets/images/icon-phone.svg' ?>" alt="Icon pour numéro Téléphone" loading="lazy" width="40" height="41">
                    <span id="phone"> <?= get_theme_mod('phone') ?></span>
                </a>
            </div>
            <div>
                <h3>Par email</h3>
                <a href="mailto:<?= get_theme_mod('email') ?>" title="Envoyez un mail pour prendre un rendez vous ">
                    <img src="<?= $pathTheme . '/assets/images/icon-email.svg' ?>" alt="Icon pour email" loading="lazy" width="40" height="41">
                    <span id="email"> <?= get_theme_mod('email') ?></span>
                </a>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();
?>