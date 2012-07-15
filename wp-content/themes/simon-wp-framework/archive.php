<?php
/**
 * The template for Archive.
 *
 * @package WordPress
 * @subpackage Simon_WP_Framework
 * @since Simon WP Framework 1.0
 */

get_header(); ?>

<div class="grid_8 alpha">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?>>
    <div class="postdate">
      <div class="postmonth">
        <?php the_time('M') ?>
      </div>
      <div class="postday">
        <?php the_time('d') ?>
      </div>
    </div>
    <h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
      <?php the_title(); ?>
      </a></h1>
    <div class="entry">
      <?php the_post_thumbnail(); ?>
      <?php the_excerpt(); ?>
      <div class="clear"></div>
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
  <h1>Nothing found</h1>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
