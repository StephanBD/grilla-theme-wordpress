<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mesh
 */
// setlocale(LC_MONETARY, 'es_CO');
// class: propiedad-list





?>
<article id="post-<?php the_ID(); ?>" class="flex my-5  shadow-bottom-sm">
	<!-- img -->
	<?php mesh_themplate_post_thumbnail("flex-4-md");	?>
	<!-- ---------- -->
	<div class="flex-5-md ml-a p-2">

		<header class="entry-header flex-a ">
			<?php
			if (is_singular()) :
				the_title('<h1 class="t-4">', '</h1>');
			else :
				the_title('<h2 class="t-bg bold"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;

			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">
					<?php
					mesh_themplate_posted_on();
					mesh_themplate_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

		</header><!-- .entry-header -->
		<!-- ----- -->





		<?php
		// -------------------------
		$mapLocation = get_field("map_location");
		// print_r($mapLocation);

		if (get_field('map_location')) : ?>

			<p class="t-gray ">
				<?php
				// echo  $mapLocation["name"]  ." | " . $mapLocation["city"] . " | " . $mapLocation["state"] . " | " . $mapLocation["country"];
				if (isset($mapLocation["city"])) {
					echo $mapLocation["city"];
				} else {
					echo $mapLocation["state"];
				}


				?></p>


		<?php
		endif;


		?>



		<p class="t-primary">$ <?php echo number_format(get_field("precio"), 0, ",", "."); ?></p>

	</div>


	<!-- edit -->
	<footer class="entry-footer flex-3-md flex p-2">
		<?php
		$amount = 0;

		if (get_field('cuartos')) :
			listItems('cuartos', 'fa-solid fa-people-roof');
		endif;

		if (get_field('cocina')) :
			listItems('cocina', 'fa-solid fa-kitchen-set');
		endif;

		if (get_field('banos')) :
			listItems('banos', 'fa-solid fa-bath');
		endif;

		// if (get_field('balcon')) :
		// 	listItems('balcon', 'fa-brands fa-simplybuilt');
		// endif;

		if (get_field('parqueaderos')) :
			listItems('parqueaderos', 'fa-solid fa-car');
		endif;

		?>

		<!-- --- -->
		<?php mesh_themplate_entry_footer();
		?>
	</footer>

	<!-- .entry-footer -->
</article>
<!-- #post-<?php the_ID(); ?> -->