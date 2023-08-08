'use strict';
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

// ページ内リンクスクロール
window.addEventListener('DOMContentLoaded', () => {
  const anchorLinks = document.querySelectorAll('a[href^="index.php#"]');
  const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

  anchorLinksArr.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetId = link.hash;
      const targetElement = document.querySelector(targetId);
      const targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top;
      window.scrollTo({
        top: targetOffsetTop,
        behavior: "smooth"
      });
    });
  });
});



// スクロール時その場ふわっと表示
function scroll_effect1() {
  let elements = document.getElementsByClassName('load-fade');
  if (!elements) return;

  let scrollY = window.pageYOffset;
  let windowH = window.innerHeight;
  let showTiming = 400; // 要素を表示するタイミング
  for (let i = 0; i < elements.length; i++) {
    let elemClientRect = elements[i].getBoundingClientRect();
    let elemY = scrollY + elemClientRect.top;
    if (scrollY > elemY - windowH + showTiming) {
      elements[i].classList.add('is-show1');
    }
  }
}
window.addEventListener('scroll', scroll_effect1); // スクロール時に実行




//スクロール下からふわっと表示
function scroll_effect() {
  let element = document.getElementsByClassName('scroll-up');
  if(!element) return;
                      
  let scrollY = window.pageYOffset;
  let windowH = window.innerHeight;
  let showTiming = 300; // 要素を表示するタイミング
  for(let i = 0; i < element.length; i++) { 
    let elemClientRect = element[i].getBoundingClientRect(); 
    let elemY = scrollY + elemClientRect.top; 
    if(scrollY > elemY - windowH + showTiming) {
      element[i].classList.add('is-show');
    }
  }
}
window.addEventListener('scroll', scroll_effect); // スクロール時に実行


// スクロール左からふわっと表示
function scroll_effect3() {
  let element = document.getElementsByClassName('scroll-left');
  if(!element) return;
                      
  let scrollY = window.pageYOffset;
  let windowH = window.innerHeight;
  let showTiming = 300; // 要素を表示するタイミング
  for(let i = 0; i < element.length; i++) { 
    let elemClientRect = element[i].getBoundingClientRect(); 
    let elemY = scrollY + elemClientRect.top; 
    if(scrollY > elemY - windowH + showTiming) {
      element[i].classList.add('is-show2');
    }
  }
}
window.addEventListener('scroll', scroll_effect3); // スクロール時に実行


//スクロール右からふわっと表示
function scroll_effect4() {
  let element = document.getElementsByClassName('scroll-right');
  if(!element) return;
                      
  let scrollY = window.pageYOffset;
  let windowH = window.innerHeight;
  let showTiming = 300; // 要素を表示するタイミング
  for(let i = 0; i < element.length; i++) { 
    let elemClientRect = element[i].getBoundingClientRect(); 
    let elemY = scrollY + elemClientRect.top; 
    if(scrollY > elemY - windowH + showTiming) {
      element[i].classList.add('is-show3');
    }
  }
}
window.addEventListener('scroll', scroll_effect4); // スクロール時に実行
