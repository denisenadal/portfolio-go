/*
*=================================
* Hugo UILite Portfolio v0.8
*=================================
*
* Free version https://uicard.io/products/hugo-uilite
* Pro version https://uicard.io/products/hugo-uilite-pro
* Demo https://demo.uicard.io/hugo-uilite-portfolio-demo/
*
* Coded By UICardio
*
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
*/

// [TDOD] We're working on this code
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//   anchor.addEventListener('click', function (e) {
//       e.preventDefault();

//       document.querySelector(this.getAttribute('href')).scrollIntoView({
//           behavior: 'smooth'
//       });
//   });
// });


let menuBtn = $("#menuBar");

menuBtn.click(function(){

  $('.hamburger-menu').toggleClass('animate');

  if($(".secondaryMenu").hasClass("active")){
    
    $(".secondaryMenu").removeClass("active");
    setTimeout(function(){
      $(".primaryMenu").addClass("active");
    },400);

    
  } else {
    $(".primaryMenu").removeClass("active");
  
    setTimeout(function(){
      $(".secondaryMenu").addClass("active");
    },350);
  }
});

$(document).ready(function(){
  
  $(".sidebar .main-info img, .sidebar .main-info h1, .sidebar .main-info h1 span, .sidebar .main-info p,.sidebar .main-info .social,.sidebar .main-info a").each(function(i){
    var $li = $(this);
    setTimeout(function(){
      $li.addClass("bs");
      $li.children().addClass("bs");
    }, (400 * i) - 190 * i );
  })

  setTimeout(function(){
    $(".main-content .emp").addClass("bs");
    $("#overEl").removeClass("d-none");
  }, 2200);

});