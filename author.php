<?php get_header(); ?>

	<div class="small-12 columns" role="main">

			<header class="author row">
				<div class="small-3 medium-1 author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
				</div>
				<div class="small-8 medium-4 end author-bio">
					<h5>Recent Posts By</h5>
					<h3><?php echo get_the_author_meta( 'display_name' ); ?></h3>
					<p><?php echo get_the_author_meta( 'description' ); ?></p>
				</div>
			</header>

			<?php get_template_part('post-listing', 'author') ?>

	</div>

<?php get_footer(); ?>