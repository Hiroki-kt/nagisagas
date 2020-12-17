<?php get_header(); ?>
<div id="mainimage" class="title-image">
    <div class="secInner">
        <div class="box lBox">
            <div class="mv_ttl">
                <?php if (is_page('ecowill')): ?>
                <h2>エコウィルからの<br>お乗り換えについて</h2>
                <?php elseif (is_page('inquiry')): ?>
                 <h2>無料見積もり相談・<br>お問い合わせ</h2>
                <?php else: ?>
                <h2><?php the_title(); ?></h2>
                <?php endif; ?>
                <span><?php the_field('en_title'); ?></span>
            </div>
        </div>
        <div class="box rBox"></div>
    </div>
</div>
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<div id="contents">
    <div id="main-cts">
        <?php the_content(); ?>
    </div>
    <!--　=============================== main-cts end ===============================　-->
</div>
<!--　=============================== contents end ===============================　-->
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>
