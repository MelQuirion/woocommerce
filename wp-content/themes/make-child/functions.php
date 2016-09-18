<?php
	add_action('wp_enqueue_scripts', 'ajout_scripts');
	function ajout_scripts() {
		wp_enqueue_style('font-montserra', "https://fonts.googleapis.com/css?family=Montserrat");
		wp_enqueue_style('font-ubuntu', "https://fonts.googleapis.com/css?family=Ubuntu"); 
		wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/css/custom.css');
		wp_enqueue_script( 'font-awesome', "https://use.fontawesome.com/d2c7a9aace.js", '', '', true );


		if (is_page('contact')) {
			wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), '3', true );
			wp_enqueue_script( 'google-map-init', get_stylesheet_directory_uri() . '/js/map.js', array('google-map', 'jquery'), '0.1', true );
		}
	}
	

	add_action( 'template_redirect', 'custom_template_redirect' );

	function custom_template_redirect() {

		// Change le nombre de produits par rangée
		function loop_columns() {
			if (is_shop())
			{
				return 4;
			}
			else {
				return 3;
			}
		}
		add_filter('loop_shop_columns', 'loop_columns', 999);          
	}

?>