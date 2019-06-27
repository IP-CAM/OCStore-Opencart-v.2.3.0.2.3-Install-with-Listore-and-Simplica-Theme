
    
       
        var mediaQuery = window.matchMedia('(max-width: 768px)');

if (mediaQuery.matches) {
    jQuery(".dropdown").click(function(){
        $(this).find(".account-link").toggle();
       
    });
  
}




    
       
        var mediaQuery = window.matchMedia('(max-width: 768px)');

if (mediaQuery.matches) {
    jQuery(".drop-click").click(function(){
        $(this).find(".drop-nav").toggle();
       
    });
  
}




    jQuery(".toggler").click(function() {
        $(".menusn").toggle();
    });



   jQuery(".toggler").click(function(){
       $(".icon").toggleClass("icons");
   });




     //go top//
$(document).ready(function(){
  $('.wrapp').append('<a href="#" id="go-top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>');
});

$(function() {
 $.fn.scrollToTop = function() {
  $(this).hide().removeAttr("href");
  if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
  var scrollDiv = $(this);
  $(window).scroll(function() {
   if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
   else $(scrollDiv).fadeIn("slow")
  });
  $(this).click(function() {
   $("html, body").animate({scrollTop: 0}, "slow")
  })
 }
});

$(function() {
 $("#go-top").scrollToTop();
});

//go top end//