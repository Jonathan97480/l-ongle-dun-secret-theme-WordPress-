<?php

get_header();
?>

<?php
/* Start the Loop */
while (have_posts()) :
    the_post();
?>
    <article class="lds-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <h1 class="lds-article__title"><?= the_title()  ?> </h1>


        <div class="lds-article__content">
            <?php the_content() ?>
        </div>

    </article><!-- #post-<?php the_ID(); ?> -->
<?php

endwhile; // End of the loop.
?>

<?php
get_footer();

?>