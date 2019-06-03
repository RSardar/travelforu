<?php get_header(); ?>
<div class="container mt-5">

<div class="row">
	<div class="col-lg-8">
	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="article_content" id="article_content">


		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="single_post_section_title">
			<p class="index-category d-inline"><span>&mdash;</span> <?php the_category(', '); // Separated by commas ?>  </p>
			<p class="d-inline"><?php social_share(); ?></p>
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
				<p class="font-italic index-excerpt">
					<span class="index-excerpt">By</span>
					<span class="author"><?php the_author_posts_link(); ?></span>
					<span><i class="fas fa-circle"></i></span>
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<span><i class="fas fa-circle"></i></span>
					<span class="time_to_read" id="time_to_read"></span>

				</p>
			</div>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->

			<!-- /post title -->

			<!-- /post details -->
<div class="single_post_content">
	<?php the_content(); // Dynamic Content ?>
	<hr>
		<p class="single_post_tags"><?php the_tags( __( '<span>Tags</span>: ', 'html5blank' ), ' ', '<br>'); // Separated by commas with a line break at the end ?></p>
</div>
<hr class="pt-2">
<div class="single_post_comments">
		<?php comments_template(); ?>
</div>
		</article>
		<!-- /article -->
		</div>
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
	</div>
	<div class="col-lg-4">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>

<?php get_footer(); ?>
