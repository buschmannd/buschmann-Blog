<?php
/**
 * The template for displaying Index.
 *
 * @package WordPress
 * @subpackage Simon_WP_Framework
 * @since Simon WP Framework 1.0
 */

get_header(); ?>

<div class="alpha grid_8">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="postdate">
      <div class="postmonth">
        <?php the_time('M') ?>
      </div>
      <div class="postday">
        <?php the_time('d') ?>
      </div>
    </div>
    <h1><a href="<?php the_permalink() ?>"   title="<?php the_title_attribute(); ?>">
      <?php the_title(); ?>
      </a></h1>
    <div class="entry">
      <?php the_content(); ?>
    </div>
    <div class="postmetadata">
      <?php get_template_part( '/inc/meta' );?>
      <span class="categories">Filed Under:
      <?php the_category(', '); ?>
      </span>
      <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?>
      <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'post-comments', 'Comments are off for this post'); ?>
    </div>
  </div>
  <?php endwhile; ?>
  <?php get_template_part( '/inc/nav' );?>
  <?php else : ?>
  <h2>Not Found</h2>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
