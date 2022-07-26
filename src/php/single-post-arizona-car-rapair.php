<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mesh
 */

get_header('full', array('main' => ''));
?>


<!-- <p>single</p> -->
<?php
while (have_posts()) :
	the_post();
?>

	<article id="post-<?php the_ID(); ?>" class="flex  relative banner">

		<!-- body -->
		<div class="  arizona-body ">
			<h2 class="t-3">Arizona</h2>
			<h1>Lemon law Attorney</h1>
			<p class="bold pb-3">Purchased A Vehicle Tah Turned Out To Be A Dud?</p>
			<hr class="arizona-line">
			<!-- transform: scaleX(1.5);
   		 transform-origin: right; -->
			<p>Godman Lemon Law PLLC ish ere to provide free case evaluations and legal representation for Lemon Law Refounds. We give clients across the state of Arizona the time and attention their unique cases need to be successful.</p>

			<div class="flex ai-center py-3">
				<p class="flex-7 bold">Request a Free Consultation</p>
				<p class="flex-5 btn bg-yellow">
					<i class="fa-solid fa-phone"></i>
					<span>480-808-1538</span>
				</p>
			</div>
			<!-- 1962 1961 1960 -->

			<div class="flex flex-gap-3">
				<div class="flex-3-sm flex mb-3">
					<div class="flex-12 h-100 flex">
						<img src="<?php echo wp_get_attachment_image_src(1960, "medium")[0]; ?>" alt="" class="arizona-logo">
					</div>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
				</div>
				<!-- ---- -->
				<div class="flex-3-sm flex mb-3">
					<div class="flex-12 h-100 flex">
						<img src="<?php echo wp_get_attachment_image_src(1961, "medium")[0]; ?>" alt="" class="arizona-logo">
					</div>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
				</div>
				<!-- ---- -->
				<div class="flex-3-sm flex mb-3">
					<div class="flex-12 h-100 flex">
						<img src="<?php echo wp_get_attachment_image_src(1962, "medium")[0]; ?>" alt="" class="arizona-logo">
					</div>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
					<i class="fa-solid fa-star t-yellow flex-2"></i>
				</div>
				<!-- ---- -->
			</div>
		</div>

		<!--  -->
		<div class="bg-yellow h-1 w-100% absolute bottom"></div>

		<!-- form ------------------------->

		<div class="arizona-form-content t-center ">

			<div class="arizona-form   t-light py-4 ">
				<p class="mx-5 mb-2">“NO COST TO YOU” REPRESENTATION AT GOODMAN LEMON LAW PLLC </p>
				<p class="arizona-flag t-2">GET A FREE CASE EVALUATION</p>
				<p class="mx-5 t-sm mb-3">Our Lemon Lawyers Look Forward To Working With You</p>

				<div class="mx-5 flex flex-gap-2">
					<input type="text" placeholder="Name" class="bg-white ph-black flex-12">
					<input type="text" placeholder="Email" class="bg-white ph-black flex-6">
					<input type="text" placeholder="Phone" class="bg-white ph-black flex-6">
					<textarea name="" id="" rows="3" placeholder="Message" class="bg-white ph-black flex-12 mb-3"></textarea>
					<!-- --- -->
					<div class="flex-6 bold">
						<p>BEST WAY TO REPLY</p>
						<div class="flex ">
							<div class="flex-6">
								<input type="radio" name="contact" id="email">
								<label for="email">Email</label>
							</div>
							<div class="flex-6">
								<input type="radio" name="contact" id="phone">
								<label for="phone">PHONE</label>
							</div>
						</div>
					</div>
					<button class="bg-yellow t-dark flex-6 bold">SEND</button>
				</div>

			</div>

		</div>
		<?php
		// transform: scale(1.7);
		the_post_thumbnail('large', ["class" => "arizona-img"]); ?>

		<!-- img --------------->


	</article>


<?php
endwhile; // End of the loop.
?>

<!-- #main -->

<!-- footer -->
<?php
// get_sidebar(); 
// echo "</div>" ;

get_footer("full");
