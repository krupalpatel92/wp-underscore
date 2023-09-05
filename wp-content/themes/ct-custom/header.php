<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/content', 'action-bar'); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="wrapper">
				<div class="header-content">
					<div id="siteLogo" class="logo">
						<?php /* NOTE: Should use srcset for screen resolution based image to get performance */ ?>
						<a href="/">
							<img src="<?php echo get_option("custom_site_logo");  ?>" alt="<?php echo get_option("title") . " Logo" ?>" />
						</a>
					</div>
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'ct-custom'); ?></button>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						));
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>

		</header><!-- #masthead -->
		<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
		<div id="content" class="wrapper">