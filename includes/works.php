<section class="l-section__wrapper" id="works">
  <?php if (is_front_page()) : ?>
    <h2 class="c-about__catch">Works</h2>
    <p class="c-section__text">制作実績</p>
  <?php endif; ?>
  <?php if (have_posts()) : ?>
    <section class="c-c-section__inner works__list">
      <?php while (have_posts()) :
        $q = $wp_query->post_count;
        for ($i = 0; $i < $q; $i++) :
          the_post(); ?>
          <?php if (has_post_thumbnail()) : ?>
            <figure class="works__item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="<?php echo $i * 2; ?>00">
              <a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail(); ?></a>
            </figure>
          <?php else : ?>
            <div class="works__item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="<?php echo $i * 2; ?>00">
              <img src="<?php echo get_template_directory_uri(); ?>/img/grid-sample-min.jpeg" alt="">
            </div>
          <?php endif; ?>
        <?php endfor; ?>
      <?php endwhile; ?>
    </section>
  <?php else : ?>
    <section class="c-c-section__inner">
      <p class="noimage">準備中...</p>
    </section>
  <?php endif; ?>

  <?php if (have_posts()) : ?>
    <section class="slider__wrapper">
      <ul class="slider">
        <?php while (have_posts()) : the_post(); ?>
          <li>
            <?php if (has_post_thumbnail()) : ?>
              <a href="#" target="_blank"><?php the_post_thumbnail(); ?></a>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/grid-sample-min.jpeg" alt="制作物の画像">
            <?php endif; ?>
          </li>
        <?php endwhile; ?>
      </ul>
    </section>
  <?php else : ?>
    <section class="c-c-section__inner">
      <p class="noimage">準備中...</p>
    </section>
  <?php endif; ?>
</section>