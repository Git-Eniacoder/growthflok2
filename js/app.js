// Select Elements
var burger = document.querySelector('.header_main--burger');
var menu = document.querySelector('.header_main--burger-menu');
var nav = document.querySelector('.header_main--nav');
var nav_item = document.querySelector('.act');
var nav_item1 = document.querySelectorAll('.nav-item');


burger.addEventListener('click', function(){

        menu.classList.toggle('open');
        nav.classList.toggle('open');
});

nav_item1.forEach(item => {

        console.log(item);
        item.addEventListener('click', togg);
});

function togg(e){
   alert("Hello");
}







