<?php
 if (post_password_required()) { return; } ?>

<div id="comments" class="comments-area mt-3 ">

	<?php
 if (have_comments()) : ?>
		<h2 class="comments-title">
			<?php
 $mesh_themplate_comment_count = get_comments_number(); if ('1' === $mesh_themplate_comment_count) { printf( esc_html__('One thought on &ldquo;%1$s&rdquo;', 'mesh-themplate'), '<span>' . wp_kses_post(get_the_title()) . '</span>' ); } else { printf( esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $mesh_themplate_comment_count, 'comments title', 'mesh-themplate')), number_format_i18n($mesh_themplate_comment_count), '<span>' . wp_kses_post(get_the_title()) . '</span>' ); } ?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
 wp_list_comments( array( 'style' => 'ol', 'short_ping' => true, ) ); ?>
		</ol><!-- .comment-list -->

		<?php
 the_comments_navigation(); if (!comments_open()) : ?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.', 'mesh-themplate'); ?></p>
	<?php
 endif; endif; comment_form(); ?>

</div><!-- #comments -->