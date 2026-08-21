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
