<?php

function doceria_register_nav_menu(){
    register_nav_menu('menu_principal', 'Menu Principal');
}
add_action('after_setup_theme', 'doceria_register_nav_menu');

function doceria_register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'doceria_register_navwalker' );