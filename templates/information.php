<?php
	// Template Name: Полезная информация
?>
<?php get_header();?>
  <!-- Полезная информация -->
  <div class="information_page">
    <div class="container">
			<!-- Кованная полоса -->
      <div class="row information_title">
        <div class="col-12">
          <h2><?= get_category( 7, ARRAY_A )['name']?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php
				$posts = get_posts( [
					'posts_per_page' => -1,
					'category' => '7',
					'orderedby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
			?>
			<div class="col-3 col-lg-6 col-sm-12">
				<div>
					<?php the_post_thumbnail(''); ?>
					<h3><?= the_title(); ?></h3>  
				</div>
			</div>
			<?php
				}
				wp_reset_postdata();
			?>
			</div>
			<!-- Ручки -->
			<div class="row information_title">
        		<div class="col-12">
          			<h2><?= get_category( 8, ARRAY_A )['name']?></h2>
        		</div>
      		</div>
			<?php
				$posts = get_posts( [
					'posts_per_page' => -1,
					'category' => '8',
					'orderedby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
			?>
			<div class="col-3 col-lg-6 col-sm-12">
				<div>
					<?php the_post_thumbnail(''); ?>
					<h3><?= the_title(); ?></h3>  
				</div>
			</div>
			<?php
				}
				wp_reset_postdata();
			?>
			<!-- Элементы ковки -->
			<div class="row information_title">
				<div class="col-12">
					<h2><?= get_category( 9, ARRAY_A )['name']?></h2>
				</div>
			</div>
			<?php
				$posts = get_posts( [
					'posts_per_page' => -1,
					'category' => '9',
					'orderedby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
			?>
			<div class="col-3 col-lg-6 col-sm-12">
				<div>
					<?php the_post_thumbnail(''); ?>
					<h3><?= the_title(); ?></h3>  
				</div>
			</div>
			<?php
				}
				wp_reset_postdata();
			?>
			<!-- Цвет -->
			<div class="row information_title">
				<div class="col-12">
					<h2><?= get_category( 10, ARRAY_A )['name']?></h2>
				</div>
      		</div>
			<?php
				$posts = get_posts( [
					'posts_per_page' => -1,
					'category' => '10',
					'orderedby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
			?>
			<div class="col-3 col-lg-6 col-sm-12">
				<div>
					<?php the_post_thumbnail(''); ?>
					<h3><?= the_title(); ?></h3>  
				</div>
			</div>
			<?php
				}
				wp_reset_postdata();
			?>
			<!-- Рисунок МДФ 10мм -->
			<div class="row information_title">
				<div class="col-12">
					<h2><?= get_category( 11, ARRAY_A )['name']?></h2>
				</div>
			</div>
	  		<?php
				$posts = get_posts( [
					'posts_per_page' => -1,
					'category' => '11',
					'orderedby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
			?>
			<div class="col-3 col-lg-6 col-sm-12">
				<div>
					<?php the_post_thumbnail(''); ?>
					<h3><?= the_title(); ?></h3>  
				</div>
			</div>
			<?php
				}
				wp_reset_postdata();
			?>
			<!-- Рисунок МДФ 16мм -->
			<div class="row information_title">
				<div class="col-12">
					<h2><?= get_category( 12, ARRAY_A )['name']?></h2>
				</div>
			</div>
			<?php
				$posts = get_posts( [
					'posts_per_page' => -1,
					'category' => '12',
					'orderedby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
			?>
			<div class="col-3 col-lg-6 col-sm-12">
				<div>
					<?php the_post_thumbnail(''); ?>
					<h3><?= the_title(); ?></h3>  
				</div>
			</div>
			<?php
				}
				wp_reset_postdata();
			?>
			<!-- Цвета МДФ -->
			<div class="row information_title">
				<div class="col-12">
					<h2><?= get_category( 13, ARRAY_A )['name']?></h2>
				</div>
			</div>
			<?php
				$posts = get_posts( [
					'posts_per_page' => -1,
					'category' => '13',
					'orderedby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
			?>
			<div class="col-3 col-lg-6 col-sm-12">
				<div>
					<?php the_post_thumbnail(''); ?>
					<h3><?= the_title(); ?></h3>  
				</div>
			</div>
			<?php
				}
				wp_reset_postdata();
			?>
    </div>
  </div>
  <?php get_footer(); ?>