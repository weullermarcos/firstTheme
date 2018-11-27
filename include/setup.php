<?php


	function wm_theme_styles(){
		
		//adicionando css
		wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
		//adcionando javascript
		wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true);
	}


	function wm_after_setup(){

		//habilita a aparição dos Menus
		add_theme_support('menus');

		//REgistrar a área do menu - 
		register_nav_menu('primary', __('Primary Menu', 'firstTheme'));

	}


?>

