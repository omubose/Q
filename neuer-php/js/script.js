$(document).ready(function() {
  const changeHeader = $('.header__logo-hidden');
  const targetSection = $('#problem');
  const targetPosition = targetSection.offset().top;

  changeHeader.hide(); // 初期状態で非表示

  $(window).scroll(function () {
    if ($(this).scrollTop() > targetPosition) {
      changeHeader.fadeIn(); // targetPositionを超えたら表示
    } else {
      changeHeader.fadeOut(); // それ以外は非表示
    }
  });
});


// リサイズの幅確認

// ドロワーメニュー
// =============================
const drawerIcon = jQuery("#js-drawer-icon");
const drawerContents = jQuery("#js-drawer-content");
drawerIcon.on("click", function (e) {
  e.preventDefault();
  drawerIcon.toggleClass("is-checked");
  drawerContents.slideToggle(300);
  jQuery("body").toggleClass("is-fixed");
});


// ウィンドウのリサイズ時にもクラスをチェックして削除
jQuery(window).resize(function() {
  if (jQuery(window).width() >= 1200) {
    jQuery("body").removeClass("is-fixed");
  }
});



// 動きのきっかけの起点となるアニメーションの名前を定義
function fadeAnime(){



  $('.fadeLeftTrigger').each(function(){ //fadeLeftTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeLeft');// 画面内に入ったらfadeLeftというクラス名を追記
    }else{
    $(this).removeClass('fadeLeft');// 画面外に出たらfadeLeftというクラス名を外す
    }
    });

    $('.flipLeftTrigger').each(function(){ //flipLeftTriggerというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('flipLeft');// 画面内に入ったらflipLeftというクラス名を追記
      }else{
      $(this).removeClass('flipLeft');// 画面外に出たらflipLeftというクラス名を外す
      }
      });

      $('.fadeUpTrigger').each(function(){ //fadeUpTriggerというクラス名が
        var elemPos = $(this).offset().top-50;//要素より、50px上の
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
        }else{
        $(this).removeClass('fadeUp');// 画面外に出たらfadeUpというクラス名を外す
        }
        });
    
         // シャッ（背景色が伸びて出現）
  
  $('.bgLRextendTrigger').each(function(){ //bgLRextendTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('bgLRextend');// 画面内に入ったらbgLRextendというクラス名を追記
    }else{
      $(this).removeClass('bgLRextend');// 画面外に出たらbgLRextendというクラス名を外す
    }
  }); 

  $('.bgappearTrigger').each(function(){ //bgappearTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('bgappear');// 画面内に入ったらbgappearというクラス名を追記
    }else{
      $(this).removeClass('bgappear');// 画面外に出たらbgappearというクラス名を外す
    }
  }); 

  $('.fadeInscaleTrigger').each(function(){ //bgappearTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeInscale');// 画面内に入ったらbgappearというクラス名を追記
    }else{
      $(this).removeClass('fadeInscale');// 画面外に出たらbgappearというクラス名を外す
    }
  }); 

  $('.fadeInTrigger').each(function(){ //fadeInTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeIn');// 画面内に入ったらfadeInというクラス名を追記
    }else{
    $(this).removeClass('fadeIn');// 画面外に出たらfadeInというクラス名を外す
    }
    });

  $('.fadeInTrigger1').each(function(){ //fadeInTriggerというクラス名が
    var elemPos = $(this).offset().top-10;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeIn');// 画面内に入ったらfadeInというクラス名を追記
    }else{
    $(this).removeClass('fadeIn');// 画面外に出たらfadeInというクラス名を外す
    }
    });
  $('.sectionlineTrigger').each(function(){ //fadeInTriggerというクラス名が
    var elemPos = $(this).offset().top-10;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('section-line');// 画面内に入ったらfadeInというクラス名を追記
    }else{
    $(this).removeClass('section-line');// 画面外に出たらfadeInというクラス名を外す
    }
    });
  
}

// 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function(){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述


  document.addEventListener("DOMContentLoaded", function() {
    const dotElement = document.querySelector('.fv__dot');
  
    // Function to start blinking animation
    function startBlinking() {
      dotElement.style.animation = 'blink 1s step-start infinite';
    }
  
    // Initial 5-second delay
    setTimeout(function() {
      startBlinking();
  
      // Then repeat the blinking animation every 60 seconds (1 minute)
      setInterval(startBlinking, 60000);
    }, 3500);
  });




  
  $(function () {
    $('.wp-page__slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        fade: true,
        pauseOnHover: false,
        speed: 3000,
        swipe: false,
        touchMove: false
    });

});