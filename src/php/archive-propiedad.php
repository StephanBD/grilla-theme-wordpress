<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Mesh
 */

get_header('full', array('main' => 'p-3 content-m w-100%'));
?>

<!-- <div class="content-m flex flex-gap-2 my-4">
	<main id="primary" class="site-main flex-8-md grow-1 p"> -->



<!---------------------------------------------->

<!-- <div class="search_bar">
	<form action="/" method="get" autocomplete="off">
		<input type="text" name="s" placeholder="Search Code..." id="keyword" class="input_search" onkeyup="fetch()">

		<input type="text" value="<?php // echo admin_url('admin-ajax.php'); 
											?>" name="path">
		<button class="bg-cyan">
			Search
		</button>
	</form>
	<div class="search_result bg-white absolute p" id="datafetch">
		<ul>
			<li>Please wait..</li>
		</ul>
	</div>
</div> -->

<!---------------------------------------------->
<div id="search-properties" class="relative">

	<form action="" method="get">
		<!-- <label for="name">name</label>
		<input type="text" name="name" id="name" class="b r"> -->

		<label for="precio">precio</label>
		<input type="number" name="precio" id="precio" class="b r" min="0">

		<label for="cuartos">cuartos</label>
		<input type="number" name="cuartos" id="cuartos" class="b r" min="0">
		<!-- 
		<label for="direccion">direccion</label>
		<input type="text" name="direccion" id="direccion" class="b r" min="0"> -->


		<button type="submit" class="bg-success-light t-light">Submit</button>
	</form>

	<ul id="results" class=" bg-white p-3 z-tooltip ">
		<li>results</li>
	</ul>
</div>



<!---------------------------------------------->




<?php if (have_posts()) : ?>

	<header class="page-header flex-12">
		<?php
		the_archive_title('<h1 class="page-title">', '</h1>');
		the_archive_description('<div class="archive-description">', '</div>');
		?>
	</header><!-- .page-header -->

<?php
	/* Start the Loop */
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', get_post_type());

	endwhile;

	the_posts_navigation();

else :

	get_template_part('template-parts/content', 'none');

endif;
?>

<!-- </main> -->
<!-- #main -->
<?php



get_footer("full");
