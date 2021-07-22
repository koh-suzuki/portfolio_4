<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>
  <!-- オープンアニメーション -->
  <div class="start">
    <p class="open__text"><?php bloginfo('name'); ?>
    </p>
  </div>
  <!-- グローバルナビゲーション -->
  <?php get_template_part('includes/header'); ?>

  <main class="main">
    <!-- ウェーブ -->
    <?php get_template_part('includes/main-wave'); ?>
    <!-- About -->
    <?php get_template_part('includes/about'); ?>
    <!-- service -->
    <?php get_template_part('includes/service'); ?>
    <!-- works -->
    <?php get_template_part('includes/works'); ?>
    <!-- contact -->
    <?php get_template_part('includes/contact'); ?>
    <!-- top -->
    <?php get_template_part('includes/top'); ?>
    
  </main>
  <?php get_footer(); ?>
</body>

</html>