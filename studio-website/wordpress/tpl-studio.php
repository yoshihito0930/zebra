<?php  /* Template Name: Studio Template */ get_header(); ?>


<div id="head-top" class="page-all studio">
				<div class="key-page">
					<h1 class="wow fadeInUp"><span>スタジオ案内</span></h1>
					<h2 class="ttl-key-page wow fadeInUp"><span>天高3m超・引き9mの白ホリスタジオ。</span><br><span>あなたのスタジオワークをもっと自由に、快適に。</span></h2>
				</div>
				<div class="head-info">
					<p class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/logo_fix.png" alt="ロゴ"></a></p>
					<ul class="nav-h">
						<li class="active"><a href="<?php echo home_url('/'); ?>studio/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav01.png" alt="スタジオ案内"></a></li>
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
				<div id="lead-studio">
					<div class="wrap">
						<h2 class="ttl-common wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/studio.svg" width="784" alt="ABOUT OUR STUDIO STUDIOZEBRA!"></h2>
						<div class="studio-box">
							<p class="photo wow fadeInLeft"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/img_studio.png" alt="photo"></p>
							<dl class="wow fadeInRight">
								<dt><span>ゆったり！</span></dt>
								<dd>複数箇所から狙えるホリゾントが特徴。<br>３mを超える天井高と９mの引きがありモデルの全身撮影にも適しています。</dd>
							</dl>
						</div>
						<h3 class="wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/title_details.png" alt="平面図"></h3>
						<div class="studio-detail wow fadeInRight">
							<?php if( have_rows('img_s') ): ?>
								<div class="photo">
                                	<div class="show-box opc o2 pc">
                                        <?php while( have_rows('img_s') ): the_row(); 
                                                $image = get_sub_field('image');
                                                ?>
                                                <p>
                                                    <img src="<?php echo wp_get_attachment_url($image['id']); ?>" alt="<?php echo $image['alt']; ?>">
                                                </p>
                                        <?php endwhile; ?>
									</div>
<?php if( have_rows('pp_demo') ): ?>
								<?php $x = 1; ?>
								<?php while( have_rows('pp_demo') ): the_row();
									$images = get_sub_field('image');
									$text = get_sub_field('text');
								?>
								<div class="show-box vt-<?php echo $x; ?> pc">
                                	<?php if( $images ): ?>
													<?php foreach( $images as $image ): ?>
														<p><img src="<?php echo wp_get_attachment_url($image['id']); ?>" alt="<?php echo $image['alt']; ?>"></p>
													<?php endforeach; ?>
												<?php endif; ?>			
									
								</div>
<?php $x++; ?>
							<?php endwhile; ?>
						<?php endif; ?>

							</div>
							<?php endif; ?>
							<div class="detail-map wow fadeInRight">
								<p class="map"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/common/map.png" alt="MAP"></p>
								<p class="unit-a"><a class="btn unsmooth" href="#popup1">Button</a></p>
								<p class="unit-b"><a class="btn unsmooth" href="#popup2">Button</a></p>
								<p class="unit-c"><a class="btn unsmooth" href="#popup3">Button</a></p>
								<p class="unit-d"><a class="btn unsmooth" href="#popup4">Button</a></p>
								<p class="unit-e"><a class="btn unsmooth" href="#popup5">Button</a></p>
								<p class="unit-f"><a class="btn unsmooth" href="#popup6">Button</a></p>

							</div>

							<?php if( have_rows('pp_demo') ): ?>
								<?php $x = 1; ?>
								<?php while( have_rows('pp_demo') ): the_row();
									$images = get_sub_field('image');
									$text = get_sub_field('text');
								?>
								<div class="remodal" data-remodal-id="popup<?php echo $x; ?>" role="dialog">
								<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
								<div id="popup<?php echo $x; ?>">
								  <div class="pp-box-st">
										<dl>
											<?php if( $images ): ?>
												<dt>
													<?php foreach( $images as $image ): ?>
														<span><img src="<?php echo wp_get_attachment_url($image['id']); ?>" alt="<?php echo $image['alt']; ?>"></span>
													<?php endforeach; ?>
												</dt>
												<?php endif; ?>											
											<dd><?php echo $text; ?></dd>
										</dl>
									</div>
								</div>
							</div>
							<?php $x++; ?>
							<?php endwhile; ?>
						<?php endif; ?>
						</div>
						<dl class="note wow fadeInUp">
							<dt>平面図のアイコン<span class="ft-add">A</span> 〜 <span class="ft-add">F</span>をクリックすると画像が表示されます</dt>
							<dd>※写真・間取り図と現況が相違する場合は、現況が優先されますので予めご了承下さい。</dd>
						</dl>
					</div>
				</div>
				<div id="gallery-box">
					<div class="wrap">
						<h2 class="ft-add wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/index/photo_galery.svg" width="507" alt="PHOTO GALLERY"></h2>
						<h3 class="ttl-common wow fadeInUp">フォトギャラリー</h3>							
							<div class="slide-box wow fadeIn">
								<div class="slide-for">								
									<?php if( have_rows('slider') ): ?>
										<?php while( have_rows('slider') ): the_row();
											$image = get_sub_field('image');
										?>
											<?php if( have_rows('image') ): ?>
												<?php while( have_rows('image') ): the_row();
													$main = get_sub_field('main');
												?>
													<p><img src="<?php echo wp_get_attachment_url($main['id']); ?>" alt="<?php echo $main['alt']; ?>"></p>

												<?php endwhile; ?>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						<div class="th-box wow fadeIn">
							<div class="slide-nav">
								<?php if( have_rows('slider') ): ?>
									<?php while( have_rows('slider') ): the_row();
										$image = get_sub_field('image');
									?>
										<?php if( have_rows('image') ): ?>
											<?php while( have_rows('image') ): the_row();
												$thumbnail = get_sub_field('thumbnail');
											?>
												<p><img src="<?php echo wp_get_attachment_url($thumbnail['id']); ?>" alt="<?php echo $thumbnail['alt']; ?>"></p>

											<?php endwhile; ?>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>								
							</div>
						</div>
						
					</div>
				</div>
			</section>
<?php get_footer(); ?>