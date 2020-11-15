<aside class="news_side">
 
        <?php $term_objects01 = get_terms('news_cat','orderby=term_order');$term_objects01=array_filter($term_objects01);?>
    
    <?php if($term_objects01):?>      
    <section class="side_box side_cate">
        <h3 class="ttl_hand ttl">カテゴリー</h3>
        <ul>
            <?php foreach($term_objects01 as $term_object01):?>
            <?php $term_name=$term_object01->name;$term_url=get_term_link($term_object01,'news_cat');?>
            <li class="item"><a href="<?php echo $term_url;?>"><?php echo $term_name;?></a></li>
            <?php endforeach;?>
        </ul>
    </section>
    <?php endif;?>
    
    
    <section class="side_box">
        <h3 class="ttl_hand ttl">月別アーカイブ</h3>
        <ul>
             <?php $string = wp_get_archives(array('show_post_count' => 1, 'post_type' => 'news','echo' => 0)); echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</span></a>', $string); ?>
        </ul>
    </section>
</aside>
						