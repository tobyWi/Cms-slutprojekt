
<?php if (have_rows('content') ) : ?>

	<?php while (have_rows('content') ) : the_row(); ?>

		<?php if ( get_row_layout() == 'recent_news' ) : ?>
	
			<?php get_template_part('partials/section' , 'recent'); ?>

		<?php elseif (get_row_layout() == 'slider' ) : ?> 		
		
			<?php get_template_part('partials/section' , 'slider'); ?>	
			
		<?php elseif (get_row_layout() == 'image_gallery' ) : ?> 	
			
			<?php get_template_part('partials/section' , 'gallery') ?>
		
		<?php elseif (get_row_layout() == 'break_line' ) : ?>
			
			<?php get_template_part('partials/section' , 'breakline'); ?> 

		<?php elseif (get_row_layout() == 'blurb' ) : ?>
			
			<?php get_template_part('partials/section' , 'blurb'); ?>

		<?php endif; ?> 

	<?php endwhile; ?>

<?php endif; ?>