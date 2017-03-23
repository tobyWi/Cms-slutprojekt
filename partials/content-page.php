		
<section class="content">
		
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>	
			</div>

		</div>		
</section>

<?php if (get_field('content')  ) : ?>

		<?php get_template_part('partials/flexible'); ?>
		
<?php endif; ?>	


</div>

