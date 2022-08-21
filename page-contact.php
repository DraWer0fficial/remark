<?php get_header(); ?> 
 <!-- ローディング要素 -->
<div id="splash"></div>
  <div class="splashbg_left"></div>
  <div class="splashbg_right"></div>
<div id="container">
<!-- ファーストビュー要素トップ画像はタブごとに異なる -->
<div id="contact_top" class="common">
  <div class="ttl_block">
    <h1>CONTACT</h1>
  </div>
  <div id="contact_view"></div>
  <a href="#">Scroll</a>
</div>
 <!----- main ----->
 <main id="fixation">
  <section id="contact_form">

    <h2>Contact Form<span>お問い合わせ</span></h2>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <?php echo the_content(); ?>
    <!-- <form action="#">
      <div class="Form-Item">
        <p class="form_list">お名前</p>
        <input type="text" class="form_input">
      </div>
      <div class="Form-Item">
        <p class="form_list">ふりがな</p>
        <input type="text" class="form_input">
      </div>
      <div class="Form-Item">
        <p class="form_list">メールアドレス</p>
        <input type="email" class="form_input">
      </div>
      <div class="Form-Item">
        <p class="form_list">電話番号</p>
        <input type="tel" class="form_input">
      </div>
      <div class="Form-Item">
        <p class="form_list isMsg">お問い合わせ内容</p>
        <textarea class="form_textarea"></textarea>
      </div>
      <input type="submit" class="contact_btn" value="Send">
    </form> -->
  <?php endwhile; endif; ?>
  </section>
 </main>
 <!----- /main ----->
 <?php get_footer(); ?>