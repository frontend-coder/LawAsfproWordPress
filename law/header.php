<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package law
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Law &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
<?php
$favicon_site = get_field('favicon_site', 'option');
 if ($favicon_site) :
$favicon_site_url = $favicon_site['url'];
?>
	<link rel="shortcut icon" href="<?php echo esc_url($favicon_site_url);?>" type="image/x-icon">
<?php endif; ?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
<!--

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script> -->
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

<!-- 	<div class="fh5co-loader"></div> -->

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
<!-- //<?php lawasf_debug(); ?> -->
<?php if(get_field('all_logotip_site', 'option')) :?>
<div id="fh5co-logo"><a href="<?php echo home_url('/'); ?>">
	<?php $uiuii = the_field('all_logotip_site', 'option'); echo $uiuii; ?>
	<span>.</span></a></div>
<?php endif; ?>
					</div>
					<div class="col-xs-10 text-right menu-1">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>


					<!-- 	<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="practice.html">Practice Areas</a></li>
							<li><a href="won.html">Won Cases</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Sign Up</span></a></li>
						</ul>
 -->


					</div>
				</div>

			</div>
		</div>
	</nav>























