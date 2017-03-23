<section class="content">

	<div class="row">
		<div class="col-xs-12 text-center">

			<h1><?php the_title(); ?></h1>

		</div>

	</div>

	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-6">
		
			<?php the_content(); ?>

		</div>

		<div class="col-xs-12 col-sm-12 col-md-6">

			<?php the_field('extra_content'); ?>

		</div>

	</div>

</section>