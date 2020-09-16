<?php

function clonedweb_wp_theme_files(){
    wp_enqueue_script('jquery_plug', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', Null, '3.5.1', false);
    wp_enqueue_script('main_js', get_theme_file_uri('/js/main.js'), Null, '3.5.1', false);
    wp_enqueue_script('bootstrap_js', get_theme_file_uri('/js/bootstrap.min.js'), Null, '3.5.1', false);
    wp_enqueue_style("clonedweb_wp_main_style", get_stylesheet_uri());
    wp_enqueue_style("font-awesome", '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style("bootstrap_css",'//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
    wp_enqueue_style("t_icon",'//tonsberg.modeltheme.com/wp-content/themes/tonsberg/images/favicon.png');
    wp_enqueue_style("font_1",'//fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gnD-A.woff');
    wp_enqueue_style('aos_css','//unpkg.com/aos@next/dist/aos.css');

}
add_action('wp_enqueue_scripts', 'clonedweb_wp_theme_files');
