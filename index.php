
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php 
		//adicionando os css e javascript do tema e dos plugins que eu estou usando
		wp_head();
	 ?>


</head>
<body>

	<h1>Meu primeiro tema</h1>

	<?php

		//verifica se existe o menu criado
		if(has_nav_menu('primary')){

			wp_nav_menu(array(

				'theme_location' => 'primary',
				'container' => 'nav',
				'container_class' => 'main_menu',
				'fallback_cb' => false
			));

		}
		//adicionando os javascript do final do arquivo
		//php wp_footer();
	?>
</body>
</html>


