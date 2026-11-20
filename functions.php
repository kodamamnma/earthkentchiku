<?php

function ct_author_page_redirect() {
    if ( is_author() ) {
        wp_redirect( home_url() );
    }
}
add_action( 'template_redirect', 'ct_author_page_redirect' );

add_filter( 'works_rewrite_rules', '__return_empty_array');

function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_post_type_archive('news') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '8' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );

add_filter( 'wpcf7_validate_email', 'wpcf7_validate_email_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_validate_email_filter_extend', 11, 2 );
function wpcf7_validate_email_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){ //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}

// カスタム投稿 施工事例
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'works', [ 
        'labels' => [
            'name'          => 'WORKS', 
            'singular_name' => 'works',    
        ],
        'public'        => true,  
        'has_archive'   => true, 
        'menu_position' => 4, 
        'show_in_rest'  => true, 
        'supports' => array('title','editor','excerpt','thumbnail','custom-fields'), 
    ]);

}


// カスタム投稿 お知らせ
add_action( 'init', 'create_post_type2' );
function create_post_type2() {
    register_post_type( 'news', [ 
        'labels' => [
            'name'          => 'BLOG', 
            'singular_name' => 'blog',    
        ],
        'public'        => true,  
        'has_archive'   => true, 
        'rewrite' => array('slug' => 'blog'),    
        'menu_position' => 5, 
        'show_in_rest'  => true, 
        'supports' => array('title','editor','excerpt','thumbnail','custom-fields'), 
    ]);

}


// カスタム投稿 ブログ
add_action( 'init', 'create_post_type3' );
function create_post_type3() {
    register_post_type( 'blog', [ 
        'labels' => [
            'name'          => 'News', 
            'singular_name' => 'news',
        ],
        'public'        => true,  
        'has_archive'   => true,
        'rewrite' => array('slug' => 'news'),     
        'menu_position' => 6, 
        'show_in_rest'  => true, 
        'supports' => array('title','editor','excerpt','thumbnail','custom-fields'), 
    ]);
}

function add_taxonomy3(){
    register_taxonomy(
        'blog_category',
        'blog',
        array(
            'hierarchical'      => true,
            'label'             => 'カテゴリー',
            'public'            => true,
            'show_ui'           => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
            'rewrite'           => array(
                'slug' => 'news_category', // パーマリンクのベースを指定
                'with_front' => false,     // パーマリンクのベースにフロントを付けるか
            ),
        )
    );
}
add_action( 'init', 'add_taxonomy3');


// アイキャッチ機能追加
add_theme_support( 'post-thumbnails' );

// サムネイルサイズ
add_image_size('thumb', 480, 320, true);

function prevent_cache_for_cf7msm() {
    if (!empty($_COOKIE)) {
        foreach ($_COOKIE as $key => $value) {
            if (strpos($key, 'cf7msm_') === 0) {
                header("Cache-Control: no-cache, must-revalidate, max-age=0");
                header("Pragma: no-cache");
                break;
            }
        }
    }
}
add_action('send_headers', 'prevent_cache_for_cf7msm');



