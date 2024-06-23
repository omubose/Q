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


$(window).scroll(function () {
  var pos = $('.news').offset(); // .mvクラスの位置を取得
  if ($(this).scrollTop() > pos.top) { // スクロール位置が.mvの位置を超えた場合
    $('header').fadeIn(); // ヘッダーをふわっと表示
  } else { // それ以外の場合
    $('header').fadeOut(); // ヘッダーをふわっと非表示
  }
});

$('.slider').slick({
  arrows: false,//左右の矢印はなし
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
  speed: 8900,//スライドのスピード。初期値は300。
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


//アコーディオンをクリックした時の動作
$('.inquiry__title').on('click', function() {//タイトル要素をクリックしたら
	$('.inquiry__box').slideUp(500);//クラス名.boxがついたすべてのアコーディオンを閉じる
    
	var findElm = $(this).next(".inquiry__box");//タイトル直後のアコーディオンを行うエリアを取得
    
	if($(this).hasClass('inquiry__close')){//タイトル要素にクラス名closeがあれば
		$(this).removeClass('inquiry__close');//クラス名を除去    
	}else{//それ以外は
		$('.inquiry__close').removeClass('inquiry__close'); //クラス名closeを全て除去した後
		$(this).addClass('inquiry__close');//クリックしたタイトルにクラス名closeを付与し
		$(findElm).slideDown(500);//アコーディオンを開く
	}
});

//ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
$(window).on('load', function(){
	$('.inquiry__accordion-area li:first-of-type section').addClass("inquiry__open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
	$(".inquiry__open").each(function(index, element){	//openクラスを取得
		var Title =$(element).children('.inquiry__title');	//openクラスの子要素のtitleクラスを取得
		$(Title).addClass('inquiry__close');				///タイトルにクラス名closeを付与し
		var Box =$(element).children('.inquiry__box');	//openクラスの子要素boxクラスを取得
		$(Box).slideDown(500);					//アコーディオンを開く
	});
});


