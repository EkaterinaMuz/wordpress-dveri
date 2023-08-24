<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php
			if(is_404()) {
				echo 'Ошибка 404';
			} elseif(is_category('doors')) {
				echo single_cat_title();
			}
			else {
				the_title();
			}
		?>
	</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="logo">
					<a href="/">
						<?php the_custom_logo(); ?>
					</a>
				</div>
				<?php 
					wp_nav_menu([
						'theme_location' => 'top',
						'menu' => 'Главное меню сайта',
						'container' => '',
					])
				?>
				<div class="phone">
				<?php
					$settings = get_posts( [
					'posts_per_page' => 1,
					'category_name' => 'settings',
					'post_type' => 'post'
					] );

					foreach( $settings as $post ){
					setup_postdata($post);
					?>
					<a href="tel:<?=CFS() -> get('header_phone_link'); ?>">&#9742;
						<?=CFS() -> get('header_phone'); ?>
					</a>
				<?php
					}
					wp_reset_postdata();
				?>
				</div>
			</div>
		</div>
	</div>