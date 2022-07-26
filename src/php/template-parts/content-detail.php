<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mesh
 */



?>

<article id="post-<?php the_ID(); ?>" class="mb-3">
	<div class="relative">
		<?php mesh_themplate_post_thumbnail(); ?>
		<span class="dashicons dashicons-heart  absolute top left t-red-light btn"></span>
	</div>


	<!-- ------ -->
	<header class="entry-header ">
		<?php the_title('<h1 class="t-3 mb-0">', '</h1>');	?>


		<?php
		// -------------------------
		$mapLocation = get_field("map_location");
		// print_r($mapLocation);

		if (get_field('map_location')) : ?>

			<p class="t-gray ">
				<?php
				// echo  $mapLocation["name"]  ." | " . $mapLocation["city"] . " | " . $mapLocation["state"] . " | " . $mapLocation["country"];
				echo $mapLocation["address"];


				?></p>


		<?php
		endif;
		?>



	</header>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $mapLocation["lat"]; ?>" data-lng="<?php echo $mapLocation["lng"]; ?>">
		</div>
	</div>
	<!-- ------ -->
	<div class="flex my-2 jc-start">

		<!------>
		<?php
		if (get_field('area')) :
			properties('area', 'fa-solid fa-ruler-combined', "Area", "m<sup>2</sup>");
		endif;

		if (get_field('cuartos')) :
			properties('cuartos', 'fa-solid fa-people-roof', "Cuartos");
		endif;

		if (get_field('cocina')) :
			properties('cocina', 'fa-solid fa-kitchen-set', "Cocina");
		endif;

		if (get_field('banos')) :
			properties('banos', 'fa-solid fa-bath', "Baños");
		endif;

		if (get_field('balcon')) :
			properties('balcon', 'fa-brands fa-simplybuilt', "Balcón");
		endif;

		if (get_field('parqueaderos')) :
			properties('parqueaderos', 'fa-solid fa-car', "Parqueaderos");
		endif;
		?>

	</div>

	<!-- ------ -->
	<div class="entry-content">
		<h2 class="bold"><?php _e("Description"); ?></h2>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'mesh-themplate'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'mesh-themplate'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mesh_themplate_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>

<?php
// the_ID();


// $algo = array(18) { 
// ["precio"]=> array(1) { [0]=> string(6) "280000" } 
// ["direccion"]=> array(1) { [0]=> string(10) "aqui cerca" } 

// ["banos"]=> array(1) { [0]=> string(1) "2" } 
// ["cuartos"]=> array(1) { [0]=> string(1) "3" } 
// ["parqueaderos"]=> array(1) { [0]=> string(1) "0" } 
// ["area"]=> array(1) { [0]=> string(2) "50" } 
// ["cocina"]=> array(1) { [0]=> string(0) "" } 
// ["balcon"]=> array(1) { [0]=> string(0) "" } 


// año de contruccion: built date
// pais, departamento, ciudad


// map --------------------------
// array(14) { 
// ["address"]=> string(57) "Cl. 30A #56-113, Medellín, Medellin, Antioquia, Colombia" 
// ["lat"]=> float(6.2332486) 
// ["lng"]=> float(-75.5810278) 
// ["zoom"]=> int(14) 
// ["place_id"]=> string(132) "Ei9DbC4gMzBBICM1Ni0xMTMsIE1lZGVsbMOtbiwgQW50aW9xdWlhLCBDb2xvbWJpYSIwEi4KFAoSCTEgoKu2KUSOEZv-LLxYqu_gEHEqFAoSCY8INj6-KUSOEcpimEboSxEG" 
// ["name"]=> string(15) "Cl. 30A #56-113" 
// ["street_number"]=> string(5) "56113" 
// ["street_name"]=> string(9) "Calle 30A" 
// ["street_name_short"]=> string(7) "Cl. 30A" 
// ["city"]=> string(9) "Medellín" 
// ["state"]=> string(9) "Antioquia" 
// ["post_code"]=> string(6) "050030" 
// ["country"]=> string(8) "Colombia" 
// ["country_short"]=> string(2) "CO" }

// Array ( 
// [address] => #45a-, Cl. 45 #36a45, Medellín, La Candelaria, Medellín, Antioquia, Colombia 
// [lat] => 6.2449693663366 
// [lng] => -75.567666965651 
// [zoom] => 16 
// [place_id] => ChIJuR8ImlYoRI4R9gwoNFSJXYU 
// [street_number] => 36a45 
// [street_name] => Calle 45 
// [street_name_short] => Cl. 45 
// [city] => Medellín 
// [state] => Antioquia 
// [post_code] => 050016 
// [country] => Colombia 
// [country_short] => CO )




?>