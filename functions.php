<?php

function load_styles() {
    wp_enqueue_style('style', get_stylesheet_uri() . '?v=1.61');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
}

function load_scripts() {
    wp_enqueue_script('jquery');
	wp_enqueue_script('boostrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js');
}

function new_excerpt_more($more) {
	global $post;
	// return '...<br/><br/><a href="'. get_permalink($post) . '">Читать дальше...</a>';
}

function my_navigation_template( $template, $class ){
    return ' <nav class="%1$s" role="navigation"> <div class="nav-links">%3$s</div> </nav> ';
}

function register_menu() {
    register_nav_menu('top', 'Верхнее меню');
}

add_action('wp_enqueue_scripts', 'load_styles');
add_action('wp_enqueue_scripts', 'load_scripts');
add_action('after_setup_theme', 'register_menu');

add_filter( 'excerpt_more', 'new_excerpt_more' );
add_filter( 'excerpt_length', function() { return 17; } );
add_filter( 'navigation_markup_template', 'my_navigation_template', 10, 2 );

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

////////////////////   Custom settings

function register_my_option($option_desc, $option_name, $type) {
	register_setting( 'general', $option_name );
	add_settings_field( $option_name . '_setting-id', $option_desc, 'custom_setting_callback_function', 'general', 'default',
		array(
			'id' => $option_name . '_setting-id',
            'option_name' => $option_name,
            'type' => $type,
		)
	);

}

function custom_setting_callback_function( $val ){
    echo ' <input type="' . $val['type'] . '" \
                  name="' . $val['option_name'] . '" \
		          id="' . $val['id'] . '" \
		          value="' . esc_attr( get_option($val['option_name']) ) . '" \
           />';
}

function add_option_field_to_general_admin_page(){
    register_my_option('E-Mail', 'email', 'email');
    register_my_option('Телефон', 'phone', 'phone');
    register_my_option('Адрес', 'address', 'text');
    register_my_option('Инстаграм', 'instagram', 'text');
    register_my_option('ВКонтакте', 'vkontakte', 'text');
    register_my_option('Facebook', 'facebook', 'text');
    register_my_option('Twitter', 'twitter', 'text');
    register_my_option('Telegram', 'telegram', 'text');
}

add_action('admin_menu', 'add_option_field_to_general_admin_page');
