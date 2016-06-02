<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
        <div class="work-info">
        	<h2><?php the_field('our_work'); ?></h2>
        	<p><?php the_field('our_work_description'); ?></p>
        </div>
        <div class="portfolio">
	        <?php $image = get_field('portfolio_image_1'); ?>
	        <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
	        <?php the_content(); ?>
	        <h3><?php the_field('portfolio_title_1'); ?></h3>
	        <p><?php the_field('portfolio_description_1'); ?></p>
        </div>
        <div class="portfolio">
	        <?php $image = get_field('portfolio_image_2'); ?>
	        <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
	        <?php the_content(); ?>
	        <h3><?php the_field('portfolio_title_2'); ?></h3>
	        <p><?php the_field('portfolio_description_2'); ?></p>
        </div>        
        <div class="portfolio">
	        <?php $image = get_field('portfolio_image_3'); ?>
	        <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
	        <?php the_content(); ?>
	        <h3><?php the_field('portfolio_title_3'); ?></h3>
	        <p><?php the_field('portfolio_description_3'); ?></p>
        </div>
      <?php endwhile; // end the loop?>
      <div class="home-post">
		<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<p><?php the_excerpt(__('(more…)')); ?></p>
		<?php 
		endwhile;
		wp_reset_postdata();
		?>
	  </div>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>