$(function () {
　　//↓　100px分ずらしたい場合
    var headerHight = 40;
    $('a[href^="#"]').click(function () {
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top - headerHight;
      $("html, body").animate({ scrollTop: position }, 1000, "swing");
      return false;
    });
});


$(function () {
var video = $("video").get(0);
 $("#on").on("click",function(){
  video.muted = false;
  $('#off').addClass("sleep");
  $('#on').removeClass("sleep");
  $('#off2').addClass("sleep");
  $('#on2').removeClass("sleep");  
 });
 $("#off").on("click",function(){
  video.muted = true;
  $('#off').removeClass("sleep");
  $('#on').addClass("sleep");  
  $('#off2').removeClass("sleep");
  $('#on2').addClass("sleep");    
 });
});

$(function () {
var video = $("video").get(0);
 $("#on2").on("click",function(){
  video.muted = false;
  $('#off2').addClass("sleep");
  $('#on2').removeClass("sleep");
  $('#off').addClass("sleep");
  $('#on').removeClass("sleep");  
 });
 $("#off2").on("click",function(){
  video.muted = true;
  $('#off2').removeClass("sleep");
  $('#on2').addClass("sleep");  
  $('#off').removeClass("sleep");
  $('#on').addClass("sleep");     
 });
});

jQuery(function () {
  jQuery(".track").slick({
    autoplay:false,
    arrows: true,
    speed:800, 
    // slidesToShow: 3,
    // slidesToScroll: 1,    
    centerMode: true,
    centerPadding: "27%",
    prevArrow: '<img src="https://55e-design.com/wp-content/themes/mycity/img/top/prev.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="https://55e-design.com/wp-content/themes/mycity/img/top/next.png" class="slide-arrow next-arrow">',
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,    
  });

jQuery(function(){
  jQuery('.slide')

  .on("init", function () {
      $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
    })

  .slick({
    // fade: true,
    speed: 1500,
    autoplaySpeed: 6500,
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots:true,
    infinite: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  })

.on({
  beforeChange: function(event, slick, currentSlide, nextSlide) {
    $('.slick-slide', this).eq(currentSlide).addClass('add-animation');
    $('.slick-slide', this).eq(nextSlide).addClass('remove-animation');
  },
  afterChange: function() {
    $('.remove-animation', this).removeClass('remove-animation add-animation');
  }
});


});

jQuery(function(){
  $('.slider').slick({
    autoplay: true, // 自動でスクロール
    slidesToShow:0.7,
    autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
    speed: 25000, // スライドが流れる速度を設定
    cssEase: "linear", // スライドの流れ方を等速に設定
    swipe: false, // 操作による切り替えはさせない
    arrows: false, // 矢印非表示
    pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
    pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
    responsive: [
      {
        breakpoint: 750,
        settings: {
         
        }
      }
    ]
  });
});

jQuery(function(){
  jQuery(".slider2").slick({
    autoplay:false,
    arrows: true,
    speed:800, 
    slidesToShow: 1,
    centerMode:true,
    slidesToScroll: 1,
    dots: true,
    nextArrow: '<img src="https://55e-design.com/wp-content/themes/earth-theme/img/arrow.png" class="slide-arrow next-arrow">',
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,    
  });
});  

  $(".inview1").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("is-show1");
    }else{
      $(this).stop().removeClass("is-show1");
    }
  });

  $(".inview2").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("is-show2");
    }
  });

  $(".inview3").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("is-show3");
    }
  });

  $(".inview__fade").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("active");
    }
  });

});

jQuery(function () {
    $(".js-question").click(function(){
      $(this).toggleClass("is-active");
      
      $(".js-question").not(this).removeClass("is-active");
      });
});

jQuery('.f1').on('click', function(){
      $('.flow__box.fb1').toggleClass("active");
});

jQuery('#parent').on('click', function(){
      $('.sp__child').toggleClass("open");
});

jQuery('.f2').on('click', function(){
      $('.flow__box.fb2').toggleClass("active");
});

jQuery('.f3').on('click', function(){
      $('.flow__box.fb3').toggleClass("active");
});

jQuery('.f4').on('click', function(){
      $('.flow__box.fb4').toggleClass("active");
});

jQuery('.f5').on('click', function(){
      $('.flow__box.fb5').toggleClass("active");
});

jQuery('.f6').on('click', function(){
      $('.flow__box.fb6').toggleClass("active");
});

jQuery('.f7').on('click', function(){
      $('.flow__box.fb7').toggleClass("active");
});


jQuery('.menu_button').on('click', function(){
  jQuery('#nav').toggleClass('in');
  jQuery('.menu_button').toggleClass('open');
  jQuery('header').toggleClass('active');
	jQuery('body').toggleClass('sc-none');
});

jQuery('#link1').on('click', function(){
  jQuery('.flow__num1').removeClass('flow__current');
  jQuery('.flow__num2').addClass('flow__current');
});

jQuery('#link2').on('click', function(){
  jQuery('.flow__num2').removeClass('flow__current');
  jQuery('.flow__num3').addClass('flow__current');
});

jQuery('#link3').on('click', function(){
  jQuery('.flow__num3').removeClass('flow__current');
  jQuery('.flow__num4').addClass('flow__current');
});

jQuery('#link4').on('click', function(){
  jQuery('.flow__num4').removeClass('flow__current');
  jQuery('.flow__num5').addClass('flow__current');
});

jQuery('#link5').on('click', function(){
  jQuery('.flow__num5').removeClass('flow__current');
  jQuery('.flow__num6').addClass('flow__current');
});

jQuery('#link6').on('click', function(){
  jQuery('.flow__num6').removeClass('flow__current');
  jQuery('.flow__num7').addClass('flow__current');
});

jQuery('#link7').on('click', function(){
  jQuery('.flow__num7').removeClass('flow__current');
  jQuery('.flow__num1').addClass('flow__current');
});


$('.outside').on('click',function(){
    $('.popup1').addClass('hidden');
    $('.popup1').removeClass('inherit');   
    $('.popup2').addClass('hidden');
    $('.popup2').removeClass('inherit');  
    $('.popup3').addClass('hidden');
    $('.popup3').removeClass('inherit');  
    $('.popup4').addClass('hidden');
    $('.popup4').removeClass('inherit');  
    $('.popup5').addClass('hidden');
    $('.popup5').removeClass('inherit');  
    $('.popup6').addClass('hidden');
    $('.popup6').removeClass('inherit');  

});

$('#button1').on('click',function(){
    $('.popup1').removeClass('hidden');
    $('.popup1').addClass('inherit');
});

$('#button2').on('click',function(){
    $('.popup2').removeClass('hidden');
    $('.popup2').addClass('inherit');
});

$('#button3').on('click',function(){
    $('.popup3').removeClass('hidden');
    $('.popup3').addClass('inherit');
});

$('#button4').on('click',function(){
    $('.popup4').removeClass('hidden');
    $('.popup4').addClass('inherit');
});

$('#button5').on('click',function(){
    $('.popup5').removeClass('hidden');
    $('.popup5').addClass('inherit');
});

$('#button6').on('click',function(){
    $('.popup6').removeClass('hidden');
    $('.popup6').addClass('inherit');
});


// 強制リロード
window.addEventListener('pageshow', function (event) {
  if (event.persisted) {
jQuery(function(){
  $('.slider').slick({
    autoplay: true, // 自動でスクロール
    slidesToShow:0.7,
    autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
    speed: 25000, // スライドが流れる速度を設定
    cssEase: "linear", // スライドの流れ方を等速に設定
    swipe: false, // 操作による切り替えはさせない
    arrows: false, // 矢印非表示
    pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
    pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
    responsive: [
      {
        breakpoint: 750,
        settings: {
         
        }
      }
    ]
  });
});
  }
});


// 追加Javascript（2024年11月）
document.addEventListener('DOMContentLoaded', function () {
  const excerpts = document.querySelectorAll('.w__excerpt');

  excerpts.forEach(excerpt => {
      const content = excerpt.innerHTML; // 元の内容を取得
      const lines = content.split('<br>'); // <br> で分割
      if (lines.length > 2) {
          excerpt.innerHTML = lines.slice(0, 2).join('<br>') + '...'; // 2行目までと省略記号を表示
      }
  });
});
