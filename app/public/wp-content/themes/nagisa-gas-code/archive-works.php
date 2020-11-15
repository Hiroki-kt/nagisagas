<?php get_header(); ?>
<div id="mainimage">
    <div class="secInner">
        <div class="box lBox">
            <div class="mv_ttl">
                <h2>施工実績</h2>
                <span>works</span>
            </div>
        </div>
        <div class="box rBox"></div>
    </div>
</div>

<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
<?php $args=array(
'post_type'=>'works',
'orderby' =>  'date',
'posts_per_page'=>9,
'paged' => $paged);?>
<?php $loop=new WP_Query($args);?>
<div id="contents" class="cf">
    <div id="main-cts" class="cf">
        <section id="sec_01">
            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">works</div>
                    <h3 class="jpn">施工実績</h3>
                </div>
                <?php if($loop->have_posts()):?>
                <p class="lead">当社の施工実績を掲載しております。<br>各実績ページでは、施工前と施工後の比較を写真にてご覧いただけます。</p>
                <div class="works_wrap">

                    <ul>
                       <?php while($loop -> have_posts()): $loop -> the_post(); ?>
						<?php
						
						$image_after=get_field('image_after');
						$product_title=get_field('product_title');
						$product_number=get_field('product_number');
						$product_price=get_field('product_price');
						$maker_name=get_field('maker_name');
						?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <div class="imgBox">
									<?php if($image_after):?>
                                    <img src="<?php the_field('image_after'); ?>" alt="<?php the_field('product_title'); ?>" class="ofi">
									<?php endif;?>
                                </div>
                                <div class="txtBox">
									<?php if($product_title):?>
									<p class="ttl"><?php the_field('product_title'); ?></p>
									<?php endif;?>
									<?php if($product_number):?>
									<p class="number">品番：<?php the_field('product_number'); ?></p>
									<?php endif;?>
									<?php if($maker_name):?>
									<p class="maker">メーカー：<span><?php the_field('maker_name');?></span></p>
									<?php endif;?>
									<?php if($product_price):?>
									<p class="price"><span>税込価格：</span><?php echo $product_price;?>円</p>
									<?php endif; ?>
                                </div>
                               
                            </a>
                        </li>
                         <?php endwhile; ?>
                    </ul>
                </div>
                <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $loop)); ?>
                <?php else:?>
                <p class="tCenter">現在施工実績はありません。</p>
                 <?php endif; ?>
			<?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
            </div>
        </section>
    </div>
    <!--　=============================== main-cts end ===============================　-->
</div>
<!--　=============================== contents end ===============================　-->

<?php get_footer(); ?>
