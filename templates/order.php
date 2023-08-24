<?php
	// Template Name: На заказ
?>
<?php get_header();?>
  <!-- На заказ -->
  <div class="to-order">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- На заказ -->
          <?php
            $posts = get_posts( [
                'posts_per_page' => -1,
                'category_name' => 'order',
                'orderedby' => 'title',
                'order' => 'ASC',
                'post_type' => 'post'
            ] );

            foreach( $posts as $post ){
                setup_postdata($post);
          ?>
            <div class="to-order-card">
              <h2><?= the_title(); ?></h2>
              <div class="to-order-card-inner">
                <?php the_post_thumbnail(''); ?>
                <div class="to-order-text">
                <?= the_content(); ?>
                <p><?= CFS() -> get('order_additional'); ?></p>
                </div>
              </div>
          </div>
          <?php
            }
            wp_reset_postdata();
          ?>
          <!-- Форма -->
          <div class="to-order-form">
            <h3><?= CFS() -> get('order-form_title'); ?></h3>
            <?= do_shortcode(CFS() -> get('order-form_shortcode')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>