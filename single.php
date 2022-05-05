<?php get_header(); ?>




	<center>
<section style="color:brown;" class="caja">
	<?php the_title(); ?>
	<?php the_post_thumbnail("large"); ?>
	<br>
 <?php the_content(); ?>

</section>

<?php get_footer(); ?>