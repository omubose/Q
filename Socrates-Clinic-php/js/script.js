


	$(function () {
		$('.slider1').slick({
			autoplay: true,
			autoplaySpeed: 0,
			arrows: false,
			cssEase: 'linear',
			pauseOnHover: false,
			speed: 20000,
			swipe: false,
			touchMove: false,
			variableWidth: true,
		});

});
	$(function () {
		$('.slider2').slick({
			autoplay: true,
			autoplaySpeed: 0,
			arrows: false,
			cssEase: 'linear',
			pauseOnHover: false,
			speed: 100000,
			swipe: false,
			touchMove: false,
			variableWidth: true,
		});

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