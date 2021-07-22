<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('includes/contact-header'); ?>

<body>
  <?php get_template_part('includes/header'); ?>
  <main class="main">
    <section class="l-sction__wrapper">
      <section class="section__inner container">
        <h2 class="section__title"><?PHP the_title(); ?></h2>
        <?php  the_content(); ?>
      </section>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>