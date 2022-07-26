<?php
 get_header('full', array('main' => 'p-3 content-m flex flex-gap-2 ')); ?>



<div class="<?php echo is_full_column("flex-8-md"); ?>">
	<!-- <div class="content-m flex flex-gap-2 my-4">
	<main id="primary" class="site-main flex-8-md grow-1 p"> -->
	<!-- <p>page</p> -->

	<?php
 while (have_posts()) : the_post(); get_template_part('template-parts/content', 'page'); if (comments_open() || get_comments_number()) : comments_template(); endif; endwhile; ?>

</div>
<!-- #main -->

<?php
 get_footer(); 