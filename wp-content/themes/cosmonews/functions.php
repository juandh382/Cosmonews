<?php

function estilos() {
    wp_enqueue_style('estilos-padre', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('estilos-personalizados', get_stylesheet_directory_uri() . '/css/estilos-personalizados.css', array(), '1.1');
}


add_action('wp_enqueue_scripts', 'estilos');