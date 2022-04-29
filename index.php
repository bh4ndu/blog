<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" 
	href="<?php bloginfo('template_url'); ?>/ estilos.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<title>
		noticias
	</title>

 
</head>

<body class="container">
	<header style="color: green;">
		<center>
			


		<img src="<?php bloginfo('template_url'); ?>/vegas.jpg" width="100" height="100" >
		<h1><?php bloginfo('name'); ?></h1>
		<h3>se difunde video de la reaccion de jadda pikett smith</h3>
		<ul class="menu">
			<li><a href="#">parte 1</a></li>
			<li><a href="#">parte 2</a></li>
			<li><a href="#">parte 3</a></li>
		</ul>
		</center>

	</header>

	<center>
<section style="color:brown;">



<?php $articulos = new WP_Query([
					'showposts' => 3,
			]);
			while ($articulos->have_posts()) {
				$articulos->the_post(); ?>






				<?php the_post_thumbnail("medium"); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				


			<?php } ?>






	
</section>

<section style="color:blue;" class="etiquetas">
	<br>
	<br>
	todos los derechos reservados ©
	<br>
	2021
	<br>
	"que tenga un buen dia!"
	<br>

<footer>
	<ul>
		<li><i class="fa fa-twitter-square" aria-hidden="true"></i>
		</li>
		<li><i class="fa fa-facebook-official" aria-hidden="true"></i>
		</li>
		<li>
			<i class="fa fa-youtube-play" aria-hidden="true"></i>
		</li>
		<li>
			<i class="fa fa-instagram" aria-hidden="true"></i>

		</li>
	</ul>
</footer>

</section>

</center>
</body>

</html>