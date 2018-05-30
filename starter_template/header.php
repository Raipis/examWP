<!-- HTML Boilerplate start -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Initializing Header files/attributes and dynamic title from the page -->
    <?php wp_head();  ?>
  <title><?php wp_title(); ?></title>

</head>
<!-- Class Output for easier Debuging -->
<body <?php body_class(); ?>>
  <!-- Navigation and Custom Header Output -->
  <header class="container">
    <?php dynamic_sidebar( 'header-information' );
 ?>
    <nav class="navbar navbar-expand-lg transparent navbar-light font-weight-bold">
      <!-- Site title & Custom Logo initializing -->
      <?php if ( ! has_custom_logo() ) { ?>
<!-- If the Logo isn't an image, output as text  -->
        <?php if ( is_front_page() && is_home() ) : ?>

          <h1 class="navbar-brand"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

        <?php else : ?>

          <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

        <?php endif; ?>


      <?php } else {
//If there is a logo image, output the image as logo
        the_custom_logo();
      } ?>
<!-- Navbar fix initialization  -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'navbar',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'collapsingNavbar',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

      </div>
      <!-- Ordering Button -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>

    </nav>
  </header>
<main>
