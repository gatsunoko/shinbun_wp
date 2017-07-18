<?php

// function my_bootstrap_scripts() {
//
// wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css');
//
// wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js', array(), '1.0.0', true );
//
// }
//
// add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );


/* jQuery の読み込み */
function add_my_scripts() {
    if(is_admin()) return; //管理画面ではスクリプトは読み込まない
    wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
    //CDN から読み込む
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.4/jquery.min.js', array(), '1.11.4', false);
   wp_enqueue_script( 'jquery-mig', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js', array(), '1.2.1', false);
    }
    add_action('wp_print_scripts', 'add_my_scripts');

    add_theme_support('post-thumbnails');
