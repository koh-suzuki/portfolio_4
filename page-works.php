<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>
  <?php get_template_part('includes/header'); ?>
  <main class="main">
    <section class="l-sction__wrapper">
      <section class="l-thumb_wrapper">
        <h1 class="section__title contents__title">Works</h1>
        <p class="section__text contents__text">制作実績</p>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_status' => 'publish',
          'post_type' => 'post', // 投稿タイプスラッグ:以下パラメータ
          'paged' => $paged,
          'posts_per_page' => 5, // 表示件数
          'orderby'     => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <!-- <section class="l-section__inner l-thumb_wrapper"> -->
          <div class="l-content__wrapper">
            <?php while ($the_query->have_posts()) :
              $q = $wp_query->post_count;
              for ($i = 0; $i < $q; $i++) :
                $the_query->the_post(); ?>
                <?php if (has_post_thumbnail()) : ?>
                  <figure class="works_content_item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="<?php echo $i * 2; ?>00">
                    <a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail(); ?></a>
                  </figure>
                <?php else : ?>
                  <div class="works_content_item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="<?php echo $i * 2; ?>00">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/grid-sample-min.jpeg" alt="">
                  </div>
                <?php endif; ?>
              <?php endfor; ?>
            <?php endwhile; ?>
          </div>
        <?php else : ?>
          <section class="l-section__inner">
            <p class="noimage">準備中...</p>
          </section>
        <?php endif; ?>

      </section>
      <div class="pnavi">
        <?php //ページリスト表示処理
        global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
          $paginate_format = '';
          $paginate_base = add_query_arg('paged', '%#%');
        } else {
          $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/', 'paged');
          $paginate_base .= '%_%';
        }
        echo paginate_links(array(
          'base' => $paginate_base,
          'format' => $paginate_format,
          'total' => $the_query->max_num_pages,
          'mid_size' => 1,
          'current' => ($paged ? $paged : 1),
          'prev_text' => '< 前へ',
          'next_text' => '次へ >',
        ));
        ?>
      </div>
      <!-- top -->
      <?php get_template_part('includes/top'); ?>
  </main>
  <?php get_footer(); ?>
</body>

</html>