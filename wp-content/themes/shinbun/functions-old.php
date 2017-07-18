<?php


function my_bootstrap_scripts() {

wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css');

wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );
