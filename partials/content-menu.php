<div class="container-fluid text-center mt-100">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 bg-black border">

			<section class="content">

				<h1><?php the_title(); ?></h1>

				<div class="course-menu">

					<?php wp_nav_menu( array( 
						'menu' => 'Termmeny',
						'before' => '| ',
						'after' => ' |'

						)); ?>

				</div>


				<?php the_field('menu_information'); ?>


					
		
				<?php if (have_rows('menu_section') ) : ?>

					<?php while ( have_rows('menu_section') ) : the_row(); ?>


						
						<?php if ( get_row_layout() == 'menu_block' ) : ?>

							<?php $description = get_sub_field('menu_description'); ?>
							<?php $tasting = get_sub_field('tasting_menu_select'); ?>


							<article class="menu">

								<h2><?php the_sub_field('menu_title'); ?></h2>


							
								<?php if ($description) : ?>

									<blockquote><em><?php the_sub_field('menu_description');?></em></blockquote>

								<?php endif; ?>



								<?php if (have_rows('add_dish') ) : ?>

									<?php while (have_rows('add_dish') ) : the_row(); ?>

										<?php $dish = get_sub_field('dish_select'); ?>


												<h4>* <?php the_field('dish_name' , $dish); ?> *</h4>
												

												<?php if ($tasting == false ): ?>
													
													<em>												
													<p><?php the_field('dish_price' , $dish); ?> $</p>	

												<?php endif; ?>
							
													<?php the_field('dish_description' , $dish); ?>
													</em>	
										
									<?php endwhile; ?>


									<?php if ($tasting) : ?>

										<p>Menu price: <?php the_sub_field('tasting_menu_price'); ?>$</p>

									<?php endif; ?>


								<?php endif; ?>


							</article>


						<?php endif; ?>

					
					<?php endwhile; ?>

				

				<?php endif; ?>

			</section>

		</div>
	</div>
</div>