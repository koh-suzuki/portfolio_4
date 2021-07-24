<footer class="footer">
  <ul class="footer_nav">
    <?php
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    foreach ($menu_items as $item) :
    ?>
      <li class="footer_item">
        <a href="<?php echo esc_attr($item->url); ?>" target="blank">
          <?php echo esc_html($item->title); ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <section class="c-footer">
    <div class="c-footer_inner">
      <nav class="c-footer__nav">
        <ul class="c-footer__list flexbox__start">
          <?php
          if (is_page('contact')) {
            $menu_name = 'contact_nav';
          } elseif (is_page('about')) {
            $menu_name = 'about_nav';
          } elseif (is_page('works')) {
            $menu_name = 'works_nav';
          } else {
            $menu_name = 'footer_nav';
          }
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object($locations[$menu_name]);
      
          $menu_items = wp_get_nav_menu_items($menu->term_id);
          foreach ($menu_items as $item) : ?>
            <li class="c-footer__item"><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <p class="copyright">
        <small>&copy; 2021 KOHEI SUZUKI</small>
      </p>
    </div>
  </section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<?php wp_footer(); ?>