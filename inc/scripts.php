<?php
/**
 * Enqueue scripts and styles.
 */
function testing_scripts() {
	wp_enqueue_style( 'testing-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );

	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display:400,700,400italic', false );
	
    wp_enqueue_script( 'gsap-js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), false, true );

    wp_enqueue_script( 'custom-gsap', get_template_directory_uri() . '/js/dist/custom-gsap-scripts.js﻿', array(), ' ', true );

	wp_enqueue_script( 'testing-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'slide-menu', get_template_directory_uri() . '/js/dist/slide-menu.js', array('jquery'), ' ', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'testing_scripts' );