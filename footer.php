<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <?php 
					wp_nav_menu([
						'theme_location' => 'bottom',
						'menu'  => 'Главное меню сайта',
						'container'  => '',
                        'items_wrap' => '%3$s'
					])
				?>
                <span class="accent-color">&copy;</span><?=bloginfo('name') ?>, 2020-<?= date('Y'); ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>