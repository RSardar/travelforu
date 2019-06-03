<?php get_header(); ?>
<div class="main_search_result">
	<div class="section_title">
		<div class="container">
		<h1 class="pt-3"><?php echo sprintf( __( '<span class="new-red">%s</span> Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo '<span class="new-red">'.get_search_query().'</span>'; ?></h1>
			<p><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i> </a> <i class="fas fa-chevron-right"></i><span class="category_second_category"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></span></p>
		</div>
	</div>
<div class="container">
<div class="row mt-5">
	<div class="col-lg-8">
	<main role="main">
		<!-- section -->
		<section>


			<div class="other-loop-post-details">
				<?php get_template_part('loop'); ?>
			</div>
<?php // QUESTION:  ?><?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
	</div>
	<div class="col-lg-4">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>
