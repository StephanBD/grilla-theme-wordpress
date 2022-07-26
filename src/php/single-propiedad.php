<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mesh
 */

// Get all the data 
// $getPostCustom = get_post_custom();

// function field($fieldName)
// {
// 	global $getPostCustom;
// 	if (isset($getPostCustom[$fieldName])) {
// 		return $getPostCustom[$fieldName][0];
// 	}
// 	return false;
// }

get_header('full', array('main' => 'p-3 content-m flex flex-gap-2 ')); ?>
<div class="grow-1 grow-1 w-100%">
	<!-- <div class="flex-8-lg grow-1 grow-1 w-100%"> -->
	<?php
	// content --------------------------------
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', "detail");

		// the_post_navigation(
		// 	array(
		// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'mesh-themplate') . '</span> <span class="nav-title">%title</span>',
		// 		'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'mesh-themplate') . '</span> <span class="nav-title">%title</span>',
		// 	)
		// );

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.


	?>

</div>


<!-- sidebar -->

<div id="secondary" class=" flex-4-lg  grow-1  ">
	<div class="p-3 shadow-sm r-2">
		<p class="t-2 t-green-light bold mb-0 t-center">
			<small>$</small>
			<?php echo number_format(get_field("precio"), 0, ",", "."); ?>
		<p class="t-sm t-gray-light t-center"><del>$350.000</del></p>
		</p>

		<!------>
		<?php
		// foreach ($getPostCustom as $name => $value) {
		// 	echo "<p>" . $name . ": " . field($name) . "</p>";
		// }; 
		?>

		<!-- ------ -->
		<!-- <div class="flex jc-center"> -->

		<!------>
		<?php
		// if (get_field('area')) :
		// 	properties('area', 'fa-solid fa-ruler-combined', "Area", "m<sup>2</sup>");
		// endif;

		// if (get_field('cuartos')) :
		// 	properties('cuartos', 'fa-solid fa-people-roof', "Cuartos");
		// endif;

		// if (get_field('cocina')) :
		// 	properties('cocina', 'fa-solid fa-kitchen-set', "Cocina");
		// endif;

		// if (get_field('banos')) :
		// 	properties('banos', 'fa-solid fa-bath', "Baños");
		// endif;

		// if (get_field('balcon')) :
		// 	properties('balcon', 'fa-brands fa-simplybuilt', "Balcón");
		// endif;

		// if (get_field('parqueaderos')) :
		// 	properties('parqueaderos', 'dashicons-car', "Balcón");
		// endif;
		?>

		<!-- </div> -->

		<!------->
		<div class="flex-col ai-center jc-center">
			<div class="r-circle of-hidden box-5">
				<img src="<?php echo get_avatar_url(get_the_author_meta("ID")); ?>" alt="">
			</div>
			<p class="bold"><?php echo get_the_author_meta("display_name"); ?></p>


		</div>
		<!-- ----- -->
		<form action="" class="py-2">
			<!-- <label for="name">Name</label>
			<input type="text" placeholder="name"> -->
			<div class="relative my">
				<input type="text" class="input b r-1" placeholder="name" name="name" id="name">
				<label for="name">name</label>
			</div>
			<div class="relative my">
				<input type="text" class="input b r-1" placeholder="email" name="email" id="email">
				<label for="email">email</label>
			</div>
			<button class="bg-green-light t-white r-1">
				<i class="dashicons dashicons-email "></i>

				Contact</button>
		</form>
		<!-- ----- -->

	</div>

</div>
<!-- #secondary -->

<!-- footer -->
<?php


get_footer("full");

	// ["precio"]=> array(1) { [0]=> string(6) "280000" } 

	// ["banos"]=> array(1) { [0]=> string(1) "2" } 
	// ["cuartos"]=> array(1) { [0]=> string(1) "3" } 
	// ["parqueaderos"]=> array(1) { [0]=> string(1) "0" } 
	// ["direccion"]=> array(1) { [0]=> string(10) "aqui cerca" } 
	// ["area"]=> array(1) { [0]=> string(2) "50" } 
	// ["cocina"]=> array(1) { [0]=> string(0) "" } 
	// ["balcon"]=> array(1) { [0]=> string(0) "" } 

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






; ?>