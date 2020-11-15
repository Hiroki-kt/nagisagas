<?php get_header(); ?>
<div id="mainimage">
				<div class="mv_mask">
					<h2 class="mv_ttl">お知らせ<span>NEWS&amp;<br>INFORMATION</span></h2>
				</div>
		</div>
		<div id="contents" class="cf">
			<div id="main-cts" class="cf">
         <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
                <?php $args = array(
                'post_type' => 'news',
                'tax_query' => array(
		          array(
			         'taxonomy' => 'news_cat',
			         'field' => 'slug',
			         'terms' => $term,
		                  ),
	           ),	
                'orderby' =>  'date',
                'order' => 'DESC',
                'posts_per_page' => 10,
                'paged' => $paged); ?>
        <?php $loop=new WP_Query($args);?>
			<section class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
				<div class="Inner">
					<div class="news_wrap">
						<main class="news_main">
							<ul class="news_list">
							<?php while($loop -> have_posts()): $loop -> the_post(); ?>
							 <?php
                            $tarms = get_the_terms($post -> ID ,'news_cat');
                            $term_slug = $tarms[0]->slug;
                            $term_name = $tarms[0]->name;
                            ?> 
                      
								<li>
									<a href="<?php the_permalink(); ?>" class="inner">
										<h3 class="ttl ttl_hand_02"><?php the_title(); ?></h3>
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
										<div class="news_cts">
											<div class="img_box"><img src="<?php echo $src?>" alt="<?php the_title();?>"></div>
											<div class="info_box">
												<span class="date"><?php the_time('Y.m.d'); ?></span><span class="category"><?php echo $term_name;?></span>
												<div class="main_txt">
												<?php echo new_excerpt(40); ?>
												</div>
											</div>
										</div>
									</a>
								</li>
								<?php endwhile; ?>
							</ul>
							 <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $loop)); ?>
							<?php wp_reset_postdata(); ?>
					        <?php wp_reset_query(); ?>
						</main>
						
						<?php get_sidebar(); ?>
					</div>
					
				</div>
			</section>
			<!-- InstanceEndEditable -->
				
			</div>
			<!--　=============================== main-cts end ===============================　--> 
		</div>
		<!--　=============================== contents end ===============================　--> 	
    
<?php get_footer(); ?>