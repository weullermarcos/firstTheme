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

	//Função para registrar a sidebar - Habilita a aparição de Widgets na área administrativa
	function wm_widgets(){

		register_sidebar(array(
			'name' => __('Meu Primeiro Sidebar', 'firstTheme'),
			'id' => 'wm_sidebar',
			'description' => __('Sidebar para o tema', 'firstTheme'),
			'before_title' => '<h4 class="widget_title">',
			'after_title' => '</h4>',
			'before_widget' => '<div id="%1$s" class="widgets %2$s">',
			'after_widget' => '</div>'
		));


	}

?>

