<?php get_header(); ?>
<div id="mainimage">
    <div class="secInner">
        <div class="box lBox">
            <div class="mv_ttl">
                <h2>新着情報</h2>
                <span>news</span> </div>
        </div>
        <div class="box rBox"></div>
    </div>
</div>
<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
<?php $args=array(
'post_type'=>'news',
'orderby' =>  'date',
'posts_per_page'=>9,
'paged' => $paged);?>
<?php $loop=new WP_Query($args);?>
<div id="contents" class="cf">
    <div id="main-cts" class="cf">
        <section id="sec_01">
            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">news</div>
                    <h3 class="jpn">新着情報一覧</h3>
                </div>
                <div class="news_wrap">
                    <ul>
                       <?php while($loop -> have_posts()): $loop -> the_post(); ?>
				       
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="ttl"><?php the_title(); ?></h3>
                                <?php
										$thumbnail_id = get_post_thumbnail_id($post->ID);
										if ($thumbnail_id) {
											$image = wp_get_attachment_image_src( $thumbnail_id, 'news_thumb' );
											$src = $image[0];
											$width = $image[1];
											$height = $image[2];
										} else { 
											$src=catch_that_image();
										} 
										
										?>
                                <span class="date"><?php the_time('Y年m月d日'); ?></span>
                                <div class="imgBox"> <img src="<?php echo $src?>" alt="<?php the_title(); ?>" class="ofi"> </div>
                                <div class="txtBox"><?php echo new_excerpt(40); ?></div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
               <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $loop)); ?>
			<?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
            </div>
        </section>
        <!-- InstanceEndEditable -->
    </div>
    <!--　=============================== main-cts end ===============================　-->
</div>
<!--　=============================== contents end ===============================　-->

<?php get_footer(); ?>
