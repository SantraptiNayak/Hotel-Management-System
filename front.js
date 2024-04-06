
'use strict'

const menuToggle = document.querySelector('.menu-toggle');
const bxMenu = document.querySelector('.bx-menu');
const bxX = document.querySelector('.bx-x');

const navBar = document.querySelector('.navbar');

// --- open menu ---

bxMenu.addEventListener('click', (e)=> {
    if(e.target.classList.contains('bx-menu')){
        navBar.classList.add('show-navbar');
        bxMenu.classList.add('hide-bx');
        bxX.classList.add('show-bx');
    }
})

// --- close menu ---

bxX.addEventListener('click', (e)=> {
    if(e.target.classList.contains('bx-x')){
        navBar.classList.remove('show-navbar');
        bxMenu.classList.remove('hide-bx');
        bxX.classList.remove('show-bx');
    }
})

var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("img");
for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
}
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
setTimeout(carousel, 2000); // Change image every 2 seconds
}

