<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('includes/contact-header'); ?>

<body>
  <?php get_template_part('includes/header'); ?>
  <main class="main">
    <section class="l-sction__wrapper">
      <section class="section__inner container">
        <h2 class="section__title contact__text__left">Contact</h2>
        <p class="section__text contact__form__text">
          制作の依頼・ご相談などお気軽にお問い合わせくださいませ。
          <br>
          下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。
        </p>
        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfREu12b0ooUJad-kSRImcWtWtB68837LcPK2Yeat2VIy-Btw/formResponse" class="form__wrapper needs-validation" method="post" target="hidden_iframe" onsubmit="submitted=true;" novalidate>
          <div class="form-group">
            <label for="company" class="form-label">貴社名</label>
            <div class="input-group">
              <input type="text" name="entry.819085918" class="form-control form-control-lg mb-3" id="company" placeholder="Company Name">
              <div class="invalid-feedback">
                Please enter your company name.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="form-label">
              お名前<span class="badge badge-danger">必須</span>
            </label>
            <div class="input-group">
              <input type="text" name="entry.1352648943" class="form-control form-control-lg mb-3" id="name" placeholder="Name" required>
              <div class="invalid-feedback">
                Please enter your name.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">
              メールアドレス<span class="badge badge-danger">必須</span>
            </label>
            <div class="input-group">
              <input type="mail" name="entry.1209464099" class="form-control form-control-lg mb-3" id="email" placeholder="Email" required>
              <div class="invalid-feedback">
                Please enter your Email.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="tel" class="form-label">
              電話番号<span class="badge badge-danger">必須</span>
            </label>
            <div class="input-group">
              <input type="tel" name="entry.2084899043" class="form-control form-control-lg mb-3" id="tel" placeholder="tel" required>
              <div class="invalid-feedback">
                Please enter your Tell.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea" class="form-label">お問い合わせ内容</label>
            <textarea class="form-control form-control-lg resize__none" name="entry.2024601813" id="textarea" rows="8"></textarea>
            <div class="invalid-feedback">
              Please enter your Textarea.
            </div>
          </div>
          <div class="btn__group">
            <button class="btn btn-primary btn__contact" type="submit">内容を送信</button>
          </div>
        </form>
        <!-- フォームレンダリング -->
        <script type="text/javascript">
          var submitted = false;
        </script>
        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted){window.location='/html/about.html';}"></iframe>
      </section>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>