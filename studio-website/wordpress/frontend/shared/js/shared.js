/*!
 * ScriptName: shared.js
 *
 */

$(document).ready(function() {
  $('.key-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1000,
    fade: true,
    responsive: [
      {
        breakpoint: 999,
        settings: {
          arrows: false,
          variableWidth: false,
          centerMode: false,
        }
      }
    ]
  });
  $(window).on('load resize orientationchange', function() {
    $('.key-slide').slick('resize');
  });  
});

$(document).ready(function() {
  if ($('.slide-for').length >= 1) {
    $('.slide-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      autoplay: true,
      asNavFor: '.slide-nav'
    });
    $('.slide-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slide-for',
      dots: true,
      centerMode: true,
      focusOnSelect: true,
      variableWidth: true
    });
  }
  
});

$(document).ready(function() {
  
  $(window).on('load resize orientationchange', function() {
    $('.post-slide').slick('resize');
  });

  var $slider = $('.post-slide');

  if ($slider.length) {
    var currentSlide;
    var slidesCount;
    var sliderCounter = document.createElement('div');
    sliderCounter.classList.add('slider_counter');
    
    var updateSliderCounter = function(slick, currentIndex) {
      currentSlide = slick.slickCurrentSlide() + 1;
      slidesCount = 4;
      $(sliderCounter).text(currentSlide + ' / ' +'0'+slidesCount)
    };

    $slider.on('init', function(event, slick) {
      $slider.append(sliderCounter);
      updateSliderCounter(slick);
    });

    $slider.on('afterChange', function(event, slick, currentSlide) {
      updateSliderCounter(slick, currentSlide);
    });

    $slider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      autoplay: false,
      infinite: false,
    });
  }
  if($('.post-slide .slick-slide').length > 1) {
    $('.news-box').addClass('show-count');
  } else {
    $('.news-box').removeClass('show-count');
  }
});

$(document).ready(function () {
	var scrollSpeed = 0.3;
	var imgWidth = 2168;
	var posX = 0;
	setInterval(function(){
		if (posX >= imgWidth) posX= 0;
		posX -= scrollSpeed;
		$('.slide-h').css("background-position",posX+"px 0px");
	}, 1);
});

$(document).ready(function () {  
   $('.unit-a').click(function() {
    $('.vt-1').toggleClass('opc');
    $('.vt-1').siblings().removeClass('opc')
  });
  $('.unit-b').click(function() {
    $('.vt-2').toggleClass('opc');
    $('.vt-2').siblings().removeClass('opc')
  });
  $('.unit-c').click(function() {
    $('.vt-3').toggleClass('opc');
    $('.vt-3').siblings().removeClass('opc')
  });
  $('.unit-d').click(function() {
    $('.vt-4').toggleClass('opc');
    $('.vt-4').siblings().removeClass('opc')
  });
  $('.unit-e').click(function() {
    $('.vt-5').toggleClass('opc');
    $('.vt-5').siblings().removeClass('opc')
  });
  $('.unit-f').click(function() {
    $('.vt-6').toggleClass('opc');
    $('.vt-6').siblings().removeClass('opc')
  });
});

$(document).ready(function() {
  //var height1 = $('.header-box').height();
  var height2 = $('#head-top').height();
  //var height = height1 + height2;
  $(window).scroll(function (){
    if(height2 < $(window).scrollTop()){
      $('body').addClass('fixed-btn');      
    }
    else {
      $('body').removeClass('fixed-btn');    
    }
  });
});

$(document).ready(function() {
  var spBreak = 999;
  var isMobile = window.matchMedia('(max-width: ' + spBreak + 'px)').matches;
  if(isMobile == true) {
    $('.hamberger-btn').click(function() {
      if ($('body').hasClass('menu-open')) {
        $('body').removeClass('menu-open');
        $('body').css('position', 'static');
        $(window).scrollTop(offsetY);
      } else {
        $('body').addClass('menu-open');
        offsetY = window.pageYOffset;
        $('body').css({
          position: 'fixed',
          width: '100%',
          'top': -offsetY + 'px'
        });
      }
      return false;
    });
    $('.nav a, .nav a').click(function() {
      $('body').removeClass('menu-open');
      $('body').css('position', 'static');
      $(window).scrollTop(offsetY);
    });
    $('.hide-nav').click(function() {
      if ($('body').hasClass('menu-open')) {
        $('body').removeClass('menu-open');
        $('body').css('position', 'static');
        $(window).scrollTop(offsetY);
      }
    });
  }
});

/*$(document).ready(function() {

  $('.nav-main').bind('click', function(e) {
    var headerHight = $(".nav-header").height();
      e.preventDefault(); // prevent hard jump, the default behavior

      var target = $(this).attr("href"); // Set the target as variable

      // perform animated scrolling by getting top-position of target-element and set it as scroll target
      $('html, body').stop().animate({
          scrollTop: $(target).offset().top - headerHight
      }, 600, function() {
          location.hash = target; //attach the hash (#jumptarget) to the pageurl
      });

      return false;
  });
});*/

$(window).scroll(function() {
  var scrollDistance = $(window).scrollTop() - 800;
  var ww = document.body.clientWidth;
  if(ww <= 767) {
    var scrollDistance = $(window).scrollTop() - 400;
  }
  // Show/hide menu on scroll
  //if (scrollDistance >= 850) {
  //		$('nav').fadeIn("fast");
  //} else {
  //		$('nav').fadeOut("fast");
  //}

  // Assign active class to nav links while scolling
  $('.sec-scroll').each(function(i) {
      if ($(this).position().top <= scrollDistance) {
          $('.nav > li.active').removeClass('active');
          $('.nav > li').eq(i).addClass('active');
      }
  });
}).scroll();


$(document).ready(function() {
  var spBreak = 767;
  var isMobile = window.matchMedia('(max-width: ' + spBreak + 'px)').matches;
  if(isMobile == false) {
    $('.sub-nav').click(function(){
        $(this).toggleClass('hover');
    });
    $('body').click(function () {
      if ($(".sub-box[style='visibility: visible;']").length >= 1) {
        console.log('true');
        $(".sub-box").hide();
      }
    });
  }
  else {
    $('.sub-nav').unbind('mouseenter mouseleave');
  }
});

/*$(window).load(function () {
	var headerHight = $(".nav-headerx").height();
	var $path = location.href;
	var $index = $path.indexOf("#");
	var $sub = $path.substring($index);
	if($index != -1) {
		var target = $($sub);
		var offsetTop = target.offset().top - 100;
		$('html,body').animate({
			scrollTop: offsetTop
		}, 500);
	}
});*/

$(document).ready(function() {
  var backTop = $("#to-head");
  backTop.click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});

// var app = app || {};

// app.init = function () {  
//   app.tabletViewport();
// };

// app.tabletViewport = function () {

//   var viewport = document.getElementById('viewport');

//   var viewportSet = function () {
//     if (screen.width >= 768 && screen.width <= 1120) {
//       viewport.setAttribute('content', 'width=1000, user-scalable=0');
//     } else {
//       viewport.setAttribute('content', 'width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0');
//     }
//   };

//   viewportSet();
//   $(window).on('load resize orientationchange', function() {
//     viewportSet();
//   });
// };




// $(function () {

//   app.init();

// });

$(document).ready(function () {
  
    $('.item-faq dd').hide();
    $('.item-faq dt').click(function() {
      $(this).toggleClass('active');
      $('+dd', this).slideToggle();
    });


    $('.close-all').click(function() {
      $('.item-faq dd').hide();
      $('.item-faq').removeClass('active');
    });
  
  });