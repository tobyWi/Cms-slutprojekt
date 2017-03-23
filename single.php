<?php get_header(); ?>


	<div class="container">

		<div class="row mt-100">

			
		<?php if ( have_posts() ) : ?>

			<div class="col-xs-8 border bg-black">

				<section class="content">

					<h1><?php the_title(); ?></h1>

						<?php while ( have_posts() ) : the_post(); ?>
							
							<article class="news">
							
								<p>Published by: <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>, <i class="fa fa-calendar"></i> <?php the_time( get_option("date_format") ); ?> 
								</p>							
					
								<p><?php the_content(); ?></p>	
								<?php the_post_thumbnail('medium'); ?>
							</article>
						
						<?php endwhile; ?>
				</section>	

			</div>

				<div class="col-xs-3 col-xs-offset-1">
					<?php get_sidebar('sidebar-1'); ?>	
				</div>
		</div>

		<div class="row">
			<div class="col-xs-8">
				<?php previous_posts_link('Newer posts'); ?>
				<?php next_posts_link('Older posts'); ?>
			</div>
			
		</div>
	</div>
				

	<?php else : ?>

		<?php get_template_part('partials/content' , 'none'); ?>

	<?php endif; ?>

				
			
<?php get_footer(); ?>
	

	