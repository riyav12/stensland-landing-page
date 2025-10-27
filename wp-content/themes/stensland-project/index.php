<?php
/*
Template Name: Landing Page
*/
get_header();
?>

<main id="main-content">
    <?php

    // Output Gutenberg blocks from the editor
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;

    // Example sections — we’ll add them one by one



    ?>
</main>

<?php
get_footer();
?>
