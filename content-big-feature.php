<?php
/**
 * The template for displaying a big featured blog post. Used for index/archive/search.
 *
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('small-12'); ?>>
		<header class="show-for-medium-up">
			<h3 class="featured-story">Featured Story: <?php the_date('M Y') ?></h3>
		</header>
		<div class="entry-content">
			<p><?php the_post_thumbnail('large'); ?></p>
			<div class="row collapse">
				<div class="small-12 medium-offset-4 medium-6 columns">
					<div class="row show-for-small-only">
						<h3 class="category small-6 columns"><?php the_category(', '); ?></h3>
						<h3 class="category small-6 columns text-right"><?php echo get_the_date(); ?></h3>
					</div>
					<div class="small-12 columns">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt(); ?></p>
						<p><a href="<?php the_permalink(); ?>" class="more-link"><?php echo __('&#9656; Read More', 'FoundationPress'); ?></a></p>					</div>
				</div>
				<div class="show-for-medium-up medium-2 columns text-right">
					<h3 class="category"><?php the_category(', ') ?></h3>
				</div>
			</div>
		</div>
	</article>
</div>
<div class="row" data-equalizer>
