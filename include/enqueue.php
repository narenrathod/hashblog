<?php
/*
* Enqueue all the fonts, javascript, bootstrap, font-awesome, custom css and stylesheet 
*/

function hashblog_scripts_and_stylesheet(){
	
	// Stylesheets 
	// google fonts 
	wp_enqueue_style( 'Google-fonts', 'https://fonts.googleapis.com/css?family=Lato' );

	// Bootstrap stylesheet
	wp_enqueue_style( 'bootstrap-4-stylesheet', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

	// font-awsome stylesheet
	wp_enqueue_style( 'font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	



	// Custom Project style
	wp_enqueue_style( 'custom-stylesheet', get_template_directory_uri() . '/assets/css/custom_project.css' );
	
	// Theme stylesheet
	wp_enqueue_style( 'Theme-stylesheet', get_stylesheet_uri());


	// Scripts
	// Jquery library
	wp_enqueue_script( 'jquery-library','https://code.jquery.com/jquery-3.4.1.js', array(), '1.0.0', true );

	// Bootstrap scripts 
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );

	// mmenu scripts 
	wp_enqueue_script( 'mmenu-script', get_template_directory_uri() . '/assets/js/jquery.mmenu.min.all.js', array(), '1.0.0', true );

	// custom project scripts 
	wp_enqueue_script( 'custom-project-script', get_template_directory_uri() . '/assets/js/custom_project.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action('wp_enqueue_scripts','hashblog_scripts_and_stylesheet');