<!DOCTYPE html>
<html>
<head>
	<title>
		<?php wp_title(); ?>
	</title>
		<?php wp_head(); ?>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<style>
		<?php custom_background_image(); ?>
	</style>

</head>

<body <?php body_class(); ?>>

<header>
	<div id="tophead">
		<div class="container-fluid">	
			<div class="row">
				<div class="col-xs-4">
					<a href="<?php bloginfo('url'); ?>" class="logo">
						<?php bloginfo("site_name"); ?>
					</a>
					
				</div>

				<div class="col-xs-8">

					<div class="row">

						<div class="col-xs-12 social-header hidden-xs">

							<ul>

								<?php if (get_field('phone_number_header' , 'options') ) : ?>

								<li>
									<?php echo '<i class="fa fa-phone"></i> ' . get_field('phone_number' , 'options'); ?>
								</li>

								<?php endif; ?>
						
								<?php $social_media = get_field('socialmedia_header' , 'options');

									if ($social_media) : ?>
							
										<?php foreach ($social_media as $item) : ?>

											<li>
												<a href="<?php echo $item['link']?>">
													<i class="fa fa-<?php echo $item['icon']?> fa-1x"></i>
												</a>
											</li>

										<?php endforeach; ?>

									<?php endif; ?>
						
							</ul>
						
						</div>
					</div>
					<div class="row">

						<div class="col-xs-12">

							<div class="icon">

								<i class="fa fa-bars fa-4x hidden-sm hidden-md hidden-lg"></i><i class="fa fa-times fa-4x"></i>
							</div>

							<nav class="topnav hidden-xs visible-sm-up">
								<?php wp_nav_menu( array( 'menu' => 'Huvudmeny' )); ?>
							</nav>  

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="dropdown">
	<?php wp_nav_menu( array( 'menu' => 'Huvudmeny' )); ?>
	</div>
</header>

<main>

<?php if (get_field('opening_hours_header' , 'options' ) ) : ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 text-right">
				<span class="opening_hours"><?php opening_hours(); ?></span>
			</div>
		</div>
	</div>
<?php endif; ?>
