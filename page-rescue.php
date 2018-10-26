<?php

/**
 * Template Name: Rescue Page
 */
 get_header();
 ?>


 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">
      <?php
          $args = array(
            'post_type' => 'rescue'
          );

          $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts() ): while ($the_query->have_posts() ) :$the_query->the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>

    <?php endwhile; ?>
    <?php endif; ?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 // get_sidebar();
 get_footer();
