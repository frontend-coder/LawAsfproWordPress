<?php
/*
Template Name: counseling-page-tamplate
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
							<h2 class="heading-section">
								<?php the_title(); ?>
							</h2>
							<div class="fh5co-lead"><?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 15, '' );
echo $trimmed_content;
?></div>
						</div>
<?php endwhile; // end while ?>
<?php endif; // end if       ?>


					</div>
				</div>
			</li>


		</ul>

	</div>
</aside>

<div id="fh5co-blog" class="fh5co-bg-section">
	<div class="container">
		<div class="row">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'=>'counseling', // Your post type name
//    'posts_per_page' => 6,
    'paged' => $paged,
);

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();
?>


				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" title="rtgtrd">
					<?php if (has_post_thumbnail($post-> ID)) : ?>
										<?= get_the_post_thumbnail($post-> ID, 'counseling-thumb', array('class' => 'img-responsive') ); ?>
		<!-- <img class="img-responsive" src="images/project-6.jpg" alt=""> -->
						<?php endif; //проверка миниатюры ?>

						</a>
						<div class="blog-text">
							<span class="posted_on"><?php the_time('M. j'); ?></span>
							<span class="comment"><a href="<?php the_permalink() ?>#comments"><?php comments_number('0', '1', '%'); ?> <i class="icon-speech-bubble"></i></a></span>
							<h3><a href="#"><?= $post->post_title ?></a></h3>
							<p><?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 10, '' );
echo $trimmed_content;
?></p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>

<?php
 endwhile;
?>
	</div>
<?php
    $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« пред'),
            'next_text'    => __('след »'),
        ));
    }
}
wp_reset_postdata();
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

