var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});


// Reveal Hidden Div on Home Page

$(".hiddenDiv").animate({
    opacity:"1"
},12000);


// Toggle Dark / Light Mode on CV Pages
function myFunction() {
    var element = document.body;
    element.classList.toggle("cv-dark-mode");
 }


// /* Changing ACTIVE Class on Nav */
// $(document).on('click', 'ul li', function(){
//     $(this).addClass('active').siblings().removeClass('active')
// })
