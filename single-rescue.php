<?php

/**
 * Template Name: Story Page
 */
 get_header();
 ?>

 <div id="primary" class="content-area">
   <main id="main" class="site-main">
  <div class="rescue-name">
  <h2><?php the_title(); ?></h2>
   <p><?php the_field('tagline'); ?></p>
  </div>
  <div class="story-container img-left">
    <?php the_field('introduction'); ?>
    <div class="storyimg"><?php
      $image = get_field('character_image');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $image ) {

      echo wp_get_attachment_image( $image, $size );

      }
     ?></div>
  </div>
  <div class="story-container img-right">
    <div class="storyimg"><?php
      $image = get_field('stats_image');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $image ) {

      echo wp_get_attachment_image( $image, $size );

      }
     ?></div>
    <?php the_field('stats'); ?>
  </div>

  <div class="story-container img-left">
      <?php the_field('call_to_action'); ?>
      <div class="storyimg"><?php
      $image = get_field('action_image');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $image ) {

      echo wp_get_attachment_image( $image, $size );

      }
     ?></div>
  </div>
  <div class="story-container img-right">
    <div class="storyimg"> <?php
      $image = get_field('contact_image');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $image ) {

      echo wp_get_attachment_image( $image, $size );

      }
     ?></div>
    <?php the_field('contact'); ?>
  </div>
   </main><!-- #main -->
 </div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
