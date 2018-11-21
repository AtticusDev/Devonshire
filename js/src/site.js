jQuery(document).ready(function($){
// Add your custom jQuery here

  var menuRight = $('#test-menu-right').slideMenu({
      submenuLinkAfter: ' &#8594;',
      backLinkBefore: '&#8592; '
  });

  $('.hamburger').click(function()
  {
    $('.hamburger').toggleClass('is-active');

    if ($('.hamburger').hasClass("is-active")) {
//         $('main').css('margin-right','320px');
//         $('main').css('margin-left','-320px');
//         $('.controls').css('margin-right','320px');

    }
    else {
         $('main').css('margin-right','0px');  
//         $('main').css('margin-left','0px');
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



//Cache reference to window and animation items
var $animation_elements = $('.animation-element');
var $window = $(window);


function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}


$window.on('scroll', check_if_in_view);
$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');


// Site search function 

  $('.search-toggle').addClass('close');

  //toggle close/open on click of toggle
  $('.search-toggle').click(function(e) {
    if ($(this).hasClass('close')) {
      $(this).removeClass('close').addClass('open');
      $('.search-toggle, .search-container').addClass('open');
    }
    else {
      $(this).removeClass('open').addClass('close');
      $('.search-toggle, .search-container').removeClass('open');
    }
  });

  // close when click off of container
  $(document).on('click touchstart', function (e){
    if (!$(e.target).is('.search-toggle, .search-toggle *, .search-container, .search-container *')) {
      $('.search-toggle, .search-container').removeClass('open');
      $('.search-toggle').addClass('close');
    }
  });











});


