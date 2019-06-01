<?php
/*
Template Name: main-page-tamplate
Template Post Type: post, page
*/
?>
<?php
get_header();
?>
	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'singlepage-thamb', false);
										echo $thumb_url[0];   ?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section"><?php the_title(); ?></h2>

		   					<p class="fh5co-lead">

		   					<?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 10, '' );
echo $trimmed_content;
?>



		   					</p>



		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>







	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">

					<div class="row animate-box">

	<div class="testimony-single active text-center">
	<!-- 								<figure>
										<img src="images/user-1.jpg" alt="user">
									</figure> -->
<?php the_content(); ?>

								</div>




					</div>





				</div>
			</div>
		</div>
	</div>
<?php endwhile; // end while ?>
<?php endif; // end if       ?>

<?php
get_footer();
?>
