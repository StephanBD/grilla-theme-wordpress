<?php
 get_header('full', array('main' => 'p-3 content-m flex flex-gap-2 ')); ?>
<div class="<?php echo is_full_column("flex-8-md"); ?>">

	<!-- <p>single</p> -->
	<?php
 while (have_posts()) : the_post(); get_template_part('template-parts/content', get_post_type()); the_post_navigation( array( 'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'mesh-themplate') . '</span> <span class="nav-title">%title</span>', 'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'mesh-themplate') . '</span> <span class="nav-title">%title</span>', ) ); if (comments_open() || get_comments_number()) : comments_template(); endif; endwhile; ?>
</div>
<!-- #main -->

<!-- footer -->
<?php
 get_footer(); 