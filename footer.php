  <!----- footer ----->
  <footer id="footer">
  <div class="footer_list">
    <h2>株式会社ReMarK</h2>
    
    <div class="bottom_line">
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
    </div>
    
    <div class="fa_icon">
      <ul>
        <li><a href=""><i class="fab fa-twitter"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
      </ul>
    </div>
    
    <small>© ReMarK all rights reserved<span>こちらのサイトは架空のサイトです。</span></small>
  </div>
</footer>
    <!----- /footer ----->
</div><!-- ローディング閉じタグ -->

<!-- 外部CDN読み込み用 jQ -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- Javascript用ファイル -->
<script src="<?php echo get_template_directory_uri();?>/./js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>