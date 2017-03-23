
<?php get_header(); 
/* 
Template Name: Full-Width

*/

?>

	<?php if ( have_posts() ) : ?>


		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container-fluid bg-black mt-400 text-center border">

			<?php get_template_part('partials/content' , 'page'); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('partials/content' , 'none'); ?>

	<?php endif; ?>



<?php get_footer(); ?>
	

	