<section class="content">

	<?php if (have_rows('add_image') ) : ?>

		<div class="slider">

		<div class="flexslider">

  		<ul class="slides">
	
			<?php while (have_rows('add_image')) : the_row(); ?>

			    <li>
			      <img src="<?php the_sub_field('image'); ?>" />
			    </li>

			<?php endwhile; ?>
									   
	  	</ul>

	  	</div>

	  	</div>

  	<?php endif; ?>

</section>