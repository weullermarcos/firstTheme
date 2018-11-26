<?php 

	function wm_theme_styles(){


		//adicionando css
		wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
		//adcionando javascript
		wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true);

	}

	//Usando um Hooks para carregar os estilos do tema
	add_action('wp_enqueue_scripts','wm_theme_styles');


?>

