<?php

$url = urlencode( get_permalink() );
$title = urlencode( get_the_title() );
$img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
$img_encoded = urlencode( wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) );

?>
<ul class="inline-list social-share">
	<li><strong>Share: </strong></li>
	<li><a href="https://www.facebook.com/sharer/sharer.php?m2w&u=<?php echo $url; ?>"
		   class="icon-facebook"></a></li>
	<li><a href="http://twitter.com/share?url=/&text=<?php echo $url; ?>"
		   class="icon-twitter"></a></li>
	<li><a href="http://www.pinterest.com/pin/create/button/?url=<?php echo $url ?>&description=<?php echo $title ?>"
		   data-pin-do="buttonPin"
		   data-pin-config="above"
		   class="icon-pinterest"></a></li>
	<li><a href="http://plus.google.com/share?url=<?php echo $url ?>"
		   class="icon-google-plus"></a></li>
	<li><a href="http://www.tumblr.com/share?v=3&u=<?php echo $title ?>&t=<?php echo $title ?>"
		   class="icon-tumblr"></a></li>
	<li><a class="houzz-share-button icon-houzz"
		   href="http://www.houzz.com/imageClipperUpload?link=<?php echo $url ?>&source=button&hzid=dwr&imageUrl=<?php echo $img_encoded ?>&title=<?php echo $title ?>&ref=<?php echo $url ?>"></a></li>
</ul>
<div class="reveal-modal" id="fb-modal" data-reveal>
	<iframe src="" frameborder="0" data-url=""></iframe>
</div>
<script type="text/javascript">
	$('.social-share a').on('click', function(){
		var left = ($(window).width() / 2) - (730 / 2),
			top = ($(window).height() / 2) - (400 / 2),
			popup = window.open($(this).attr('href'), "popup", "width=730, height=400, top=" + top + ", left=" + left);
		return false;
	})
</script>
