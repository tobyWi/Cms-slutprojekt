
<?php get_header(); 
/* Template Name: Two Column
*/

?>


	<?php if ( have_posts() ) : ?>


		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container bg-black mt-400 border">

				<?php get_template_part('partials/content' , 'twocolumn'); ?>

				<?php if (get_field('content') ) : ?>

					<?php get_template_part('partials/flexible'); ?>


			</div>


				<?php endif; ?>

			
	

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('partials/content' , 'none'); ?>

	<?php endif; ?>



<?php get_footer(); ?>
	

	