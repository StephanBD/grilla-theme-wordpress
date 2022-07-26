<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mesh
 */

get_header('full', array('main' => 'p-3 content-m flex flex-gap-2 '));


?>
<div class="<?php echo is_full_column("flex-8-md"); ?>">
	<!-- <div class="content-m flex flex-gap-2 my-4">
	<main id="primary" class="site-main flex-8-md grow-1 p"> -->


	<?php if (have_posts()) : ?>

		<header class="page-header">
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->

	<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part('template-parts/content', get_post_type());

		endwhile;

		the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</div><!-- #main -->
<?php
// get_sidebar(); 
// echo "</div>" ;



get_footer();
