<header class="l-header__wrapper">
  <div class="header__inner">
    <h1 class="header__logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <ul class="sns__wrapper">
      <li class="insta__item"><a href="https://www.instagram.com/" target="blanc"><img src="<?php echo get_template_directory_uri(); ?>/img/glyph-logo_May2016-min.png" alt="インスタグラムのロゴ"></a></li>
      <li class="tw__item"><a href="https://twitter.com/kohei39k" target="blanc"><img src="<?php echo get_template_directory_uri(); ?>/img/2021 Twitter logo - black-min.png" alt="ツイッターのロゴ"></a></li>
    </ul>
    <nav class="header__nav">
      <ul class="header__list">
        <li class="header__item"><a href="#about">About</a></li>
        <li class="header__item"><a href="#service">Service</a></li>
        <li class="header__item"><a href="#works">Works</a></li>
        <li class="header__item"><a href="<?php the_permalink(); ?>">Contact</a></li>
      </ul>
    </nav>
    <nav class="hamburger__nav">
      <ul class="hamburger__list">
        <li class="hamburger__item"><a href="/html/contact.html">Contact</a></li>
        <p class="hamburger__text">お仕事のご依頼・ご相談はお気軽に<br>お問い合わせください。</p>
      </ul>
    </nav>
    <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
      <span class="p-hamburger__line">
        <span class="u-visuallyHidden">
          メニューを開閉する
        </span>
      </span>
    </button>
  </div>
</header>