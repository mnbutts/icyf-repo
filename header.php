<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package I_Call_You_Friend
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'icyf' ); ?></a>

	<header id="masthead" class="site-header">

		<div id="logo" class="mobile-logo">
			<a href="http://icyfhost/"><img src="http://icyfhost/wp-content/uploads/2018/10/markinglogo.png" width="40"/></a>
		</div>
<div id="site-header-menu" class="site-header-menu">
		<nav id="site-navigation" class="main-navigation" role"navigation">
			<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '&#9776;', 'icyf' ); ?></button>
			<?php
			$divider_html = '<a href="http://icyfhost/"><img src="http://icyfhost/wp-content/uploads/2018/10/markinglogo.png" width="40"/></a>';

			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				// 'depth' => 1,
				// 'container' => False,
				// 'divider_html' => $divider_html,
				// 'divider_offset' => -1

				// 'theme_location' => 'menu-1',
				// 'menu_id'        => 'primary-menu',
				// 'divider_html' => $divider_html,
			) );
			?>
			<!-- <a class="toggle-nav" href="#">&#9776;</a> -->
		</nav><!-- #site-navigation -->
	</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
