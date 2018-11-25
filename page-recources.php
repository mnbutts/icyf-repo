<?php

/**
 * Template Name: Resources Page
 */
 get_header();
 ?>


 	<div id="primary" class="content-area rescuecontent">
 		<main id="main" class="site-main">

      <header class="entry-header">
    		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    	</header><!-- .entry-header -->

      <div class="resources_section">
        <h3><?php the_field('title1'); ?></h3> <!-- this is the header -->
        <ul>
          <!-- First Link -->
          <li><?php
          $link = get_field('resource1');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description1'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
          <!-- Second Link -->
          <li><?php
          $link = get_field('resource2');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description2'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
          <!-- Third Link -->
          <li><?php
          $link = get_field('resource3');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description3'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
        </ul>
      </div>
      <div class="resources_section">
        <h3><?php the_field('title2'); ?></h3> <!-- this is the header -->
        <ul>
          <!-- Fourth Link -->
          <li><?php
          $link = get_field('resource4');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description4'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
          <!-- Fifth Link -->
          <li><?php
          $link = get_field('resource5');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description5'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
          <!-- Sixth Link -->
          <li><?php
          $link = get_field('resource6');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description6'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
        </ul>
      </div>
      <div class="resources_section">
        <h3><?php the_field('title3'); ?></h3> <!-- this is the header -->
        <ul>
          <!-- Seventh Link -->
          <li><?php
          $link = get_field('resource7');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description7'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
          <!-- Eight Link -->
          <li><?php
          $link = get_field('resource8');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description8'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
          <!-- Ninth Link -->
          <li><?php
          $link = get_field('resource9');
          if( $link ): ?>
          	<a class="resource_button" href="<?php echo $link; ?>"><?php the_field('description9'); ?></a>
          <?php endif; ?></li> <!-- this is the link -->
        </ul>
      </div>


 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 // get_sidebar();
 get_footer();
