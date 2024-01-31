<?php
    //Template Name: 共通
    get_header();
?>

<?php remove_filter ('the_content', 'wpautop'); ?>
<?php the_content(); ?>


<?php get_footer(); ?>