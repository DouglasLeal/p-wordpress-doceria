<?php

function doceria_scripts_e_estilos(): void
{
    wp_enqueue_style(
        'my-custom-styles',
        get_template_directory_uri() . '/assets/css/style.css' );
}
add_action('wp_enqueue_scripts', 'doceria_scripts_e_estilos');

function doceria_register_nav_menu(){
    register_nav_menu('menu_principal', 'Menu Principal');
}
add_action('after_setup_theme', 'doceria_register_nav_menu');

function doceria_register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'doceria_register_navwalker');

function doceria_custom_logo(){
    add_theme_support('custom-logo', [null]);
}
add_action('after_setup_theme', 'doceria_custom_logo');