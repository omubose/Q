$('.slider').slick({
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 5000,//次のスライドに切り替わる待ち時間
  speed:1500,//スライドの動きのスピード。初期値は300。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  slidesToShow: 1,//スライドを画面に3枚見せる
  slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
  arrows: false,//左右の矢印あり
  prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
  dots: false,//下部ドットナビゲーションの表示
      pauseOnFocus: false,//フォーカスで一時停止を無効
      pauseOnHover: false,//マウスホバーで一時停止を無効
      pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
  });

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
  $('.slider').slick('slickPlay');
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