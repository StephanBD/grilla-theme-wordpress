<?php
 ?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<?php mesh_themplate_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
 the_content(); wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__('Pages:', 'mesh-themplate'), 'after' => '</div>', ) ); ?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
 edit_post_link( sprintf( wp_kses( __('Edit <span class="screen-reader-text">%s</span>', 'mesh-themplate'), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post(get_the_title()) ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->