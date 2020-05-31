// Select Elements
var burger = document.querySelector('.header_main--burger');
var menu = document.querySelector('.header_main--burger-menu');
var nav = document.querySelector('.header_main--nav');

burger.addEventListener('click', function(){

        menu.classList.toggle('open');
        nav.classList.toggle('open');
});
