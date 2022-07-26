<?php
 get_header('full', array('main' => 'p-3 content-m flex flex-gap-2 ')); ?>
<div class="<?php echo is_full_column("flex-8-md"); ?>">
	<!-- <div class="content-m flex flex-gap-2 my-4">
	<main id="primary" class="site-main flex-8-md grow-1 p"> -->


	<?php if (have_posts()) : ?>

		<header class="page-header">
			<?php
 the_archive_title('<h1 class="page-title">', '</h1>'); the_archive_description('<div class="archive-description">', '</div>'); ?>
		</header><!-- .page-header -->

	<?php
 while (have_posts()) : the_post(); get_template_part('template-parts/content', get_post_type()); endwhile; the_posts_navigation(); else : get_template_part('template-parts/content', 'none'); endif; ?>

</div><!-- #main -->
<?php
 get_footer(); 