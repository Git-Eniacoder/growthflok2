// Select Elements
var burger = document.querySelector('.header_main--burger');
var menu = document.querySelector('.header_main--burger-menu');
var nav = document.querySelector('.header_main--nav');
var nav_item = document.querySelectorAll('.nav-item');

burger.addEventListener('click', function(){

        menu.classList.toggle('open');
        nav.classList.toggle('open');
});









// nav_item.forEach(item => {

     
//         item.addEventListener('click', togg);

// });

// function togg(e){

//         var ele = e.target;
        

//        if(ele.classList[1] !== 'nav-actice'){

//            ele.classList.add('nav-active');

//        }

       

        
    
// }