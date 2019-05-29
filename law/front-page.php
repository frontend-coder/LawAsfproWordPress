<?php
/*
Template Name: main-page-tamplate
Template Post Type: post, page
*/
?>
<?php
get_header();
?>

<aside id="fh5co-hero" class="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(assets/images/img_bg_1.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h1>Expert Legal Solutions</h1>
								<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
								<p><a class="btn btn-primary btn-lg" href="#">Make An Appointment</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(assets/images/img_bg_2.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h1>Business Law</h1>
								<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
								<p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(assets/images/img_bg_3.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h1>Defend Your Constitutional Right with Legal Help</h1>
								<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
								<p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>

<div id="fh5co-counter" class="fh5co-counters fh5co-bg-section">
	<div class="container">
		<div class="row">

			<div class="col-md-3 text-center animate-box">
				<?php if(get_field('anima_number_icon_one')) :?>
					<span class="icon"><i class='<?php the_field('anima_number_icon_one');?>'></i></span>
				<?php endif; ?>
				<?php if(get_field('anima_number_one')) :?>
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php the_field('anima_number_one');?>" data-speed="5000" data-refresh-interval="50"></span>
				<?php endif; ?>
				<?php if(get_field('anima_number_title_one')) :?>
					<span class="fh5co-counter-label"><?php the_field('anima_number_title_one');?></span>
				<?php endif; ?>
			</div>

			<div class="col-md-3 text-center animate-box">
				<?php if(get_field('anima_number_icon_two')) :?>
					<span class="icon"><i class="<?php the_field('anima_number_icon_two');?>"></i></span>
				<?php endif; ?>
				<?php if(get_field('anima_number_two')) :?>
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php the_field('anima_number_two');?>" data-speed="5000" data-refresh-interval="50"></span>
				<?php endif; ?>
				<?php if(get_field('anima_number_title_two')) :?>
					<span class="fh5co-counter-label"><?php the_field('anima_number_title_two');?></span>
				<?php endif; ?>
			</div>
			<div class="col-md-3 text-center animate-box">
				<?php if(get_field('anima_number_icon_three')) :?>
					<span class="icon"><i class="<?php the_field('anima_number_icon_three');?>"></i></span>
				<?php endif; ?>
				<?php if(get_field('anima_number_three')) :?>
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php the_field('anima_number_three');?>" data-speed="5000" data-refresh-interval="50"></span>
				<?php endif; ?>
				<?php if(get_field('anima_number_title_three')) :?>
					<span class="fh5co-counter-label"><?php the_field('anima_number_title_three');?></span>
				<?php endif; ?>
			</div>
			<div class="col-md-3 text-center animate-box">
				<?php if(get_field('anima_number_icon_foure')) :?>
					<span class="icon"><i class="<?php the_field('anima_number_icon_foure');?>"></i></span>
				<?php endif; ?>
				<?php if(get_field('anima_number_foure')) :?>
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php the_field('anima_number_foure');?>" data-speed="5000" data-refresh-interval="50"></span>
				<?php endif; ?>
				<?php if(get_field('anima_number_title_foure')) :?>
					<span class="fh5co-counter-label"><?php the_field('anima_number_title_foure');?></span>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>
<!--  			<?php
$logotip_site = get_field('vimeo_picture_fon');
				 lawasf_debug($logotip_site);
				 ?> -->

				 <div id="fh5co-content">
				 	<?php if(get_field('vimeo_picture_fon')): ?>
				 		<div class="video fh5co-video" style="background-image: url(<?php
				 			$vimeo_picture_fon =  the_field('vimeo_picture_fon'); echo $vimeo_picture_fon[url]; ?>);">
				 		<?php endif; ?>
				 		<?php if(get_field('vimeo_video_url')): ?>
				 			<a href="<?php the_field('vimeo_video_url');?>" class="popup-vimeo">
				 				<i class="icon-video2"></i></a>
				 			<?php endif; ?>
				 			<div class="overlay"></div>
				 		</div>
				 		<div class="choose animate-box">
				 			<div class="fh5co-heading">
				 				<?php if(get_field('vimeo_title')): ?>
				 					<h2><?php the_field('vimeo_title');?></h2>
				 				<?php endif; ?>
				 				<?php if(get_field('vimeo_descr')): ?>
				 					<?php the_field('vimeo_descr');?>
				 				<?php endif; ?>
				 			</div>


				 			<div class="progress">
				 				<?php if(get_field("vimeo_first_skils") && get_field("vimeo_first_skils_pesent")): ?>
				 				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field("vimeo_first_skils_pesent");?>%">
				 					<?php the_field("vimeo_first_skils");?> <?php the_field("vimeo_first_skils_pesent");?> %
				 				</div>
				 			<?php endif; ?>
				 		</div>


				 		<div class="progress">
				 			<?php if(get_field("vimeo_second_skils") && get_field("vimeo_second_skils_pesent")): ?>
				 			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field("vimeo_second_skils_pesent");?>%">
				 				<?php the_field("vimeo_second_skils");?> <?php the_field("vimeo_second_skils_pesent");?> %
				 			</div>
				 		<?php endif; ?>
				 	</div>

				 	<div class="progress">
				 		<?php if(get_field("vimeo_third_skils") && get_field("vimeo_third_skils_pesent")): ?>
				 		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field("vimeo_third_skils_pesent");?>%">
				 			<?php the_field("vimeo_third_skils");?> <?php the_field("vimeo_third_skils_pesent");?> %
				 		</div>
				 	<?php endif; ?>
				 </div>
				 <div class="progress">
				 	<?php if(get_field("vimeo_foure_skils") && get_field("vimeo_foure_skils_pesent")): ?>
				 	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field("vimeo_foure_skils_pesent");?>%">
				 		<?php the_field("vimeo_foure_skils");?> <?php the_field("vimeo_foure_skils_pesent");?> %
				 	</div>
				 <?php endif; ?>
				</div>
			</div>
		</div>

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
					$posts = get_posts ( array (
						'post_type' => 'practis',
						'numberposts' => 6
					));
					if ( $posts ) :
// lawasf_debug($posts);
						$i=0; foreach($posts as $post ) :?>
						<div class="col-md-4 text-center animate-box">
							<div class="services">
								<span class="icon">
									<?php if(get_field('practic_icons')): ?>
										<i class="<?= the_field("practic_icons"); ?>"></i>
									<?php endif; ?>
								</span>
								<div class="desc">
									<h3><a href="#"><?= $post->post_title ?></a></h3>
									<?= $post->post_excerpt ?>
								</div>
							</div>
						</div>
						<?php
						$i++; endforeach;
					endif;
					wp_reset_postdata();
					?>

				</div>
				<div class="col-md-12 text-center animate-box">

					<?php if(get_field('links_on_practika')): ?>
						<p><a class="btn btn-primary btn-lg btn-learn" href="<?php the_field('links_on_practika');?>">View More</a></p>
					<?php endif; ?>
				</div>
			</div>
		</div>



		<div id="fh5co-project">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<?php if(get_field("consult_block_title")): ?>
						<h2><?php the_field("consult_block_title");?></h2>
 <?php endif; ?>
	<?php if(get_field("consult_block_discr")): ?>
						<p><?php the_field("consult_block_discr");?></p>
	<?php endif; ?>

					</div>
				</div>
			</div>


<?php
$posts = get_posts( array (
'post_type' => 'counseling',
'numberposts' => 6
));

if($posts):
// lawasf_debug($posts);
?>
			<div class="container">
				<div class="row">

<?php foreach ($posts as $post ): ?>
					<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
						<a href="#">
<?php if (has_post_thumbnail($post-> ID)) : ?>
<!-- //'counselingthumbnail', -->
<?= get_the_post_thumbnail($post-> ID, 'counseling-thumb', array('class' => 'img-responsive') ); ?>
	<!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/project-6.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive"> -->
	<?php endif; //проверка миниатюры ?>

							<h3><?= $post->post_title ?></h3>
							<span><?= the_field('consultir_proff') ?>. <?= the_field('consultir_proffname') ?></span>
						</a>
					</div>
<?php endforeach; //counseling  ?>
				</div>
			</div>
		<?php endif; //counseling
			wp_reset_postdata();  ?>
		</div>





		<div id="fh5co-testimonial" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box">

					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<?php if(get_field("name_block_testimonials")): ?>
						<h2><?php the_field("name_block_testimonials");?></h2>
 <?php endif; ?>


					</div>

				</div>


<?php
$posts = get_posts( array (
'post_type' => 'testimonials'
//'numberposts' => 6
));

if($posts):
// lawasf_debug($posts);
?>



				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row animate-box">
							<div class="owl-carousel owl-carousel-fullwidth">
<?php foreach ($posts as $post ): ?>

								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
<?php if (has_post_thumbnail($post-> ID)) : ?>
<!-- //'counselingthumbnail', -->
<?= get_the_post_thumbnail($post-> ID, 'testimonials-thumb', array('class' => 'gtrimg-responsive') ); ?>
<?php endif; //проверка миниатюры ?>
								</figure>
<span><?= $post->post_title ?>, <a href="<?= the_field('testimony_social_link') ?>" class="twitter">
<?php if(get_field("testimony_social_network")): ?>
	<?= the_field('testimony_social_network') ?>
<?php endif; ?>
	</a></span>
										<blockquote>
											<p>&ldquo;<?= $post->post_excerpt ?>.&rdquo;</p>
										</blockquote>
									</div>
								</div>
<?php endforeach; //testimonials  ?>
							</div>
						</div>
					</div>
				</div>
		<?php endif; //counseling
			wp_reset_postdata();  ?>



			</div>
		</div>

		<div id="fh5co-consult">

 	<?php if(get_field('forma_os_block_picture')): ?>
			<div class="video fh5co-video" style="background-image: url(<?php
				 			$forma_os_block_picture =  the_field('forma_os_block_picture'); echo $forma_os_block_picture[url]; ?>);">
			</div>
<?php endif; ?>
			<div class="choose animate-box">
				<div class="fh5co-heading">
<?php if(get_field("forma_os_block")): ?>
					<h2><?php the_field("forma_os_block");?></h2>
<?php endif; ?>
				</div>
<? echo do_shortcode( '[contact-form-7 id="165" title="Контактная форма 1"]');  ?>
			</div>
		</div>

		<div id="fh5co-blog" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Recent Post</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/project-4.jpg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">Nov. 15th</span>
								<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
								<h3><a href="#">Legal Consultation</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/project-2.jpg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">Nov. 15th</span>
								<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
								<h3><a href="#">Criminal Case</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/project-3.jpg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">Nov. 15th</span>
								<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
								<h3><a href="#">Business Law</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-about">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Our Attorneys</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/user-2.jpg" alt="Free HTML5 Templates by gettemplates.co">
							<h3>Jean Smith</h3>
							<strong class="role">Counsel</strong>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/user-2.jpg" alt="Free HTML5 Templates by gettemplates.co">
							<h3>Hush Raven</h3>
							<strong class="role">Head of International Practice</strong>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/user-2.jpg" alt="Free HTML5 Templates by gettemplates.co">
							<h3>Alex King</h3>
							<strong class="role">Managing Partner, Attorney</strong>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-started" style="background-image:url(assets/images/img_bg_2.jpg);">
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



		<?php
		get_footer();
		?>



