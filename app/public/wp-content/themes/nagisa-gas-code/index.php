<?php get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>

<div class="hero-image">
    <div class="hero-image-title">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/hero-image-title-caption.svg" alt="ガスのちからで毎日の暮らしを安全・快適に " class="for_pc">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/hero-image-title-sp.svg" alt="ガスのちからで毎日の暮らしを安全・快適に " class="for_sp">
        <!--
        <div class="hero-image-en-caption">
            <p>We are a company that invents places that continue to make business to become a new culture before long.</p>
        </div>
        -->
        <a href="<?php echo home_url(); ?>/inquiry/" class="contact-button hero-image-contact-button for_pc">
            <p>無料見積もりはこちら<i class="fas fa-play "></i></p>
        </a>
    </div>
    <img src="<?php echo $upload_dir[
      'baseurl'
    ]; ?>/2020/12/hero-image-sep.svg" alt="we are nagisa gas" class="hero-image-sep">
    <img src="<?php echo $upload_dir[
      'baseurl'
    ]; ?>/2020/12/hero-image-photo.jpg.webp" alt="ナギサガス" class="hero-image-photo">
    <a href="<?php echo home_url(); ?>/inquiry/" class="contact-button hero-image-contact-button for_sp">
        <p>無料見積もりはこちら<i class="fas fa-play "></i></p>
    </a>
    <div class="top-news">
        <?php $args = [
          'post_type' => 'news',
          'orderby' => 'date',
          'order' => 'DESC',
          'posts_per_page' => 1,
        ]; ?>
        <?php $loop = new WP_Query($args); ?>
        <ul class="list_01">
            <?php while ($loop->have_posts()):
              $loop->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="top-news-box">
                        <img src="<?php echo $upload_dir[
                          'baseurl'
                        ]; ?>/2020/12/news-fig.svg" alt="お知らせ">
                        <div class="top-news-text">
                            <div class="top-date"><?php the_time(
                              'Y.m.d'
                            ); ?></div>
                            <div class="top-title"><?php the_title(); ?></div>
                        </div>
                    </div>
                </a>
            </li>
            <?php
            endwhile; ?>
        </ul>
    </div>
</div>
<div class="advantage">
    <div class="advantage-title">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/advantage-title.svg" alt="ナギサガスフィッティングスの安心施工" class="for_pc">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/advantage-title.svg" alt="ナギサガスフィッティングスの安心施工" class="for_sp">
        <div class="advantage-caption">
            <p class="advantage-caption-abst">他社で断られた作業でも一度ご相談下さい<br>ご希望であれば、女性スタッフ同行で<br>お伺いいたします</p>
            <p class="advantage-caption-detail">ベテランスタッフが多数在籍しており、確かな品質と安全な作業をご提供いたします。また、当社の作業員は大手ガス会社にてお客様対応研修を終えておりますので、お客様のご要望・ご不安を取り除いてから作業に取り掛からせて頂きます。
        </div>
        <a href="<?php echo home_url(); ?>/inquiry/" class="contact-button advantage-contact-button for_pc">
            <p>無料見積もりはこちら<i class="fas fa-play "></i></p>
        </a>
    </div>
    <div class="advantage-image">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/advantage-photo.svg" alt="ナギサガスフィッティングス" class="for_pc">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/advantage-photo.svg" alt="ナギサガスフィッティングス" class="for_sp">
    </div>
    <a href="<?php echo home_url(); ?>/inquiry/" class="contact-button advantage-contact-button for_sp">
        <p>無料見積もりはこちら<i class="fas fa-play "></i></p>
    </a>
</div>
<div class="product">
    <div class="product-header">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/product-title.svg" alt="私達はガス機器から水回りまで幅広く手掛けけています" class="for_pc">
        <div class="product-header-image">
            <img src="<?php echo $upload_dir[
              'baseurl'
            ]; ?>/2020/12/product-image1.png.webp" alt="ナギサガス">
            <img src="<?php echo $upload_dir[
              'baseurl'
            ]; ?>/2020/12/product-image2-1.png.webp" alt="ナギサガス">
        </div>
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/product-title.svg" alt="私達はガス機器から水回りまで幅広く手掛けけています" class="for_sp">
    </div>
    <div class="product-content">
        <div class="product-content-header">
            <p>こんなお悩みにお答えします！</p>
        </div>
        <div class="product-content-body">
            <div class="heater product-content-box">
                <p class="product-item-title">-給湯器-</p>
                <img src="<?php echo $upload_dir[
                  'baseurl'
                ]; ?>/2020/12/product-heater.png.webp" alt="給湯器">
                <ul class="product-item-detail">
                    <li>・すぐにお湯がでない</li>
                    <li>・自由な温度にしたい</li>
                </ul>
            </div>
            <div class="bath product-content-box">
                <p class="product-item-title">-浴室暖房乾燥機-</p>
                <img src="<?php echo $upload_dir[
                  'baseurl'
                ]; ?>/2020/12/product-bath.png.webp" alt="浴室暖房乾燥機">
                <ul class="product-item-detail">
                    <li>・冬場のお風呂が寒い</li>
                    <li>・洗濯物の乾きが悪い</li>
                </ul>
            </div>
            <div class="kitchen product-content-box">
                <p class="product-item-title">-キッチン容器-</p>
                <img src="<?php echo $upload_dir[
                  'baseurl'
                ]; ?>/2020/12/product-kitchen.png.webp" alt="キッチン容器">
                <ul class="product-item-detail">
                    <li>・時短調理をしたい</li>
                    <li>・食器洗いが面倒だ</li>
                </ul>
            </div>
            <div class="toilet product-content-box">
                <p class="product-item-title">-トイレタリー-</p>
                <img src="<?php echo $upload_dir[
                  'baseurl'
                ]; ?>/2020/12/product-toilet.png.webp" alt="トイレタリー">
                <ul class="product-item-detail">
                    <li>・温水洗浄を使いたい</li>
                    <li>・冬場の便座が寒い</li>
                </ul>
            </div>
        </div>
    </div>
    <a href="<?php echo home_url(); ?>/product/" class="contact-button product-contact-button">
        <p>商品一覧ページはこちら<i class="fas fa-play "></i></p>
    </a>
</div>
<div class="news">
    <div class="news-header">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/news-title.svg" alt="私達の最近の歩みを紹介します" class="for_pc">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/news-title-image.svg" alt="ナギサガス" class="news-header-image">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/news-title.svg" alt="私達の最近の歩みを紹介します" class="for_sp">
    </div>
    <div class="news-content">
        <?php $args = [
          'post_type' => 'news',
          'orderby' => 'date',
          'order' => 'DESC',
          'posts_per_page' => 4,
        ]; ?>
        <?php $loop = new WP_Query($args); ?>
        <ul class="news-list">
            <?php while ($loop->have_posts()):
              $loop->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="news-article-box">
                        <img src="<?php echo $upload_dir[
                          'baseurl'
                        ]; ?>/2020/12/news-fig.svg" alt="お知らせ">
                        <div class="news-article-text">
                            <div class="news-date"><?php the_time(
                              'Y.m.d'
                            ); ?></div>
                            <div class="news-title"><?php the_title(); ?></div>
                            <div class="news-tag"><?php the_tags(); ?></div>
                        </div>
                    </div>
                </a>
            </li>
            <?php
            endwhile; ?>
        </ul>
    </div>
    <a href="<?php echo home_url(); ?>/news/" class="contact-button news-check-button">
        <p>記事一覧ページはこちら<i class="fas fa-play "></i></p>
    </a>
</div>
<div class="works">
    <div class="works-title">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/works-title.svg" alt="私達の施工実績の一部をご紹介します">
        <div class="works-caption">
            <p class="works-caption-abst">ナギサガスには、年間で600件、累計で8000件という豊富な施工実績があり、経験に裏打ちされたノウハウを保証します</p>
            <p class="works-caption-detail">ナギサガスは創業時から、次により良い仕事ができるよう、施工実績を記録し続けてきました。記録された施工実績は、社員間での学習のために使用しており、豊富なノウハウが社内に蓄積されています。</p>
        </div>
        <a href="<?php echo home_url(); ?>/works/" class="contact-button works-check-button">
            <p>施工実績一覧はこちら<i class="fas fa-play "></i></p>
        </a>
    </div>
    <div class="works-content">
        <?php $args = [
          'post_type' => 'works',
          'orderby' => 'date',
          'order' => 'DESC',
          'posts_per_page' => 4,
        ]; ?>
        <?php $loop = new WP_Query($args); ?>
        <ul class="works-list">
            <?php while ($loop->have_posts()):
              $loop->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="works-article-box">
                        <img src="<?php echo catch_first_image(); ?>" alt="" />
                        <div class="title"><?php the_title(); ?></div>
                        <div class="works-ca"><?php the_category(); ?></div>
                    </div>
                </a>
            </li>
            <?php
            endwhile; ?>
        </ul>
    </div>
</div>
<div id="contents" class="cf">
    <div id="main-cts" class="cf">
        <!--
        <section id="sec_01">
            <div class="mask">
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
            </div>
        </section>
        <section id="sec_02">
            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">product</div>
                    <h2 class="jpn">取扱い商品一覧</h2>
                </div>
                <ul class="list_01">
                    <li>
                        <a href="<?php echo home_url(); ?>/product/gas/">
                            <div class="imgBox"><img src="<?php echo $upload_dir[
                              'baseurl'
                            ]; ?>/product_01.jpg.webp" alt="給湯器"></div>
                            <div class="textBox">給湯器</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/product/kitchen/">
                            <div class="imgBox"><img src="<?php echo $upload_dir[
                              'baseurl'
                            ]; ?>/product_02.jpg.webp" alt="キッチン・厨房機器"></div>
                            <div class="textBox">キッチン・厨房機器</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/product/bath/">
                            <div class="imgBox"><img src="<?php echo $upload_dir[
                              'baseurl'
                            ]; ?>/product_04.jpg.webp" alt="浴室暖房乾燥機"></div>
                            <div class="textBox">浴室暖房乾燥機</div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="sec_03">
            <?php $args = [
              'post_type' => 'news',
              'orderby' => 'date',
              'order' => 'DESC',
              'posts_per_page' => 4,
            ]; ?>
            <?php $loop = new WP_Query($args); ?>

            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">news</div>
                    <h2 class="jpn">新着情報</h2>
                </div>
                <?php if ($loop->have_posts()): ?>
                <ul class="list_01">
                    <?php while ($loop->have_posts()):
                      $loop->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="date"><?php the_time('Y.m.d'); ?></div>
                            <div class="title"><?php the_title(); ?></div>
                        </a>
                    </li>
                    <?php
                    endwhile; ?>
                </ul>
                <div class="btn_01"><a href="<?php echo home_url(); ?>/news/">一覧を見る</a></div>
                <?php else: ?>
                <p class="tCenter">現在新着情報はありません。</p>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        </section>
        -->
    </div>
</div>
<?php get_footer(); ?>
