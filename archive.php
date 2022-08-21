<?php get_header(); ?> 
<!-- ローディング要素 -->
<div id="splash"></div>
  <div class="splashbg_left"></div>
  <div class="splashbg_right"></div>
<div id="container">
<!-- ファーストビュー要素トップ画像はタブごとに異なる -->
<div id="archive_top" class="common">
  <div class="ttl_block">
    <h1>NEWS</h1>
  </div>
  <div id="archive_view"></div>
  <a href="#">Scroll</a>
</div>

 <!----- main ----->
 <main id="fixation">
  <section id="information" class="wrapper">
    <h2 class="heading">Offer Information<span>情報発信</span></h2>

  <div class="information_list yohaku">
  <!-- 記事要素1 -->
    <?php query_posts('posts_per_page=6'); ?><!--ループ数を決めるPHPコード-->
      <?php if (have_posts()) : ?>
      <?php while (have_posts()): the_post(); ?>
        <article <?php post_class('archive'); ?>>
          <div class="archive_img"><?php the_post_thumbnail('medium') ?></div>
          <div class="archive_text news_meta">
          <span><?php the_category(); ?></span>
            <span class="time"><?php the_time('Y,m,d'); ?></span>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="single_btn borderleft"><span>Details</span></a>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

    </div>
  </section>
 </main>
 <!----- /main ----->
<?php get_footer(); ?>