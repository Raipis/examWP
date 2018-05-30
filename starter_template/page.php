<?php get_header(); ?>
<main>
<section class="jumbotron-fluid text-center pt-5 spacer">
  <div class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class="mb-4 display-3"><?php the_title();  ?></h1>
    <p class="lead"><?php the_content(); ?></p>
       <?php endwhile; else : ?>

       	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

       <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
