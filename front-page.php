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

    <section class="l-section__wrapper" id="about">
      <h2 class="section__title">About me</h2>
      <section class="l-section__inner">
        <p class="about__catch">
          たったひとつの作品が人を惹きつけ 「思い」 「繋がり」 「価値」 を生み、些細な瞬間を紡いでゆく。そんな 「暖かな」 ものつくりを目指します。
        </p>
        <section class="about__wrapper">
          <figure class="about__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pf_img.jpeg" alt="あおしろのアイコン画像">
          </figure>
          <section class="about__inner">
            <dl class="about__list">
              <dt class="about__title">名称：</dt>
              <dd class="about__text">AOSHIRO WORKS</dd>
              <dt class="about__title">所在地：</dt>
              <dd class="about__text">千葉県内</dd>
              <dt class="about__title">お問い合わせ：</dt>
              <!-- <dd class="about__text">aoshiro.web@gmail.com</dd> -->
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
      </section>
    </section>
    <section class="l-section__wrapper" id="service">
      <h2 class="section__title">Service</h2>
      <section class="l-section__inner ">
        <section class="service__wrapper service__flexbox">
          <section class="service__item ">
            <h3 class="service__title">コーディング</h3>
            <p class="service__sub__title">CODING</p>
            <p class="service__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon1.jpeg" alt="コーディング"></p>
            <p class="service__text">
              デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。
            </p>
          </section>
          <section class="service__item ">
            <h3 class="service__title">LP制作</h3>
            <p class="service__sub__title">LP PRODUCTION</p>
            <p class="service__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon2.jpeg" alt="LP制作"></p>
            <p class="service__text">
              ヒアリングに基づいたプランに沿って、デザインを作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。デザインからコーディングまでお客様のご要望に添って適切に制作いたします。
            </p>
          </section>
          <section class="service__item last">
            <h3 class="service__title">Webサイト制作</h3>
            <p class="service__sub__title">WEBSITE PRODUCTION</p>
            <p class="service__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon3.jpeg" alt="Webサイト制作"></p>
            <p class="service__text">
              お客様の「想い」がより多くの方に伝わるよう心がけ制作いたします。現状の問題点を洗い出し、効果的なプランを作成。制作ではデザインに入る前の事前の準備が特に重要になります。何が必要で何が必要でないのかを判断し、費用対効果の高いWebサイト制作を心がけています。
            </p>
          </section>
        </section>
      </section>
    </section>
    <section class="l-section__wrapper" id="works">
      <h2 class="section__title">Works</h2>
      <?php if (have_posts()) : ?>
        <section class="l-section__inner works__list">
          <?php while (have_posts()) :
            $q = $wp_query->post_count;
            for ($i = 0; $i < $q; $i++) :
              the_post(); ?>
              <figure class="works__item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="<?php echo $i * 2; ?>00">
                <?php if (has_post_thumbnail()) : ?>
                  <a href="#" target="_blank"><?php the_post_thumbnail('thumbnail'); ?></a>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/grid-sample-min.jpeg" alt="制作物の画像">
                <?php endif; ?>
              </figure>
            <?php endfor; ?>
          <?php endwhile; ?>
        </section>
      <?php else : ?>
        <section class="l-section__inner">
          <p class="noimage">準備中...</p>
        </section>
      <?php endif; ?>

      <?php if (have_posts()) : ?>
        <section class="slider__wrapper">
          <ul class="slider">
            <?php while (have_posts()) : the_post(); ?>
              <li>
                <?php if (has_post_thumbnail()) : ?>
                  <a href="#" target="_blank"><?php the_post_thumbnail('thumbnail'); ?></a>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/grid-sample-min.jpeg" alt="制作物の画像">
                <?php endif; ?>
              </li>
            <?php endwhile; ?>
          </ul>
        </section>
      <?php else : ?>
        <section class="l-section__inner">
          <p class="noimage">準備中...</p>
        </section>
      <?php endif; ?>
    </section>

    <section class="l-section__wrapper contact__wrapper" id="contact">
      <h2 class="section__title">Contact</h2>
      <section class="l-section__inner">
        <section class="contact__inner flexbox__center">
          <section class="contact__item">
            <a href="<?php echo esc_attr(home_url()); ?>/contact" target="blanc">
              <h3 class="contact__title">Form</h3>
              <figure class="contact__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/form_icon-min.jpeg" alt="">
              </figure>
              <p class="contact__sub__title">お問い合わせフォーム</p>
            </a>
          </section>
          <section class="contact__item">
            <a href="https://twitter.com/kohei39k" target="blanc">
              <h3 class="contact__title">Twitter</h3>
              <figure class="contact__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/2021 Twitter logo - black-min.png" alt="">
              </figure>
              <p class="contact__sub__title">ツイッターでお問い合わせ</p>
            </a>
          </section>
        </section>
      </section>
      <p class="contact__text">お仕事のご依頼・ご相談はお気軽にお問い合わせください。</p>
    </section>
    <section class="to__top">
      <p class="btn btn-top">
        <a href="#concept">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icon_totop.gif" alt="トップへ戻るボタン">
        </a>
      </p>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>