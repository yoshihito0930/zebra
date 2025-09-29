<?php get_header();
  $category = get_queried_object();
  $category_name = $category->name;
  $category_id = $category->term_id;
  $categories = get_categories(array('hide_empty'=> 0)); 
?>
<div id="head-top" class="page-all news">
				<div class="key-page">
					<h1><span><?php echo $category_name; ?></span></h1>
					<p class="ttl-key-page wow fadeInUp"><span>スタジオゼブラからのお知らせです。</span></p>
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
						<li><a href="<?php echo home_url('/'); ?>reservation/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav05.png" alt="ご予約・お問い合わせ"></a></li>
						<li><a href="<?php echo home_url('/'); ?>category/news/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnavi_news.png" alt="news"></a></li>
						<li><a href="https://twitter.com/studiozebra1st" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnavi_tw.png" alt="twitter"></a></li>
					</ul>
				</div>
			</div>
			<section>
					<div class="breadcrumb">
						<div class="wrap">
							<?php the_breadcrumb(); ?>
						</div>          
					</div>
				<div id="lead-news">					
					<div class="wrap">
            <?php /* ?>
						<h2 class="ft-add wow fadeInUp"><?php echo $category_name; ?></h2>
            <?php */ ?>
						<div class="news_box">
							<h3>ニュース</h3>
							<ul>
                <?php foreach ($categories as $cat) { 
                    $cat_id = $cat->term_id;
                    $cat_name = $cat->name;
                    $active = ($category_id==$cat_id) ? 'active' : '';
                ?>
								<li><a class="<?php echo $active; ?>" href="<?php echo get_category_link($cat_id); ?>"><span><?php echo $cat_name; ?></span></a></li>
                <?php } ?>
							</ul>
						</div>
						<?php if(have_posts()) : ?>
						<div class="news-box">
							<div class="post-slide1">
								<div class="list">
									<div class="list-f">
									<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
									$thumb = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri().'/frontend/shared/img/index/demo.jpg';
									$cats = get_the_category();		
								?>
									<div class="item wow fadeInUp">
										<p class="photo"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo get_the_title(); ?>"></a></p>
										<dl>
											<dt class="ft-add"><?php echo get_the_date('Y-m-d'); ?> <span><?php echo $cats[0]->name ?></span></dt>
											<dd><span><?php echo get_the_title(); ?></span><a href="<?php the_permalink(); ?>">...［すべて表示］</a></dd>
										</dl>
									</div>
									<?php endwhile; endif; ?>
										
									</div>									
								</div>
							</div>
							
						</div>
						<div class="box-pagination">
									<?php
										global $wp_query;
										$max_num_pages = $wp_query->max_num_pages;
										$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
										if (function_exists('custom_pagination')) {
										custom_pagination($max_num_pages,"",$paged);
										}
									?>
								</div>
						<?php else: ?>
							<p>sorry</p>
						<?php endif; ?>
					</div>
				</div>
			</section>
<?php get_footer(); ?>