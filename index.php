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
			<?php $articulos = new WP_Query([
					'showposts' => 3,
			]);
			while ($articulos->have_posts()) {
				$articulos->the_post();

				the_title();
				echo '<hr>';
			} ?>

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
	<img src="<?php bloginfo('template_url'); ?>/slap1.jpg">
	<br>
	<h3>zas en toda la boca!</h3>
	<br>
La polémica por el golpe que le dio Will Smith al comediante Chris Rock durante la gala del Oscar 2022 continúa y esta vez se ha difundido un video que muestra un ángulo distinto del incidente. Filmada desde detrás de los asientos que ocupaban el protagonista de “Soy leyenda” y su esposa, la también actriz Jada Pinkett- Smith, la toma muestra la reacción de la intérprete ante la actitud de su pareja.

El video, que se viralizó a través de TikTok, muestra que la actriz se ríe del comentario que hace Chris Rock tras la cachetada de Will Smith y parece estar tan sorprendida y dubitativa de la naturaleza del gesto, como lo estuvo la audiencia que siguió la ceremonia en vivo, el pasado domingo 27 de marzo.

“Bueno, Will Smith acaba de sacarme la m...”, dice Chris Rock, mientras el actor se sienta y se aprecia a Jada Pinkett- Smith riéndose junto a la audiencia. Pero luego todo vuelve a la tensión.
</section>

<section style="color:brown;">
	<br>
	<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/x-h6IAjt5-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<br>
“Deja el nombre de mi esposa fuera de tu maldita boca”, grita Will Smith en una toma ya bastante difundida en medios de comunicación y redes sociales, desde que se produjo el vergonzoso momento. Jada Pinkett- Smith, al igual que el resto de público presente, se quedan en silencio, como se aprecia en el video. Otro detalle que llama la atención en este nuevo ángulo difundido por un asistente a la gala del Oscar 2022 es que Jada Pinkett- Smith y Will Smith no intercambian miradas en esta situación de polémica y nunca antes vista en los premios de la Academia.

“Así que esta fue la más grandiosa noche en la historia de la televisión”, dice Chris Rock y se ve a Jada Pinkett- Smith simulando una carcajada, aunque el momento ya se había salido de las manos de su pareja, que nuevamente vuelve a ser criticada por su proceder:

“Todo el mundo dice que Will Smith estaba protegiendo a Jada, ¿pero por qué Jada no estaba protegiendo a Will de arruinar su carrera? Mi esposa me habría hecho la guerra después de sentarme y avergonzarme a mí mismo y a nuestra familia”, tuiteó el actor y comediante Michael Rapaport, conocido por sus roles en “Atypical” y “Friends”.
</section>

<section style="color:brown;">
	<br>
	<img src="<?php bloginfo('template_url'); ?>/slap2.png" width="400">
	<br>
	El dato
Tras el incidente y la polémica suscitada, la Academia de Hollywood invitó al actor Will Smith a enviar una declaración escrita sobre su conducta en la gala de los Oscar. Según un comunicado difundido por agencias como la española EFE, el actor tiene 15 días para enviar esa declaración antes de que el 18 de abril la Academia “tome cualquier medida disciplinaria”, que podría ser la “suspensión, expulsión o cualquier otra sanción permitida en los estatutos”.
<br>
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