<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header style=" background-image: url('<?php echo get_featured_image_url($post); ?>')">
  <div class="container">
  <div class="main-header"
  <div class="site-branding">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
   </div> 

    <?php wp_nav_menu( array(
      'container' => '<nav>',
      'theme_location' => 'primary'
    )); ?>
  </div>

         <h2><?php the_title(); ?></h2>

  </div> <!-- /.container -->
</header><!--/.header-->

