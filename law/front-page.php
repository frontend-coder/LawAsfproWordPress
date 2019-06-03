<?php
/**
Template Name: main-page-tamplate
**/
?>
<?php
get_header();
?>

<aside id="fh5co-hero" class="js-fullheight">
	<div class="flexslider js-fullheight">

		<?php if( get_field('header_slider_options') ): ?>
			<ul class="slides">
				<?php while( has_sub_field('header_slider_options') ):
		// vars
					$header_slide_fon = get_sub_field('header_slide_fon');
					$header_slide_title = get_sub_field('header_slide_title');
					$header_slide_descr = get_sub_field('header_slide_descr');
					$header_slide_ankor = get_sub_field('header_slide_ankor');
					$header_link = get_sub_field('header_link');

					?>

					<li style="background-image: url(<?php echo( $header_slide_fon[url] ); ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
									<div class="slider-text-inner">
										<h1><?php echo( $header_slide_title ); ?></h1>
										<h2><?php echo( $header_slide_descr ); ?></h2>
										<p><a class="btn btn-primary btn-lg" href="<?php echo( $header_link ); ?>"><?php echo( $header_slide_ankor ); ?></a></p>
									</div>
								</div>
							</div>
						</div>
					</li>


				<?php endwhile; ?>
			</ul>
		<?php endif; ?>


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
						<?php if(get_field("legal_practice_area_title")): ?>
							<h2><?php the_field("legal_practice_area_title");?></h2>
						<?php endif; ?>
						<?php if(get_field("legal_practice_area_discr")): ?>
							<p><?php the_field("legal_practice_area_discr");?>.</p>
						<?php endif; ?>
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
				<?php if(get_field("resent_post_title")): ?>
					<h2><?php the_field("resent_post_title");?></h2>
				<?php endif; ?>
				<?php if(get_field("resent_post_descr")): ?>
					<p><?php the_field("resent_post_descr");?>.</p>

				<?php endif; ?>

			</div>
		</div>
		<div class="row">

			<?php
			$posts = get_posts( array(
				'numberposts' => 3,
    //      'category'    => 'blog',
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'post',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

			foreach( $posts as $post ):
				setup_postdata($post);
				?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('mainpage-thamb'); ?>

						</a>
						<div class="blog-text">
							<span class="posted_on">
								<?php the_time('M. j'); ?></span>
								<span class="comment"><a href="<?php the_permalink() ?>#comments">
									<?php comments_number('0', '1', '%'); ?><i class="icon-speech-bubble"></i></a></span>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 10, '' );
echo $trimmed_content;
?></p>
<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
</div>
</div>
</div>
<?php
endforeach;
wp_reset_postdata();
?>
</div>
</div>
</div>

<div id="fh5co-about">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">

				<?php if(get_field("our_attorneys_title")): ?>
					<h2><?php the_field("our_attorneys_title");?></h2>
				<?php endif; ?>
				<?php if(get_field("our_attorneys_descr")): ?>
					<p><?php the_field("our_attorneys_descr");?>.</p>
				<?php endif; ?>
			</div>
		</div>
		<?php
		$posts = get_posts( array (
			'post_type' => 'attorneys',
			'numberposts' => 3
		));
		if($posts):
// lawasf_debug($posts);
			?>
			<div class="row">
				<?php foreach ($posts as $post ): ?>

					<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/user-2.jpg" alt="Free HTML5 Templates by gettemplates.co"> -->
							<?php if (has_post_thumbnail($post-> ID)) : ?>
								<?= get_the_post_thumbnail($post-> ID, 'attorneys-thamb', array('alt' => 'img-responsive') ); ?>
							<?php endif; //проверка миниатюры ?>


							<h3><?= $post->post_title ?></h3>
							<?php if(get_field("our_attorneys_spesialis")): ?>
								<strong class="role"><?= the_field('our_attorneys_spesialis') ?></strong>
							<?php endif; ?>
							<p><?= $post->post_excerpt ?>.</p>
							<ul class="fh5co-social-icons">
								<?php if(get_field("attony_facebook_icon_one") && get_field("attony_facebook_link_one") ): ?>
								<li><a href="<?php the_field("attony_facebook_link_one");?>"><i class="<?php the_field("attony_facebook_icon_one");?>"></i></a></li>
							<?php endif; ?>
							<?php if(get_field("attony_twitter_icon_one") && get_field("attony_twitter_link_one") ): ?>
							<li><a href="<?php the_field("attony_twitter_link_one");?>"><i class="<?php the_field("attony_twitter_icon_one");?>"></i></a></li>
						<?php endif; ?>
						<?php if(get_field("attony_dribbble_link_one") && get_field("attony_dribbble_icon_one") ): ?>
						<li><a href="<?php the_field("attony_dribbble_link_one");?>"><i class="<?php the_field("attony_dribbble_icon_one");?>"></i></a></li>
					<?php endif; ?>
					<?php if(get_field("attony_github_icon_one") && get_field("attony_github_link_one") ): ?>
					<li><a href="<?php the_field("attony_github_link_one");?>"><i class="<?php the_field("attony_github_icon_one");?>"></i></a></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
<?php endforeach; //attorneys  ?>
</div>
<?php endif; //attorneys
wp_reset_postdata();  ?>
</div>
</div>

<?php if(get_field('legal_advice_fon', 'option')): ?>
	<div id="fh5co-started" style="background-image:url(<?php
		$legal_advice_fon =  the_field('legal_advice_fon', 'option'); echo $legal_advice_fon[url]; ?>);">
	<?php endif; ?>
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<?php if(get_field('legal_advice_title', 'option')): ?>
					<h2><?php the_field('legal_advice_title', 'option');?></h2>
				<?php endif; ?>
				<?php if(get_field('legal_advice_descr', 'option')): ?>
					<p><?php the_field('legal_advice_descr', 'option');?></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">

				<?php if(get_field('legal_advice_link', 'option')): ?>

					<p><a href="<?php the_field('legal_advice_link', 'option');?>" class="btn btn-default btn-lg">Consultation</a></p>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>
