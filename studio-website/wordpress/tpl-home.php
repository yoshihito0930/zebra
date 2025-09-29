<?php  /* Template Name: Home Template */ get_header(); ?>

<div id="head-top">
			<div id="key-box">
				<?php if( have_rows('slides') ): ?>
					<ul class="key-slide">
						<?php while( have_rows('slides') ): the_row(); 
								$image = get_sub_field('image');
								$image_sp = get_sub_field('image_sp');
								?>
								<li>
									<img class="pc" fetchpriority="high" loading="eager" src="<?php echo wp_get_attachment_url($image['id']); ?>" alt="<?php echo $image['alt']; ?>">
									<img class="sp" src="<?php echo wp_get_attachment_url($image_sp['id']); ?>" alt="<?php echo $image_sp['alt']; ?>">
								</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="head-info">
					<h1 class="logo pc wow fadeInRight"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/logo.png" alt="新宿エリアのリーズナブルなレンタル撮影スタジオ"></a></h1>
					<div class="box-key">
					<?php if( have_rows('box') ): ?>
						<?php while( have_rows('box') ): the_row(); 
							$text = get_sub_field('text');
							$btn = get_sub_field('btn');
							$title = get_sub_field('title');
						?>
							<div class="box wow fadeInLeft">						
								<p class="text">
									<?php echo $text; ?>
								</p>
								<p class="btn"><a class="btn-hover" href="<?php echo home_url('/'); ?>reservation#cal-box-add"><img src="<?php echo $btn['url']; ?>" alt="<?php echo $btn['alt']; ?>"></a></p>							
							</div>
							<p class="ttl_key wow fadeInRight"><img src="<?php echo $title['url']; ?>" alt="<?php echo $title['alt']; ?>"></p>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<ul class="nav-h">
						<li><a href="<?php echo home_url('/'); ?>studio/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav01.png" alt="スタジオ案内"></a></li>
						<li><a href="<?php echo home_url('/'); ?>price/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav02.png" alt="料金案内"></a></li>
						<li><a href="<?php echo home_url('/'); ?>rental/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav03.png" alt="レンタル機材"></a></li>
						<li><a href="<?php echo home_url('/'); ?>access/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav04.png" alt="アクセス"></a></li>
						<li><a href="<?php echo home_url('/'); ?>faq/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav_a1.png" alt="よくある質問"></a></li>
						<li><a href="<?php echo home_url('/'); ?>horizon/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav_a2.png" alt="ホリゾントルール"></a></li>
						<li><a href="<?php echo home_url('/'); ?>reservation/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav05.png" alt="ご予約・お問い合わせ"></a></li>
						<li><a href="<?php echo home_url('/'); ?>category/news/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnavi_news.png" alt="news"></a></li>
						<li><a href="https://twitter.com/studiozebra1st" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnavi_tw.png" alt="twitter"></a></li>
					</ul>
				</div>
			</div>
			<section>				
				<div id="lead" class="sec-scroll">
					<div class="wrap">
						<h2 class="ttl-common wow fadeInUp"><span>新宿・代々木エリアの<br class="sp">白ホリゾント撮影スタジオ</span></h2>
						
						<ul class="lead-banner">
							<li><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/zebra_240825_item_01.webp" alt="4,500"></li>
						</ul>
						<!--<ul class="lead-banner">
							<li><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/bnr_price1.png" alt="4,500"></li>
							<li><span><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/zebra_img1.png" alt="4,500"></span><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/bnr_price2.png" alt="4,500"></li>
						</ul>
						<div class="lead-banner">
							<div class="item wow fadeInLeft">
								<p class="ttl"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/t1.png" alt="オススメ！"> <span class="ttl-common">機材使い放題プラン</span></p>
								<dl>
									<dt class="ft-add"><b>&yen;</b><span>4,500</span>/1h</dt>
									<dd>（税込&yen;4,950）</dd>
								</dl>								
							</div>
							<div class="item wow fadeInRight">
								<p class="ttl"><span class="ttl-common">場所貸しプラン</span></p>
								<dl>
									<dt class="ft-add"><b>&yen;</b><span>3,500</span>/1h</dt>
									<dd>（税込&yen;3,850）</dd>
								</dl>								
							</div>
						</div> -->
						<p class="note wow fadeInUp">
						<span>＊最低利⽤時間／2時間<br>
＊深夜帯（23時〜翌8時）は、通常料⾦の50%UP<br>
＊深夜帯を含む場合の最低利⽤時間／4時間<br>
＊6⼈以上でのワークショップでご利⽤<br>
・・・合計のご利⽤料に＋2,200円（税込）<br>
＊ラメ、グリッターを多⽤した⾐装・⼩道具をご使⽤<br>
・・・合計のご利⽤料に＋2,200円（税込）</span></p>
						
						<?php
							$choose = get_field('choose');
							$image = get_field('image');
							$image1 = get_field('image1');
						?>

						<?php if( get_field('choose') == 'show' ): ?>
							<p class="sale wow fadeInUp"><img src="<?php echo wp_get_attachment_url($image['id']); ?>" alt="<?php echo $image['alt']; ?>"></p>
						<?php endif; ?>						
						<?php if( get_field('choose') == 'show1' ): ?>
							<p class="sale wow fadeInUp"><img src="<?php echo wp_get_attachment_url($image1['id']); ?>" alt="<?php echo $image1['alt']; ?>"></p>
						<?php endif; ?>
						<p class="btn wow fadeInUp"><a class="btn-hover" href="<?php echo home_url('/'); ?>price/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/lead_btn.png" alt="料金案内はこちら"></a></p>
					</div>
				</div>
				<div id="about">
					<div class="wrap">
						<p class="wow fadeInUp ttl-ab"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/title_about.png" alt="ABOUT OUR STUDIO"><span class="sp ttl-common"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/about_h2_sp.svg" alt="ABOUT OUR STUDIO"></span></p>
						<div class="list">
							<div class="item wow">
								<div class="text wow fadeInLeft" data-wow-delay="0.8s">
									<p class="ttl-number"><span class="ft-add">01</span>エキチカ！</p>						
									<h3 class="txt"><span>代々木駅東口より徒歩３分</span><br>
										<span>新宿駅新南口より徒歩７分の好アクセス</span></h3>	
									<p class="btn"><a href="<?php echo home_url('/'); ?>access/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/zebra_240704_item02.png" alt="アクセス"></a></p>
								</div>
								<p class="photo"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/img_about1.webp" alt="エキチカ！"></p>
							</div>
							<div class="item wow" data-wow-delay="0.3s">
								<div class="text wow fadeInLeft" data-wow-delay="0.8s">
									<p class="ttl-number"><span class="ft-add">02</span>ゆったり！</p>
									<h3 class="txt"><span>低価格でもゆとりのある室内</span><br>
										<span>全身撮影にも適した白ホリスタジオ</span></h3>
									<p class="btn"><a href="<?php echo home_url('/'); ?>studio/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/zebra_240704_item03.png" alt="スタジオ案内"></a></p>
								</div>
								<p class="photo"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/img_about2.webp" alt="ゆったり！"></p>
							</div>
							<div class="item wow" data-wow-delay="0.5s">
								<div class="text wow fadeInLeft" data-wow-delay="0.8s">
									<p class="ttl-number"><span class="ft-add">03</span>思いのまま！</p>
									<h3 class="txt"><span>豊富な機材を無料でお貸し出し</span><br>
										<span>ライティングも思いのままに</span></h3>
									<p class="btn"><a href="<?php echo home_url('/'); ?>rental/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/zebra_240704_item04.png" alt="スタジオ機材"></a></p>
								</div>
								<p class="photo"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/img_about3.webp" alt="思いのまま！"></p>
							</div>
						</div>
					</div>
				</div>
				<div id="banner-pdf" class="wow fadeInUp">
					<div class="wrap">
						<h2><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/banner_ttl.png" alt="RESERVATION"></h2>
						<p class="btn"><a class="btn-hover" href="<?php echo home_url('/'); ?>reservation/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/banner_btn.png" alt="予約状況のご確認お問い合わせ・ご予約はこちら"></a></p>
					</div>
				</div>
  <div id="news">
    <div class="wrap">
      <h2 class="wow fadeInLeft"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/news_title.png" alt="NEWS"></h2>
      <?php if(!_isMobile()) { ?>
      <div class="news-box wow fadeInUp">
        <div class="post-slide">
          <?php
          $args = array(
          'post_status' => 'publish',
          'showposts' => 12,
          );
          ?>
          <?php 
            $getposts = new WP_query($args); 
            $post_count = $getposts->post_count;
            global $wp_query; $wp_query->in_the_loop = true; 
            $i = 0; 
            while ($getposts->have_posts()) : $getposts->the_post(); 
            $thumb = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri().'/frontend/shared/img/index/demo.jpg';
            $cats = get_the_category();
          ?>
          <?php if($i%3==0) { ?>
          <div class="list">
            <div class="list-f">
              <?php } ?>
              <div class="item">
                <p class="photo"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo get_the_title(); ?>"></a></p>
                <dl>
                  <dt class="ft-add"><?php echo get_the_date('Y-m-d'); ?> <span><?php echo $cats[0]->name ?></span></dt>
                  <dd><span><?php echo get_the_title(); ?></span><a href="<?php the_permalink(); ?>">...［すべて表示］</a></dd>
                </dl>
              </div>
              <?php if($i%3==2 || ($i+1)==$post_count) { ?>
            </div>
          </div>
          <?php } $i++; ?>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
      <?php } else { ?>
      <div class="news-box wow fadeInUp">
        <div class="post-slide">
          <?php
          $args = array(
          'post_status' => 'publish',
          'showposts' => 8,
          );
          ?>
          <?php $getposts = new WP_query($args); 
            $post_count = $getposts->post_count;
            global $wp_query; $wp_query->in_the_loop = true; 
            $i = 0; 
            while ($getposts->have_posts()) : $getposts->the_post(); 
            $thumb = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri().'/frontend/shared/img/index/demo.jpg';
            $cats = get_the_category();
          ?>
          <?php if($i%2==0) { ?>
          <div class="list">
            <div class="list-f">
              <?php } ?>
              <div class="item">
                <p class="photo"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo get_the_title(); ?>"></a></p>
                <dl>
                  <dt class="ft-add"><?php echo get_the_date('Y-m-d'); ?> <span><?php echo $cats[0]->name ?></span></dt>
                  <dd><span><?php echo get_the_title(); ?></span><a href="<?php the_permalink(); ?>">...［すべて表示］</a></dd>
                </dl>
              </div>
              <?php if($i%2!=0  || ($i+1)==$post_count) { ?>
            </div>
          </div>
          <?php } $i++; ?>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
      <?php } ?>
      <p class="btn wow fadeInUp"><a href="<?php echo home_url('/'); ?>/category/news/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/btn_news.jpg" alt="すべて見る"></a></p>
    </div>
  </div>
				<div id="map-google">
					<div class="info-access wow fadeInLeft">
						<h2><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/access_ttl.png" alt="ACCESS"></h2>
						<p class="txt">〒151-0051<br>
							東京都渋谷区千駄ヶ谷5丁目28-10<br>
							ドルミ第2御苑B101</p>
						<p class="btn"><a href="<?php echo home_url('/'); ?>access/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/more.png" alt="もっと詳しく"></a></p>
					</div>
					<div class="box wow fadeInRight">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12962.70066365035!2d139.7039247!3d35.6849996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe2a619233d3d372f!2z44K544K_44K444Kq44K844OW44Op!5e0!3m2!1sja!2s!4v1602220734771!5m2!1sja!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>						
					</div>
				</div>				
			</section>
<?php get_footer(); ?>