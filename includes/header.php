<header class="l-header">
  <div class="l-header__inner">
    <?php if (is_front_page()) : ?>
      <h1 class="header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    <?php else : ?>
      <p class="header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
    <?php endif; ?>
    <ul class="sns__wrapper">
      <li class="insta__item"><a href="//www.instagram.com/" target="blanc"><img src="<?php echo get_template_directory_uri(); ?>/img/glyph-logo_May2016-min.png" alt="インスタグラムのロゴ"></a></li>
      <li class="tw__item"><a href="//twitter.com/kohei39k" target="blanc"><img src="<?php echo get_template_directory_uri(); ?>/img/2021 Twitter logo - black-min.png" alt="ツイッターのロゴ"></a></li>
    </ul>

    <?php
    // メニューIDを取得している
    if (is_page('contact')) {
      $menu_name = 'contact_nav';
    } elseif (is_page('about')) {
      $menu_name = 'about_nav';
    } elseif (is_page('works')) {
      $menu_name = 'works_nav';
    } else {
      $menu_name = 'global_nav';
    }
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>

    <nav class="header__nav">
      <ul class="header__list">
        <?php foreach ($menu_items as $item) : ?>
          <li class="header__item"><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <nav class="hamburger__nav">
      <ul class="hamburger__list">
        <?php foreach ($menu_items as $item) : ?>
          <li class="hamburger__item"><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
        <?php endforeach; ?>
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