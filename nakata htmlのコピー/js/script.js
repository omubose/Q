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

drawerContents.find("a").on("click", function (e) {
  // e.preventDefault();
  drawerIcon.trigger("click");
});

// const drawerIcon = jQuery("#js-drawer-icon");
// const drawerContents = jQuery("#js-drawer-content");

// drawerIcon.on("click", function (e) {
//   e.preventDefault();
//   drawerIcon.toggleClass("is-checked");
//   drawerContents.slideToggle(300);
//   jQuery("body").toggleClass("is-fixed");
// });

// drawerContents.find("a").on("click", function (e) {
//   const href = jQuery(this).attr("href");
//   if (href.startsWith("#")) {
//     // 内部リンク（id先）であればデフォルト動作をキャンセル
//     e.preventDefault();
//     drawerIcon.trigger("click");
//   } else {
//     // 外部リンクであればそのまま遷移
//     drawerIcon.trigger("click");
//   }
// });



$('.slider').slick({
  arrows: false,//左右の矢印はなし
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
  speed: 12000,//スライドのスピード。初期値は300。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
  pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
  cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
  slidesToShow: 4,//スライドを画面に4枚見せる
  slidesToScroll: 1,//1回のスライドで動かす要素数
  responsive: [
    {
    breakpoint: 769,//モニターの横幅が769px以下の見せ方
    settings: {
      slidesToShow: 2,//スライドを画面に2枚見せる
    }
  },
  {
    breakpoint: 426,//モニターの横幅が426px以下の見せ方
    settings: {
      slidesToShow: 1.5,//スライドを画面に1.5枚見せる
    }
  }
]
});






// 動きのきっかけの起点となるアニメーションの名前を定義
function fadeAnime(){

  // ふわっ


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



  
}

// 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function(){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

