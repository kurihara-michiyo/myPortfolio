'use strict';

const openbtn = document.querySelector('.openbtn1')
const hidden = document.querySelector('.hamburger')

openbtn.addEventListener('click',function () {
    openbtn.classList.toggle('active');
    hidden.classList.toggle('hidden');
});


