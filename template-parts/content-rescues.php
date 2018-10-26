<?php if(have_posts()): while (have_posts()) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'contain' );?>



<?php endwhile; endif; ?>
