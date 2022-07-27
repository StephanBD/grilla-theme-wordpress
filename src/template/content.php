<?php
if (have_posts()) :
	/* Start the Loop */
	while (have_posts()) :
		the_post();



?>

		<article id="post-<?php the_ID(); ?>">





			<?php
			the_content();

			?>


			<?php if (get_edit_post_link()) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__('Edit <span class="screen-reader-text">%s</span>', 'mesh-themplate'),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post(get_the_title())
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</article><!-- #post-<?php the_ID(); ?> -->

<?php
	endwhile;


else :
	get_template_part('template-parts/content', 'none');

endif;
?>