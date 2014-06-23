<?php $related_stories = dwr_get_related_stories(); ?>
<?php if ( count( $related_stories ) ) : ?>
	<aside id="related-stories" class="row">
		<h3>Related Stories:</h3>
		<div class="slider">
			<?php foreach ( $related_stories as $i => $story ) : ?>
			<div class="slide <?php echo $i == count($related_stories) - 1 ? 'end' : '' ?>">
				<a href="<?php echo get_permalink( $story->ID ); ?>"><?php echo get_the_post_thumbnail( $story->ID, 'medium' ); ?></a>
				<p><a href="<?php echo get_permalink( $story->ID ); ?>"><?php echo get_the_title( $story->ID ) ?></a></p>
			</div>
			<?php endforeach; ?>
		</div>
	</aside>
<?php endif; ?>
