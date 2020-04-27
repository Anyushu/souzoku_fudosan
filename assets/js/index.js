// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
// import "slick-carousel";

$(function ($) {
  let w = $(window).width();
  let md = 991.98;
  if (w <= md) {
    // 画像src切り替え
    $(".img-switch").each(function () {
      $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
    });
  }

  // sp_menu
  $('.header__sp__btn').on('click', function () {
    $(this).toggleClass('open');
    $(this).next('.header__sp__menu').slideToggle();
    $(this).next('.header__sp__menu').toggleClass('open');
  });

  // スムーススクロール
  $('a[href^="#"]').on("click", function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});
