<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<?php if (
    is_post_type_archive('post') ||
    (is_category() && !is_tax('category')) ||
    is_singular('post')
): ?>
<meta name="robots" content="noindex,nofollow"/>
<?php endif; ?>

<meta name="format-detection" content="telephone=no">

<!--Do Setting about SEO on admin GUI page-->
<!--
<?php if (is_home()): ?>
<meta name="description" content="ナギサガスフィッティングスは、ガス機器、住宅設備機器の販売、お取替え工事をさせていただいております。対応エリアは大阪府、京都府、奈良県、兵庫県（すべて一部地域を除く）。大手ガス会社のお客様対応研修も終えており、工事の品質、お客様対応共に大手ガス会社の品質そのものです。ご相談も最新の知識と確な技術で業界の最前線で活躍する当社にお任せ下さい！">
<?php elseif (is_post_type_archive('news') || is_singular('news')): ?>
<meta name="description" content="ナギサガスフィッティングスのwebサイトの「お知らせ」のページです。ナギサガスフィッティングスは、ガス機器、住宅設備機器の販売、お取替え工事をさせていただいております。対応エリアは大阪府、京都府、奈良県、兵庫県（すべて一部地域を除く）。大手ガス会社のお客様対応研修も終えており、工事の品質、お客様対応共に大手ガス会社の品質そのものです。ご相談も最新の知識と確な技術で業界の最前線で活躍する当社にお任せ下さい">
<?php elseif (
    is_tax('product_cat')
): ?>npm run prettier -- path/to/file.php --write
<meta name="description" content="ナギサガスフィッティングスのwebサイトの「<?php echo single_term_title; ?>」のページです。ナギサガスフィッティングスは、ガス機器、住宅設備機器の販売、お取替え工事をさせていただいております。対応エリアは大阪府、京都府、奈良県、兵庫県（すべて一部地域を除く）。大手ガス会社のお客様対応研修も終えており、工事の品質、お客様対応共に大手ガス会社の品質そのものです。ご相談も最新の知識と確な技術で業界の最前線で活躍する当社にお任せ下さい">
<?php else: ?>
<meta name="description" content="ナギサガスフィッティングスのwebサイトの「<?php echo trim(
    wp_title()
); ?>」のページです。ナギサガスフィッティングスは、ガス機器、住宅設備機器の販売、お取替え工事をさせていただいております。対応エリアは大阪府、京都府、奈良県、兵庫県（すべて一部地域を除く）。大手ガス会社のお客様対応研修も終えており、工事の品質、お客様対応共に大手ガス会社の品質そのものです。ご相談も最新の知識と確な技術で業界の最前線で活躍する当社にお任せ下さい！">
<?php endif; ?>
-->

<?php $upload_dir = wp_upload_dir(); ?>
<!--
<meta property="og:title" content="ナギサガスフィッティングス" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://nagisa-gas.jp/" />
<meta property="og:image" content="<?php echo $upload_dir[
    'baseurl'
]; ?>logo.jpg" />
<meta property="og:site_name"  content="ナギサガスフィッティングス" />
<meta property="og:description" content="ナギサガスフィッティングスは、ガス機器、住宅設備機器の販売、お取替え工事をさせていただいております。対応エリアは大阪府、京都府、奈良県、兵庫県（すべて一部地域を除く）。大手ガス会社のお客様対応研修も終えており、工事の品質、お客様対応共に大手ガス会社の品質そのものです。ご相談も最新の知識と確な技術で業界の最前線で活躍する当社にお任せ下さい！" />
-->

<!-- <?php if (is_home()): ?> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/css/slick.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/plugin/slick/slick-theme.css"> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/plugin/slick/slick.css"> -->
<!-- <?php elseif (is_tax('product_cat')): ?> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/css/colorbox.css"> -->
<!-- <?php endif; ?> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/css/reset.css"> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/css/base.css"> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/css/common.css"> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/css/page.css"> -->
<!-- <link rel="stylesheet" href="./wp-content/themes/nagisa-gas-code/asset/css/sp.css"> -->
<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css"> -->

<!-- google api?? -->
<!--
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap&subset=japanese">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
-->

<?php if (is_home()): ?>
<title>ナギサガスフィッティングス</title>
<?php elseif (is_post_type_archive('news')): ?>
<title>新着情報 | ナギサガスフィッティングス</title>
<?php elseif (is_singular('news')): ?>
<title><?php the_title(); ?> | 新着情報 | ナギサガスフィッティングス</title>
<?php elseif (is_post_type_archive('works')): ?>
<title>施工実績 | ナギサガスフィッティングス</title>
<?php elseif (is_tax('product_cat')): ?>
<title><?php single_term_title(); ?> | 取扱い製品 | ナギサガスフィッティングス</title>
<?php elseif (is_404()): ?>
<title>ページがみつかりません | ナギサガスフィッティングス</title>
<?php else: ?>
<title><?php the_title(); ?> | ナギサガスフィッティングス</title>
<?php endif; ?>


<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141813289-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141813289-1');
</script>

<script type="text/javascript">
	$(document).ready(function() {
	  $(".drawer").drawer();
	});
	objectFitImages('.ofi');
</script>

</head>

<?php if (is_home()): ?>
<body id="top">
<?php elseif (is_post_type_archive('news') || is_singular('news')): ?>
<body id="news" class="under">
<?php elseif (
    is_post_type_archive('product') ||
    is_singular('product') ||
    is_tax('product_cat')
): ?>
<body id="product" class="under">
<?php elseif (is_post_type_archive('works') || is_singular('works')): ?>
<body id="works" class="under">
<?php elseif (is_404()): ?>
<body id="not-found" class="under">
<?php elseif (is_page('test')): ?>
<body id="inquiry" class="under">
<?php else: ?>
<body id="<?php echo get_post($wp_query->post->ID)
    ->post_name; ?>" class="under">
<?php endif; ?>

<div class="drawer drawer--top">
	<div id="wrapper">
		<header id="header">
			<div class="upper for_pc">
				<!--
				<div class="hdrInner">
					<h1>お見積もり無料です。現地を確認の上、お客様に最適な機器の提案をさせていただきます！</h1>
					<div class="telBox">
						<div class="head">お電話でのお問い合わせ</div>
						<div class="number"><span class="day">【平日】</span><span class="tel">0120-006-152</span></div>
						<div class="number"><span class="day">【土】</span><span class="tel">0120-637-879</span></div>
						<div class="foot">(定休日：日・祝)</div>
					</div>
				</div>-->
			</div>
			<div class="header-pc for_pc">
				<div class="hdrInner">
					<div class="logoBox">
						<a href="<?php echo home_url(); ?>/">
							<img src="<?php echo $upload_dir[
           'baseurl'
       ]; ?>/logo_01.png.webp" alt="ナギサガスフィッティングス" >
						</a>
					</div>
					<div id="gNavi">
						<ul>
							<li class="gNavi_list">
								<a href="<?php echo home_url(); ?>/" id="gnavi_home">
								<span class="jpn">ホーム</span><span class="eng">home</span>
								</a>
							</li>
							<li class="gNavi_list">
								<div id="gnavi_about" class="gnavi-icon">
									<span class="jpn">私たちについて</span>
									<span class="eng">about</span>
								</div>
								<div class="gNavi_sub">
									<div class="gNavi_sub_inner">
										<div class="lBox">
											<div class="menuTtl"> 私たちについて <span>about</span> </div>
										</div>
										<div class="cBox">
											<ul>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/company/">会社案内</a></li>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/about/">ナギサガスフィッティングスの安心施工</a></li>
												<!--<li class="sub_list"><a href="<?php echo home_url(); ?>/staff">スタッフ紹介</a></li>-->
												<!--<li><a href="<?php echo home_url(); ?>/ecowill/"><img src="<?php echo home_url(); ?>/Image/common/bnr_ecowill.jpg" alt="" width="261" height="67" class="over"><br>
													エコウィルからの乗り換えはこちら</a></li>-->
											</ul>
										</div>
										<div class="rBox">
											<ul>
												<li> <a href="<?php echo home_url(); ?>/inquiry/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi01.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>無料お見積もり・お問い合わせ</p>
													</a> </li>
												<li> <a href="<?php echo home_url(); ?>/form/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi02.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>急なご相談はこちら</p>
													</a> </li>
												<li> <a href="<?php echo home_url(); ?>/preparation/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi03.png.webp" alt="" width="273" height="89"></div>
													<p>お問い合わせの前に</p>
													</a> </li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="gNavi_list">
								<div id="gnavi_product" class="gnavi-icon">
									<span class="jpn">取扱い製品</span>
									<span class="eng">product</span>
								</div>
								<div class="gNavi_sub">
									<div class="gNavi_sub_inner">
										<div class="lBox">
											<div class="menuTtl"> 取扱い製品 <span>product</span> </div>
										</div>
										<div class="cBox">
											<ul>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/product/gas/">給湯機</a></li>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/product/kitchen/">厨房機器</a></li>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/product/bath/">浴室暖房乾燥機</a></li>
												<!--<li class="sub_list"><a href="#">床暖房</a></li>
												<li class="sub_list"><a href="#">エコキュート</a></li>
												<li class="sub_list"><a href="#">トイレ</a></li>-->

												<!--<li><a href=""><img src="./wp-content/themes/nagisa-gas-code/asset/image/bnr_ecowill.jpg" alt=""  width="261" height="67"><br>
													エコウィルからの乗り換えはこちら</a></li>-->
											</ul>
										</div>
										<div class="rBox">
											<ul>
												<li> <a href="<?php echo home_url(); ?>/inquiry/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi01.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>無料お見積もり・お問い合わせ</p>
													</a> </li>
												<li> <a href="<?php echo home_url(); ?>/form/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi02.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>急なご相談はこちら</p>
													</a> </li>
												<li> <a href="<?php echo home_url(); ?>/preparation/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi03.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>お問い合わせの前に</p>
													</a> </li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="gNavi_list">
								<div id="gnavi_costomer" class="gnavi-icon">
									<span class="jpn">お客様窓口</span>
									<span class="eng">customer</span>
								</div>
								<div class="gNavi_sub">
									<div class="gNavi_sub_inner">
										<div class="lBox">
											<div class="menuTtl"> お客様窓口 <span>customer</span> </div>
										</div>
										<div class="cBox">
											<ul>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/price/">標準工事費</a></li>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/flow/">ご注文の流れ</a></li>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/area/">対応エリア</a></li>
												<li class="sub_list"><a href="<?php echo home_url(); ?>/faq/">よくあるご質問</a></li>
												<!--<li class="sub_list"><a href="<?php echo home_url(); ?>/warranty/">保証について</a></li>-->
												<!--<li><a href="<?php echo home_url(); ?>/ecowill/"><img src="<?php echo home_url(); ?>/Image/common/bnr_ecowill.jpg" alt=""  width="261" height="67"><br>
													エコウィルからの乗り換えはこちら</a></li>-->
											</ul>
										</div>
										<div class="rBox">
											<ul>
												<li> <a href="<?php echo home_url(); ?>/inquiry/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi01.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>無料お見積もり・お問い合わせ</p>
													</a> </li>
												<li> <a href="<?php echo home_url(); ?>/form/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi02.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>急なご相談はこちら</p>
													</a> </li>
												<li> <a href="<?php echo home_url(); ?>/preparation/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi03.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>お問い合わせの前に</p>
													</a> </li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="gNavi_list">
								<a href="<?php echo home_url(); ?>/works/" id="gnavi_works">
								<span class="jpn">施工実績</span>
								<span class="eng">works</span></a>
							</li>
							<li class="gNavi_list">
								<div id="gnavi_contact" class="gnavi-tel">
									<span class="jpn">無料見積り<br>お問い合わせ</span>
									<span class="eng">contact</span>
								</div>
								<div class="gNavi_sub contact">
									<div class="gNavi_sub_inner">
										<div class="lBox">
											<div class="menuTtl"> お問い合わせ <span>customer</span> </div>
										</div>
										<div class="rBox">
											<ul>
												<li> <a href="<?php echo home_url(); ?>/inquiry/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi01.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>無料お見積もり・お問い合わせ</p>
													</a> </li>
												<li> <a href="<?php echo home_url(); ?>/form/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi02.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>急なご相談はこちら</p>
													</a> </li>
												<li> <a href="<?php echo home_url(); ?>/preparation/">
													<div class="imgBox"><img src="<?php echo $upload_dir[
                 'baseurl'
             ]; ?>/subnavi03.png.webp" alt="" width="273" height="89" class="over"></div>
													<p>お問い合わせの前に</p>
													</a> </li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="for_sp header-sp">
			<div class="hdrInner">
				<div class="logoBox">
					<a href="<?php echo home_url(); ?>/">
						<img src="<?php echo $upload_dir[
          'baseurl'
      ]; ?>/logo_01.png.webp" alt="ナギサガスフィッティングス">
					</a>
				</div>
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="drawer-hamburger-icon">
					</span>
				</button>
				<nav class="drawer-nav">
					<div class="drawer-menu">
						<ul>
							<li><a href="<?php echo home_url(); ?>/">HOME</a></li>
							<li class="list_main drawer-dropdown"><span class="drawer-menu-item" data-toggle="dropdown">私たちについて</span>
								<ul  class="drawer-dropdown-menu">
									<li><a href="<?php echo home_url(); ?>/company/" class="drawer-menu-item">会社案内</a></li>
									<li><a href="<?php echo home_url(); ?>/about/" class="drawer-menu-item">ナギサガスフィッティングスの安心施工</a></li>
									<li><a href="<?php echo home_url(); ?>/staff" class="drawer-menu-item">スタッフ紹介</a></li>
								</ul>
							</li>
							<li class="list_main drawer-dropdown"><span class="drawer-menu-item" data-toggle="dropdown">取扱い製品</span>
								<ul class="drawer-dropdown-menu">
									<li><a href="<?php echo home_url(); ?>/product/gas/" class="drawer-menu-item">給湯機</a></li>
									<li><a href="<?php echo home_url(); ?>/product/kitchen/" class="drawer-menu-item">厨房機器</a></li>
									<li><a href="<?php echo home_url(); ?>/product/bath/" class="drawer-menu-item">浴室暖房乾燥機</a></li>
									<li><a href="#" class="drawer-menu-item">床暖房</a></li>
									<li><a href="#" class="drawer-menu-item">エコキュート</a></li>
									<li><a href="#" class="drawer-menu-item">トイレ</a></li>
								</ul>
							</li>
							<li class="list_main drawer-dropdown"> <span class="drawer-menu-item" data-toggle="dropdown">お客様窓口</span>
								<ul class="drawer-dropdown-menu">
									<li class=""><a href="<?php echo home_url(); ?>/price/">標準工事費</a></li>
									<li><a href="<?php echo home_url(); ?>/flow/" class="drawer-menu-item">ご注文の流れ</a></li>
									<li><a href="<?php echo home_url(); ?>/area/" class="drawer-menu-item">対応エリア</a></li>
									<li><a href="<?php echo home_url(); ?>/faq/" class="drawer-menu-item">よくあるご質問</a></li>
									<li><a href="<?php echo home_url(); ?>/warranty/" class="drawer-menu-item">保証について</a></li>
									<li><a href="<?php echo home_url(); ?>/ecowill/" class="drawer-menu-item">エコウィルからの乗り換えはこちら</a></li>
								</ul>
							</li>
							<li><a href="<?php echo home_url(); ?>/works/" class="drawer-menu-item">施工実績</a></li>
							<li class="list_main drawer-dropdown"> <span class="drawer-menu-item" data-toggle="dropdown">無料見積り・お問い合わせ</span>
								<ul class="drawer-dropdown-menu">
									<li><a href="<?php echo home_url(); ?>/inquiry/" class="drawer-menu-item">無料お見積もり・お問い合わせ</a></li>
									<li><a href="<?php echo home_url(); ?>/form/" class="drawer-menu-item">急なご相談はこちら</a></li>
									<li><a href="<?php echo home_url(); ?>/preparation/" class="drawer-menu-item">お問い合わせの前に</a></li>
								</ul>
							</li>
						</ul>
						<div class="telBox">
							<div class="head">お電話でのお問い合わせ</div>
							<div class="number"><span class="day">【平日】</span><a href="tel:0120006152" class="tel">0120-006-152</a></div>
							<div class="number"><span class="day">【土】</span><a href="tel:0120637879" class="tel">0120-637-879</a></div>
							<div class="foot">(定休日：日・祝)</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
