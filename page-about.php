<?php get_header(); ?> 
 <!-- ローディング要素 -->
<div id="splash"></div>
  <div class="splashbg_left"></div>
  <div class="splashbg_right"></div>
<div id="container">
<!-- ファーストビュー要素トップ画像はタブごとに異なる -->
<div id="about_top" class="common">
  <div class="ttl_block">
    <h1>ABOUT</h1>
  </div>
  <div id="about_view"></div>
  <a href="#">Scroll</a>
</div>
 <!----- main ----->
 <main id="fixation">

 <section id="mission" class="wrapper">
    <div class="mission_all">
      <div class="mission_img fadeIn fadeInTrigger motion_delay02"></div>
      <div class="mission_text fadeIn fadeInTrigger motion_delay04">
        <h2>Mission</h2>
        <h3>理想を叶える為に</h3>
        <h4>To make your ideals come true</h4>
        <p>私たちに出来ることで<br>
          理想を叶え、実現させる為に<br>
          株式会社リマークは私たちにしか<br>
          出来ないことを実現させ、<br>
          情報革命によって<br>
          理想を叶える環境を整えます。
        </p>
      </div>
    </div>
  </section>

  <section id="vision" class="wrapper">
    <h2 class="heading">Vision<span>理想を現実に</span></h2>
    <div class="vision_all">
      <div class="vision_img flipLeft flipTrigger"></div>
      <div class="vision_catch flipLeft flipTrigger motion_delay04">
        <h3>想いを形に、理想を実現する</h3>
        <h4>私たちにしか出来ないことを致します</h4>
      </div>
    </div>
  </section>

  <section id="kaisha" class="wrapper">
    <h2 class="heading">Company Overviwe<span>会社概要</span></h2>

    <table class="kaisha">
      <tr>
      <th>会社名</th>
      <td>株式会社ReMarK(REMARK CORPORATION)</td>
      </tr>
      <tr>
      <th>創立</th>
      <td>2020年(令和2年)4月12日</td>
      </tr>
      <tr>
      <th>事業内容</th>
      <td>Web制作/アプリ開発/システム開発</td>
      </tr>
      <tr>
      <th>代表者</th>
      <td>代表取締役社長 豊田 曾仁</td>
      </tr>
      <tr>
      <th>資本金</th>
      <td>5.000.000円</td>
      </tr>
      <tr>
      <th>電話番号</th>
      <td>0123-1357-1113</td>
      </tr>
      </table>
  </section>

  <!-- 会社所在地マップ埋め込み -->
  <section id="location" class="wrapper">
    <h2 class="heading">Company Location<span>会社所在地</span></h2>


  <div class="access_area">
    <div class="access_map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4880141904196!2d139.69838261511168!3d35.689606680192334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1634344983029!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

      <div class="access_block">
        <div class="access_box">
          <h3>住所
            <span>〒160-0022</span>
            <span>東京都新宿区新宿３丁目３８−１</span>
          </h3>
          <h3>最寄り駅
            <span>東京都新宿駅から徒歩5分</span>
          </h3>
        </div>
      </div>
    </div>
  </section>
 </main>
 <!----- /main ----->
 <?php get_footer(); ?>