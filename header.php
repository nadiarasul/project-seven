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
        <header style="background-image: url('<?php echo get_featured_image_url($post); ?>')">
    <?php } else { ?>
      <?php $image_id = get_post_thumbnail_id(get_option('page_for_posts'));
              $image_url = wp_get_attachment_url($image_id);
         ?>
      <header style="background-image: url('<?php echo $image_url; ?>')">

    <?php } ?>

  <div class="container">
    <div class="main-header">
          <h1>
            <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
            </a>
          </h1>
      

      <?php wp_nav_menu( array(
        'container' => '<nav>',
        'theme_location' => 'primary'
      )); ?>
    </div>

    <?php if (is_front_page()) { ?>
        <div class="header-text">      
           <h2><?php the_title(); ?></h2>
           <h2><?php the_field('main_tagline'); ?></h2>
            <button><a href="<?php the_field('page_link'); ?>"></a><?php the_field('page_link_title'); ?></button> 
          </div>
    <?php } else { ?>
        <div class="header-text"> 
          <h2><?php the_title(); ?></h2>
        </div>
    <?php } ?>


  </div> <!-- /.container -->
</header><!--/.header-->

