<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>
  <?php get_template_part('includes/header'); ?>
  <main class="main">
    <section class="l-sction__wrapper ">
      <?php if (have_posts()) : ?>
        <section class="l-section__inner l-single__wrapper">
          <?php while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
              <h1 class="single__title"><?php the_title(); ?></h1>
              <div class="single_content">
                <figure class="single_content_img">
                  <?php the_post_thumbnail(); ?>
                </figure>
                <div class="single_content_inner">
                  <span class="content_skill">
                    <?php
                    $skills = get_field('skill');
                    if ($skills) :
                    ?>
                      <?php
                      foreach ($skills as $skill) : ?>
                        <?php echo $skill; ?> /
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </span>
                  <span class="content_date">
                    投稿日：<?php the_time('Y.m.d') ?>
                  </span>
                </div>
                <?php
                if ($post->post_content == "") : ?>
                  <div class="content_text_wrapper">
                  <?php
                else :
                  $content_string = get_the_content();
                  $content_string = str_replace('<p', '<p class="content_text" ', $content_string);
                  remove_filter('the_content', 'wpautop');
                  echo $content_string; ?>
                  </div>
                <?php
                endif;
                ?>
              </div>
            <?php else : ?>
              <div class="works_single_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grid-sample-min.jpeg" alt="">
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
          <?php get_template_part('includes/pagination'); ?>
        </section>
      <?php else : ?>
        <section class="l-section__inner l-single__wrapper">
          <p class="noimage">準備中...</p>
          <?php get_template_part('includes/pagination'); ?>
        </section>
      <?php endif; ?>
    </section>
    <!-- top -->
    <?php get_template_part('includes/top'); ?>
  </main>
  <?php get_footer(); ?>
</body>

</html>