<?php get_header(); ?>

	<div class="small-12 columns" role="main">
	
	
	
	<?php if ( have_posts() ) : ?>
		<?php do_action('foundationPress_before_content'); ?>
		<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php if ( dwr_new_row( 3, 1 ) ) : ?>
		</div>
		<div class="row"  data-equalizer>
			<?php endif; ?>
		<?php endwhile; ?>
		</div>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
		<?php do_action('foundationPress_before_pagination'); ?>
		
	<?php endif;?>
	
	
	
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>
	
	<?php do_action('foundationPress_after_content'); ?>
	
	</div>

<?php get_footer(); ?>