<?php
 get_header('full', array('main' => '')); ?>
<div>


	<?php
 while (have_posts()) : the_post(); get_template_part('template-parts/content', 'page'); if (comments_open() || get_comments_number()) : comments_template(); endif; endwhile; ?>

</div>

<?php
 get_footer("full"); 