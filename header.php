<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title(); ?></title>
  <!-- font-awesome -->
  <link rel='stylesheet' id='font-awesome-css'  href='https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.7.15' type='text/css' media='all' />
  <!-- テーマのCSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css?v=<?php echo filemtime(get_template_directory() . '/css/common.css'); ?>">
  <!-- WordPressやプラグインで追加ßされるCSS/JSを挿入 -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
