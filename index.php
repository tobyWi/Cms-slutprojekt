<?php get_header(); ?>
		
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_title(); ?>

		<?php endwhile; ?>


	<?php else: ?>

		<?php get_template_part('partials/content' , 'none'); ?>

	<?php endif; ?>

<?php get_footer(); ?>