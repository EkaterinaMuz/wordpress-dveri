<?php get_header(); ?>
  <!-- Страница одной двери -->
  <div class="door-template">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-12">
          <div class="door-gallery">
          <?php
              $loop = CFS() -> get('gallery');
              foreach($loop as $row) {
                ?>
                <a href="<?= $row['gallery_photo']; ?>" data-caption="<?= $row['gallery_description']; ?>">
                  <img src="<?= $row['gallery_photo']; ?>" alt="<?= $row['gallery_title']; ?>">
                </a>
                <?php
              }
            ?>
          </div>
        </div>
        <div class="col-6 col-lg-12 door-description">
          <h2><?= the_title(); ?>
            <span>
              <?php 
                if(CFS() -> get('gallery_checkbox')) {
                  echo CFS() -> get('gallery_check_true');
              } else {
                  echo CFS() -> get('gallery_check_false'); 
              }
              ?>
            </span>
          </h2>
          <p><?= the_content(); ?></p>
          <h3> <?= CFS() -> get('door_price'); ?> &#8381;</h3>
          <?php
            $settings = get_posts( [
              'posts_per_page' => 1,
              'category_name' => 'settings',
              'post_type' => 'post'
            ] );

            foreach( $settings as $post ){
              setup_postdata($post);
            ?>
             <?= do_shortcode(CFS() -> get('door_form_shortcode')); ?>
          <?php
                }
                wp_reset_postdata();
          ?>
          <table>
            <caption><?= CFS() -> get('door_property_title'); ?></caption>
            <?php
              $loop = CFS() -> get('properties');
              foreach($loop as $row) {
                ?>
                <tr>
                  <td ><?= $row['door_key']; ?></td>
                  <td><?= $row['door_property']; ?></td>
                </tr>
                <?php
              }
            ?>
          </table>
          <a class="btn" href="/<?= CFS() -> get('info_slug'); ?>">
            <?= CFS() -> get('info_btn_title'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>