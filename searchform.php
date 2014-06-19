<?php do_action('foundationPress_before_searchform'); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<input type="text" name="s" placeholder="Search">
</form>
<?php do_action('foundationPress_after_searchform'); ?>