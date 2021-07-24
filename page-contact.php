<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('includes/contact-header'); ?>

<body>
  <?php get_template_part('includes/header'); ?>
  <main class="main">
    <section class="c-sction">
      <section class="c-section__inner container">
        <h2 class="c-section__title contents__title">Contact</h2>
        <p class="c-section__text contact__form__text">
          <span class="form_text_inner">制作の依頼・ご相談などお気軽に</span><span class="form_text_inner">お問い合わせくださいませ。</span>
          <br>
          <span class="form_text_inner">下記フォームより<span class="form_text_inner">わかる範囲で</span><span class="form_text_inner">ご記入ください。</span><span class="form_text_inner">必須の項目は必ずご記入お願いします。</span>
        </p>
        <?php remove_filter('the_content', 'wpautop'); ?>
        <?php  the_content(); ?>
      </section>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>