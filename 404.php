<?php

$pathTheme = get_template_directory_uri();


get_header();
?>
<article class="lds-404">
    <header class="lds-404__header">
        <h1 class="page-title">Page 404</h1>
    </header><!-- .page-header -->

    <div class="lds-404__content">
        <img src="<?= $pathTheme . '/assets/images/404.jpg' ?>" alt="404 image">
        <p>La page que vous recherchez n'existe pas ou plus.</p>
        <p>Vous pouvez retourner à la page d'accueil en cliquant sur le bouton ci-dessous.</p>
        <a href="<?= home_url() ?>" class="lds-btn lds-btn-primary">Retour à l'accueil</a>
    </div><!-- .error-404 -->
</article>
<?php
get_footer();
