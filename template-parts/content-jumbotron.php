<?php if(have_posts()): while (have_posts()) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'contain' );?>

<div class="jumbotron">
  <div class="jlayer">
    <p>&nbsp;</P>
  <h1 class="display-4"><?php the_title(); ?></h1>
  <p class="lead"><?php the_content(); ?></p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>
</div>

<?php endwhile; endif; ?>
