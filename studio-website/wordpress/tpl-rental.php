<?php  /* Template Name: Rental Template */ get_header(); ?>


<div id="head-top" class="page-all rental">
				<div class="key-page">
					<h1 class="wow fadeInUp"><span>レンタル機材</span></h1>
					<h2 class="ttl-key-page wow fadeInUp"><span>スタジオゼブラの貸し出し機材は<br class="sp">充実のラインナップ。</span><br><span>ライティングの可能性が広がります。</span></h2>
				</div>
				<div class="head-info">
					<p class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/logo_fix.png" alt="ロゴ"></a></p>
					<ul class="nav-h">
						<li><a href="<?php echo home_url('/'); ?>studio/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav01.png" alt="スタジオ案内"></a></li>
						<li><a href="<?php echo home_url('/'); ?>price/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav02.png" alt="料金案内"></a></li>
						<li class="active"><a href="<?php echo home_url('/'); ?>rental/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav03.png" alt="レンタル機材"></a></li>
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
				<div id="lead-rental">
					<div class="wrap">
						<h2 class="ttl-common wow fadeInUp">レンタル機材一覧</h2>
						<div class="list">
							<?php if( have_rows('list') ): ?>
								<?php while( have_rows('list') ): the_row();
									$item = get_sub_field('item');
								?>
									<?php if( have_rows('item') ): ?>
										<?php while( have_rows('item') ): the_row();
											$image = get_sub_field('image');
											$text = get_sub_field('text');
										?>
											<div class="item wow fadeInUp">
												<p class="photo"><img src="<?php echo wp_get_attachment_url($image['id']); ?>" alt="<?php echo $image['alt']; ?>"></p>
												<p class="text"><?php echo $text; ?></p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div id="download-flie">
					<div class="wrap">
					<?php $file = get_field('file');
						$file_size = $file;
						if( $file ): ?>
							<p class="btn wow fadeInUp">							
								<a href="<?php echo $file['url']; ?>" target="_blank" download>
								<img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/btn_dowload.png" alt="機材一覧をダウンロード"></a>
							</p>
							<p class="file-size wow fadeInUp">PDF <span><?php echo size_format($file_size['filesize']); ?></span></p>
						<?php endif; ?>
					</div>
				</div>
				<div id="sec01-rental">
					<div class="wrap">
						<h2 class="ttl-common wow fadeInUp">消耗品（有料）</h2>
						<dl class="wow fadeInUp">
							<dt><span>●</span> 背景紙（2.72m）</dt>
							<dd class="right-t">¥2,300（税込¥2,530）/1m</dd>
						</dl>
						<p class="txt wow fadeInUp">
							常設カラー・・・<br>
							ブラック、ダブグレー、ペールブルー、ウィート、アップルグリーン、カナリー、<br>レッド、ピンク
						</p>
						<p class="photo wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/img_color.png" alt="消耗品（有料）"></p>
						<dl class="wow fadeInUp">
							<dt><span>●</span> トレーシングペーパー1100</dt>
							<dd>¥200(税込¥220)/1m</dd>
						</dl>
						<dl class="wow fadeInUp">
							<dt><span>●</span> トレーシングペーパー2200 </dt>
							<dd>¥700(税込¥770)/1m</dd>
						</dl>
						<dl class="wow fadeInUp">
							<dt><span>●</span> ユポ2200</dt>
							<dd>¥2,000(税込¥2,200)/1m</dd>
						</dl>
						<dl class="wow fadeInUp">
							<dt><span>●</span> タフニール1830 </dt>
							<dd>¥700(税込¥770)/1m</dd>
						</dl>
						<dl class="wow fadeInUp">
							<dt><span>●</span> ケント紙（四六判）白・黒・グレー</dt>
							<dd>¥300(税込¥330)/1枚</dd>
						</dl>
						<p class="note wow fadeInUp">レンタル機材や備品は、状況により内容が変更される場合がございますので事前にご確認ください</p>
					</div>
				</div>
			</section>
<?php get_footer(); ?>