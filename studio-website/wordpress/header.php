<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="ja"><![endif]-->
<!--[if IE 7]><html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="ja"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="ja"><![endif]-->
<!--[if IE 9]><html class="ie ie9 ie-lt10 no-js" lang="ja"><![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?> class="no-js responsive">
<!--<![endif]-->

<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9958VF71PZ">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9958VF71PZ');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="author" content="FOODCONNECTION">

	<!-- Mobile -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no, date=no, address=no, email=no">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">

	<!-- Profiles -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/apple-touch-icon.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/favicon.ico">

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&amp;display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frontend/shared/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frontend/shared/css/slick.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frontend/shared/css/shared.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frontend/shared/css/index.css">
	<?php wp_head(); ?>
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178601734-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178601734-1');
</script>


</head>

<body <?php body_class('ie-smoothscroll'); ?>>
	<main>
		<header class="header-box">
			<p class="logo sp"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/logo.png" alt="ロゴ"></a></p>
			<div class="nav-header">
				<div class="inner">
					<p class="logo-fix pc"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/logo_fix.png" alt="ロゴ"></a></p>
					<ul class="nav">
						<li class="sp <?php if(is_front_page()) { echo 'active'; }; ?>"><a class="nav-main" href="<?php echo home_url('/'); ?>"><span class="sp">トップページ</span></a></li>
						<li class="<?php if(is_page('studio')) { echo 'active'; }; ?>"><a class="nav-main" href="<?php echo home_url('/'); ?>studio/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav01.png" alt="スタジオ案内" class="non-over pc"><span class="sp">スタジオ案内</span></a></li>
						<li class="<?php if(is_page('price')) { echo 'active'; }; ?>"><a class="nav-main" href="<?php echo home_url('/'); ?>price/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav02.png" alt="料金案内" class="non-over pc"><span class="sp">料金案内</span></a></li>
						<li class="<?php if(is_page('rental')) { echo 'active'; }; ?>"><a class="nav-main" href="<?php echo home_url('/'); ?>rental/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav03.png" alt="レンタル機材" class="non-over pc"><span class="sp">レンタル機材</span></a></li>
						<li class="<?php if(is_page('access')) { echo 'active'; }; ?>"><a class="nav-main" href="<?php echo home_url('/'); ?>access/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav04.png" alt="アクセス" class="non-over pc"><span class="sp">アクセス</span></a></li>

						<li class="<?php if(is_page('faq')) { echo 'active'; }; ?>"><a class="nav-main" href="<?php echo home_url('/'); ?>faq/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav_a1.png" alt="よくある質問" class="non-over pc"><span class="sp">よくある質問</span></a></li>
						<li class="<?php if(is_page('horizon')) { echo 'active'; }; ?>"><a class="nav-main" href="<?php echo home_url('/'); ?>horizon/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav_a2.png" alt="ホリゾントルール" class="non-over pc"><span class="sp">ホリゾントルール</span></a></li>

						<li class="<?php if(is_page('reservation')) { echo 'active'; }; ?>"><a class="nav-main" href="<?php echo home_url('/'); ?>reservation/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnav05.png" alt="ご予約・お問い合わせ" class="non-over pc"><span class="sp">ご予約・お問い合わせ</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>category/news/"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnavi_news.png" alt="news"></a></li>
						<li><a href="https://twitter.com/studiozebra1st" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/frontend/shared/img/shared/gnavi_tw.png" alt="twitter"></a></li>
					</ul>
				</div>
				
			</div>	
			<div class="hamberger-btn"><span></span></div>
		</header>