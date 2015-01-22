<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png" href="<?php echo url('assets/images/favicon.png') ?>" />

  <?php echo css('assets/css/main.css') ?>
  <?php echo js('assets/js/fb-connect.js') ?>
  <?php echo js('assets/js/jquery-1.11.2.min.js') ?>
  

</head>
<body>
  <div id="fb-root"></div>
  
  <header class="header cf" role="banner">
    <div class="container cf">
      <a class="logo" href="<?php echo url() ?>">
        <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
      <?php snippet('menu') ?>
    </div>

  </header>