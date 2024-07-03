//画像の設定

// var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
// 		if (windowwidth > 768){
// 			var responsiveImage = [//PC用の画像
// 				{ src: '../img/mv1.jpg'},
// 				{ src: '../img/mv2.jpg'},
// 				{ src: '../img/mv3.jpg'}
	
// 			];
// 		} else {
// 			var responsiveImage = [//タブレットサイズ（768px）以下用の画像
// 				{ src: '../img/sp1.jpg'},
// 				{ src: '../img/sp2.jpg'},
// 				{ src: '../img/sp3.jpg'}
	
// 			];
// 		}

// //Vegas全体の設定

// $('#slider').vegas({
// 		overlay: false,//画像の上に網線やドットのオーバーレイパターン画像を指定。
// 		transition: 'blur',//切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burn、burn2、blur、blur2、flash、flash2が設定可能。
// 		transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
// 		delay: 10000,//スライド間の遅延をミリ秒単位で。
// 		animationDuration: 20000,//スライドアニメーション時間をミリ秒単位で設定
// 		animation: 'kenburns',//スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
// 		slides: responsiveImage,//画像設定を読む
// 		//timer:false,// プログレスバーを非表示したい場合はこのコメントアウトを外してください
// 	});




  $(document).ready(function() {
    const changeHeader = $('.change-header2');
    const targetSection = $('#believe');
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


  // $(document).ready(function() {
  //   $(window).on('scroll', function() {
  //     if ($(window).scrollTop() > 150) {
  //       $('.header__logo a').addClass('scroll-logo');
  //       $('.header__list-flex').addClass('scroll-nav');
  //     } else {
  //       $('.header__logo a').removeClass('scroll-logo');
  //       $('.header__list-flex').removeClass('scroll-nav');
  //     }
  //   });
  // });

	$(document).ready(function() {
		// スクロールの状態をチェックする関数
		function checkScroll() {
				if ($(window).scrollTop() > 550) {
						$('.header__logo a').addClass('scroll-logo');
						$('.header__list-flex').addClass('scroll-nav');
						$('.header').addClass('scroll-header');
				} else {
						$('.header__logo a').removeClass('scroll-logo');
						$('.header__list-flex').removeClass('scroll-nav');
						$('.header').removeClass('scroll-header');
				}
		}
	
		// 画面が読み込まれた時にチェック
		checkScroll();
	
		// スクロール時にチェック
		$(window).on('scroll', function() {
				checkScroll();
		});
	});



	




// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

  // ふわっ
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



$('.flipRightTopTrigger').each(function(){ //flipRightTopTriggerというクラス名が
	var elemPos = $(this).offset().top-50;//要素より、50px上の
	var scroll = $(window).scrollTop();
	var windowHeight = $(window).height();
	if (scroll >= elemPos - windowHeight){
	$(this).addClass('flipRightTop');// 画面内に入ったらflipRightTopというクラス名を追記
	}else{
	$(this).removeClass('flipRightTop');// 画面外に出たらflipRightTopというクラス名を外す
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
  
  $('.bgRLextendTrigger').each(function(){ //bgRLextendTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('bgRLextend');// 画面内に入ったらbgRLextendというクラス名を追記
    }else{
      $(this).removeClass('bgRLextend');// 画面外に出たらbgRLextendというクラス名を外す
    }
  });
  
  $('.bgappearTrigger').each(function(){ //bgRLextendTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('bgappear');// 画面内に入ったらbgRLextendというクラス名を追記
    }else{
      $(this).removeClass('bgappear');// 画面外に出たらbgRLextendというクラス名を外す
    }
  });

	$('.flipRightTrigger').each(function(){ //flipRightTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('flipRight');// 画面内に入ったらflipRightというクラス名を追記
    }else{
    $(this).removeClass('flipRight');// 画面外に出たらflipRightというクラス名を外す
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


  $('.slider').slick({
		arrows: false,//左右の矢印はなし
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
		speed: 6900,//スライドのスピード。初期値は300。
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





//3. 画像のモーダル
$(".gallery").modaal({
	type: 'image',
	overlay_close:true,//モーダル背景クリック時に閉じるか
	before_open:function(){// モーダルが開く前に行う動作
		$('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
	},
	after_close:function(){// モーダルが閉じた後に行う動作
		$('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
	}
});



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
	

	// 画面が読み込まれたらすぐに動かしたい場合の記述
	$(window).on('load', function(){
		slideAnime();/* アニメーション用の関数を呼ぶ*/
	});



$(window).on('load', function() {

  $('.splashbg').on('animationend', function() {
    $('.animate-img').css('opacity', '1');
  });
});



function delayScrollAnime() {
	var time = 0.2;//遅延時間を増やす秒数の値
	var value = time;
	$('.delayScroll').each(function () {
		var parent = this;					//親要素を取得
		var elemPos = $(this).offset().top;//要素の位置まで来たら
		var scroll = $(window).scrollTop();//スクロール値を取得
		var windowHeight = $(window).height();//画面の高さを取得
		var childs = $(this).children();	//子要素を取得
		
		if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) {//指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
			$(childs).each(function () {
				
				if (!$(this).hasClass("fadeUp")) {//アニメーションのクラス名が指定されているかどうかをチェック
					
					$(parent).addClass("play");	//親要素にクラス名playを追加
					$(this).css("animation-delay", value + "s");//アニメーション遅延のCSS animation-delayを追加し
					$(this).addClass("fadeUp");//アニメーションのクラス名を追加
					value = value + time;//delay時間を増加させる
					
					//全ての処理を終わったらplayを外す
					var index = $(childs).index(this);
					if((childs.length-1) == index){
						$(parent).removeClass("play");
					}
				}
			})
		}else {
			$(childs).removeClass("fadeUp");//アニメーションのクラス名を削除
			value = time;//delay初期値の数値に戻す
		}
	})
}

// 画面をスクロールをしたら動かしたい場合の記述
	$(window).scroll(function (){
		delayScrollAnime();/* アニメーション用の関数を呼ぶ*/
	});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
	$(window).on('load', function(){
		delayScrollAnime();/* アニメーション用の関数を呼ぶ*/
	});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述