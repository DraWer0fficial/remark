<?php get_header(); ?> 
<!-- ローディング要素 -->
<div id="top_splash">
  <div id="splash_logo">株式会社ReMarK</div>
</div>
  <div class="splashbg_left"></div>
  <div class="splashbg_right"></div>
<div id="container">
<!-- ファーストビュー要素トップ画像はタブごとに異なる -->
<div id="top" class="common">
  <div class="ttl_block">
    <h1>ReMarK</h1>
  </div>
  <div id="top_view"></div>
  <a href="#">Scroll</a>
</div>

 <!----- main ----->  
<main id="fixation">
    
<!-- 経営理念に関する場所 -->
<section id="about" class="wrapper">
  <div class="philoshy_text fadeIn fadeInTrigger motion_delay02">
    <h2>Philoshy</h2>
    <h3>想いを形に、想像します。</h3>
    <h4>Forming feelings is an act of creation.</h4>
    <p>私たち、株式会社リマークは、<br>
      お客様の理想を第一に叶えることを<br>
      経営理念としています。<br>
      「想いを形に、理想を実現する。」<br>
      この言葉を胸に刻み最善を尽くすため<br>
      日々活動しています。
    </p>
    <a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>" class="btn borderleft"><span>About Us</span></a>
  </div>
  <div class="philoshy_img fadeIn fadeInTrigger motion_delay04"></div>
</section>

<!-- 株式会社リマークについて -->
<section id="sub" class="wrapper">
  <div class="sub_ttl">
<h2 class="heading">Regarding the ReMarK<span>私たちリマークについて</span></h2>
<p>私たちリマークはお客様のニーズに応える為に、<br>
  膨大なテキストデータを収集し、これまでにない新たな気づきを形にします。</p>
</div>


<div class="sub_content">
  <ul class="sub_area">
    <li class="zoomInTrigger zoomIn motion_delay02">
      <h3>徹底的なヒアリング</h3>
      <div class="sub_img"><img src="<?php echo get_template_directory_uri();?>/./image/illustrations_svg/hearing.svg" alt=""></div>
      <p>お客様の要望を聴き<br>
        120%のものである<br>
        唯一無二を産み出します。</p>
      </li>
      
      <li class="zoomInTrigger zoomIn motion_delay04">
        <h3>最新のデザイン<br>SEO対策</h3>
        <div class="sub_img"><img src="<?php echo get_template_directory_uri();?>/./image/illustrations_svg/design.svg" alt=""></div>
        <p>最近のトレンドや傾向<br>
          画期的なアイディアの導入<br>
          修正対応もしています。</p>
        </li>
        
        <li class="zoomInTrigger zoomIn motion_delay06">
          <h3>1ヶ月間の無償対応</h3>
          <div class="sub_img"><img src="<?php echo get_template_directory_uri();?>/./image/illustrations_svg/upload.svg" alt=""></div>
          <p>サーバー上へのアップ後<br>
            1月は無償で修正対応可能<br>
            献身的なサポート付き
          </p>
        </li>
        
        <li class="zoomInTrigger zoomIn motion_delay08">
          <h3>その他・サポート対応</h3>
          <div class="sub_img"><img src="<?php echo get_template_directory_uri();?>/./image/illustrations_svg/maintenance.svg" alt=""></div>
          <p>システム開発から始まり<br>
            定期的なメンテナンス対応<br>
            バックアップや修正対応</p>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- サービス紹介部分について -->
    <section id="service"  class="wrapper">
      <h2 class="heading">Introduction to our Service<span>サービス紹介</span></h2>
      
      <!-- サービスカード要素1番目 -->
      <div class="service_area">
        <figure class="bgextend bgLRextendTrigger">
          <span class="bgappearTrigger"><img src="<?php echo get_template_directory_uri();?>/./image/service/system.jpg" alt="サービス画像1"></span>
        </figure>
        <div class="dec_img flipLeft flipTrigger motion_delay04"><img class="floatUp01" src="<?php echo get_template_directory_uri();?>/./image/decoration/Online protection_one.svg" alt=""></div>
        <div class="service_card flipLeft flipTrigger">
          <div class="service_ttl">
            <p>-01-<span>システム開発/運用</span></p>
            <h3>System Development</h3>
          </div>
          <p>システム開発による作業内容の自動化<br>
            作業化の基盤を整えます。
          </p>
          <img class="floatUp" src="<?php echo get_template_directory_uri();?>/./image/decoration/1.png" alt="">
        </div>
      </div>
      
      <!-- サービスカード要素2番目 -->
      <div class="service_area ">
        <figure class="bgextend bgRLextendTrigger">
         <span class="bgappearTrigger"><img src="<?php echo get_template_directory_uri();?>/./image/service/web.jpg" alt="サービス画像1"></span>
        </figure>
        <div class="dec_img flipLeft flipTrigger motion_delay04"><img class="floatUp01" src="<?php echo get_template_directory_uri();?>/./image/decoration/Team building_two.svg" alt=""></div>
        <div class="service_card flipLeft flipTrigger">
          <div class="service_ttl">
            <p>-02-<span>Web制作/運用</span></p>
            <h3>Web Production</h3>
          </div>
          <p>最新のデザイントレンドの傾向<br>
            使いやすさを重視したサイト制作
          </p>
          <img class="floatUp" src="<?php echo get_template_directory_uri();?>/./image/decoration/2.png" alt="">
        </div>
      </div>
      
      <!-- サービスカード要素3番目 -->
      <div class="service_area ">
        <figure class="bgextend bgLRextendTrigger">
          <span class="bgappearTrigger"><img src="<?php echo get_template_directory_uri();?>/./image/service/app.jpg" alt="サービス画像1"></span>
        </figure>
        <div class="dec_img flipLeft flipTrigger motion_delay04"><img class="floatUp01" src="<?php echo get_template_directory_uri();?>/./image/decoration/Analytics team_three.svg" alt=""></div>
        <div class="service_card flipLeft flipTrigger">
          <div class="service_ttl">
            <p>-03-<span>アプリ開発/運用</span></p>
            <h3>App Development</h3>
          </div>
          <p>アプリ開発によるサイト運用の効率化<br>
            便利機能の追加をしております。
          </p>
          <img class="floatUp" src="<?php echo get_template_directory_uri();?>/./image/decoration/3.png" alt="">
        </div>
      </div>
      <a href="<?php echo get_permalink(get_page_by_path('service')->ID); ?>" class="btn borderleft"><span>Our Service</span></a>
    </section>
    
    <!-- お知らせ要素 情報発信一覧カード要素横並び4枚 -->
  <section id="news" class="wrapper">
    <h2 class="heading">Information List<span>様々な情報発信</span></h2>
    
<div class="news_row">
    <ul>
      <?php query_posts('posts_per_page=4'); ?><!--ループ数を決めるPHPコード-->
<!-- お知らせカード1枚目 -->
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <li class="fadeTrigger fadeUp bgskew">
            <a href="<?php echo get_permalink(get_page_by_path('archive')->ID); ?>">
              <div class="news_img">
                <?php the_post_thumbnail('large') ?>
                <div class="news_meta">
                <span class="category">TOPICS</span>
                  <span class="time"><?php the_time('Y,m,d'); ?></span>
                  <h3><?php the_title(); ?></a></h3>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
</section>

    
    <section id="contact">
      <h2>Contact<span>お問い合わせ</span></h2>
      
      <div class="contact_box">
        <p>株式会社リマークは、お客様のお声に耳を傾けます。<br>
          「常日頃の業務内容をプログラムによって自動化したい」<br>
          「新しいチャットツールを開発したい」<br>
          「SEO対策をして欲しい」<br>
          など、そんな考えのお持ちのお客様の気持ちを形にいたします。<br>
          ぜひ、お手軽にお問い合わせください。
        </p>
        
        <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>" class="btn borderleft"><span>Contact Form</span></a>
        
        <h3>0123-2357-1113</h3>
        <h4>受付時間: 9:00~18:00<span>(土日、年末年始除く)</span></h4>
      </div>
    </section>
    
  </main>
  <!----- /main ----->
  <?php get_footer(); ?>