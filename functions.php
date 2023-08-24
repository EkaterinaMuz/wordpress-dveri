<?php
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
    add_action('after_setup_theme', 'add_features');
    add_action('after_setup_theme', 'add_menu');

    function add_scripts_and_styles() {
        if(is_page_template( 'templates/portfolio.php' ) || is_single()) {
            wp_enqueue_style('bagguetteBox_styles', get_template_directory_uri() . '/assets/css/baguetteBox.min.css', array(), null, 'all');
            wp_enqueue_script('bagguetteBox_script', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', array(), null, true);
            
        }
        if(is_page_template( 'templates/contacts.php' )) {
            wp_enqueue_script('list', get_template_directory_uri() . '/assets/js/list.min.js', null, null, true);
            
        }
        if(is_category( 'doors' )) {
            wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', null, null, true);
            
        }
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    function add_features() {
        add_theme_support('post-thumbnails', array('post'));
        add_theme_support( 'custom-logo', [
            'height'      => 50,
            'width'       => 100,
            'flex-width'  => false,
            'flex-height' => false,
            'header-text' => '',
            'unlink-homepage-logo' => true
        ] );
        add_image_size('adv-thumbnail', 100, 100, true);
    }

    function add_menu() {
        register_nav_menus([
            'top' => 'Главное меню сайта',
            'bottom' => 'Политика конфиденциальности'
        ]);
    }

    add_action( 'init', 'create_post_types' );
    add_action( 'init', 'create_taxonomy' );

    function create_taxonomy() { 
        register_taxonomy('popular', 'doors_type', [
            'label'                 => 'Популярные', 
		    'labels'                => [
			'name'              => 'Популярные',
			'singular_name'     => 'Популярная'
            ]
            ]);
    }

    function create_post_types() {
        register_post_type( 'doors_type',  array(
            'label'  => 'Двери',
            'labels' => [
                'name'               => 'Двери', // основное название для типа записи
                'singular_name'      => 'Дверь', // название для одной записи этого типа
                'add_new'            => 'Добавить дверь', // для добавления новой записи
                'add_new_item'       => 'Добавление двери', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование двери', // для редактирования типа записи
                'new_item'           => 'Новое описание', // текст новой записи
                'view_item'          => 'Смотреть дверь', // для просмотра записи этого типа.
                'search_items'       => 'Искать дверь', // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'menu_name'          => 'Двери', // название меню
            ],
            'description'            => '',
            'public'                 => true,
            // 'publicly_queryable'  => null, // зависит от public
            'show_ui'             => true, // зависит от public
            'show_in_nav_menus'   => true, // зависит от public
            'show_in_menu'           => true, // показывать ли в меню админки
            'show_in_admin_bar'   => true, // зависит от show_in_menu
            'show_in_rest'        => null, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => null,
            'menu_icon'           => null,
            //'capability_type'   => 'post',
            //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical'        => true,
            'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'doors'),
            'query_var'           => true,
    
        ));
    }

?>
