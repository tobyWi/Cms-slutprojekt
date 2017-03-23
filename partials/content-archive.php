<article class="news">

	<div class="row">
		
			<div class="col-xs-8">
				
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<p>Published by: <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>, <i class="fa fa-calendar"></i> <?php the_time( get_option("date_format") ); ?> 
				</p>					
				<p><?php the_excerpt(); ?></p>		
				
			</div>
			<div class="col-xs-2 text-right">
			<?php the_post_thumbnail('thumb'); ?>

			</div>
		
	</div>

</article>