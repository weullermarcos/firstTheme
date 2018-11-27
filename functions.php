<?php 

	//INCLUDES:

	require get_template_directory().'/include/setup.php';


	//HOOKS

	//Usando um Hooks para carregar os estilos do tema
	add_action('wp_enqueue_scripts','wm_theme_styles');
	//Usando Hook para incluir Menu
	add_action('after_setup_theme', 'wm_after_setup')	


?>

