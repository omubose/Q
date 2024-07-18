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

// drawerContents.find("a").on("click", function (e) {
//   // e.preventDefault();
//   drawerIcon.trigger("click");
// });




// ウィンドウのリサイズ時にもクラスをチェックして削除
jQuery(window).resize(function() {
  if (jQuery(window).width() >= 900) {
    jQuery("body").removeClass("is-fixed");
  }
});



jQuery('a[href^="#"]').on("click", function (event) {
  event.preventDefault(); // デフォルトの動作をキャンセル

  const header = jQuery("#js-header");
  const headerHeight = header.innerHeight();
  const speed = 500;
  const id = jQuery(this).attr("href");
  let target = jQuery("html"); // デフォルトのターゲットはhtml
  let position = 0; // デフォルトのスクロール位置は0

  if (id !== "#" && id !== "") {
    target = jQuery(id);
    position = target.offset().top - headerHeight;

    // ヘッダーがfixedでない場合の調整
    if ("fixed" !== header.css("position")) {
      position = target.offset().top;
    }
  }

  // スクロール位置が負の場合は0に設定
  if (position < 0) {
    position = 0;
  }

  jQuery("html, body").animate(
    {
      scrollTop: position,
    },
    speed,
    "swing"
  );
});








  
  $(function () {


    $('.business__slider').slick({
      autoplay: true,
      autoplaySpeed: 0,
      arrows: false,
      cssEase: 'linear',
      pauseOnHover: false,
      speed: 13000,
      swipe: false,
      touchMove: false,
      variableWidth: true,

    });



});




function fadeAnime(){

  // ふわっ

  $('.flipLeftTopTrigger').each(function(){ //flipLeftTopTriggerというクラス名が
    var elemPos = $(this).offset().top-30;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('flipLeftTop');// 画面内に入ったらflipLeftTopというクラス名を追記
    }else{
    $(this).removeClass('flipLeftTop');// 画面外に出たらflipLeftTopというクラス名を外す
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

