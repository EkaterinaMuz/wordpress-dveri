<?php
	// Template Name: Наши работы
?>
<?php get_header(); ?>
  <!-- Наши работы -->
  <div class="portfolio" style="background-image: url(img/background.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="gallery">
            <?php
              $loop = CFS() -> get('portfolio');
              foreach($loop as $row) {
                ?>
                <a href="<?= $row['portfolio_image']; ?>" data-caption="<?= $row['portfolio_description']; ?>">
                  <img src="<?= $row['portfolio_image']; ?>" alt="<?= $row['portfolio_title']; ?>">
                </a>
                <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>