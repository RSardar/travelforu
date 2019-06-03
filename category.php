<?php get_header(); ?>
<div class="section_title">
	<div class="container">
		<p class="category_first_category"><?php _e( 'Categories ', 'html5blank' );?></p>
		<h1> </a> <?php single_cat_title(); ?></h1>
		<p><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i> </a> <i class="fas fa-chevron-right"></i><span class="category_second_category"> <?php single_cat_title(); ?></span></p>
	</div>
</div>
<div class="container">
	<main role="main">
		<!-- section -->
		<section>

			<div class="row my-5">
				<div class="col-lg-8">
					<?php get_template_part('loop'); ?>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			</div>


			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

</div>

<?php get_footer(); ?>
