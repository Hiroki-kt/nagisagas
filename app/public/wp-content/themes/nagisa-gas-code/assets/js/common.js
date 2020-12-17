// ios.js
var userAgent = window.navigator.userAgent.toLowerCase();
if (userAgent.indexOf('ipad') != -1) {
    $('body').addClass('ios');
}else if(userAgent.indexOf('iphone') != -1){
    $('body').addClass('ios');
}
$(function() {
  var ua = navigator.userAgent;
if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) {
    $('.tel-link').each(function(){
            var str = $(this).text();
            $(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
        });
}
});
//smoothscroll
$(function(){
   $('a[href^="#"]').click(function() {
      var speed = 1000;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});

// vieport.js
$(function() {
  var ua = navigator.userAgent;
if ((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)) {
    $('head').prepend('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=0" />');
}else{
    $('head').prepend('<meta name="viewport" content="width=1100" />');
}
});

//totopScroll.js
$(document).ready(function() {
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('.totop').addClass('visible');
      } else {
        $('.totop').removeClass('visible');
      }
    });
    $('.totop').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 1000);
      return false;
    });
  });
});

//ユーザーエージェント
var dvUA = window.navigator.userAgent.toLowerCase();
//メガメニュー
$(window).on('load', function () {
	if (dvUA.indexOf('android') > 0 || dvUA.indexOf('ipad') > 0) {
		$(".gNavi_list").on('click', function () {
			$('.gNavi_sub').css({
				"visibility": "hidden",
				"opacity"   : "0",
			});
		});
	}
	$(".gNavi_sub").parent('.gNavi_list').on('click', function () {
			if ($(this).children('.gNavi_sub').css("visibility") === "hidden") {
				$(this).children('.gNavi_sub').css({
					"visibility": "visible",
					"opacity"   : "1",
				});
			} else {
				$(this).children('.gNavi_sub').css({
					"visibility": "hidden",
					"opacity"   : "0",
				});

			}
		});

});

/*$(window).on('load', function () {
          var iScroll = new IScroll('.drawer-nav' ,{mouseWheel: true,
          preventDefault: false});
	$('.trigger').next().hide();
	$('.trigger').unbind('click');
		iScroll.refresh();
	$('.trigger').on('click', function (e) {
		$(this).next().slideToggle(500);
		$(this).next().removeClass('open');
		iScroll.refresh();
	});

});*/


//クリックするとスライド開閉、クラス付与
$(window).on('load', function () {

	$('.trigger').next().hide();
	$('.trigger').unbind('click');

	$('.trigger').on('click', function (e) {
		$(this).next().slideToggle(500);
		$(this).toggleClass('open');
	});

	$('#sp_nav').css({
		'height'  : $(window).innerHeight(),
		'overflow': 'scroll'
	});
});



// フォーム エラー時にスクロール
$(function() {
  if ( $('.mw_wp_form .error')[0] ) {
    var errorEl = $('.mw_wp_form .error').eq(0);
    var position = errorEl.parents('tr').offset().top - 50;

    $('body,html').delay(200).animate({scrollTop:position}, 600, 'swing');
  }
});

$(document).ready(function () {
  // swiperをイニシャライズ
  var mySwiper = new Swiper ('.swiper-container', {
    // オプションのパラメーターを指定
    direction: 'horizontal',
    effect: "flip",
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    })
});
