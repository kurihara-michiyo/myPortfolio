'use strict';

// ---------------------------------------------
// ローディング画面
// ----------------------------------------------
const loading = document.querySelector('.loading');
window.addEventListener('load', () => {
  setTimeout(function () {
    loading.classList.add('hide');
  }, 1000);//1000は表示までの時間
});



// -----------------------------------
// ハンバーガーメニュー
// ------------------------------------
var nav = document.getElementById('nav-wrapper');//メニュー画面
var hamburger = document.querySelector('.menu_bt_container');//ハンバーガーボタン
const menuClose = document.querySelector('.menu_close');//バツボタン
const menuOpen = document.querySelector('.menu_open');//〇表示

hamburger.addEventListener('click', function () {
  nav.classList.toggle('open');
  menuClose.classList.toggle('active');
  menuOpen.classList.toggle('active');
});







// --------------------------------------------
//ページトップ
// ----------------------------------------------
const pagetop_btn = document.querySelector(".page_top_btn");
pagetop_btn.addEventListener("click", scroll_top);// .pagetopをクリックしたら

// ページ上部へスムーズに移動
function scroll_top() {
  window.scroll({ top: 0, behavior: "smooth" });
}

// スクロールされたら表示
window.addEventListener("scroll", scroll_event);
function scroll_event() {
  if (window.pageYOffset > 600) {
    pagetop_btn.style.opacity = "1";
  } else if (window.pageYOffset < 600) {
    pagetop_btn.style.opacity = "0";
  }
}

