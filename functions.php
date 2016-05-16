<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function theme_init() {
	add_theme_support( 'post-thumbnails' );
}

add_action( "after_setup_theme", 'theme_init' );

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

	wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js' );
	wp_enqueue_script( 'Bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jQuery' ), null );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

function add_to_context( $data ) {
	$data['logo'] = new TimberImage( 'wp-content/uploads/2016/05/logo.png' );
	$data['top_menu'] = new TimberMenu( 'top-menu' );
	return $data;
}

add_filter( 'timber_context', 'add_to_context' );
add_action( 'init', 'register_my_menus' );
