jQuery(document).ready(function($){
// Add your custom jQuery here

  var menuRight = $('#test-menu-right').slideMenu({
      submenuLinkAfter: ' ⇒',
      backLinkBefore: '⇐ '
  });

  $('.hamburger').click(function()
  {
    $('.hamburger').toggleClass('is-active');

    if ($('.hamburger').hasClass("is-active")) {
         $('main').css('margin-right','320px');
//         $('.controls').css('margin-right','320px');

    }
    else {
         $('main').css('margin-right','0px');  
//         $('.controls').css('margin-right','0px');  
    }

  });

 $(".menu-item").mouseover('.nav-link',function(e){
    $(".menu-item").removeClass("rollactive");
    $(this).addClass("rollactive");
  });
 $(".menu-item").mouseout('.nav-link',function(e){
    $(".menu-item").removeClass("rollactive");
//    $(this).addClass("rollactive");
  });

});