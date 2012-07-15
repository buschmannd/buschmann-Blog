<?php
/**
 * The template for Meta Info.
 *
 * @package WordPress
 * @subpackage Simon_WP_Framework
 * @since Simon WP Framework 1.0
 */
 ?>
 <div class="meta">
    <?php the_date('F jS, Y', '<span class="time">', '</span>'); ?>
	<em>by</em> <?php the_author() ?> | Type: <?php
if ( get_post_format() ) {
    echo get_post_format_string( get_post_format() );
} else {
    echo 'Standard';
}
?> <?php edit_post_link('Edit'); ?>
</div>