<?php

add_theme_support( 'post-thumbnails' ); // Позволяем добавлять миниатюры постов

add_action( 'wp_enqueue_scripts', 'theme_stylе' ); // Подключение стилей темы
add_action( 'after_setup_theme', 'theme_menu' ); // Подключение меню
add_action( 'widgets_init', 'theme_widgets' ); // Регистрация сайдбара

add_filter( 'dynamic_sidebar_params', 'theme_widget_custom_class' ); // добавляем класс верстальщика к классам виджета


function theme_stylе() {

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style('main-style', get_template_directory_uri().'/css/style.css' );

    wp_enqueue_script('jquery-min',get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('easing',get_template_directory_uri().'/js/easing.js');
    wp_enqueue_script('move-top',get_template_directory_uri().'/js/move-top.js');

}

function theme_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}

function theme_widgets() {
    register_sidebar( array(
        'name' => "Right sidebar",
        'id' => 'right-sidebar',
        'description' => 'Add widgets to right sidebar',
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ) );
}

function theme_widget_custom_class($params) {

    $before_widet = $params[0]['before_widget'];
    $after_widget = $params[0]['after_widget'];
    $widget_id = $params[0]['widget_id'];
    $wp_class = $theme_class = '">';
    switch ($widget_id) {
        case 'recent-comments-3':
            $theme_class = ' comments">';
            $params[0]['after_widget'] = $after_widget.'<div class="clearfix"></div>';
            break;
        case 'recent-posts-3':
            $theme_class = ' recent">';
            break;
        case 'archives-3':
            $theme_class = ' archives">';
            break;
        case 'categories-3':
            $theme_class = ' categories">';
            break;
    }

    $params[0]['before_widget'] = str_replace($wp_class,$theme_class,$before_widet);

    return $params;
}
