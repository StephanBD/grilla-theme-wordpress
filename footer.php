<?php get_sidebar(); ?></div>
</main>
<footer id="colophon" class=" t-center t-light py bg-dark mt-a">
	<div class="site-info content-m px-3">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'mesh-themplate')); ?>">
			<?php
 printf(esc_html__('Proudly powered by %s', 'mesh-themplate'), 'WordPress'); ?>
		</a>
		<span class="sep"> | </span>
		<?php
 printf(esc_html__('Theme: %1$s by %2$s.', 'mesh-themplate'), 'mesh-themplate', '<a href="http://underscores.me/">Stephan Bautista</a>'); ?>
	</div>
	<!-- .site-info -->
</footer>
<?php
 do_action("mesh_template_scripts", "/app.js", 'app-script'); wp_footer(); ?></body>

</html>