'use strict';
'use strict';

// モーダル1出現
const open = document.getElementById('open');
const close = document.getElementById('close');
const modal = document.getElementById('modal');


open.addEventListener('click', () => {
  modal.classList.remove('hidden');//openをクリックされたらhiddenクラスを消す
});

close.addEventListener('click', () => {
  modal.classList.add('hidden');//closeをクリックされたらhiddenクラスをつける
});



// モーダル2出現
const open2 = document.getElementById('open2');
const close2 = document.getElementById('close2');
const modal2 = document.getElementById('modal2');


open2.addEventListener('click', () => {
  modal2.classList.remove('hidden');//openをクリックされたらhiddenクラスを消す
});

close2.addEventListener('click', () => {
  modal2.classList.add('hidden');//closeをクリックされたらhiddenクラスをつける
});



// モーダル3出現
const open3 = document.getElementById('open3');
const close3 = document.getElementById('close3');
const modal3 = document.getElementById('modal3');


open3.addEventListener('click', () => {
  modal3.classList.remove('hidden');//openをクリックされたらhiddenクラスを消す
});

close3.addEventListener('click', () => {
  modal3.classList.add('hidden');//closeをクリックされたらhiddenクラスをつける
});




// モーダル4出現
const open4 = document.getElementById('open4');
const close4 = document.getElementById('close4');
const modal4 = document.getElementById('modal4');


open4.addEventListener('click', () => {
  modal4.classList.remove('hidden');//openをクリックされたらhiddenクラスを消す
});

close4.addEventListener('click', () => {
  modal4.classList.add('hidden');//closeをクリックされたらhiddenクラスをつける
});

