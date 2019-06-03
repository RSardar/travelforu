<?php get_header(); ?>
<div class="section_title">
	<div class="container">
		<p class="category_first_category"><?php _e( 'Author ', 'html5blank' );?></p>
		<h1>  <?php echo get_the_author(); ?></h1>
		<p><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i> </a> <i class="fas fa-chevron-right"></i><span class="category_second_category"> <?php echo get_the_author();?></span></p>
	</div>
</div>
<div class="container mt-5">
<div class="row">
<div class="col-lg-8">
		<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

			<div class="row">
				<?php rewind_posts(); while (have_posts()) : the_post(); ?>
				<!-- article --><div class="col-lg-6 mb-4">
			  <div class="index-featured-posts">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->
			    <div class="index-other-body-info">
			<p class="index-category"><span>&mdash;</span> <?php the_category(', '); // Separated by commas ?></p>
					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->
			    <div class="index_view_more">
			    <a href="<?php the_permalink();?>" role="button" aria-pressed="true">View Details <i class="pl-2 fas fa-arrow-right"></i></a>
			    </div>
			    <div class="other-loop-post-details">
			      <div class="row">
			        <div class="col-6">
			        <p> <i class="pr-2 fas fa-user"></i><span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span></p>
			        </div>
			        <div class="col-6">
			        <p> <i class="align-middle fas fa-comment-alt"></i> <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span></p>
			        </div>
			      </div>
			    </div>
			</div>
				</article>
				<!-- /article -->
			  </div>
			</div>
			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

			<?php endif; ?>
			</div>


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


<?php get_footer(); ?>
