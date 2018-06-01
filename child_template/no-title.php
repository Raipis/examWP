<?php /* Template Name: Without title in the thing*/ ?>
<!-- template to output content without post-title -->
<?php get_header(); ?>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <?php the_content(); ?>

       <?php endwhile; else : ?>

       <?php endif; ?>

<?php get_footer(); ?>
