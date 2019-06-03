<?php
/*
Template Name: contact-page-tamplate
Template Post Type: post, page
*/
?>
<?php
get_header();
?>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'singlepage-thamb', false);
				echo $thumb_url[0];   ?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">

	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section"><?php the_title(); ?></h2>
		   					<p class="fh5co-lead"><?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 15, '' );
echo $trimmed_content;
?></p>
		   				</div>
<?php endwhile; // end while ?>
<?php endif; // end if       ?>


		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<?php if(get_field("contacts_info_title")): ?>
						<h3><?php the_field("contacts_info_title");?></h3>
						<?php endif; ?>
						<ul>
<?php if(get_field("contacts_info_address")): ?>
							<li class="address"><?php the_field("contacts_info_address");?></li>
<?php endif; ?>

<?php if(get_field("contacts_info_phone")): ?>
<li class="phone"><a href="tel:<?php $contacts_info_phone = get_field("contacts_info_phone"); echo str_replace(array( " ", "(", ")", "-"), "", $contacts_info_phone ); ?>"><?php the_field("contacts_info_phone");?></a></li>
<?php endif; ?>
<?php if(get_field("contact_e_mail")): ?>
<li class="email"><a href="mailto:<?php the_field("contact_e_mail");?>"><?php the_field("contact_e_mail");?></a></li>
<?php endif; ?>
<?php if(get_field("contact_site_link")): ?>
<li class="url"><a href="<?php the_field("contact_site_link");?>"><?php the_field("contact_site_link");?></a></li>
<?php endif; ?>



						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<?php if(get_field("contacts_form_title")): ?>

					<h3><?php the_field("contacts_form_title");?></h3>
<?php endif; ?>

	<? echo do_shortcode( '[contact-form-7 id="353" title="Страница контактов"]');  ?>
					<!-- <form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
							<!--		<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
						<!--			<input type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
							<!--		<input type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
							<!--		<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
							<!--		<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form> -->

				</div>
			</div>

		</div>
	</div>




	<div id="map" class="fh5co-map"></div>



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