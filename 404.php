<?php
 get_header('', array('main' => 'flex-8-md grow-1 p')); ?>

<div class="content-m flex gap-2 my-4">
	<main id="primary" class="site-main  grow-1 p">


		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'mesh-themplate'); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mesh-themplate'); ?></p>

				<?php
 get_search_form(); the_widget('WP_Widget_Recent_Posts'); ?>

				<div class="widget widget_categories">
					<h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'mesh-themplate'); ?></h2>
					<ul>
						<?php
 wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10, ) ); ?>
					</ul>
				</div><!-- .widget -->

				<?php
 $mesh_themplate_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'mesh-themplate'), convert_smilies(':)')) . '</p>'; the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$mesh_themplate_archive_content"); the_widget('WP_Widget_Tag_Cloud'); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div>

<?php
get_footer(); 