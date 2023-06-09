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

function doceria_change_logo_class($html){
    $html = str_replace( 'custom-logo', 'img-logo', $html );
    $html = str_replace( 'img-logo-link', 'navbar-brand', $html );

    return $html;
}
add_filter('get_custom_logo', 'doceria_change_logo_class');

function doceria_metabox_contato()
{
    global $post;

    if("page-contato.php" == get_post_meta($post->ID, '_wp_page_template', true)){
        add_meta_box(
            'doceria_metabox_contato',
            'Telefones:',
            'doceria_callback_contato',
            'page'
        );
    }
}
add_action('add_meta_boxes', 'doceria_metabox_contato');

function doceria_callback_contato($post)
{
    $telefone = get_post_meta($post->ID, '_telefone', true);
    $whatsapp = get_post_meta($post->ID, '_whatsapp', true);
    ?>
    <label for="texto_home_1">Telefone</label>
    <input type="text" name="telefone" style="width: 100%" value="<?= $telefone ?>"/>
    <br>
    <br>
    <label for="texto_home_2">Whatsapp</label>
    <input type="text" name="whatsapp" style="width: 100%" value="<?= $whatsapp ?>"/>
    <?php
}

function doceria_salvando_dados_metabox_contato($post_id)
{
    foreach ($_POST as $key => $value) {
        if ($key !== 'telefone' && $key !== 'whatsapp') {
            continue;
        }

        update_post_meta(
            $post_id,
            '_' . $key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'doceria_salvando_dados_metabox_contato');