<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><?php wp_head();
																									do_action("mesh_template_styles", "/main.css", 'mesh-themplate-style');; ?>
</head>

<body <?php body_class(""); ?>><?php wp_body_open();; ?><header class="site-header shadow-bottom-sm relative p bg-white" id="masthead" role="baner">
		<div class="site-branding">
			<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"> <?php bloginfo("name"); ?></a></p>
			<p class="site-description"><?php bloginfo("description"); ?></p>
		</div>
		<nav class="navbar-md flex ai-center container-m"><?php the_custom_logo(); ?><button class="navbar-toggle">x</button><?php wp_nav_menu(array(
																																										'theme_location' => 'menu-1',
																																										"container_class" => "navbar-show-md md:show",
																																										'menu_class'        => 'navbar-list-col ',
																																									)); ?></nav>
	</header>
	<div class="content-m flex flex-gap-4 my-4">
		<main id="primary" class="<?php echo $args['main']; ?>"><?php do_action("so_9405896_show_template");; ?><h1 class="mb-3"><?php echo get_post_type(); ?></h1>