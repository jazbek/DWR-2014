<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;';
			single_cat_title();
			echo '&quot; | ';
			bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;';
			single_tag_title();
			echo '&quot; | ';
			bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title( '' );
			echo ' Archive | ';
			bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;' . esc_html( $s ) . '&quot; | ';
			bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' );
			echo ' | ';
			bloginfo( 'description' );
		} elseif ( is_404() ) {
			echo 'Error 404 Not Found | ';
			bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title( '' );
		} else {
			echo wp_title( ' | ', 'false', 'right' );
			bloginfo( 'name' );
		} ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />

	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'foundationPress_after_body' ); ?>

<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

		<?php do_action( 'foundationPress_layout_start' ); ?>

		<aside class="right-off-canvas-menu">
			<?php get_search_form(); ?>
			<?php foundationPress_mobile_off_canvas(); ?>
			<ul class="off-canvas-list secondary">
				<li><a href="#">About</a></li>
				<li><a href="http://dwr.com" target="_blank">Shop dwr.com</a></li>
				<li class="social">
					<?php get_template_part('partials/social', 'inline-list') ?>
				</li>
			</ul>
	</aside>

		<header role="banner">
			<div class="row">
				<div class="small-12 columns show-for-medium-up">
					<a href="http://www.dwr.com" target="_blank" class="right button" id="shop-dwr">Shop dwr.com &#9656;</a>
				</div>
			</div>
			<div class="row collapse">
				<div id="logo" class="small-12 medium-4 columns">
					<h1 class="left">
						<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dwr-logo.png"></a>
					</h1>

					<div class="left">
						<h2 class="subheader"><?php bloginfo( 'name' ); ?></h2>

						<h3 class="subheader"><?php bloginfo( 'description' ) ?></h3>
					</div>
					<div class="show-for-small-only small-2 columns right">
						<nav class="tab-bar">
							<section class="left-small">
								<a class="right-off-canvas-toggle menu-icon"><span></span></a>
							</section>
						</nav>
					</div>
				</div>
				<div id="desktop-menu" class="medium-4 columns show-for-medium-up">
					<?php foundationPress_main_menu() ?>
				</div>
				<div id="desktop-search" class="medium-4 columns show-for-medium-up">
					<?php get_search_form(); ?>
				</div>
			</div>
		</header>

		<section class="container" role="document">
			<?php do_action( 'foundationPress_after_header' ); ?>
			<div class="row collapse">