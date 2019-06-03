<div class="index-hero-post index-featured-posts">
<div class="row align-items-center">
  <div class="col-lg-6">
<a class="thumbnail" href="<?php the_permalink(); ?>">
  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
    </a>

  <?php endif; ?>
</a>
</div>
<div class="col-lg-6">
<div class="index_featured_info">
<p class="index-category"><span>&mdash;</span> <?php the_category(', '); // Separated by commas ?></p>

<h2>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</h2>
<p> <span class="index-excerpt">By</span> <span class="author"><?php the_author_posts_link(); ?></span>
<span class="date"><?php the_time('F j, Y'); ?></span>
</p>
<p class="excerpt"><?php echo wp_trim_words(get_the_content(), 12); ?></p>
<div class="row align-items-center">
  <div class="col-6">
  <p> <?php social_share(); ?></p>
  </div>
  <div class="col-6 text-right">
  <p class="pr-5"> <i class="align-middle fas fa-comment-alt"></i> <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span></p>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
