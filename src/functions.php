<?php
    function my_setup(){
        add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
        add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
        add_theme_support('title-tag'); // titleタグ自動生成
        add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        ));
    }
    add_action('after_setup_theme', 'my_setup');

    /* CSSとJavaScriptの読み込み */
    function my_script_init() {
        // jQueryの読み込み
        wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);

        // その他のスクリプトとスタイルの読み込み
        wp_enqueue_style('google-fonts-montserrat', '//fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap', false);
        wp_enqueue_style('swiper-css', '//unpkg.com/swiper@8/swiper-bundle.min.css', false);
        wp_enqueue_script('swiper-js', '//unpkg.com/swiper@8/swiper-bundle.min.js', array('jquery'), '8.0.0', true);
        wp_enqueue_script('main-js', get_theme_file_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
        wp_enqueue_style('style-css', get_theme_file_uri() . '/assets/css/style.css', array(), '1.0.1');
    }
    add_action('wp_enqueue_scripts', 'my_script_init');

    // crossorigin属性を持つタグに対する対応
    function add_rel_preconnect( $html, $handle, $href, $media ) {
        if ( 'google-fonts-montserrat' === $handle || 'google-fonts-noto' === $handle || 'swiper' === $handle ) {
            $html = <<<EOT
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            $html
            EOT;
        }
        return $html;
    }

    // Contact Form 7で自動挿入されるPタグ、brタグを削除
    add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
    function wpcf7_autop_return_false() {
    return false;
    }

    add_filter( 'style_loader_tag', 'add_rel_preconnect', 10, 4 );
