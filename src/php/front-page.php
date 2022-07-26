<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mesh
 */


// $contentWidth = "";
// if (is_active_sidebar('sidebar-1')) $contentWidth = "flex-8-md";


get_header('full', array('main' => 'p-3 content-m flex flex-gap-2 '));


?>
<!-- <div class="content-m flex flex-gap-2 my-4">
	<main id="primary" class="site-main flex-8-md grow-1 p"> -->
<!-- <p>front-page</p> -->


<div class="<?php echo is_full_column("flex-8-md"); ?>">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</div>
<!-- #main -->

<?php
// get_sidebar(); 
// echo "</div>" ;

get_footer();
