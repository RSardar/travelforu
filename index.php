<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="mt-5">
			<div class="container">
				<div class="row">
						<div class="col-lg-9">
							<?php get_template_part('inc/front-page-loop'); ?>
						<div class="col-lg-3">
							<div class="index_author_bio">
								<img src="<?php echo get_template_directory_uri(); ?>/img/author.jpeg" alt="Logo" class="index_author">
								<div class="index_author_info">
									<h2>Hi ! This is Leelija</h2>
								</div>
							</div>
						</div>
				</div>
			</div>
			<div class="other-loop">
			<div class="container">
				<?php	$count++;
					 if($count>=1){ ?>

					<section class="mt-5">
						<?php get_template_part('inc/other-loop'); ?>
					</section>
					<?php
					$count++;
					} ?>
				</div>
				</div>
			</div>
				<?php get_template_part('pagination'); ?>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
