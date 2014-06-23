<?php
/**
 * The default template for displaying content. Used for index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<?php
$big_feature = is_front_page() && $wp_query->get('paged') < 2 && $wp_query->current_post == 0;
if ( $big_feature ) :
	get_template_part('content-big-feature');
	return;
endif;
$post_class = 'small-12 medium-4 columns';
if ( $wp_query->current_post == $wp_query->post_count - 1) {
	$post_class .= ' end';
}
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?> data-equalizer-watch>
		<h3 class="category show-for-medium-up"><?php the_category(', '); ?></h3>
		<div class="entry-content">
			<p class="thumbnail"><?php the_post_thumbnail('medium'); ?></p>
			<div class="small-12">
				<div class="row show-for-small-only collapse">
					<h3 class="category small-6 columns"><?php the_category(', '); ?></h3>
					<h3 class="category small-6 columns text-right"><?php echo get_the_date(); ?></h3>
				</div>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt(); ?></p>
				<p><a href="<?php the_permalink(); ?>" class="more-link"><?php echo __('&#9656; Read More', 'FoundationPress'); ?></a></p>
			</div>
		</div>
	</article>
