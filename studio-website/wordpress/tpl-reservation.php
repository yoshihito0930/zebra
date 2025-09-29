<?php  /* Template Name: Reservation Template */ get_header(); ?>


<div id="head-top" class="page-all reservation">
				<div class="key-page">
					<h1 class="wow fadeInUp"><span>ご予約・お問い合わせ</span></h1>
					<p class="ttl-key-page wow fadeInUp"><span>「<b><a href="<?php echo home_url('/'); ?>policy/" target="_blank">利用規約</a></b>」の内容をご確認のうえ、<br class="sp">ご予約をお願いいたします。</span></p>
				</div>
				<div class="head-info">
					<p class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/logo_fix.png" alt="ロゴ"></a></p>
					<ul class="nav-h">
						<li><a href="<?php echo home_url('/'); ?>studio/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav01.png" alt="スタジオ案内"></a></li>
						<li><a href="<?php echo home_url('/'); ?>price/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav02.png" alt="料金案内"></a></li>
						<li><a href="<?php echo home_url('/'); ?>rental/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav03.png" alt="レンタル機材"></a></li>
						<li><a href="<?php echo home_url('/'); ?>access/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav04.png" alt="アクセス"></a></li>
						<li><a href="<?php echo home_url('/'); ?>faq/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav_a1.png" alt="よくある質問"></a></li>
						<li><a href="<?php echo home_url('/'); ?>horizon/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav_a2.png" alt="ホリゾントルール"></a></li>
						<li class="active"><a href="<?php echo home_url('/'); ?>reservation/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav05.png" alt="ご予約・お問い合わせ"></a></li>
						<li><a href="<?php echo home_url('/'); ?>category/news/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnavi_news.png" alt="news"></a></li>
						<li><a href="https://twitter.com/studiozebra1st" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnavi_tw.png" alt="twitter"></a></li>
					</ul>
				</div>
			</div>
			<section>
				<div id="lead-reservation">
					<div class="wrap">
						<h2 class="wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/title_reservation.png" alt="RESERVATION"></h2>
						<div id="flow-box">
							<div class="box wow fadeInUp">
								<span class="number ft-add">01</span>
								<p><span>ご予約カレンダー</span>で予約状況をご確認のうえ、<br class="pc"><span>ご予約フォーム</span>よりお申し込みをお願いします。</p>
								<nav>
									<a href="#cal-box-add"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/zebra_img3.png" alt="RESERVATION"></a>
									<a href="https://form.run/@studiozebra-1st-reservation" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/zebra_img4.png" alt="RESERVATION"></a>
									</nav>
							</div>
							<div class="box wow fadeInUp">
								<span class="number ft-add">02</span>
								<p>⾃動返信メールが届きましたら、受付担当者からの返信をお待ちください。<br>
<span>受付担当者からの返信をもってご予約の受付完了となります。</span><br>
（スタジオのメールアドレス：<a href="mailto:studiozebra1st@gmail.com">studiozebra1st@gmail.com</a>）<br>
※6時間以内に返信がない場合はお⼿数ですがご連絡ください。<br>
※20時以降にいただいたお申し込みにつきましては、翌⽇の正午までに返信いたします。</p>
							</div>
							<div class="box wow fadeInUp">
								<span class="number ft-add">03</span>
								<ul>
									<li>仮予約にてお申し込みの場合は<br>
										<span>ご利用日の7日前までに予約確定のご連絡をお願いします。</span></li>
									<li id="cal-box-add">本予約にてお申し込みの場合はその時点で<span>予約確定</span>となり<br>
										同時にキャンセル料発生の対象となります。</li>
								</ul>
							</div>
							
						</div>
						<h3 class="ttl-common add-news"><span>カレンダーで予約状況を確認</span></h3>
						<div class="box-cal wow fadeInUp">

							<p class="text-note">
								ご予約希望日に他の予約が入っている場合は、前後1時間以上あけてのご予約をお願いします。<br>（リアルタイム更新ではありません）<br>
								&nbsp;<br>
								<a href="https://calendar.google.com/calendar/embed?src=studiozebra1st%40gmail.com&ctz=Asia%2FTokyo" target="_blank" style="color: #FF463C; font-size: 120%; text-decoration: underline; text-underline-offset: 3px;">＞＞ページがうまく表示されない場合は、こちらをクリック！</a>
							</p>
							<div class="block">
								<iframe src="https://calendar.google.com/calendar/embed?height=590&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTokyo&amp;src=c3R1ZGlvemVicmExc3RAZ21haWwuY29t&amp;color=%23039BE5&amp;showTitle=0&amp;showTz=1&amp;showNav=1" style="border:solid 1px #777" width="800" height="590" frameborder="0" scrolling="no"></iframe>
							</div>
						</div>
					</div>
				</div>
				<div id="contact-box">
					<div class="wrap wow fadeInUp">
						<h2><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/title-contact.png" alt="contact"></h2>
						<h3 class="ttl-common">メールフォームでのご予約・お問合わせ</h3>
						<ul class="btn-contact">
							<li><a href="https://form.run/@studiozebra-1st-reservation" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/btn_c1.png" alt="ご予約フォームはこちら"></a></li>
							<li><a href="https://form.run/@studiozebra-st-inquiry" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/btn_c2.png" alt="お問い合わせフォームはこちら"></a></li>
						</ul>
						<!-- <h4 class="ttl-common">または</h4> -->
						<ul class="btn-sns">
							<li class="wow fadeInLeft"><a href="tel:09067070936" class="telhref" onclick="ga('send', 'event', 'tel', 'click', 'info_phone');"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/tel.png" alt="090-6707-0936"></a></li>
							<li class="wow fadeInRight"><a href="https://line.me/R/ti/p/%40190bnuvc" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/line.png" alt="LINEでのご予約・お問合わせ"></a></li>
						</ul>
					</div>
				</div>
				<div id="sec01-reservation">
					<div class="wrap">
						<h2 class="ttl-common wow fadeInUp">ご予約についての注意事項</h2>
						<h3 class="wow fadeInUp">仮予約につきまして</h3>
						<ul class="wow fadeInUp">
							<li>仮予約は<span>1⽇のご利⽤につき最⼤2⽇間</span>まで承ります。</li>
							<li>仮予約にてお申し込みの場合、<span>ご利⽤⽇の7⽇前の⼣⽅6時までに</span>予約確定のご連絡をお願いいたします。</li>
							<li>予約確定のご連絡がない場合はキャンセル扱いとなります。</li>
							<li>仮予約中に他の方から本予約のお申し込みがあった場合、状況をお伺いするためにご連絡させていただくことがあります。</li>
						</ul>
						<h3 class="wow fadeInUp">本予約につきまして</h3>
						<ul class="wow fadeInUp">
							<li>本予約にてお申し込みの場合はその時点で予約確定となり、同時に<span>キャンセル料発生の対象となります。</span></li>
						</ul>
						<h3 class="wow fadeInUp">第２キープにつきまして</h3>
						<ul class="wow fadeInUp">
							<li>他のお客様が仮予約をされている日時に「<span>第２キープ</span>」としてキャンセル待ちを承ることができます。</li>
							<li>キャンセルの有無が判明した時点で当スタジオよりご連絡を差し上げます。</li>
							<li>他のお客様が本予約をされている日時へのキャンセル待ちはできません。</li>
						</ul>
						<h3 class="wow fadeInUp">キャンセル料の発生のタイミングと、キャンセル料のお支払いにつきまして</h3>
						<ul class="wow fadeInUp">
							<li>キャンセル料の発生のタイミングは下記の通りです。<br>
								 ・ご利⽤⽇の<span>6⽇以前〜4⽇前</span>までのキャンセル料はご予約時間分の<span>利用料の50%</span><br>
								 ・ご利用日の<span>3日前〜前日</span>までのキャンセル料はご予約時間分の<span>利用料の80%</span><br>
								 ・ご利用日<span>当日</span>のキャンセルはご予約時間分の<span>利用料の100%</span></li>
							<li>ご予約当日にご来店が無い場合は、キャンセル料としてご予約時間分の利用料の100%をお支払いいただきます。</li>
							<li>キャンセル料のお支払いは、キャンセルより1週間以内に当スタジオにお越しいただき、現金およびクレジットカードにてお支払いいただくか、お振込にてお⽀払いいただきます。</li>
						</ul>
						<h3 class="wow fadeInUp">ロケハンにつきまして</h3>
						<ul class="wow fadeInUp">
							<li>ロケハンのお問い合わせは、メールかお電話にてお願いします。</li>
							<li>ロケハンのご予約日に撮影のお申し込みがあった場合、ロケハン日時を変更していただくことがございますのであらかじめご了承ください。</li>
						</ul>
					</div>
				</div>
			</section>
<?php get_footer(); ?>