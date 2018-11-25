<?php

/**
 * Template Name: Rescue Page
 */
 get_header();
 ?>


 	<div id="primary" class="content-area rescuecontent">
 		<main id="main" class="site-main">

      <header class="entry-header">
    		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    	</header><!-- .entry-header -->

      <?php
          $args = array(
            'post_type' => 'rescue'
          );

          $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts() ): while ($the_query->have_posts() ) :$the_query->the_post(); ?>

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p class="card-text"><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="btn rescuebtn btn-primary">View Rescue</a>
    </div>
  </div>





    <?php endwhile; ?>
    <?php endif; ?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 // get_sidebar();
 get_footer();
