<?php
/*
Template Name: 404-page-tamplate
*/
?>

<?php
get_header();
?>
<aside id="fh5co-hero" class="js-fullheight">
	<div class="flexslider js-fullheight">
<!-- 			<?php
$error_pic = get_field('fon_error_page', 'option');
				 lawasf_debug($error_pic[url]);
				 ?> -->
		<ul class="slides">
<?php if(get_field('fon_error_page', 'option')): ?>
<li style="background-image: url(<?php $error_pic = get_field('fon_error_page', 'option'); echo $error_pic[url]; ?>);">
	<?php endif; ?>

				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">

						<div class="slider-text-inner desc">
				<?php if(get_field('error_title', 'option')): ?>
							<h2 class="heading-section">
								<?php the_field('error_title', 'option');?>
							</h2>
				<?php endif; ?>
<?php if(get_field('error_text', 'option')): ?>
<div class="fh5co-lead">
<?php the_field('error_text', 'option');?>
</div>
<?php endif; ?>
</div>


</div>
</div>
</li>


</ul>

</div>
</aside>

<?php
get_footer();
