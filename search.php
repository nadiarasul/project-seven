<?php get_header(); ?>
<div class="main">
	<div class="container container-blog">

		<div class="content">
			<?php if ( have_posts() ) : ?>

				<div class="search-title">
					<h1>Search Results for: <?php echo get_search_query(); ?></h1>
				</div>

				<?php get_template_part( 'loop', 'search' ); ?>

			<?php else : ?>

				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div> <!-- /.content -->
	</div><!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
