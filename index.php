<?php
	// Template Name: Главная
?>
<?php get_header(); ?>
	<!-- Шапка -->
	<div class="header" style="background-image: url(<?=CFS() -> get('promo_bg'); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-12">
					<div class="header-inner">
						<div class="header-catalog">
							<h2><?=CFS() -> get('promo_catalog_title'); ?></h2>
							<div class="doors">
							<?php
								$loop = CFS() -> get('catalog');
								foreach($loop as $row) {
									?>
									<div class="door">
										<div class="name" style="background-image: url(<?= $row['catalog_door_img']; ?>">
											<?= $row['catalog_door_title']; ?>
										</div>
									</div>
							<?php
								}
								?>
						</div>
							<a class="btn" href="/category/<?=CFS() -> get('catalog_btn_link'); ?>">
								<?=CFS() -> get('catalog_btn_text'); ?>
							</a>
						</div>
						<div class="header-order">
							<h2><?=CFS() -> get('promo_order_title'); ?></h2>
							<div class="doors">
							<?php
								$loop = CFS() -> get('order');
								foreach($loop as $row) {
									?>
									<div class="door">
										<div class="name" style="background-image: url(<?= $row['order_door_img']; ?>">
											<?= $row['order_door_title']; ?>
										</div>
									</div>
							<?php
								}
								?>
							</div>
							<a class="btn" href="/<?=CFS() -> get('order_btn_link'); ?>">
								<?=CFS() -> get('order_btn_text'); ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_header('advantages'); ?>
	<!-- О нас -->
	<div class="about" style="background-image: url(<?=CFS() -> get('about_bg'); ?>)">
		<div class="container">
			<div class="row about-inner">
				<div class="col-6 col-lg-12">
					<h2><?=CFS() -> get('about_title'); ?></h2>
					<p><?=CFS() -> get('about_description'); ?></p>
				</div>
				<div class="col-6 col-lg-12 text-center">
					<a href="/category/<?=CFS() -> get('catalog_btn_link'); ?>" class="btn">
					<?=CFS() -> get('about_btn_text'); ?>
				</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Популярные товары -->
	<div class="popular" style="background-image: url(<?=CFS() -> get('bg_2'); ?>)">
		<div class="container">
			<div class="row popular-title">
				<h2><?=CFS() -> get('popular_title'); ?></h2>
			</div>
			<div class="row popular-goods">
			<?php
				$posts = get_posts(array(
				'numberposts' => 8,
				'category_name' => 'doors_popular',
				'oderby' => 'title',
				'oder' => 'ASC',
				'post_type' => 'post'
				));
				foreach( $posts as $post){
				setup_postdata($post);
				?>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<?= the_post_thumbnail(); ?>
					<h3><?= the_title(); ?></h3>
					<div><?=CFS() -> get('door_price'); ?> &#8381;</div>
					<a href="<?= the_permalink(); ?>" class="btn">
						<?=CFS() -> get('door_btn-text'); ?>
					</a>
				</div>
          	<?php
                }
                wp_reset_postdata();
          	?>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="/category/<?=CFS() -> get('catalog_btn_link'); ?>" class="btn">
						<?=CFS() -> get('about_btn_text'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Форма обратной связи -->
	<div class="contacts" style="background-image: url(<?=CFS() -> get('main_form_bg'); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-4 col-lg-12 contacts-item">
					<h3><?=CFS() -> get('main_from_title'); ?></h3>
					<p><?=CFS() -> get('main_form_text'); ?></p>
					<?= do_shortcode(CFS() -> get('main_form_shortcode')); ?>
				</div>
				<?php
              $loop = CFS() -> get('advantages');
              foreach($loop as $row) {
                ?>
                <div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
					<img src="<?= $row['advantages_icon']; ?>" alt="<?= $row['advantages_title']; ?>">
					<h3><?= $row['advantages_title']; ?></h3>
					<p><?= $row['advantages_text']; ?></p>
				</div>
                <?php
              }
            ?>
			</div>
		</div>
	</div>
<?php get_footer();?>
