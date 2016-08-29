<?php get_header();  ?>

<div class="main clearfix">
	<div class="container">

		<div class="content">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
				<div class="work-info">
					<h1><?php the_field('our_work'); ?></h1>
					<p><?php the_field('our_work_description'); ?></p>
				</div>
				
				<div class="clearfix works">
					<div class="portfolio">
						<?php $image = get_field('portfolio_image_1'); ?>
						<a href="<?php echo $image['sizes']['rectangle'] ?>" data-featherlight="image"><img src="<?php echo $image['sizes']['rectangle'] ?>" alt="Portfolio Image One"></a>
						<?php the_content(); ?>
						<h3><?php the_field('portfolio_title_1'); ?></h3>
						<p><?php the_field('portfolio_description_1'); ?></p>
					</div>

					<div class="portfolio">
						<?php $image = get_field('portfolio_image_2'); ?>
						<a href="<?php echo $image['sizes']['rectangle'] ?>" data-featherlight="image"><img src="<?php echo $image['sizes']['rectangle'] ?>" alt="Portfolio Image Two"></a>
						<?php the_content(); ?>
						<h3><?php the_field('portfolio_title_2'); ?></h3>
						<p><?php the_field('portfolio_description_2'); ?></p>
					</div>   

					<div class="portfolio">
						<?php $image = get_field('portfolio_image_3'); ?>
						<a href="<?php echo $image['sizes']['rectangle'] ?>" data-featherlight="image"><img src="<?php echo $image['sizes']['rectangle'] ?>" alt="Portfolio Image Three"></a>
						<?php the_content(); ?>
						<h3><?php the_field('portfolio_title_3'); ?></h3>
						<p><?php the_field('portfolio_description_3'); ?></p>
					</div>
				</div>
			<?php endwhile; // end the loop?>

			<div class="home-posts clearfix">
				<h1>From Our Blog</h1>
				<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<div class="home-post">	
						<?php $image_id = get_post_thumbnail_id($post_id);
						$image_url = wp_get_attachment_url($image_id);
						?>			
						<img src="<?php echo $image_url; ?>" alt="">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt(__('(more…)')); ?></p>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>

		</div> <!-- /,content -->
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>