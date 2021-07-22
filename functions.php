<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
});
// メニューをサポート
register_nav_menus([
  'global_nav' => 'グローバルナビゲーション',
  'works_nav' => '制作実績ナビゲーション',
  'contact_nav' => 'お問い合わせナビゲーション',
  'about_nav' => '私についてナビゲーション',
  'footer_nav' => 'フッターナビゲーション',
]);

//ファイルの読み込みに関する記述をまとめた関数
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style(
    'my_style', 
    get_template_directory_uri() . '/css/style.css',
    array(), 
    date('YmdHi')
  );
  wp_enqueue_style(
    'aos_style', 
    get_template_directory_uri() . '/css/aos.css', 
    array(), 
    date('YmdHi')
  );
});
  // wp_enqueue_style('my_style', get_template_directory_uri().'/css/style.css');
  // wp_enqueue_style('aos_style', get_template_directory_uri() . '/css/aos.css');
  
  // wp_enqueue_style('aos_style', get_template_directory_uri() . '/css/style.css', array(), date('YmdHi'));
  // wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js', false, true);

//上記のファイルの読み込みに関する記述をまとめた関数を、「wp_enqueue_scripts」アクションにフックさせる。
// add_action( 'add_files');

// wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', '', date('YmdGi', filemtime(get_template_directory() . '/css/style.css')), '');



/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define('WP_SCSS_ALWAYS_RECOMPILE', true);
/* ================================================================================ */
