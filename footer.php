<footer class="footer">
  <table class="footer__list__tb">
    <tbody class="footer__nav__tb">
      <tr class="footer__inner__tb">
        <td class="footer__item__tb">
          <a href="#about">About</a>
        </td>
        <td class="footer__item__tb">
          <a href="#service">Service</a>
        </td>
      </tr>
      <tr class="footer__inner__tb">
        <td class="footer__item__tb">
          <a href="#works">Works</a>
        </td>
        <td class="footer__item__tb">
          <a href="#contact">Contact</a>
        </td>
      </tr>
    </tbody>
  </table>
  <section class="l-section__inner footer__flexbox footer__side">
    <nav class="footer__nav">
      <ul class="footer__list flexbox__start">
        <?php if (!is_page()): ?>
          <li class="footer__item"><a href="#about">About</a></li>
          <li class="footer__item"><a href="#service">Service</a></li>
          <li class="footer__item"><a href="#works">Works</a></li>
          <li class="footer__item"><a href="<?php home_url(); ?>/contact">Contact</a></li>
        <?php endif; ?>
      </ul>
    </nav>
    <p class="copyright">
      <small>&copy; 2021 AOSHIRO WORKS All rights reserved.</small>
    </p>
  </section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<?php wp_footer(); ?>

