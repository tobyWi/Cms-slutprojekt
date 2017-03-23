<section class="content">

	<div class="row text-center">

		<div class="col-xs-12">

			<h2><?php the_sub_field('title'); ?></h2>

		</div>

		<?php $images = get_sub_field('gallery'); ?>

		<?php if ($images) : ?>

			<?php foreach ($images as $image) : ?>

				<div class="col-xs-6 col-sm-<?php the_sub_field('img_row'); ?> gallery text-center">

					<img src="<?php echo $image['sizes']['thumbnail'] ?>" />
					
				</div>

			<?php endforeach; ?>

		<?php endif; ?>


	</div>

</section>