<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="ayQQoCTfly489pKsFMkGEJiNRrIQ3haUHpzKAjVyaQc" />
  <title>
    <?php if(is_front_page()): ?>
      <?php bloginfo('name'); ?>
    <?php elseif(is_page()): ?>
      <?php the_title(); ?>｜<?php bloginfo('name'); ?>
    <?php elseif(is_single()): ?>
      <?php the_title(); ?>｜<?php bloginfo('name'); ?>
    <?php else: ?>
      <?php bloginfo('name'); ?>
    <?php endif; ?>
  </title>  
  <?php wp_head(); ?>
</head>