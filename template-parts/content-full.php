<?php
 ?>
<!-- --- -->
<article id="post-<?php the_ID(); ?>">

	<?php mesh_themplate_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
 the_content( sprintf( wp_kses( __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'mesh-themplate'), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post(get_the_title()) ) ); wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__('Pages:', 'mesh-themplate'), 'after' => '</div>', ) ); ?>
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer"> -->
	<?php  ?>
	<!-- </footer> -->
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->