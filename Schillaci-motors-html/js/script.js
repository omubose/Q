window.addEventListener('scroll', function() {
  var header = document.getElementById('siteTitle');
  if (window.scrollY > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
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


//画像の設定

var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
		if (windowwidth > 768){
			var responsiveImage = [//PC用の画像
				{ src: '../img/mv1.jpg'},
				{ src: '../img/mv2.jpg'},
				{ src: '../img/mv3.jpg'}

			];
		} else {
			var responsiveImage = [//タブレットサイズ（768px）以下用の画像
        { src: '../img/mv1s.jpg'},
				{ src: '../img/mv2s.jpg'},
				{ src: '../img/mv3s.jpg'}
			];
		}

//Vegas全体の設定

$('#slider').vegas({
		overlay:false,//画像の上に網線やドットのオーバーレイパターン画像を指定。
		transition: 'blur',//切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burn、burn2、blur、blur2、flash、flash2が設定可能。
		transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
		delay: 10000,//スライド間の遅延をミリ秒単位で。
		animationDuration: 20000,//スライドアニメーション時間をミリ秒単位で設定
		animation: 'kenburns',//スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
		slides: responsiveImage,//画像設定を読む
		//timer:false,// プログレスバーを非表示したい場合はこのコメントアウトを外してください
	});

	$('.slider').slick({
		arrows: false,//左右の矢印はなし
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
		speed: 30000,//スライドのスピード。初期値は300。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
		pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
		cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
		slidesToShow: 0.8,//スライドを画面に4枚見せる
		slidesToScroll: 1,//1回のスライドで動かす要素数
		responsive: [
			{
			breakpoint: 769,//モニターの横幅が769px以下の見せ方
			settings: {
				slidesToShow: 0.5,//スライドを画面に2枚見せる
			}
		},
		{
			breakpoint: 426,//モニターの横幅が426px以下の見せ方
			settings: {
				slidesToShow: 0.3,//スライドを画面に1.5枚見せる
			}
		}
	]
	});





  $('.slider1').slick({
		autoplay: false,//自動的に動き出すか。初期値はfalse。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		slidesToShow: 4,//スライドを画面に3枚見せる
		slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
		prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
		nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
		dots: false,//下部ドットナビゲーションの表示
		responsive: [
			{
			breakpoint: 769,//モニターの横幅が769px以下の見せ方
			settings: {
				slidesToShow: 2,//スライドを画面に2枚見せる
				slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
			}
		},
		{
			breakpoint: 426,//モニターの横幅が426px以下の見せ方
			settings: {
				slidesToShow: 1,//スライドを画面に1枚見せる
				slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
			}
		}
	]
	});


  $('.slider2').slick({
		autoplay: false,//自動的に動き出すか。初期値はfalse。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		slidesToShow: 3,//スライドを画面に3枚見せる
		slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
		prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
		nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
		dots: false,//下部ドットナビゲーションの表示
		responsive: [
			{
			breakpoint: 769,//モニターの横幅が769px以下の見せ方
			settings: {
				slidesToShow: 2,//スライドを画面に2枚見せる
				slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
			}
		},
		{
			breakpoint: 426,//モニターの横幅が426px以下の見せ方
			settings: {
				slidesToShow: 1,//スライドを画面に1枚見せる
				slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
			}
		}
	]
	});

  $('.slider3').slick({
		arrows: false,//左右の矢印はなし
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
		speed: 30000,//スライドのスピード。初期値は300。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
		pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
		cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
		slidesToShow: 0.8,//スライドを画面に4枚見せる
		slidesToScroll: 1,//1回のスライドで動かす要素数
		responsive: [
			{
			breakpoint: 769,//モニターの横幅が769px以下の見せ方
			settings: {
				slidesToShow: 0.5,//スライドを画面に2枚見せる
			}
		},
		{
			breakpoint: 426,//モニターの横幅が426px以下の見せ方
			settings: {
				slidesToShow: 0.3,//スライドを画面に1.5枚見せる
			}
		}
	]
	});