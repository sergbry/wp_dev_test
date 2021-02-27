<?php

add_action( 'wp_enqueue_scripts', 'theme_stylе' ); // Подключение стилей темы
add_action( 'after_setup_theme', 'theme_menu' ); // Подключение меню


function theme_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}

function theme_stylе() {

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style('main-style', get_template_directory_uri().'/css/style.css' );

    wp_enqueue_script('jquery-min',get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('easing',get_template_directory_uri().'/js/easing.js');
    wp_enqueue_script('move-top',get_template_directory_uri().'/js/move-top.js');

//
}