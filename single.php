<?php get_header(); ?> 
<!-- ローディング要素 -->
<div id="splash"></div>
  <div class="splashbg_left"></div>
  <div class="splashbg_right"></div>
<div id="container">
<!-- ファーストビュー要素トップ画像はタブごとに異なる -->
<div id="single_top" class="common">
  <div class="ttl_block">
    <h1>ARTICLE</h1>
  </div>
  <div id="single_view"></div>
  <!-- <a href="#">Scroll</a> -->
</div>

<main id="fixation">
<section id="single" class="wrapper">
  <h2 class="heading">Individual announcements<span>お知らせ詳細</span></h2>
  <div class="single_content">
      <div class="single_img">
        <?php the_post_thumbnail('medium') ?>
      </div>
    <div class="single_text">
    <span><?php the_category(); ?></span>
      <span class="time"><?php the_time('Y,m,d'); ?></span>
      <h3><?php the_title(); ?></h3>
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>
 </main>
 <?php get_footer(); ?>