	</div>
<?php endif ?>

<hr>
		</div>
	</section>

<footer class="row collapse">
	<?php do_action('foundationPress_before_footer'); ?>
	<div class="small-12 medium-4 columns">
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
	<div class="social small-12 medium-4 columns">
		<h5>Follow:</h5>
		<ul class="inline-list">
			<li><span class="icon-facebook"></span></li>
			<li><span class="icon-twitter"></span></li>
			<li><span class="icon-pinterest"></span></li>
			<li><span class="icon-google-plus"></span></li>
			<li><span class="icon-tumblr"></span></li>
			<li><span class="icon-houzz"></span></li>
		</ul>
	</div>
	<div class="join small-12 medium-4 columns">
		<h5>Join our email list.</h5>
	</div>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>
<a class="exit-off-canvas"></a>
	
  <?php do_action('foundationPress_layout_end'); ?>
  </div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>