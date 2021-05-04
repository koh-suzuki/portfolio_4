<header class="l-header__wrapper">
  <div class="header__inner">
    <h1 class="header__logo"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
    <ul class="sns__wrapper">
      <li class="insta__item"><a href="https://www.instagram.com/" target="blanc"><img src="<?php echo get_template_directory_uri(); ?>/img/glyph-logo_May2016-min.png" alt="インスタグラムのロゴ"></a></li>
      <li class="tw__item"><a href="https://twitter.com/kohei39k" target="blanc"><img src="<?php echo get_template_directory_uri(); ?>/img/2021 Twitter logo - black-min.png" alt="ツイッターのロゴ"></a></li>
    </ul>
    
    <?php
    // メニューIDを取得している
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    
    $menu_items = wp_get_nav_menu_items($menu -> term_id);
    ?>
    
    <nav class="header__nav">
      <ul class="header__list">
        <?php foreach ($menu_items as $item): ?>        
          <li class="header__item"><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
        <?php endforeach; ?>
        <?php if( is_front_page() ): ?>
          <li class="header__item"><a href="#about">About</a></li>
          <li class="header__item"><a href="#service">Service</a></li>
          <li class="header__item"><a href="#works">Works</a></li>
        <?php endif; ?>
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