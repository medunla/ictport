<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <?php echo js('assets/js/fb-connect.js') ?>

</head>
<body>
  <div id="fb-root"></div>
  
  <header class="header cf" role="banner">
    <div class="container">
      <a class="logo" href="<?php echo url() ?>">
        <!-- <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" /> -->
        LOGO
      </a>
      <?php snippet('menu') ?>
    </div>
  </header>