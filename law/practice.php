<?php
/*
 Template Name: Страница для блока practis
 */

 ?>
<?php get_header(); ?>

 <!-- 			<?php
$logotip_site = get_field('practis_fone_picture');
				 lawasf_debug($logotip_site);
				 ?>
 -->
<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
				<?php if(get_field('practis_fone_picture')): ?>
		   	<li style="background-image: url(<?php
			 $practis_fone_picture =  the_field('practis_fone_picture'); echo $practis_fone_picture; ?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section"><?= the_title() ?></h2>
		   					<p class="fh5co-lead">
<?php the_content(); ?>
		   					</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-practice" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Our Legal Practice Area</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
<?php
$args = array (
'post_type' => 'practis',
'numberposts' => 6,
'suppress_filters' => true,
);

// lawasf_debug($posts);
$posts = get_posts( $args );
 foreach( $posts as $post ) {
 	setup_postdata($post);
 ?>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
<?php if(get_field('practic_icons')): ?>
							<i class="<?php the_field('practic_icons'); ?>"></i>
<?php endif; ?>
						</span>
						<div class="desc">
							<h3><a href="<?php the_permalink(); ?>">
								<?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
<?php
}
wp_reset_postdata();
?>
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Testimonials</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/user-1.jpg" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/user-1.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/user-1.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Legal Advice</h2>
					<p>We help people effectively fight their offenders back and successfully defend their own stand!</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Consultation</a></p>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
