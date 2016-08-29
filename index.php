<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main clearfix">
  <div class="container blog-container">

    <div class="content">
    	<div class="blog-info">
    		<h2><?php the_field('blog_tagline', get_option('page_for_posts')); ?></h2>
    		<p><?php the_field('blog_description', get_option('page_for_posts')); ?></p>
    	</div>
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>