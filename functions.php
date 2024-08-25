<?php
    //テーマサポート
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // サイドメニューを非表示
function remove_menus() {
    remove_menu_page( 'edit.php' ); // 投稿
    remove_menu_page( 'edit.php?post_type=page' ); // 固定ページ
    remove_menu_page( 'edit-comments.php' ); // コメント
    remove_menu_page( 'themes.php' ); // 外観
    }
    add_action( 'admin_menu', 'remove_menus', 999 );

    //タイトル出力
    function gbtservice_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'gbtservice_title' );

    function add_links () {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com" />';
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />';
    }
    add_action('wp_head','add_links');
    

    function theme_enqueue_styles() {
        wp_enqueue_style( 'ress', get_theme_file_uri('/style/css/ress.css'));
        wp_enqueue_style( 'styles', get_theme_file_uri('/style/css/style.css'));
        wp_enqueue_style( 'noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

    function theme_enqueue_scripts() {
        wp_enqueue_script( 'hamburger', get_theme_file_uri('/js/hamburger.js'), array(), '1.0.0', true );

        if(is_front_page()) {
            wp_enqueue_script( 'text', get_theme_file_uri('/js/text.js'), array(), '1.0.0', true );
        }
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


    /* ---------- カスタム投稿タイプを追加 ---------- */
    add_action( 'init', 'create_post_type' );

    function create_post_type() {

    register_post_type(
        'works',
        array(
        'label' => 'Works',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
        ),
        )
    );
    }