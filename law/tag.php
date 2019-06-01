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
<?php // get the current taxonomy term
$term = get_queried_object();
// vars
$image = get_field('category_pic_tags', $term);
?>

				<li style="background-image: url(<?php echo $image['url']; ?>);">
					<div class="overlay-gradient"></div>
					<div class="container">
						<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
							<div class="slider-text-inner desc">
								<h2 class="heading-section">
									<?php
									if( is_tag() )
										echo get_queried_object()->name;
									?>
								</h2>
								<?php
								if ( $cat_desc = category_description() )
									echo '<div class="fh5co-lead">'. $cat_desc .'</div>';
								else
									echo '<div class="fh5co-lead">Описание отсутствует!</div>';

								?>


<!-- <?php
$category_description = category_description();
$category_description_zero = 'Это описание пустой рубрики';
 if (is_category()) {
if(!empty($category_description)) {
      echo '<div class="fh5co-lead">' . $category_description . '</div>';
 } else
 echo '<div class="fh5co-lead">' . $category_description_zero . '</div>';

 }
 ?> -->








</div>
</div>
</div>
</li>


</ul>

</div>
</aside>

<div id="fh5co-blog" class="fh5co-bg-section">
	<div class="container">
		<div class="row">

			<?php if (have_posts()) : while(have_posts()) : the_post(); ?>




				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('mainpage-thamb', array('class' => 'gtrimg-responsive') ); ?>

							<!-- <img class="img-responsive" src="images/project-6.jpg" alt=""> -->

						</a>
						<div class="blog-text">
							<span class="posted_on"><?php the_time('M. j'); ?></span>
							<span class="comment"><a href="<?php the_permalink() ?>#comments"><?php comments_number('0', '1', '%'); ?><i class="icon-speech-bubble"></i></a></span>
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
<?php endwhile; // end while ?>
<!-- pagination section -->



</div>
<nav class="col full pagination">
	<div class="pagination_center">
		<?php wp_corenavi(); ?>




	</div>
</nav>
<?php else: // иначе вывести то что после оператора вставишь
?>


<?php endif; // end if
?>


</div>
</div>


<!-- 	<div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
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

-->

<?php
get_footer();
?>

