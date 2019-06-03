<?php get_header(); ?>
<div class="main_page">
<div class="section_title">
	<div class="container">
		<h1 class="pt-3"> <?php the_title(); ?></h1>
		<p><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i> </a> <i class="fas fa-chevron-right"></i><span class="category_second_category"> <?php the_title(); ?></span></p>
	</div>
</div>
<div class="container">
	<main role="main">
		<!-- section -->
		<div class="row  my-5">
			<div class="col-lg-8">
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="single_post_content">
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->
</div>
		<?php endif; ?>

		</section>
			</div>
		<!-- /section -->
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
			</div>
	</main>
</div>

</div>
<?php get_footer(); ?>
