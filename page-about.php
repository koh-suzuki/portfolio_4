<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>
  <?php get_template_part('includes/header'); ?>
  <main class="main">
    <section class="c-sction">
      <section class="c-c-section__inner c-about">
        <h1 class="c-section__title contents__title">About us</h1>
        <p class="c-section__text contents__text">私について</p>
      </section>
      <?php get_template_part('includes/about'); ?>
    </section>
    <!-- top -->
    <?php get_template_part('includes/top'); ?>

  </main>
  <?php get_footer(); ?>
</body>

</html>