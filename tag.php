<?php get_header(); ?>
<div class="tag_page">
	<div class="section_title">
<div class="container">
	<p class="category_first_category"><?php _e( 'Tags Archive', 'html5blank' );?></p>
	<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>
	<p><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i> </a> <i class="fas fa-chevron-right"></i><span class="category_second_category"> <?php single_cat_title(); ?></span></p>
</div>
</div>
<div class="container">
<div class="row my-5">
	<div class="col-lg-8">

	<main role="main">
		<!-- section -->
		<section>


			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

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
