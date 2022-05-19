<?php get_header(); ?>

	<center>
<section style="color:brown;">



<?php $articulos = new WP_Query([
					'showposts' => 3,
					'post_type' => 'empleos'
			]);
			while ($articulos->have_posts()) {
				$articulos->the_post(); ?>




<div class="row caja">

				<div class="col-sm-3"><?php the_post_thumbnail("thumbnail"); ?></div>
				<div class="col-sm-9">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p>publicado por <?php the_author(); ?> el <?php the_time("d/m/Y"); ?>
				<?php the_excerpt(); ?></div>
				
</div>

			<?php } ?>






	
</section>

<section style="color:blue;" class="etiquetas">
	<br>
	<br>
	todos los derechos reservados ©
	<br>
	2022
	<br>
	"que tenga un buen dia!"
	<br>

<?php get_footer(); ?>