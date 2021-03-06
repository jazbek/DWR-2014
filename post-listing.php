<div class="row">

	<?php if ( have_posts() ) : ?>
		<?php do_action('foundationPress_before_content'); ?>
		<?php $offset = (int) (is_front_page() && $wp_query->get('paged') < 2) ?>
		<div class=" <?php echo $offset ? '"' : 'row post-list" data-equalizer' ?>>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php if ( dwr_new_row( 3, $offset ) ) : ?>
				</div>
				<div class="row post-list" data-equalizer>
			<?php endif; ?>
		<?php endwhile; ?>
		</div>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action('foundationPress_before_pagination'); ?>

	<?php endif;?>
</div>



<nav id="post-nav">
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
		<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
	<?php } ?>
</nav>

<?php do_action('foundationPress_after_content'); ?>
