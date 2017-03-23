<?php get_header(); ?>


	<div class="container">


		<?php if ( have_posts() ) : ?>

			<div class="row mt-100">

				<div class="col-xs-12 col-sm-12 col-md-8 border bg-black">

					<section class="content">

						<h1><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h1>

							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part('partials/content' , 'archive'); ?>
							

							<?php endwhile; ?>

					</section>

				</div>

				<div class="hidden-xs hidden-sm col-md-3 col-md-offset-1">

						<?php get_sidebar('sidebar-1'); ?>	
				</div>

			</div>
			
			<div class="row">
				<div class="col-xs-8">
					<?php the_posts_pagination(array(
						'screen_reader_text' => ' ',
						'prev_text' => __('Newer'),
						'next_text' => __('Older')



					)); ?>
				</div>
				
			</div>
						

		<?php else : ?>

			<?php get_template_part('partials/content' , 'none'); ?>

		<?php endif; ?>

	</div>
		


				
			
<?php get_footer(); ?>
	

	