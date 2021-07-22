<section class="l-section__wrapper" id="about">
  <?php if (is_front_page()) : ?>
    <h2 class="section__title">About me</h2>
    <p class="section__text">私について</p>
  <?php endif; ?>
  <section class="l-section__inner l-about_wrapper">
    <?php if (is_page('about')) : ?>
      <p class="about__catch">
        人を惹きつけ「思い」「繋がり」「価値」を紡いでゆく
      </p>
    <?php endif; ?>
    <section class="about__wrapper">
      <div class="about__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about_icon.jpeg" alt="">
      </div>
      <section class="about__inner">
        <dl class="about__list">
          <dt class="about__title">名称：</dt>
          <dd class="about__text">鈴木 康平</dd>
          <dt class="about__title">所在地：</dt>
          <dd class="about__text">千葉県内</dd>
          <dt class="about__title">お問い合わせ：</dt>
          <dd class="about__text"><?php bloginfo('admin_email'); ?>
          </dd>
          <dt class="about__title">事業内容：</dt>
          <dd class="about__text">Webサイト制作、LP制作、コーディング</dd>
          <dt class="about__title">スキル：</dt>
          <dd class="about__text">HTML5、 CSS3、 Sass、 JavaScript、 PHP、 WordPress</dd>
        </dl>
        <h2 class="about__name">- 鈴木 康平 Kohei Suzuki - </h2>
        <dl class="about__profile__list">
          <dt class="about__title">
            Instagram：
          </dt>
          <dd class="about__text">
            aoshiro_works
          </dd>
          <dt class="about__title">
            Twitter：
          </dt>
          <dd class="about__text">
            @kohei39k
          </dd>
        </dl>
      </section>
    </section>
    <div class="about_prof">
      <?php
      if (is_page('about')) :
        $content_string = get_the_content();
        $content_string = str_replace('<p', '<p class="about_p" ', $content_string);
        remove_filter('the_content', 'wpautop');

        echo $content_string;
      endif;
      ?>
    </div>
  </section>
</section>