<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<?php
global $wp_query;
$big_feature = is_front_page() && $wp_query->current_post == 0;
$featured_image_size = $big_feature ? 'large' : 'medium';
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php if ( $big_feature ) : ?>
			<h3 class="featured-story">Featured Story: <?php the_date('M Y') ?></h3>
		<?php else : ?>
			<?php the_category(); ?>
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<p><?php the_post_thumbnail($featured_image_size); ?></p>
		<div class="small-12 <?php echo $big_feature ? 'medium-offset-4 medium-6' : 'medium-4' ?> columns">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(__('&#9656; Read More', 'FoundationPress')); ?>
		</div>
		<?php if ($big_feature) : ?>
		<div class="show-for-medium-up medium-2 columns category <?php echo $big_feature ? 'text-right' : '' ?>">
			<h3><?php the_category(', ') ?></h3>
		</div>
		<?php endif; ?>
		</div>
		</div>
	<footer>
		<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>