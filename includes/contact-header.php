<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>AOSHIRO WORKS</title> -->
  <title>
    <?php if(is_front_page()): ?>
      HOME｜<?php bloginfo('name'); ?>
    <?php elseif(is_page()): ?>
      <?php wp_title(''); ?>｜<?php bloginfo('name'); ?>
    <?php else: ?>
      <?php bloginfo('name'); ?>
    <?php endif; ?>
  </title>  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>