<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="ayQQoCTfly489pKsFMkGEJiNRrIQ3haUHpzKAjVyaQc" />
  <title>
    <?php if(is_front_page()): ?>
      HOME｜<?php bloginfo('name'); ?>
    <?php elseif(is_page()): ?>
      <?php wp_title(''); ?>｜<?php bloginfo('name'); ?>
    <?php else: ?>
      <?php bloginfo('name'); ?>
    <?php endif; ?>
  </title>  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>
/css/aos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <?php wp_head(); ?>
</head>