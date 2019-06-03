<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки шапки',
		'menu_title'	=> 'Шапка',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки подвала',
		'menu_title'	=> 'Подвал',
		'parent_slug'	=> 'theme-general-settings',
	));

acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройка блока на страницу',
		'menu_title'	=> 'Сквозной блок',
		'parent_slug'	=> 'theme-general-settings',
	));
acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройка блоков для страницы 404',
		'menu_title'	=> '404 страница',
		'parent_slug'	=> 'theme-general-settings',
	));
acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройка блоков для страницы поиска',
		'menu_title'	=> 'Страница поиска',
		'parent_slug'	=> 'theme-general-settings',
	));
}

?>