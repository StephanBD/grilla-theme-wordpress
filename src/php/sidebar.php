<!-- #SIDEBAR -->

<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mesh
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}; ?>

<aside id="secondary" class="flex-4-md  grow-1 p">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside>
<!-- #secondary -->