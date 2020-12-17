<?php wp_reset_query(); ?>
<?php $upload_dir = wp_upload_dir(); ?>
<footer id="footer">
    <div id="ftrInner">
        <div class="logoBox"> <a href="<?php echo home_url(); ?>/"><img src="<?php echo $upload_dir[
    'baseurl'
]; ?>/2020/12/Nagisagas_logo_white.svg" alt="ナギサガスフィッティングス"></a> </div>
        <nav id="ftrNav" class="for_pc">
            <ul class="cf ul_1">
                <!-- <li class="home"><a href="<?php echo home_url(); ?>/">ホーム</a></li> -->
                <li>私たちについて</li>
                <li class="subs"><a href="<?php echo home_url(); ?>/company/">会社案内</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/about/">安心施工</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/works/">施工実績</a></li>
                <!--<li class="subs"><a href="<?php echo home_url(); ?>/staff/">スタッフ紹介</a></li>-->
            </ul>
            <ul class="cf ul_2">
                <li>取扱い製品</li>
                <li class="subs"><a href="<?php echo home_url(); ?>/product/gas/">給湯器</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/product/kitchen/">厨房機器</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/product/bath/">浴室暖房乾燥機</a></li>
                <!--<li class="subs"><a href="#">床暖房</a></li>
						<li class="subs"><a href="#">エコキュート</a></li>
						<li class="subs"><a href="#">トイレ</a></li>-->

            </ul>
            <ul class="cf ul_3">
                <li>お客様窓口</li>
                <li class="subs"><a href="<?php echo home_url(); ?>/price/">標準工事費</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/flow/">ご注文の流れ</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/area/">対応エリア</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/faq/">よくあるご質問</a></li>
                <!--<li class="subs"><a href="<?php echo home_url(); ?>/warranty/">保証について</a></li>-->
                <!--<li class="subs"><a href="<?php echo home_url(); ?>/ecowill/">エコウィルからの乗り換え</a></li>-->
            </ul>
            <ul class="cf ul_4">
                <li>お問い合わせ</li>
                <li class="subs"><a href="<?php echo home_url(); ?>/inquiry/">無料お見積り・お問い合わせ</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/form/">急なご相談はこちら</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/preparation/">お問い合わせの前に</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
                <li class="subs"><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></li>
            </ul>
            <div class="telBox">
                <div class="head">お電話でのお問い合わせ</div>
                <div class="number"><span class="day">【平日】</span><span class="tel">0120-006-152</span></div>
                <div class="number"><span class="day">【土】</span><span class="tel">0120-637-879</span></div>
                <div class="foot">(定休日：日・祝)</div>
            </div>
        </nav>
        <!--sp-footer-nav-->
        <div class="for_sp">
            <div class="btn_01"> <a href="<?php echo home_url(); ?>/inquiry/"><i class="far fa-envelope"></i>お問い合わせ</a> </div>

            <nav id="ftrNav" class="for_sp">
                <ul>
                    <li class="main"><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
                    <li class="main"><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></li>
                </ul>
            </nav>
        </div>

        <div class="bottom">
            <ul class="snsList">
						<!--<li><a href="##" target="_blank"><img src="<?php echo home_url(); ?>/Image/common/icon_tw" alt="twitter"></a></li>
						<li><a href="##" target="_blank"><img src="<?php echo home_url(); ?>/Image/common/icon_fb" alt="face book"></a></li>
						<li><a href="https://line.me/R/ti/p/%40tts4107q" target="_blank"><img src="<?php echo home_url(); ?>/Image/common/icon_line.png" alt="line"></a></li>-->
					</ul>
            <small id="copy">Copyright（C）2018 NAGISA GAS FITTINGS.All Rights Reserved.</small> </div>
    </div>
</footer>
<div class="totop"><a href="<?php echo home_url(); ?>/" aria-label="ホーム"></a></div>
</div>
<!--=============================== wrapper end ===============================-->
</div>
<!--=============================== drawer end ===============================-->
<!-- JavaScript -->
<?php if (is_home()): ?>
<script type="text/javascript">
$(function(){
	$('.slick-box').slick({
  infinite: true,
  //slidesToShow: 1,
  dots:true, //ページャーを表示（スライダー下の黒い丸）
  fade:true,
  speed:1000,
  autoplay:true, //自動で画像を切り替える
  arrows:false,
  autoplaySpeed:4000, //自動で画像が切り替えられるまでの時間 1000 = 1秒
	pauseOnfocus: false,
});
});

</script>

<?php elseif (is_tax('product_cat')): ?>
<script src="<?php echo home_url(); ?>/JS/jquery.colorbox-min.js"></script>
<script>
$(function() {
    $(".modal").colorbox({
    maxWidth:'90%',
    maxHeight:'90%',
    opacity: 0.7
  });
});
</script>
<?php elseif (is_page(['test', 'inquiry'])): ?>
<script>
  var parameter = location.search;
  var parameter = parameter.substr(1);
	  var parameter = parameter.slice(0,-1);
  var parameter=decodeURI(parameter);
  document.getElementById('input_title').value = parameter;
</script>

<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<script>
$(function(){
  $('#postal_js').keyup( function(event){
    AjaxZip3.zip2addr( this, '', 'address', 'address' );
  });
});
</script>

<?php endif; ?>

<script>
    AOS.init();
</script>

<?php wp_footer(); ?>
</body>

</html>
