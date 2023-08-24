<?php
	// Template Name: Контакты
?>
<?php get_header();?>
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
        <?php
            $loop = CFS() -> get('office_loop');
            foreach($loop as $row) {
              ?>
                <div class="contacts-block">
                  <h2><?= $row['office_title']; ?></h2>
                  <div class="contacts-inner">
                    <div class="contacts-card">
                      <img src="<?= CFS() -> get('contacts_message-icon'); ?>" alt="пишите">
                      <h3><?= CFS() -> get('contacts_message-text'); ?></h3>
                      <p> 
                        <a href='mailto:<?= $row['office_address']; ?>'>
                          <?= $row['office_email']; ?></a>
                      </p>
                    </div>
                    <div class="contacts-card">
                      <img src="<?= CFS() -> get('contacts_call-icon'); ?>" alt="звоните">
                      <h3><?= CFS() -> get('contacts_call-text'); ?></h3>
                      <p><?= $row['office_phone']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <img src="<?= CFS() -> get('contacts_address-icon'); ?>" alt="приезжайте">
                      <h3><?= CFS() -> get('contacts_address-text'); ?></h3>
                      <p><?= $row['office_address']; ?></p>
                    </div>
                  </div>
                  <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/zhovner/1712560404/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Zhovner</a><a href="https://yandex.ru/maps/10997/krymsk/category/doors/184107677/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Двери в Крымске</a><a href="https://yandex.ru/maps/10997/krymsk/category/wrought_iron/184107695/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Кованые изделия в Крымске</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUQJQTXOB" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                </div>
              <?php
            }
          ?>
        </div>
        <div class="col-3 col-lg-12" id="cities">
          <h2><?= CFS() -> get('dealers_title'); ?></h2>
          <?= get_search_form(); ?>
          <ul class="list">
            <?php
              $loop = CFS() -> get('dealer_loop');
              foreach($loop as $row) {
            ?>
              <li>
                <p class="city"><?= $row['dealer_address']; ?></p>
              </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
 <?= get_footer(); ?>