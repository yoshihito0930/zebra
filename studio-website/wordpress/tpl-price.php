<?php  /* Template Name: Price Template */ get_header(); ?>


<div id="head-top" class="page-all price">
				<div class="key-page">
					<h1 class="wow fadeInUp"><span>料金案内</span></h1>
<!-- pタグからh2へ編集 -->
					<h2 class="ttl-key-page wow fadeInUp"><span>新宿エリアの安くてきれいなレンタル撮影スタジオ。</span><br><span>シンプルな料金設定です。</span></h2>
<!-- ここまで -->
				</div>
				<div class="head-info">
					<p class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/logo_fix.png" alt="ロゴ"></a></p>
					<ul class="nav-h">
						<li><a href="<?php echo home_url('/'); ?>studio/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav01.png" alt="スタジオ案内"></a></li>
						<li class="active"><a href="<?php echo home_url('/'); ?>price/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav02.png" alt="料金案内"></a></li>
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
				<div id="lead">
					<div class="wrap">
<!-- テキスト編集 -->						
						<!-- <h2 class="ttl-common wow fadeInUp"><span>新宿エリアで白ホリスタジオを<br class="sp">お探しの方に朗報です！</span></h2> -->
						<h3 class="ttl-common wow fadeInUp title-price b-none"><span><font size="6">スタジオ利用料</font></span></h3>
<!-- ここまで -->

						<?php
							$choose = get_field('choose');
							$image = get_field('image');
                                $image1 = get_field('image1');
						?>

						<?php if( get_field('choose') == 'show' ): ?>
							<p class="sale is-sale wow fadeInUp"><img src="<?php echo wp_get_attachment_url($image['id']); ?>" alt="<?php echo $image['alt']; ?>"></p>
						<?php endif; ?>
                        <?php if( get_field('choose') == 'show1' ): ?>
							<p class="sale is-sale wow fadeInUp"><img src="<?php echo wp_get_attachment_url($image1['id']); ?>" alt="<?php echo $image1['alt']; ?>"></p>
						<?php endif; ?>
						<!-- <p class="sale is-sale"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/sale.png" alt="sale"></p> -->
						<!-- <p class="note mb30 wow fadeInUp">＊最低利用時間２時間より　＊23時〜翌8時の深夜帯は料金50%UP、深夜帯を含む最低利用時間は４時間より</p> -->
						<div class="lead-banner is-price mt">
							<div class="list-price">
								<div class="item wow fadeInLeft">
									<p class="photo_price"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/zebra_240825_item_02_add.png" alt="4,500"></p>
									<!--
									<p class="ttl"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/t1.png" alt="オススメ！"> <span class="ttl-common">機材使い放題プラン</span></p>
									<dl>
										<dt class="ft-add"><b>&yen;</b><span>4,500</span>/1h</dt>
										<dd>（税込&yen;4,950）</dd>
									</dl>
									-->								
								</div>
								<div class="item is-item wow fadeInRight">
									<div class="box">
										<!-- <p class="time ft-add">8:00〜23:00<br></p> -->
										<p class="text1">最低利⽤時間／2時間</p>
										<p class="text">スタジオ内のすべての機材が使えます︕<br>
										（有料の消耗品・LEDライトを除く）</p>
										<p class="btn1"><a href="<?php echo home_url('/'); ?>rental/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/zebra_240704_item04.png" alt="貸出機材の詳細はこちら"></a></p>
										<p class="price-add-1807">＊深夜帯（23時〜翌8時）は、通常料⾦の50%UP<br>
＊深夜帯を含む場合の最低利⽤時間／4時間<br>
＊6⼈以上でのワークショップでご利⽤<br>
・・・合計のご利⽤料に＋2,200円（税込）<br>
＊ラメ、グリッターを多⽤した⾐装・⼩道具をご使⽤<br>
・・・合計のご利⽤料に＋2,200円（税込）</p>
									</div>	
								</div>
							</div>
							<!-- <div class="list-price price-old">
								<div class="item wow fadeInLeft">
									<p class="photo_price"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/bnr_price4.png" alt=""></p>
									<p class="ttl"><span class="ttl-common">場所貸しプラン</span></p>
									<dl>
										<dt class="ft-add"><b>&yen;</b><span>3,500</span>/1h</dt>
										<dd>（税込&yen;3,850）</dd>
									</dl>						
								</div>
								<div class="item is-item wow fadeInRight">
									<div class="box">
										<p class="time">8:00~24:00</p>
										<p class="text">最低利用時間2時間から<br>
											スタジオのご利用のみのプランです</p>
									</div>	
								</div>
							</div>
							<div class="list-price price-old">
								<div class="item wow fadeInLeft">
									<p class="photo_price"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/bnr_price5.png" alt=""></p>
									<p class="ttl"><span class="ttl-common">深夜8時間パック</span></p>
									<dl>
										<dt class="ft-add"><b>&yen;</b><span>40,000</dt>
										<dd>（税込&yen;44,000）</dd>
									</dl>						
								</div>
								<div class="item is-item wow fadeInRight">
									<div class="box">
										<p class="time">24:00~翌8:00</p>
										<p class="text">機材使い放題プラン限定<br>
											24時から翌8時の8時間パックです</p>
									</div>	
								</div>
							</div> -->
							<div class="list-price price-old">
								<div class="item wow fadeInLeft">
									<p class="photo_price"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/bnr_price6.png" alt=""></p>
									<!--
									<p class="ttl"><span class="ttl-common">機材保険</span></p>
									<dl>
										<dt class="ft-add"><b>&yen;</b><span>1,100</span>/1<span class="small">回</span></dt>
										<dd>&nbsp;</dd>
									</dl>	
									-->							
								</div>
								<div class="item is-item wow fadeInRight">
									<div class="box">
										<p class="text">お客様の不注意による機材の破損を保証します。<br>
											（免責&yen;10,000、1機材に限ります）<br>
											但し、ホリゾントを破損・汚損した場合の<br class="pc">
											修繕費用と休業補償は含みません。</p>
									</div>	
								</div>
							</div>
						</div>
						<ul class="text-list-note wow fadeInUp">
							<li><span>●</span> 深夜帯（23時〜翌8時）は通常のご利用料金の<span>50%UP</span></li>
							<li><span>●</span> ゴミの回収は45リットルのゴミ袋1袋につき¥330(税込)にて回収いたします。分別できていないごみと粗⼤ごみ、⽣花⽤のオアシスは回収できません</li>
							<li><span>●</span> 機材の持ち込み料は原則かかりません。</li>
							<li><span>●</span>  HMIをお持ち込みの場合は、1台あたり&yen;1,100(税込)/1hの持ち込み料をお支払いいただきます。<br>お持ち込み可能なHMIの電力量は1台1.2kw以下、総電力量は2.5kwまでです。</li>
						</ul>
<div class="price-note-edit pc">
					
						<h3 class="ttl-common wow fadeInUp">キャンセル料について<span>※本予約確定後は、ご利⽤⽇までの⽇数に応じてキャンセル料が発⽣します。 </span></h3>
						<div class="list wow fadeInUp">
							<dl>
								<dt>ご利⽤⽇の6⽇以前〜4⽇前</dt>
								<dd>ご予約時間分の利用料の50%</dd>
							</dl>
							<dl>
								<dt>ご利用日の3日前〜前日</dt>
								<dd>ご予約時間分の利用料の80%</dd>
							</dl>
							<dl>
								<dt>ご利用日当日</dt>
								<dd>ご予約時間分の利用料の100%</dd>
							</dl>
						</div>
				</div>
					</div>
				</div>
				<div class="price-note-edit sp">
					<div class="wrap">
<!-- h2タグからh3へ編集 -->
						<h3 class="ttl-common wow fadeInUp">キャンセル料について<span>※本予約確定後は、ご利⽤⽇までの⽇数に応じてキャンセル料が発⽣します。 </span></h3>
<!-- ここまで -->
						<div class="list wow fadeInUp">
							<dl>
								<dt>ご利⽤⽇の6⽇以前〜4⽇前</dt>
								<dd>ご予約時間分の利用料の50%</dd>
							</dl>
							<dl>
								<dt>ご利用日の3日前〜前日</dt>
								<dd>ご予約時間分の利用料の80%</dd>
							</dl>
							<dl>
								<dt>ご利用日当日</dt>
								<dd>ご予約時間分の利用料の100%</dd>
							</dl>
						</div>
					</div>
				</div>			
			</section>
<?php get_footer(); ?>