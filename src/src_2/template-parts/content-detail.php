<?php
 ?>

<article id="post-<?php the_ID(); ?>" class="mb-3">
	<div class="relative">
		<?php mesh_themplate_post_thumbnail(); ?>
		<span class="dashicons dashicons-heart  absolute top left t-red-light btn"></span>
	</div>


	<!-- ------ -->
	<header class="entry-header ">
		<?php the_title('<h1 class="t-3 mb-0">', '</h1>'); ?>


		<?php
 $mapLocation = get_field("map_location"); if (get_field('map_location')) : ?>

			<p class="t-gray ">
				<?php
 echo $mapLocation["address"]; ?></p>


		<?php
 endif; ?>



	</header>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $mapLocation["lat"]; ?>" data-lng="<?php echo $mapLocation["lng"]; ?>">
		</div>
	</div>
	<!-- ------ -->
	<div class="flex my-2 jc-start">

		<!------>
		<?php
 if (get_field('area')) : properties('area', 'fa-solid fa-ruler-combined', "Area", "m<sup>2</sup>"); endif; if (get_field('cuartos')) : properties('cuartos', 'fa-solid fa-people-roof', "Cuartos"); endif; if (get_field('cocina')) : properties('cocina', 'fa-solid fa-kitchen-set', "Cocina"); endif; if (get_field('banos')) : properties('banos', 'fa-solid fa-bath', "Baños"); endif; if (get_field('balcon')) : properties('balcon', 'fa-brands fa-simplybuilt', "Balcón"); endif; if (get_field('parqueaderos')) : properties('parqueaderos', 'fa-solid fa-car', "Parqueaderos"); endif; ?>

	</div>

	<!-- ------ -->
	<div class="entry-content">
		<h2 class="bold"><?php _e("Description"); ?></h2>
		<?php
 the_content( sprintf( wp_kses( __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'mesh-themplate'), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post(get_the_title()) ) ); wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__('Pages:', 'mesh-themplate'), 'after' => '</div>', ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mesh_themplate_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>

<?php
 ?>