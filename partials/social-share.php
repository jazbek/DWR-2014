<?php

$url = urlencode( get_permalink() );
$title = urlencode( get_the_title() );

?>
<ul class="inline-list">
	<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"
		   class="icon-facebook"></a></li>
	<li><a href="http://twitter.com/share?url=/&text=<?php echo $url; ?>"
		   class="icon-twitter"></a></li>
	<li><a href="http://www.pinterest.com/pin/create/button/
        	?url=<?php echo $url ?>
        	&description=<?php echo $title ?>"
		   data-pin-do="buttonPin"
		   data-pin-config="above"
		   class="icon-pinterest"></a></li>
	<li><a href="http://plus.google.com/share?url=<?php echo $url ?>"
		   class="icon-google-plus"></a></li>
	<li><a href="http://www.tumblr.com/share?v=3&u=<?php echo $title ?>&t=<?php echo $title ?>" class="icon-tumblr"></a></li>
	<li><a class="houzz-share-button icon-houzz"
		   data-url="<?php the_permalink() ?>"
		   data-hzid="Your HZID"
		   data-title="<?php the_title() ?>"
		   data-img="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>"
		   data-desc="<?php the_excerpt() ?>"
		   data-category="<?php echo implode(' ', wp_get_post_tags( get_the_ID(), array('fields' => 'names') ) ); ?>"
		   data-showcount="1 "
		   href="http://www.houzz.com"></a></li>
</ul>
