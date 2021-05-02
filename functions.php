<!-- カスタムメニュー機能 -->
<?php 
add_action('init', function() {
  add_theme_support('title_tag');
  add_theme_support('post_thumbnails');
  
  // メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
  ]);
});
/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );
/* ================================================================================ */

?>
