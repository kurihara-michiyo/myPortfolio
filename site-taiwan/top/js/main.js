'use strict';

// カルーセル　動作-------------------------------------------
const swiper = new Swiper('.sample-slider', {
  loop: true,
  spaceBetween: 10, // スライド間の余白（px）
  // centeredSlides: true, // アクティブなスライドを中央に配置する
  slidesPerView: 1,
  autoplay: {
    delay: 3000, // 次のスライドに切り替わるまでの時間（ミリ秒）
    disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },

  breakpoints: { // ブレークポイント
    768: { // 画面幅1025px以上で適用
      loop: true,
      spaceBetween: 140, // スライド間の余白（px）
      // centeredSlides: true, // アクティブなスライドを中央に配置する
      slidesPerView: 3,
    }
  },
});
// カルーセル動作　ここまで---------------------------------------



