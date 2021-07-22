<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('includes/contact-header'); ?>

<body>
  <?php get_template_part('includes/header'); ?>
  <main class="main">
    <section class="l-sction__wrapper">
      <section class="section__inner container">
        <h2 class="section_title">404 Not Found（ページが見つかりませんでした）</h2>
        <p class="section_text">指定された以下のページは存在しないか、または移動した可能性があります。</p>
        <p class="error_url section_text">URL ：<span><?php echo get_pagenum_link(); ?></span></p>
        <p class="section_text">申し訳ございません。現在表示する記事がありません。</p>
        
        <p class="section_text home_btn"><a href="<?php echo home_url(); ?>">トップページへ</a></p>
      </section>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>