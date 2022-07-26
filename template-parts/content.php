<?php
 ?>

<article id="post-<?php the_ID(); ?>" class="my-5">
	<header class="entry-header">
		<?php
 if (is_singular()) : the_title('<h1 class="t-4">', '</h1>'); else : the_title('<h2 class="t-bg bold"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); endif; if ('post' === get_post_type()) : ?>
			<div class="entry-meta mb-2">
				<?php
 mesh_themplate_posted_on(); mesh_themplate_posted_by(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php mesh_themplate_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
 if (is_singular()) : the_content( sprintf( wp_kses( __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'mesh-themplate'), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post(get_the_title()) ) ); else : the_excerpt(); endif; wp_link_pages( array( 'before' => '<div class="page-links a t-sm">' . esc_html__('Pages:', 'mesh-themplate'), 'after' => '</div>', ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer a t-sm">
		<?php mesh_themplate_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->