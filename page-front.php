<?php

/**
 * Template Name: Front Page
 */
 get_header();
 ?>


 	<div id="primary" class="front-area content-area">
 		<main id="main" class="site-main">

      <!-- <h1 class=""><?php the_title(); ?></h1> -->


      <?php
      get_template_part( 'template-parts/content', 'jumbotron' );
      get_template_part( 'template-parts/content', 'feature' );
      ?>



 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 // get_sidebar();
 get_footer();
