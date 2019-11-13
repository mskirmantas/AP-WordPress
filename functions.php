<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('THEME_FOLDER') ) {
	define('THEME_FOLDER', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

    	//wp_register_script(handle, path, dependency, version, load_in_footer);

        wp_deregister_script('jquery');
		//wp_register_script('jquery', THEME_FOLDER . '/assets/js/jquery-2.1.1.js', false, '2.1.1', true);

		//Registration

		// <script src="assets/scripts/jquery.fancybox.min.js"></script>
		
		wp_register_script('jquery', THEME_FOLDER . '/assets/scripts/jquery.js', array(), false , true);
		wp_register_script('fancybox', THEME_FOLDER . '/assets/scripts/jquery.fancybox.min.js', array('jquery'), false , true);
		wp_register_script('carousel', THEME_FOLDER . '/assets/scripts/owl.carousel.min.js', array('fancybox'), false , true);
		wp_register_script('navpoints', THEME_FOLDER . '/assets/scripts/jquery.navpoints.min.js', array('carousel'), false , true);
		wp_register_script('custom', THEME_FOLDER . '/assets/scripts/custom.js', array('navpoints'), false , true);
		wp_register_script('index', THEME_FOLDER . '/assets/scripts/index.js', array('custom'), false , true);
		wp_register_script('fontawesome', 'https://kit.fontawesome.com/5dc0d105f3.js', array(), false , false);

        //Loading
		wp_enqueue_script('jquery');
		wp_enqueue_script('fancybox');
		wp_enqueue_script('carousel');
		wp_enqueue_script('navpoints');
		wp_enqueue_script('custom');
		wp_enqueue_script('index');
		wp_enqueue_script('fontawesome');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	if( defined('THEME_FOLDER') ) {
		//wp_register_style(handle, path, dependency, version, devices);	

		//Registration
		wp_register_style('fancybox', THEME_FOLDER . '/assets/css/jquery.fancybox.min.css', array(), false, 'all');
		wp_register_style('owlcarousel', THEME_FOLDER . '/assets/css/owl.carousel.min.css', array('fancybox'), false, 'all');
		wp_register_style('owltheme', THEME_FOLDER . '/assets/css/owl.theme.default.min.css', array('owlcarousel'), false, 'all');
		wp_register_style('style', THEME_FOLDER . '/assets/css/style.css', array('owltheme'), false, 'all');


		//Loading
		wp_enqueue_style('fancybox');
		wp_enqueue_style('owlcarousel');
		wp_enqueue_style('owltheme');
		wp_enqueue_style('style');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
		'primary-navigation' => __( 'Primary Navigation' ),
		'footer-navigation' => __( 'Footer Navigation' )
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

// Sukuriame WP Options Page:

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// Paveiksliuku dydis:

add_image_size('logo', 109, 35, false);
add_image_size('gal-thumbnail', 233, 233, true);
add_image_size('hd', 1280, 720, false);
add_image_size('full-hd', 1920, 1080, false);

function dump($data){
	echo "<pre>";
	print_r($data);
	echo "</pre";
}
