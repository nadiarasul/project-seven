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
  <?php if (is_page()) { ?>
    <header style="background-image: linear-gradient(360deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url('<?php echo get_featured_image_url($post); ?>') ">
  <?php }  elseif ( is_single()) { ?>
   <header style="background-image: linear-gradient(360deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url('<?php echo get_featured_image_url($post); ?>')">   
  <?php }  elseif ( is_search() || is_404() || is_category()) { ?>
    <header style="background-color: #3C3C3C; height:14vh">            
  <?php } else { ?>
    <?php 
      $image_id = get_post_thumbnail_id(get_option('page_for_posts'));
      $image_url = wp_get_attachment_url($image_id);
    ?>
    <header style="background: linear-gradient(360deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url('<?php echo $image_url; ?>') center center no-repeat; background-size:cover;">
  <?php } ?>

  <div class="container container-header">
    <div class="main-header">
      <div class="site-branding">
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
      </div>

      <div class="fa fa-bars fa-2x"></div>   
      <?php wp_nav_menu( array(
        'container' => '<nav>',
        'theme_location' => 'primary'
      )); ?>

      <div class="search">
        <?php  get_search_form(); ?>
      </div>
    </div>

    <?php if (is_front_page()) { ?>
      <div class="header-text">      
        <h1><?php the_field('main_tagline'); ?></h1>
          <a href="<?php the_field('page_link'); ?>"><button class="large"><?php the_field('page_link_title'); ?></button></a> 
      </div>
    <?php } elseif ( is_home() && get_option('page_for_posts') ) { ?>
      <div class="header-text">
        <h1><?php echo apply_filters('the_field',get_page( get_option('page_for_posts') )->page_tagline); ?></h1>
      </div>
    <?php } elseif ( is_search() || is_404() || is_category()) { ?>           
    <?php } else { ?>
      <div class="header-text"> 
        <h1><?php the_field('page_tagline'); ?></h1>
      </div>
    <?php } ?>
  </div> <!-- /.container -->
</header><!--/.header-->

