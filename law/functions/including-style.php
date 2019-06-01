<?php






/**
 * Enqueue scripts and styles.
 */
function lawasf_scripts() {
//	wp_enqueue_style( 'lawasf-mainstyle', get_stylesheet_uri() );
wp_enqueue_style( 'lawasf-google-font', 'https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800');
wp_enqueue_style( 'lawasf-animate', get_template_directory_uri() . '/assets/css/animate.css');
wp_enqueue_style( 'lawasf-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
wp_enqueue_style( 'lawasf-bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.css');
wp_enqueue_style( 'lawasf-magnificpopupcss', get_template_directory_uri() . '/assets/css/magnific-popup.css');
wp_enqueue_style( 'lawasf-owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
wp_enqueue_style( 'lawasf-owlthemedefault', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
wp_enqueue_style( 'lawasf-flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
wp_enqueue_style( 'lawasf-style', get_template_directory_uri() . '/assets/css/style.css');

wp_enqueue_script( 'lawasf-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array(), '', false );

wp_deregister_script( 'jquery');
wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(),'',true);
wp_enqueue_script( 'jquery');
wp_enqueue_script( 'lawasf-easingjs', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-owlcarouseljs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-flexsliderjs', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-countTojs', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-magnificpopupjs', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-magnificpopupoptions', get_template_directory_uri() . '/assets/js/magnific-popup-options.js', array('jquery'), '', true );
wp_enqueue_script( 'lawasf-mainjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'lawasf_scripts' );






?>