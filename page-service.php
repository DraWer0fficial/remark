<?php get_header(); ?> 
 <!-- ローディング要素 -->
<div id="splash"></div>
  <div class="splashbg_left"></div>
  <div class="splashbg_right"></div>
<div id="container">
<!-- ファーストビュー要素トップ画像はタブごとに異なる -->
<div id="service_top" class="common">
  <div class="ttl_block">
    <h1>SERVICE</h1>
  </div>
  <div id="service_view"></div>
  <a href="#">Scroll</a>
</div>

 <!----- main ----->
 <main id="fixation">
  <section id="business" class="wrapper">
    <h2 class="heading">Business Description<span>事業内容</span></h2>

  <div class="description">
    <ul>
      <!-- 事業内容説明カード要素1番目 -->
      <li class="zoomInTrigger zoomIn motion_delay02">
        <h3>WEBサイト構築</h3>
        <div class="description_img"><img src="<?php echo get_template_directory_uri();?>/./image/illustrations_svg/Website_setup.svg" alt=""></div>
        <p>Webサイトの新規構築/リニューアル等<br>
          お客様の目的を明確にし、<br>
          考えに沿った最適なデザインの作成をご提案いたします。</p>
      </li>
      <!-- 事業内容説明カード要素2番目 -->
      <li class="zoomInTrigger zoomIn motion_delay04">
        <h3>アプリ開発</h3>
        <div class="description_img"><img src="<?php echo get_template_directory_uri();?>/./image/illustrations_svg/app.svg" alt=""></div>
        <p>オーダーメイドで開発するネイティブアプリや、<br>
          ストアからインストールする必要がないWebブラウザ上で提供できる<br>
          アプリを開発いたします。</p>
      </li>
      <!-- 事業内容説明カード要素3番目 -->
      <li class="zoomInTrigger zoomIn motion_delay06">
        <h3>システム構築</h3>
        <div class="description_img"><img src="<?php echo get_template_directory_uri();?>/./image/illustrations_svg/system.svg" alt=""></div>
        <p>CMS、会員管理システム、ECサイト、業務システム構築<Br>
          などの開発に対応しています。</p>
      </li>
      <!-- 事業内容説明カード要素4番目 -->
      <li class="zoomInTrigger zoomIn motion_delay06">
        <h3>グラフィックデザイン</h3>
        <div class="description_img"><img src="<?php echo get_template_directory_uri();?>/./image/illustrations_svg/graphic.svg" alt=""></div>
        <p>実績豊富なグラフィックデザイナーや<br>
          イラストレーターがシーンに合わせた作品<br>
          最新技術の導入もしています。</p>
      </li>
    </ul>
  </div>
  </section>

  <section id="production" class="wrapper">
    <h2 class="heading">Fllow of Production<span>制作工程</span></h2>

    <div class="production_all yohaku">
      <div class="process_area">

        <figure class="bgextend bgLRextendTrigger">
          <span class="bgappearTrigger"><img src="<?php echo get_template_directory_uri();?>/./image/service/project.jpg" alt="サービス画像1"></span>
        </figure>
        <div class="process_card flipLeft flipTrigger">
          <span class="number">-01-</span>
            <h3>ヒアリング/プランニング</h3>
            <p>お客様からヒアリングした内容をもとに到達する目標を明確にします。<br>
              どのような手法を使って目標を達成するか、どのような路線で作成していくのか<Br>
              具体的な計画をご提案します。
            </p>
            <!-- <img class="floatUp" src="./image/decoration/1.png" alt=""> -->
        </div>
      </div>

      <div class="process_area">
        <figure class="bgextend bgLRextendTrigger">
          <span class="bgappearTrigger"><img src="<?php echo get_template_directory_uri();?>/./image/service/design.jpg" alt="サービス画像1"></span>
        </figure>
        <div class="process_card flipLeft flipTrigger">
          <span class="number">-02-</span>
            <h3>デザイン作成</h3>
            <p>お客様のご要望、目的、ターゲット層、ユーザビリティ、<br>
              競合他社、最新の技術やトレンド、リリース後の運用など、<br>
              様々な面を考慮してお客様とユーザー双方にとって最適なデザインの作成を目指します。
            </p>
            <!-- <img class="floatUp" src="./image/decoration/2.png" alt=""> -->
        </div>
      </div>

      <div class="process_area">
        <figure class="bgextend bgLRextendTrigger">
          <span class="bgappearTrigger"><img src="<?php echo get_template_directory_uri();?>/./image/service/create.jpg" alt="サービス画像1"></span>
        </figure>
        <div class="process_card flipLeft flipTrigger">
          <span class="number">-03-</span>
            <h3>構築/マークアップ</h3>
            <p>デザイナー、プログラマーと密接に連携し、<br>
              問題点を素早く共有・解決しながら構築を行います。<br>
              Webサイト制作では、コーディングのルール動向を常にチェックし、<br>
              正しい記述でマークアップすることに加えて、<br>
              変化しやすい検索条件を考慮した最適なSEO対策を施しながらマークアップを行います。
            </p>
            <!-- <img class="floatUp" src="./image/decoration/3.png" alt=""> -->
        </div>
      </div>

    </div>
  </section>
 </main>
 <!----- /main ----->
 <?php get_footer(); ?>