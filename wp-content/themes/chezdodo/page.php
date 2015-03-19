<?php get_header(); ?>

<section id="about">

	<div class="container">

		<div class="row">
			
			<div class="col-md-8">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row about">
	          		<div class="section-heading col-sm-8 col-sm-offset-2">
	            		<h2><?php the_title(); ?></h2>
	          		</div>
        		</div>
				    
				<div class="row about">
          			<div class="col-md-12 about-us">
          				<?php the_post_thumbnail(); ?>
				  		<?php the_content(); ?>
				  	</div>
				  </div>

				<?php endwhile; else: ?>
				  <p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>


			</div>

			<div id="menu" class="col-md-4">
				
				<?php get_sidebar(); ?>

			</div>

		</div><!-- /.row -->
	
	</div>
   
</section>


<?php get_footer(); ?>