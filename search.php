<?php get_header(); ?>


	<div class="container">
					
		<div class="row mt-100">

			<div class="col-xs-8 border bg-black">

				<section class="content">

					<h1>Search results | <?php the_search_query(); ?></h1>

							<?php if ( have_posts() ) : ?>

								<?php while ( have_posts() ) : the_post(); ?>
								
									<div class="row">
										<div class="col-xs-6 news">
											<article class="news">
												<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
												<p>Published by: <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>, <i class="fa fa-calendar"></i> <?php the_time( get_option("date_format") ); ?> 
												</p>								
												<p><?php the_excerpt(); ?></p>		
											</article>
										</div>
										<div class="col-xs-6 text-center">
										<?php the_post_thumbnail('thumb'); ?>
										</div>
									</div>
							
								<?php endwhile; ?>	
							
							<?php else : ?>

								<article class="news">
									<h3>Sorry! No resluts!</h3>	
								</article>

							<?php endif; ?>
				</section>

			</div>

			<div class="col-xs-3 col-xs-offset-1">
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

	</div>		
			
<?php get_footer(); ?>
	

	