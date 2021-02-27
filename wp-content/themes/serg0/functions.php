<?php

//подключение стилей темы
add_action( 'wp_enqueue_scripts', 'theme_stylе' );

function theme_stylе() {

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style('mine-style', get_template_directory_uri().'/css/style.css' );

    wp_enqueue_script('jquery-min',get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('easing',get_template_directory_uri().'/js/easing.js');
    wp_enqueue_script('move-top',get_template_directory_uri().'/js/move-top.js');

//
}