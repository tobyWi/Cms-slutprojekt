</main>

<footer>

	<div class="container-fluid">

		<div class="row bottom">

			<div class="hidden-xs col-sm-6 col-md-4">

				<h4>Contact information</h4>

				<?php if (get_field('map_choise' , 'options') ) : ?>

					<?php the_field('iframe_code' , 'options'); ?>
				
				<?php else : ?>

					<i class="fa fa-map-marker"></i><?php the_field('text_adress' , 'options'); ?>
				
				<?php endif; ?>

				<p><i class="fa fa-phone"></i> <?php the_field('phone_number' , 'options'); ?></p>
				<p><i class="fa fa-envelope-o"></i> <?php the_field('email' , 'options') ?></p>

			</div>
									



			<div class="col-xs-6 col-sm-6 col-md-4">

				<h4>Opening Hours</h4>
				Mon-thu:
				<p><?php the_field('open_mon_thu' , 'options') ?></p>
				Friday:
				<p><?php the_field('open_fri' , 'options') ?></p>
				Saturday:
				<p><?php the_field('open_sat' , 'options') ?></p>
				Sunday:
				<p><?php the_field('open_sun' , 'options') ?></p>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-4">

				<h4>Sign up for our newsletter!</h4>

				<?php the_field('contact_form' , 'options'); ?>

					<?php $social_media = get_field('socialmedia_footer' , 'options');

					if ($social_media) : ?>
					<p>
						<ul>
							<?php foreach ($social_media as $item) : ?>

								<li>
									<a href="<?php echo $item['link']?>">
										<i class="fa fa-<?php echo $item['icon']?> fa-1x"></i>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
						</p>
					<?php endif; ?>
				<?php wp_nav_menu(); ?>

				
			</div>
				<p class="copyright hidden-xs hidden-sm">
				<?php updated_copyright_information(get_field('starting_year' , 'options') , get_field('copy_name' , 'options') ) ?></p>

		</div>
	</div>	

</footer>

<?php wp_footer(); ?>

</body>
</html>