<?php get_header(); ?>
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_05.jpg.webp" alt="想像して下さいお湯が出ない冬のお風呂を"></div>
        <div class="swiper-slide"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_02.jpg.webp" alt="毎日の暮らしを快適、安全に"></div>
        <div class="swiper-slide"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_03.jpg.webp" alt="毎日の暮らしを快適、安全に"></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
<!--
<div id="mainimage" class="for_pc">
    <ul class="slick-box">
        <li><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_05.jpg.webp" alt="想像して下さいお湯が出ない冬のお風呂を"></li>
        <li><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_02.jpg.webp" alt="毎日の暮らしを快適、安全に"></li>
        <li><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_03.jpg.webp" alt="毎日の暮らしを快適、安全に"></li>
    </ul>
</div>
<div id="mainimage" class="for_sp">
    <ul class="slick-box">
        <li><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_sp_05.jpg.webp" alt="想像して下さいお湯が出ない冬のお風呂を"></li>
        <li><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_sp_02.jpg.webp" alt="毎日の暮らしを快適、安全に"></li>
        <li><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mainimage_sp_03.jpg.webp" alt="毎日の暮らしを快適、安全に"></li>
    </ul>
</div>
-->
<div id="contents" class="cf">
    <div id="main-cts" class="cf">
        <!-- =============================== SECTION_01 =============================== -->
        <section id="sec_01">
            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">advantage</div>
                    <h2 class="jpn">ナギサガスフィッティングスの安心施工</h2>
                </div>
                <div class="leftBox">
                    <p class="lead">他社で断られた作業でも一度ご相談下さい<br>ご希望であれば、女性スタッフ同行で<br class="for_pc">お伺いいたします</p>
                    <p class="plane">ベテランスタッフが多数在籍しており、確かな品質と<br class="for_pc">安全な作業をご提供いたします。<br class="for_pc">また、当社の作業員は大手ガス会社にてお客様対応研修を<br class="for_pc">終えておりますので、お客様のご要望・ご不安を<br class="for_pc">取り除いてから作業に取り掛からせて頂きます。</p>
                    <div class="btn_01"><a href="<?php echo home_url(); ?>/about/">詳しく見る</a></div>
                </div>
            </div>
        </section>
        <!-- =============================== SECTION_02 =============================== -->
        <section id="sec_02">
            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">product</div>
                    <h2 class="jpn">取扱い商品一覧</h2>
                </div>
                <ul class="list_01">
                    <li>
                        <a href="<?php echo home_url(); ?>/product/gas/">
                            <div class="imgBox"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/product_01.jpg.webp" alt="給湯器"></div>
                            <div class="textBox">給湯器</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/product/kitchen/">
                            <div class="imgBox"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/product_02.jpg.webp" alt="キッチン・厨房機器"></div>
                            <div class="textBox">キッチン・厨房機器</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/product/bath/">
                            <div class="imgBox"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/product_04.jpg.webp" alt="浴室暖房乾燥機"></div>
                            <div class="textBox">浴室暖房乾燥機</div>
                        </a>
                    </li>
                    <!--<li><a href="">
        	<div class="imgBox"><img src="<?php echo home_url(); ?>/Image/top/product_05.jpg" alt="床暖房"></div>
			<div class="textBox">床暖房</div>
        </a></li>
    	<li><a href="">
        	<div class="imgBox"><img src="<?php echo home_url(); ?>/Image/top/product_06.jpg" alt="エコキュート"></div>
			<div class="textBox">エコキュート</div>
        </a></li>
    	<li><a href="">
        	<div class="imgBox"><img src="<?php echo home_url(); ?>/Image/top/product_07.jpg" alt="トイレ"></div>
			<div class="textBox">トイレ</div>
        </a></li>-->

                </ul>

            </div>
        </section>
        <!-- =============================== SECTION_03 =============================== -->
        <section id="sec_03">
           <?php $args = array(
                'post_type' => 'news',
                'orderby' =>  'date',
                'order' => 'DESC',
                'posts_per_page' => 4);
                ?>
            <?php $loop=new WP_Query($args);?>

            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">news</div>
                    <h2 class="jpn">新着情報</h2>
                </div>
                <?php if($loop->have_posts()):?>
                <ul class="list_01">
                   <?php while($loop -> have_posts()): $loop -> the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="date"><?php the_time('Y.m.d'); ?></div>
                            <div class="title"><?php the_title(); ?></div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <div class="btn_01"><a href="<?php echo home_url(); ?>/news/">一覧を見る</a></div>
                <?php else:?>
                <p class="tCenter">現在新着情報はありません。</p>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        </section>
    </div>
    <!--　=============================== main-cts end ===============================　-->
</div>
<!--　=============================== contents end ===============================　-->
<?php get_footer(); ?>
