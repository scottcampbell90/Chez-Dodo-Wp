<?php get_header(); ?>
   
<div class="container">

  <div class="row">

    <div class="col-md-8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <a href="<?php the_permalink(); ?> "><h1><?php the_title(); ?></h1></a>  
      <?php the_excerpt(); ?>

      <hr/>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    </div>

    <div class="col-md-4">
      
      <?php get_sidebar(); ?>

    </div>

  </div>

</div>

<?php get_footer(); ?>