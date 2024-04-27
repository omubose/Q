// jQuery("#js-drawer-icon").on("click", function (e) {
//   e.preventDefault();
//   jQuery("#js-drawer-icon").toggleClass("is-checked");
//   jQuery("#js-drawer-content").toggleClass("is-checked");
// });

// document
//   .querySelector("#js-drawer-button")
//   .addEventListener("click", function (e) {
//     e.preventDefault();

//     document.querySelector("#js-drawer-button").classList.toggle("is-checked");
//     document.querySelector("#js-drawer-content").classList.toggle("is-checked");
// });

//   jQuery("#js-drawer-button").on("click", function (e) {
//   e.preventDefault();
//   jQuery("#js-drawer-button").toggleClass("is-checked");
//   jQuery("#js-drawer-content").toggleClass("is-checked");
// });

$("#js-drawer-icon").on("click", function (e) {
  e.preventDefault();
  $(this).toggleClass("is-checked");
  $("#js-drawer-content").toggleClass("is-checked");
  $("body").toggleClass("is-checked");
  return false;
});

$(".drawer-content__menu a").on("click", function (e) {
  e.preventDefault();
  $("#js-drawer-icon").removeClass("is-checked");
  $("#js-drawer-content").removeClass("is-checked");
  $("body").removeClassClass("is-checked");
  return false;
});



// キャンペーンについてスライダー
// =============================
const aboutSwiperWrap = document.querySelector("#js-about-swiper-wrap");
const aboutSwiperSlides = aboutSwiperWrap.querySelectorAll(".swiper-slide");

// 動きを滑らかにするCSS
aboutSwiperWrap.style.transitionTimingFunction = "linear";

// 無限ループのためスライドを複製する処理
function cloneAndAppend(element, swiperWrap) {
  let clonedElement = element.cloneNode(true);
  swiperWrap.appendChild(clonedElement);
}
for (let aboutSwiperSlide of aboutSwiperSlides) {
  cloneAndAppend(aboutSwiperSlide, aboutSwiperWrap);
}

// スライダーオプション
const aboutSwiper = new Swiper("#js-about-swiper", {
  loop: true, // 無限ループ
  width: 100, // スライドの横幅
  loopedSlides: 10, // ループするスライドの枚数(総スライド数は2倍に設定する)
  spaceBetween: 10, // スライド間の余白
  speed: 3000, // スピード
  keyboard: true, // キーボード操作
  autoplay: {
    // 自動再生
    delay: 0, // スライドが止まる時間
    disableOnInteraction: false, // 自動再生を止めない
  },
  breakpoints: {
    // 900px以上のオプション
    900: {
      spaceBetween: 20, // スライド間の余白
      width: 200, // スライドの横幅
    },
  },
});