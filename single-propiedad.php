<?php
 get_header('full', array('main' => 'p-3 content-m flex flex-gap-2 ')); ?>
<div class="grow-1 grow-1 w-100%">
	<!-- <div class="flex-8-lg grow-1 grow-1 w-100%"> -->
	<?php
 while (have_posts()) : the_post(); get_template_part('template-parts/content', "detail"); if (comments_open() || get_comments_number()) : comments_template(); endif; endwhile; ?>

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
 ?>

		<!-- ------ -->
		<!-- <div class="flex jc-center"> -->

		<!------>
		<?php
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
 get_footer("full"); ; ?>