<?php
/**
 * The template for Sidebar.
 *
 * @package WordPress
 * @subpackage Simon_WP_Framework
 * @since Simon WP Framework 1.0
 */
?>
<div id="sidebar" class="grid_4 omega">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
  <div class="no-widgets"><div id="pages" class="grid_2 alpha">
    <h2>Pages</h2>
    <ul>
      <?php wp_list_pages('title_li='); ?> 
    </ul>
  </div>
  <div id="archives" class="grid_2 omega">
    <h2>Archives</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </div>
  <div class="clear"></div>
  <div id="categories" class="grid_2 alpha">
    <h2>Categories</h2>
    <ul>
      <?php wp_list_categories('show_count=1&title_li='); ?>
    </ul>
  </div>
  <div id="blogroll" class="grid_2 omega">
    <ul>
      <?php wp_list_bookmarks(); ?>
    </ul>
  </div>
  <div class="clear"></div>
  <div id="sidebarmeta" class="grid_2 alpha">
    <h2>Meta</h2>
    <ul>
      <?php wp_register(); ?>
      <li>
        <?php wp_loginout(); ?>
      </li>
      <?php wp_meta(); ?>
    </ul>
  </div>
  <div id="feeds" class="grid_2 omega">
    <h2>Feeds</h2>
    <ul>
      <li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
      <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    </ul>   </div>
 </div>
<?php endif; ?>
</div>
