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


$("#js-drawer-button").on('click', function (e) {
  e.preventDefault();
  $(this).toggleClass("is-checked");
  $("#js-drawer-content").toggleClass("is-checked");
  $("body").toggleClass("is-checked");
  return false;
});

$(".drawer__list a").on('click', function (e) {
  e.preventDefault();
  $("#js-drawer-button").removeClass("is-checked");
  $("#js-drawer-content").removeClass("is-checked");
  $("body").removeClassClass("is-checked");
  return false;
});