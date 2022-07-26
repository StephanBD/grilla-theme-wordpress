<?php
 get_header('', array('main' => 'flex-8-md grow-1 p')); ?>
<!-- <div class="content-m flex gap-2 my-4">
	<main id="primary" class="site-main flex-8-md grow-1 p"> -->

<p>portfolio 1111</p>
<?php echo the_field("url"); ?>
<?php
while (have_posts()) : the_post(); get_template_part('template-parts/content', get_post_type()); the_post_navigation( array( 'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'mesh-themplate') . '</span> <span class="nav-title">%title</span>', 'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'mesh-themplate') . '</span> <span class="nav-title">%title</span>', ) ); if (comments_open() || get_comments_number()) : comments_template(); endif; endwhile; ?>
</main><!-- #main -->

<!-- footer -->
<?php
 get_footer(); 