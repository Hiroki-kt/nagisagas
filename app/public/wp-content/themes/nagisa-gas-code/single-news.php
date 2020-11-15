<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
  <div id="mainimage">
    <div class="secInner">
        <div class="box lBox">
            <div class="mv_ttl">
                <h2>新着情報</h2>
                <span>news</span>
            </div>
        </div>
        <div class="box rBox"></div>
    </div>
</div>
<div id="contents" class="cf">
    <div id="main-cts" class="cf">
        <section id="sec_01">
            <div class="secInner">
                <div class="single_wrap">
                    <h3 class="ttl"><?php the_title(); ?></h3>
                    <?php
					$thumbnail_id = get_post_thumbnail_id($post->ID);
					if ($thumbnail_id) {
					$image = wp_get_attachment_image_src( $thumbnail_id, 'full' );
					$src = $image[0];
					$width = $image[1];
					$height = $image[2];
					} 
					?>
                    <span class="date"><?php the_time('Y年m月d日'); ?></span>
                    <?php if($thumbnail_id): ?>
                    <div class="imgBox">
                        <img src="<?php echo $src?>" alt="<?php the_title(); ?>" class="ofi">
                    </div>
                    <?php endif;?>
                    <div class="txtBox">
                        <?php the_content();?>
                    </div>
                </div>
                <div class="btn_01"><a href="<?php echo home_url(); ?>/news/">記事一覧へ戻る</a></div>
            </div>
        </section>
    </div>
    <!--　=============================== main-cts end ===============================　-->
</div>
<!--　=============================== contents end ===============================　-->
<?php endwhile;endif; ?>
<?php get_footer(); ?>
