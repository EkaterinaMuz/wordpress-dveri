<?php
	// Template Name: Политика ко
?>
<?php get_header();?>
  <!-- Текст политики конфиденциальности -->
  <div class="policy" style="background-image: url(<?= CFS() -> get('bg_policy'); ?>)">
    <div class="container">
      <div class="row">
        <h2><?php the_title(); ?></h2>
      </div>
      <?php the_content(); ?>
    </div>
  </div>
  <?php get_footer(); ?>