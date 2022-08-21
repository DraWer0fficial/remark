<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title><?php bloginfo('name'); ?></title>
 <meta name="description" content="<?php bloginfo('description'); ?>">
 <meta name="keywords" content="Web制作,プログラミング,IT">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta property="og:title" content="想いを形に、株式会社ReMarK"> 
 <meta property="og:type" content="article">
 <meta property="og:url" content="https://sarucode.site">
 <meta property="og:image" content="img/logo.png">
 <meta property="og:description" content="株式会社ReMarKはお客様の想いを形にという経営理念を掲げて日々活動しています。「想いを形に、理想を実現する」この言葉を胸にお客様の理想を実現させていただきます。"> 
 <meta property="og:site_name" content="株式会社ReMarK">
 <!-- サイトアイコン(favicon.ico) -->
 <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri();?>/./image/decoration/codersrank.svg">
 <link rel="apple-touch-icon" sizes="180*180" href="<?php echo get_template_directory_uri();?>/./image/decoration/codersrank.svg">
 <!-- 共通CSSファイル -->
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./base/reset.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./base/common.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./base/parts.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./base/motion.css">
 <!-- 投稿用CSSファイル -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./post/archive.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./post/single.css">
 <!-- タブ別CSSファイル -->
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./main/index.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./main/about.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./main/service.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./main/contact.css">
 <!-- SCSS読み込み変換用CSSファイル -->
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/./css/style.css">
 <!-- SCSSファイル -->
 <link rel="stylesheet" type="text/scss" href="<?php echo get_template_directory_uri();?>/./scss/style.scss">
 <link rel="stylesheet" type="text/scss" href="<?php echo get_template_directory_uri();?>/./scss/_common.scss">
 <link rel="stylesheet" type="text/scss" href="<?php echo get_template_directory_uri();?>/./scss/_color.scss">
 <link rel="stylesheet" type="text/scss" href="<?php echo get_template_directory_uri();?>/./scss/_mixin.scss">
 <link rel="stylesheet" type="text/scss" href="<?php echo get_template_directory_uri();?>/./scss/_button.scss">
 <!-- 外部リンクCDN -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
 </head>
 <body>

 <!----- header----->
 <header id="header">

  <nav id="list" class="hMenu bottom_line">
      <!-- <ul>
        <li><a href="./index.html">TOP</a></li>
        <li><a href="./page/about.html">ABOUT</a></li>
        <li><a href="./page/archive.html">NEWS</a></li>
        <li><a href="./page/service.html">SERVICE</a></li>
        <li><a href="./page/contact.html">CONTACT</a></li>
    </ul> -->
    <?php 
      $args = array(
        'menu' => 'menu',
        'menu_class' => '',
        'container' => false,
      );

      wp_nav_menu($args);
      ?>
  </nav>

  <!-- ヘッダーアイコン -->
  <div class="fa_icon">
    <ul>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    </ul>
  </div>

  <!-- ハンバーガーメニュー要素 -->
  <div class="menubtn">
    <span></span>
    <span></span>
    <span></span>
  </div>
 </header>
 <!----- /header ----->