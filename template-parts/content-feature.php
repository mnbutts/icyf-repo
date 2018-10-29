
<div>

<!-- <h2> Featured Rescues </h2> -->
  <?php
    $args = array(
      'post__in'=> array(1762,1732, 1764),
      'post_type' => 'rescue'
    );

    $the_query = new WP_Query($args);
?>

  <?php if ($the_query->have_posts() ): while ($the_query->have_posts() ) :$the_query->the_post(); ?>

<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
<p class="card-text"><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>" class="btn rescuebtn btn-primary">View Rescue</a>
</div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
