<?php
/*
 Template Name: Страница для блока practis
 Template Post Type: practis
  */

 ?>
<?php get_header(); ?>


<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
<?php if(get_field('practis_fone_picture')): ?>
		   	<li style="background-image: url(<?php
			 $practis_fone_picture =  the_field('practis_fone_picture'); echo $practis_fone_picture[url]; ?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">
		   						<?php the_title(); ?> </h2>
		   					<p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by the fine folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
<?php endif; ?>

		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">

					<div class="row animate-box">

	<div class="testimony-single active text-center">
<?php the_content(); ?>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>
