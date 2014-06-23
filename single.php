<?php get_header(); ?>

	<div class="small-12 columns" role="main">
	
	<?php do_action('foundationPress_before_content'); ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<?php if ( has_post_thumbnail() ): ?>
			<div class="row">
				<?php the_post_thumbnail('full'); ?>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="medium-1 columns show-for-medium-up">
				<div id="share-side"><?php get_template_part('partials/social-share', 'desktop') ?></div>
			</div>
			<div class="small-12 medium-8 columns">
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header class="row">
						<div class="row">
							<div class="entry-meta small-12 medium-3 columns">
								<?php get_template_part('partials/entry-meta', 'single') ?>
							</div>
							<h1 class="entry-title small-12 medium-9 columns"><div class="small-12 columns"><?php the_title(); ?></div></h1>
						</div>
					</header>
					<?php do_action('foundationPress_post_before_entry_content'); ?>
					<div class="entry-content row">
						<div class="small-12 columns">
							<?php the_content(); ?>
						</div>
					</div>
					<footer class="small-12 columns">

						<?php get_template_part('partials/products', 'single') ?>

						<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )) ?>

						<div class="row">
							<p class="tags"><?php the_tags('TAGS: '); ?></p>
						</div>

						<div class="row show-for-small-only">
							<div id="share-mobile"><?php get_template_part('partials/social-share', 'mobile') ?></div>
						</div>

						<hr class="row">

						<br>
						<br>

						<?php get_template_part('partials/related-stories', 'single'); ?>

					</footer>
				</article>
			</div>
			<div class="medium-3 columns show-for-medium-up">
				<?php get_sidebar(); ?>
			</div>
			<div class="small-12 medium-9 prev-next columns">
				<hr>
				<?php if (get_previous_post_link()) : ?>
				<div class="left icon-carat-lt">
					<?php previous_post_link('%link', '<h5>Previous Post</h5>%title'); ?>
				</div>
				<?php endif; ?>
				<?php if(get_next_post_link()) : ?>
				<div class="right icon-carat-rt">
					<?php next_post_link('%link', '<h5>Next Post</h5>%title'); ?>
				</div>
				<?php endif; ?>
				<div style="clear:both"></div>
				<hr class="show-for-medium-up">
				<div class="show-for-small-only" style="height: 40px;"></div>
			</div>
			<div class="show-for-medium-up medium-9 columns end">
				<?php do_action('foundationPress_post_before_comments'); ?>
				<?php comments_template(); ?>
				<?php do_action('foundationPress_post_after_comments'); ?>
			</div>

		</div>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>

<?php get_footer(); ?>