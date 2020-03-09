$('.hamburger-menu').toggleClass('animate');
$(document).ready(function () {
    $('.hamburger-menu').click(function(event){
        event.stopPropagation();
        $('.hamburger-inner').toggleClass('animate');
        $('.nav-links').toggle(350);
    });

    $('.navbar.open .nav-link').click(function(){
        $('.nav-links').toggle(350);
    });


    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: '.grid-item.img'
    });
});