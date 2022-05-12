<?php get_header(); ?>




	<center>
<section style="color:brown;" class="caja">
	<?php the_title(); ?>

	<h4>fuente: <?php the_field('fuente'); ?></h4>
	
	<?php the_post_thumbnail("large"); ?>
	<br>
 <?php the_content(); ?>

 
 <h4>fuente: <?php the_field('resumen'); ?></h4>

</section>

<?php get_footer(); ?>