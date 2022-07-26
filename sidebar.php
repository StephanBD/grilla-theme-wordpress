<!-- #SIDEBAR -->

<?php
 if (!is_active_sidebar('sidebar-1')) { return; }; ?>

<aside id="secondary" class="flex-4-md  grow-1 p">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside>
<!-- #secondary -->