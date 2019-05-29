<?php
/**
 * law functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package law
 */

if ( ! function_exists( 'lawasf_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lawasf_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on law, use a find and replace
		 * to change 'lawasf' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lawasf', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'lawasf' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'lawasf_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lawasf_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lawasf_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lawasf_content_width', 640 );
}
add_action( 'after_setup_theme', 'lawasf_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lawasf_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lawasf' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lawasf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lawasf_widgets_init' );

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

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function lawasf_debug($data) {
	echo '<pre>' . print_r ($data, 1) . '</pre>';
}

//  include ( get_template_directory() . '/inc/custom-types-sites.php' );


// регистрация дргугого типа записи - практика
add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('practis', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Практика', // основное название для типа записи
			'singular_name'      => 'Практика', // название для одной записи этого типа
			'add_new'            => 'Добавить область деятельности в перечень практики', // для добавления новой записи
			'add_new_item'       => 'Добавление области деятельности в перечень практики', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование область деятельности в перечень практики', // для редактирования типа записи
			'new_item'           => 'Новая область деятельности в перечене практики', // текст новой записи
			'view_item'          => 'Смотреть область деятельности в перечене практики', // для просмотра записи этого типа.
			'search_items'       => 'Искать область деятельности в перечене практики', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Практика деятельности', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-images-alt2',
		// dashicons-admin-users
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail','excerpt' ), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => array(
			'slug'=>'deal-practis',
			'hierarchical'=>false,
			'with_front'=>false,
			'feed'=>false ),

		'query_var'           => true,
	) );
}















if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'counseling-thumb', 610, 435, true ); // 300 в ширину и без ограничения в высоту
add_image_size( 'testimonials-thumb', 100, 100, true ); // 300 в ширину и без ограничения в высоту
add_image_size ('practis-thambnail', 600, 300, true);
//	add_image_size( 'homepage-thumb', 220, 180, true ); // Кадрирование изображения
}






// регистрация дргугого типа записи - Counseling
add_action('init', 'register_post_types1');
function register_post_types1(){
	register_post_type('counseling', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Консультирование', // основное название для типа записи
			'singular_name'      => 'Консультирование', // название для одной записи этого типа
			'add_new'            => 'Добавить область Консультирование в перечень услуг', // для добавления новой записи
			'add_new_item'       => 'Добавление области Консультирование в перечень услуг', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование область Консультирование в перечень услуг', // для редактирования типа записи
			'new_item'           => 'Новая область Консультирование в перечне услуг', // текст новой записи
			'view_item'          => 'Смотреть область Консультирование в перечне услуг', // для просмотра записи этого типа.
			'search_items'       => 'Искать область Консультирование в перечне услуг', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Консультирование', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons dashicons-book',
		// dashicons-admin-users
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array(
		'title',
	//	'editor',
		'thumbnail',
	//	'excerpt'
		 ),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => array(
			'slug'=>'deal-practis',
			'hierarchical'=>false,
			'with_front'=>false,
			'feed'=>false ),

		'query_var'           => true,
	) );
}
// конец записи - дргугого типа записи - Counseling

// регистрация дргугого типа записи - Testimonials
add_action('init', 'register_post_types2');
function register_post_types2(){
	register_post_type('testimonials', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить Отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавить Отзыв', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать Отзыв', // для редактирования типа записи
			'new_item'           => 'Новый Отзыв', // текст новой записи
			'view_item'          => 'Просмотреть Отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать необходимый Отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Отзывы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons dashicons-groups',
		// dashicons-admin-users
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array(
		'title',
	//	'editor',
		'thumbnail',
		'excerpt'
		 ),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => array(
			'slug'=>'deal-practis',
			'hierarchical'=>false,
			'with_front'=>false,
			'feed'=>false ),

		'query_var'           => true,
	) );
}
