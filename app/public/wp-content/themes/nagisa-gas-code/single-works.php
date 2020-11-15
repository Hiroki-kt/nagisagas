<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php
$product_date=get_field('product_date');
$product_info=get_field('product_info');
$product_url=get_field('product_url');
$product_comment=get_field('product_comment');
$image_before=get_field('image_before');
$image_after=get_field('image_after');
$voice_01=get_field('voice_01');
$voice_02=get_field('voice_02');
$image_voice=get_field('image_voice');
?>
<div id="mainimage">
    <div class="secInner">
        <div class="box lBox">
            <div class="mv_ttl">
                <h2>施工実績・お客様の声</h2>
                <span>works</span>
            </div>
        </div>
        <div class="box rBox"></div>
    </div>
</div>
<div id="contents" class="cf">
    <div id="main-cts" class="cf">

        <section id="sec_01" class="works_detail">
            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">works</div>
                    <h3 class="jpn">施工実績・お客様の声</h3>
                </div>
                <div>
                    <h4 class="ttl"><?php the_title(); ?></h4>
                    <div class="box_works">
                        <div class="lBox">
                            <p>Before</p>
                            <div class="solidBox imgBox">
								<?php if($image_before):?>
                                <img src="<?php echo $image_before;?>" alt="<?php the_title();?>" class="ofi">
								<?php endif;?>
                            </div>
                        </div>
                        <div class="rBox">
                            <p>After</p>
                            <div class="solidBox imgBox">
                                <?php if($image_after):?>
                                <img src="<?php echo $image_after;?>" alt="<?php the_title();?>" class="ofi">
								<?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="table_wrap">
                        <table class="table-primary">
                          <tr>
                                <th>施工日</th>
                                <td>
									<?php if($product_date):?>
									<?php echo $product_date;?>
							  		<?php endif;?>
							  </td>
                            </tr>
							<tr>
                                <th>製品情報</th>
								<td><?php if($product_info):?>
                                <?php echo $product_info;?>
								<?php endif;?></td>
                            </tr>
							<tr>
                                <th>製品サイト</th>
								<td><?php if($product_url):?>
                                <a href="<?php echo $product_url;?>" class="link over" target="_blank"><?php echo $product_url;?></a>
								<?php endif;?></td>
                            </tr>
                            <tr>
                                <th>コメント</th>
								<td><?php if($product_comment):?>
                                <?php echo $product_comment;?>
								<?php endif;?></td>
                            </tr>
                          
                        </table>
                    </div>
					<?php if($voice_01):?>
                    <div class="voice">
				<h5 class="ttl"><span>お客様の声</span></h5>
				<div class="voice_inner">
					<div class="imgBox"><img src="<?php echo $image_voice; ?>" alt="" class="ofi"></div>
					<div class="voice_txt">
						<div class="mgb20">
							<p class="q">当社に見積を御依頼頂いた理由をお聞かせください。</p>
							<p class="a"><?php echo $voice_01; ?></p>
						</div>
						<div>
							<p class="q">その他、ご意見・ご感想・ご質問などがございましたら、ご記入ください。</p>
							<p class="a"><?php echo $voice_02; ?></p>
						</div>
					</div>
			</div>
		</div>
		<?php endif;?>
                    <div class="btn_01"><a href="<?php echo home_url(); ?>/works/">施工実績一覧へ戻る</a></div>
                </div>
            </div>
        </section>

        <!-- InstanceEndEditable -->
    </div>
    <!--　=============================== main-cts end ===============================　-->
</div>
<!--　=============================== contents end ===============================　-->
<?php endwhile;endif; ?>
<?php get_footer(); ?>