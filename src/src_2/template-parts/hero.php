	<!-- #masthead -->
	<div class="site-branding">
		<?php
 if (is_front_page() && is_home()) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
		<?php
 else : ?>
			<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
		<?php
 endif; $mesh_themplate_description = get_bloginfo('description', 'display'); if ($mesh_themplate_description || is_customize_preview()) : ?>
			<p class="site-description"><?php echo $mesh_themplate_description; ?></p>
		<?php endif; ?>
	</div>