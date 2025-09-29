<?php if(is_home() || is_front_page() || is_page('reservation') ) : ?>
<?php else : ?>
<div id="banner-pdf">
  <div class="wrap">
    <h2><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/banner_ttl.png" alt="RESERVATION"></h2>
    <p class="btn"><a class="btn-hover" href="<?php echo home_url('/'); ?>reservation"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/banner_btn.png" alt="予約状況のご確認お問い合わせ・ご予約はこちら"></a></p>
  </div>
</div>
<?php endif; ?>
<footer>
  <div class="wrap">
    <p id="to-head"><span class="to-top"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/arrow_top.png" alt="PAGE TOP"></span></p>
    <p class="logo-ft"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/logo_ft.png" alt="ロゴ"></a></p>
	
    <p class="text"><span>スタジオゼブラ</span>TEL: <a href="tel:09067070936" class="telhref" onclick="ga('send', 'event', 'tel', 'click', 'info_phone');">090-6707-0936</a><br>〒151-0051　東京都渋谷区千駄ヶ谷5丁目28-10ドルミ第２御苑B101</p>
    <div class="nav-ft pc">
      <ul>
        <li><a href="<?php echo home_url('/'); ?>studio/">スタジオ案内</a></li>
        <li><a href="<?php echo home_url('/'); ?>rental/">レンタル機材</a></li>
        <li><a href="<?php echo home_url('/'); ?>faq/">よくある質問</a></li>
        <li><a href="<?php echo home_url('/'); ?>reservation/">ご予約・お問い合わせ</a></li>        
        <li><a href="<?php echo home_url('/'); ?>price/">料金案内</a></li>
        <li><a href="<?php echo home_url('/'); ?>access/">アクセス</a></li>
        <li><a href="<?php echo home_url('/'); ?>horizon/">ホリゾントルール</a></li>
        <li><a href="<?php echo home_url('/'); ?>category/news/">NEWS</a></li>
	<li><a href="<?php echo home_url('/'); ?>policy/" target="_blank">利用規約</a></li>
      </ul>
    </div>
    <div class="nav-ft sp">
      <ul>
        <li><a href="<?php echo home_url('/'); ?>studio/">スタジオ案内</a></li>
        <li><a href="<?php echo home_url('/'); ?>rental/">レンタル機材</a></li>
        <li><a href="<?php echo home_url('/'); ?>faq/">よくある質問</a></li>
        <li><a href="<?php echo home_url('/'); ?>price/">料金案内</a></li>
        <li><a href="<?php echo home_url('/'); ?>access/">アクセス</a></li>
        <li><a href="<?php echo home_url('/'); ?>horizon/">ホリゾントルール</a></li>
        <li><a href="<?php echo home_url('/'); ?>reservation/">ご予約・お問い合わせ</a></li>
        <li><a href="<?php echo home_url('/'); ?>category/news/">NEWS</a></li>
        <li><a href="<?php echo home_url('/'); ?>policy/" target="_blank">利用規約</a></li>
      </ul>
    </div>
    
    <p class="btn"><a class="btn-hover" href="<?php echo home_url('/'); ?>reservation/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/btn_ft.png" alt="予約状況のご確認お問い合わせ・ご予約はこちら"></a></p>
    <p class="btn-add"><a href="https://studiokensaku.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/banner.jpg" alt="スタジオ検索ドットコム"></a></p>
    <div class="twitter-box"><a class="twitter-timeline" href="https://twitter.com/studiozebra1st?ref_src=twsrc%5Etfw">Tweets by studiozebra1st</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
  <address>Copyright©STUDIO ZEBRA All Rights Reserved.</address>
  <?php if(is_page('reservation') ) : ?>
  <?php else : ?>
  <p class="fix-left"><a href="<?php echo home_url('/'); ?>reservation"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/btn_right.png" alt="ご予約はこちら"></a></p>
  <?php endif; ?>
</div>
</footer>
</main>
<p id="pagetop"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/up.png" alt="最上部へ"></p>
<!-- Libraries script -->
<script src="<?php echo get_template_directory_uri(); ?>/frontend/shared/js/base.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/shared/js/autoload.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/shared/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/shared/js/remodal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/shared/js/jquery.slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/shared/js/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/shared/js/shared.js"></script>
<?php wp_footer(); ?>
</html>