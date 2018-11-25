<?php if(have_posts()): while (have_posts()) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="jumbotron">
  <div class="jlayer">
    <!-- <p>&nbsp;</P> -->
    <p class="the_quote"><?php the_content(); ?></p>
  </div>
</div>

<?php endwhile; endif; ?>
