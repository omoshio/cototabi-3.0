<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <!-- テーマのCSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css?v=<?php echo filemtime(get_template_directory() . '/css/common.css'); ?>">
  <!-- WordPressやプラグインで追加ßされるCSS/JSを挿入 -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <!-- header_1 -->
    <section class="p-blog-header--top">
        <h1 class="p-blog-header__logo">
            <!--<img src="https://cototabi.com/wp-content/themes/cototabi_splash/images/SVG/logo-b.svg" alt="">-->
            <a href="<?= homeurl() ?>">
                <img src="<?php tempurl(); ?>/images/SVG/co.svg" alt="こ">
                <img src="<?php tempurl(); ?>/images/SVG/to.svg" alt="と">
                <img src="<?php tempurl(); ?>/images/SVG/ta.svg" alt="た">
                <img src="<?php tempurl(); ?>/images/SVG/bi.svg" alt="び">
                <img src="<?php tempurl(); ?>/images/SVG/de.svg" alt="デ">
                <img src="<?php tempurl(); ?>/images/SVG/za.svg" alt="ザ">
                <img src="<?php tempurl(); ?>/images/SVG/i.svg" alt="イ">
                <img src="<?php tempurl(); ?>/images/SVG/n.svg" alt="ン">
            </a>
        </h1>
    </section>
    <div class="p-blog-header__icons">
        <!-- 検索 -->
        <div id="Search"></div>
        <!-- ハンバーガーメニュー -->
        <div id="Menu"></div>
    </div>
    <?php //パンくず読み込み ?>
    <?php get_template_part('template-parts/breadcrumbs'); ?>