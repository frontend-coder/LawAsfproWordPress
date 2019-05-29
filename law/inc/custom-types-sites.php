

// регистрация дргугого типа записи - портфолио
add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('portfolio', array(
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
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
// конец записи - портфолио