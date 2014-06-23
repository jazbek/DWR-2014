</div>
<?php if (is_front_page()) : ?>
	<div class="social-feeds row">
		<div class="instagram small-12 medium-6 columns">
			<hr class="icon-instagram">
			<?php echo do_shortcode( '[alpine-phototile-for-instagram id=859 user="designwithinreach" src="user_recent" imgl="instagram" style="cascade" col="3" size="Th" num="3" align="left" max="100" nocredit="1"]' ); ?>
		</div>
		<div class="tumblr small-12 medium-6 columns">
			<hr class="icon-tumblr">
			<?php echo do_shortcode( '[alpine-phototile-for-tumblr src="user" uid="designwithinreach" imgl="tumblr" style="cascade" col="3" size="240" num="3" align="right" max="100" nocredit="1"]' ); ?>
		</div>
	</div>
	<div class="social-feeds row ">
		<div class="twitter small-12 medium-6 columns">
			<hr class="icon-twitter">
			<div style="background-color:#333;padding: 40px; height: 204px;">
				<a class="twitter-timeline" data-dnt="true" data-theme="dark" href="//twitter.com/DWR_Tweets" data-widget-id="479377789515079680" height="204" data-chrome="noheader nofooter noborders noscrollbar transparent" data-link-color="#ee262c" data-tweet-limit="1">Tweets from @DWR_Tweets</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<script type="text/javascript">
					setTimeout(function() {
						var head = $('#twitter-widget-0').contents().find('head');
						var css = '<style type="text/css">' +
							'.var-chromeless .tweet { padding: 0 !important; } ' +
							'.tweet * { display: none; } ' +
							'.tweet .e-entry-content, .tweet .e-entry-content .e-entry-title { display: block; color: #FFF; font-size: 18px; line-height: 2em; } ' +
							'</style>';
						$(head).append(css);
					}, 1000);
				</script>
			</div>
		</div>
		<div class="pinterest small-12 medium-6 columns">
			<hr class="icon-pinterest">
			<?php echo get_pins_feed_list( 'dwrpins', null, 3, null, null, 'newwindow', null, 153, 204, false ); ?>
			<?php // echo do_shortcode( '[alpine-phototile-for-pinterest src="board" uid="DWRpins" board="dwr-studios" imgl="pinterest" dlstyle="medium" style="wall" row="3" size="554" num="3" max="100" nocredit="1"]' ); ?>
		</div>
	</div>
<?php endif ?>
</section>

<footer class="row collapse">
	<hr class="show-for-medium-up">

	<div class="small-12 columns">
		<a class="button show-for-small-only" href="<?php echo home_url() ?>">Back to Main</a>
	</div>
	<?php do_action('foundationPress_before_footer'); ?>
	<div class="footer-nav small-6 medium-4 columns">
		<?php
		wp_nav_menu(array(
				'container' => false,                           // remove nav container
				'container_class' => '',                        // class of container
				'menu' => '',                                   // menu name
				'menu_class' => 'no-bullet',      				// adding custom nav class
				'theme_location' => 'footer-menu',              // where it's located in the theme
				'before' => '',                                 // before each link <a>
				'after' => '',                                  // after each link </a>
				'link_before' => '',                            // before each link text
				'link_after' => '',                             // after each link text
				'depth' => 1,                                   // limit the depth of the nav
				'fallback_cb' => false,                         // fallback function (see below)
			));
		?>
	</div>
	<div class="social small-6 medium-4 columns">
		<h5>Follow:</h5>
		<?php get_template_part('partials/social', 'profiles') ?>
	</div>
	<div class="join small-12 medium-4 columns">
		<h5>Join our email list.</h5>
		<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" onSubmit="return checkEmail(this)">

			<input type=hidden name="oid" value="00DA0000000L9e8">
			<input type=hidden name="retURL" value="http://www.urlgoeshere.com">
			<input type=hidden name="first_name" value= 'Email'>
			<input type=hidden name="last_name" value= 'Subsriber'>
			<input type=hidden name="company" value= 'Email Subsriber'>
			<input type=hidden name="recordType" value="012F0000000qKdL">
			<input type=hidden name="lead_source" value='Email Subscribe-Footer'>

			<input class="text small-12" id="email" maxlength="80" name="email" type="text" value="Enter Email Address" onFocus="clearText(this)" onBlur="clearText(this)"/>
				<div class="row collapse">
				<div class="small-6 columns">
					<input class="text" id="zip" maxlength="20" name="zip" type="text" value="Enter Zip" onFocus="clearText(this)" onBlur="clearText(this)" maxlength="5" />
				</div>
				<div class="small-6 columns">
					<input class="button small-12" type="submit" name="submit" value="submit">
				</div>
			</div>

		</form>
	</div>
	<?php do_action('foundationPress_after_footer'); ?>
	<div class="small-6 columns end">
		<p><span class="copyright">&copy; <?php echo date('Y') ?> <a href="http://www.dwr.com" target="_blank">Design Within Reach</a></span></p>
	</div>
</footer>
<a class="exit-off-canvas"></a>

<?php do_action('foundationPress_layout_end'); ?>
</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>