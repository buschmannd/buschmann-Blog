<?php 
/**
 * The template for displaying Search.
 *
 * @package WordPress
 * @subpackage Simon_WP_Framework
 * @since Simon WP Framework 1.0
 */get_header(); ?>

<div class="grid_8 alpha">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?>>
    <h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
      <?php the_title(); ?>
      </a></h1>
    <div class="postmetadata">
      <?php get_template_part( '/inc/meta' );?>
    </div>
  </div>
  <?php endwhile; ?>
  <?php get_template_part( '/inc/nav' );?>
  <?php else : ?>
  <div class="post"><h1 class="center">No posts found.</h1> <h3>Try a different search?</h3>
  <?php get_search_form(); ?></div>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
