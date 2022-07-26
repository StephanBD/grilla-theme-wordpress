<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mesh
 */

?>


</main><!-- #main -->


<!-- </div> -->
<!-- #content -->

<footer id="colophon" class="<?php echo $args['footer']; ?> t-center t-light py bg-dark mt-a">
	<div class="site-info content-m px-3">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'mesh-themplate')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'mesh-themplate'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'mesh-themplate'), 'mesh-themplate', '<a href="http://underscores.me/">Stephan Bautista</a>');
		?>
	</div>
	<!-- .site-info -->
</footer>
<!-- #colophon -->

<!-- #page -->

<?php

// do_action("mesh_template_dequeue_scripts");
do_action("mesh_template_scripts", "/app.js", 'app-script');

wp_footer();

?>

</body>

</html>