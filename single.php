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
			<div class="small-12 medium-offset-1 medium-8 columns">
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header class="row">
						<div class="row">
							<h1 class="entry-title small-12 medium-9 columns"><?php the_title(); ?></h1>
							<div class="entry-meta small-12 medium-3 columns">
								<?php get_template_part('partials/entry-meta', 'single') ?>
							</div>
						</div>
					</header>
					<?php do_action('foundationPress_post_before_entry_content'); ?>
					<div class="entry-content row">
						<?php the_content(); ?>
					</div>
					<footer>

						<?php if ( $products = get_field('products') ) : ?>
							<aside id="products" class="row">
								<h3>Product List:</h3>
								<div class="row">
									<?php foreach ( $products as $i => $product ) : ?>
										<div class="medium-4 columns">
											<?php if ( $product_url = get_field( 'product_url', $product->ID ) ) : ?>
												<a href="<?php echo $product_url; ?>" target="_blank"><?php echo get_the_post_thumbnail( $product->ID, 'post-thumbnail' ); ?></a>
												<h4><?php echo get_the_title( $product->ID ); ?></h4>
												<?php if ( $designer = get_field( 'designer', $product->ID ) ) : ?>
													<p>Designed by <?php echo $designer; ?></p>
												<?php endif; ?>
											<?php endif; ?>
										</div>
										<?php if ( dwr_new_row(3, 0, $i, count($products)) ) : ?>
											</div>
											<div class="row">
										<?php endif; ?>
									<?php endforeach; ?>
								</div>
							</aside>
						<?php endif; ?>

						<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )) ?>

						<div class="row">
							<p class="tags"><?php the_tags('TAGS: '); ?></p>
							<hr>
						</div>

						<?php $related_stories = dwr_get_related_stories(); ?>
						<?php if ( count( $related_stories ) ) : ?>
							<aside id="related-stories" class="row">
								<h3>Related Stories:</h3>
								<div class="row">
									<?php foreach ( $related_stories as $i => $story ) : ?>
									<div class="medium-4 columns">
										<a href="<?php echo get_permalink( $story->ID ); ?>"><?php echo get_the_post_thumbnail( $story->ID, 'medium' ); ?></a>
										<p><a href="<?php echo get_permalink( $story->ID ); ?>"><?php echo get_the_title( $story->ID ) ?></a></p>
									</div>
									<?php if ( dwr_new_row(3, 0, $i, count( $related_stories ) ) ) : ?>
								</div>
								<div class="row">
									<?php endif; ?>
									<?php endforeach; ?>
								</div>
							</aside>
						<?php endif; ?>
					</footer>
				</article>
			</div>
			<div class="small-3 columns">
				<?php get_sidebar(); ?>
			</div>
			<div class="row">
				<div class="small-9 columns prev-next">
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
					<hr>
				</div>
			</div>
			<?php do_action('foundationPress_post_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_post_after_comments'); ?>

		</div>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>

<?php get_footer(); ?>