<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('includes/contact-header'); ?>

<body>
  <?php get_template_part('includes/header'); ?>
  <main class="main">
    <section class="c-sction__wrapper">
      <section class="c-section__inner container">
        <h2 class="c-about__catch"><?PHP the_title(); ?></h2>
        <?php  the_content(); ?>
      </section>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>