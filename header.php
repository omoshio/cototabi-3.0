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
<body <?php body_class('u-bg--white'); ?>>

<header class="p-header">
    <!-- header_1 -->
    <section class="p-header--top">
        <h1 class="p-header__logo">
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
    <div class="p-header__icons">
        <!-- 検索 -->
        <?php if ( is_page('blog') || is_single() || is_category() || is_search() ) : ?>
            <div id="Search"></div>
        <?php endif; ?>
        <!-- ハンバーガーメニュー -->
        <div id="Menu" data-home-url="<?php echo esc_url(home_url('/')); ?>"></div>
    </div>
</header>