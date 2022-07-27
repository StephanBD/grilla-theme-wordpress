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