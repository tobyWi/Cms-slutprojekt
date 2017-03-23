<?php get_header(); ?>

<div class="container text-center mt-100">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 bg-black border">

			<section class="content">
				<h1><?php single_term_title(); ?></h1>

				<div class="course-menu">

					<?php wp_nav_menu( array( 
						'menu' => 'Termmeny',
						'before' => '| ',
						'after' => ' |'

						)); ?>

				</div>


					<?php if ( have_posts() ) : ?>

		
						<?php while ( have_posts() ) : the_post(); ?>


							<article class="menu">

								<h4>* <?php the_field('dish_name'); ?> *</h4>
								<em>
								<p><?php the_field('dish_price' , $dish); ?> $</p>
								<?php the_field('dish_description'); ?>
								</em>


							</article>

						<?php endwhile; ?>	

					<?php else : ?>

						<?php get_template_part('partials/content' , 'none'); ?>

					<?php endif; ?>

			</section>
		</div>
	</div>
</div>
		
			
<?php get_footer(); ?>
	

	