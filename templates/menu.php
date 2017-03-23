<?php get_header(); 
/*
Template Name: Menu
*/

?>


	<?php if ( have_posts() ) : ?>


		<?php while ( have_posts() ) : the_post(); ?>


			<?php get_template_part('partials/content' , 'menu'); ?>

				
		<?php endwhile; ?>	

		
	<?php else : ?>
		

		<?php get_template_part('partials/content' , 'none'); ?>

		

	<?php endif; ?>

	



<?php get_footer(); ?>
	

	