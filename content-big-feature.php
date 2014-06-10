<?php
/**
 * The template for displaying a big featured blog post. Used for index/archive/search.
 *
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('small-12'); ?>>
		<header>
			<h3 class="featured-story">Featured Story: <?php the_date('M Y') ?></h3>
		</header>
		<div class="entry-content">
			<p><?php the_post_thumbnail('large'); ?></p>
			<div class="row">
				<div class="small-12 medium-offset-4 medium-6 columns">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(__('&#9656; Read More', 'FoundationPress')); ?>
				</div>
				<div class="show-for-medium-up medium-2 columns text-right">
					<h3 class="category"><?php the_category(', ') ?></h3>
				</div>
			</div>
		</div>
	</article>
</div>
<div class="row" data-equalizer>
