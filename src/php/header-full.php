<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mesh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php

	// do_action("mesh_template_dequeue");

	do_action("mesh_template_styles", "/main.css", 'mesh-themplate-style');
	wp_head();
	?>

</head>




<body <?php body_class(print_arg($args, 'body') . " full-vh flex-col "); ?>>
	<?php wp_body_open(); ?>


	<!-- ------------- -->
	<header id="masthead" class="site-header shadow-bottom-sm bg-white fixed w-100% ">

		<nav id="site-navigation" class="navbar-md flex ai-center content-m px-3 my">
			<?php the_custom_logo(); ?>

			<!-- <span class="dashicons dashicons-menu navbar-toggle" aria-controls="primary-menu" aria-expanded="false"></span> -->
			<i class="fa-solid fa-bars navbar-toggle btn" aria-controls="primary-menu" aria-expanded="false"></i>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					"container_class" => "navbar-list md:show content",
					'menu_class'        => 'navbar-list-col',
					// 'before' => '<i class="icon">x</i>',
					// 'link_before' => '<i class="icon">z</i>'
				)
			);

			// ----


			?>
		</nav>

	</header>

	<!-- main------------- -->
	<main id="primary" class="mt-9 <?php echo print_arg($args, "main"); ?>">