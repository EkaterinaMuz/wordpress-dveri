<?php
	// Template Name: О нас
?>
<?php get_header();?>
  <!-- О компании -->
  <div class="about-company" style="background-image: url(<?= CFS() -> get('about_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="<?= CFS() -> get('about_image'); ?>" alt="О компании">
          <h2><?= the_title(); ?></h2>
          <?= the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_header('advantages'); ?>
  <!-- Технический паспорт -->
  <div class="pasport" style="background-image: url(<?= CFS() -> get('about-passport_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2><?= CFS() -> get('about-passport_title'); ?></h2>
          <p><?= CFS() -> get('about-passport_descr'); ?></p>
          <a 
            href="<?= CFS() -> get('about-passport_file_pdf'); ?>" 
            class="btn" target="_blank">
            <?= CFS() -> get('about-passport_btn-open'); ?>
          </a>
          <a 
            href="<?= CFS() -> get('about-passport_file_doc'); ?>" 
            class="btn" download="">
            <?= CFS() -> get('about-passport_btn-dwnld'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>