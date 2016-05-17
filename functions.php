<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function theme_init(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_init');

function register_my_menus() {
	register_nav_menus(
			array(
				'top-menu' => __( 'Top Menu' ),
				'extra-menu' => __( 'Extra Menu' )
			)
	);
}

function theme_enqueue_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
        if(!(wp_script_is('jQuery_lib') || wp_script_is('jquery') || wp_script_is('jQuery'))){
            wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js' );
            wp_enqueue_script( 'Bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jQuery' ),  null );
        }else{
            wp_enqueue_script( 'Bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',  null );
        }
	
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

function add_to_context( $data ) {
	$data['logo'] = new TimberImage( get_template_directory_uri().'/assets/img/logo.png' );
	$data['top_post'] = Timber::get_post(30);
	$data['top_menu'] = new TimberMenu( 'top-menu' );
        $data['sidebar'] = Timber::get_widgets('sidebar-1');
	return $data;
}

add_filter( 'timber_context', 'add_to_context' );
add_action( 'init', 'register_my_menus' );

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    ) );
}