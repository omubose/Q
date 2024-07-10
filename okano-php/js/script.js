
function slideAnime(){
  //====左に動くアニメーションここから===
    $('.leftAnime').each(function(){ 
      var elemPos = $(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        //左から右へ表示するクラスを付与
        //テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
        $(this).addClass("slideAnimeLeftRight"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
        $(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft");  //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
      }else{
        //左から右へ表示するクラスを取り除く
        $(this).removeClass("slideAnimeLeftRight");
        $(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");
      }
    });
    
  }

    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
      slideAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述
  
    // 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function(){
      slideAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述





//スクロールをするたびにアニメーションを行う設定  
$('.bounceTrigger').on('inview', function(event, isInView) {
  if (isInView) {//表示領域に入った時
    $(this).addClass('animate__animated animate__bounce');//クラス名が付与
  } else {//表示領域から出た時
    $(this).removeClass('animate__animated animate__bounce');//クラス名が除去
  }
});

// $('.backInLeftTrigger').on('inview', function(event, isInView) {
//   if (isInView) {//表示領域に入った時
//     $(this).addClass('animate__animated   animate__backInLeft');//クラス名が付与
//   } else {//表示領域から出た時
//     $(this).removeClass('animate__animated   animate__backInLeft');//クラス名が除去
//   }
// });

$(window).on('load resize', function() {
  if ($(window).width() >= 1000) {
    $('.backInLeftTrigger').on('inview', function(event, isInView) {
      if (isInView) { // 表示領域に入った時
        $(this).addClass('animate__animated animate__backInLeft'); // クラス名が付与
      } else { // 表示領域から出た時
        $(this).removeClass('animate__animated animate__backInLeft'); // クラス名が除去
      }
    });
  } else {
    // 1000px未満の場合はイベントハンドラを解除
    $('.backInLeftTrigger').off('inview');
  }
});



  $(window).on('load scroll resize', function () {
    var scrollTop = $(window).scrollTop();
    var headerHeight = $('.header__list').outerHeight();
    var cWTop = $('.c-w').offset().top;
    var cWBottom = cWTop + $('.c-w').outerHeight();
  
    if (scrollTop + headerHeight > cWTop && scrollTop < cWBottom) {
      $('.header__list').addClass('change-w');
    } else {
      $('.header__list').removeClass('change-w');
    }
  });

  $(window).on('load scroll resize', function () {
    var scrollTop = $(window).scrollTop();
    var headerHeight = $('.header__list').outerHeight();
    var cWTop = $('.c-w1').offset().top;
    var cWBottom = cWTop + $('.c-w1').outerHeight();
  
    if (scrollTop + headerHeight > cWTop && scrollTop < cWBottom) {
      $('.header__list').addClass('change-w2');
    } else {
      $('.header__list').removeClass('change-w2');
    }
  });



// 動きのきっかけの起点となるアニメーションの名前を定義
function fadeAnime(){

 
  $('.flipLeftTopTrigger').each(function(){ //flipLeftTopTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('flipLeftTop');// 画面内に入ったらflipLeftTopというクラス名を追記
    }else{
    $(this).removeClass('flipLeftTop');// 画面外に出たらflipLeftTopというクラス名を外す
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

    $('.fadeRightTrigger').each(function(){ //fadeRightTriggerというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeRight');// 画面内に入ったらfadeRightというクラス名を追記
      }else{
      $(this).removeClass('fadeRight');// 画面外に出たらfadeRightというクラス名を外す
      }
      });

       // じわっ
  
  $('.blurTrigger').each(function(){ //blurTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('blur');// 画面内に入ったらblurというクラス名を追記
    }else{
    $(this).removeClass('blur');// 画面外に出たらblurというクラス名を外す
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



