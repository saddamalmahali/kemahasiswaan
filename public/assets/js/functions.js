/*------------- Scroll to Top -----------------*/

jQuery(window).on('scroll', function($){
  "use strict";

    // Scroll to top
    if (jQuery(this).scrollTop() > 500) {
      jQuery('#scroll-to-top').fadeIn('slow');
    } else {
      jQuery('#scroll-to-top').fadeOut('slow');
    }

  });

$('#scroll-to-top').click(function(){
  $("html,body").animate({ scrollTop: 0 }, 1000);
  return false;
});




jQuery(document).ready(function() {

  "use strict";


  /*------------------ Slide Menu ------------------*/
  $('#menu').menu();


  /*---------------------------------NiceScroll-----------------------------*/

    //Check IE11
    function IEVersion() {
      if (!!navigator.userAgent.match(/Trident\/7\./)) {
        return 11;
      }
    }

    if (IEVersion() != 11) 
    {
      $('html').niceScroll({
        cursorcolor: "#ffffff",
        zindex: '99999',
        cursorminheight: 60,
        scrollspeed: 80,
        cursorwidth: 7,
        autohidemode: true,
        background: "#aaa",
        cursorborder: 'none',
        cursoropacitymax: .7,
        cursorborderradius: 0,
        horizrailenabled: false
      });
    }


    /*------------------------- Feature Works Slider ----------------------------*/
    var worksSlider = $("#works-slider");

    worksSlider.owlCarousel({
      autoPlay : 3000,
      stopOnHover : true,
      pagination : false,
      paginationNumbers: false,

      itemsCustom : [
      [0, 1],
      [450, 1],
      [600, 3],
      [700, 3],
      [1000, 4],
      [1200, 4],
      ],
        // Responsive 
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window
      });



 // Custom Navigation 
 $(".slide-left").click(function(){
  worksSlider.trigger('owl.next');
});
 $(".slide-right").click(function(){
  worksSlider.trigger('owl.prev');
});


 /*------------------------- Post Slider ----------------------------*/

 var postSlider = $("#post-slider");

 postSlider.owlCarousel({
  autoPlay : false,
  stopOnHover : true,
  pagination : false,
  paginationNumbers: false,

  itemsCustom : [
  [0, 1],
  [450, 1],
  [600, 1],
  [700, 2],
  [1000, 2],
  [1200, 2],
  ],
        // Responsive 
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window
      });

 // Custom Navigation 
 $(".slide-left").click(function(){
  postSlider.trigger('owl.next');
});
 $(".slide-right").click(function(){
  postSlider.trigger('owl.prev');
});



 /*------------------------- Clients Logo Slider ----------------------------*/

 var clientSlider = $("#client-slider");

 clientSlider.owlCarousel({
  autoPlay : 3000,
  stopOnHover : true,
  pagination : false,
  paginationNumbers: false,

  itemsCustom : [
  [0, 1],
  [450, 1],
  [600, 2],
  [700, 4],
  [1000, 4],
  [1200, 4],
  ],
        // Responsive 
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window
      });

 // Custom Navigation 
 $(".slide-left").click(function(){
  clientSlider.trigger('owl.next');
});
 $(".slide-right").click(function(){
  clientSlider.trigger('owl.prev');
});




 /*-----------------  Similar Project- owl carousel ------------------------------*/ 

 var owl = $("#similar-project-slider");
  owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter

  owl.owlCarousel({
      items : 4, //3 items above 1000px browser width
      lazyLoad : false,
      itemsDesktop : [1000,4], //3 items between 1000px and 901px
      itemsDesktopSmall : [800,3], // betweem 768px and 601px
      itemsTablet: [480,1], //1 items between 480 and 0
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
      autoPlay : true,
      stopOnHover: true
    });

  // Custom Navigation Events
  $(".post-next").click(function(){
    owl.trigger('owl.next');
  });
  $(".post-prev").click(function(){
    owl.trigger('owl.prev');
  });

});




/*-------------------------- works Item Filter -----------------------*/
(function ($) {
  "use strict";

  var $container = $('#works-item'),
  colWidth = function () {
    var w = $container.width(), 
    columnNum = 1,
    columnWidth = 0;
    if (w > 960) {
      columnNum  = 4;
    } 
    else if (w > 640) {
      columnNum  = 4;
    }  
    else if (w > 360) {
      columnNum  = 2;
    } 
    columnWidth = Math.floor(w/columnNum);
    $container.find('.item').each(function() {
      var $item = $(this),
      multiplier_w = $item.attr('class').match(/item-w(\d)/),
      multiplier_h = $item.attr('class').match(/item-h(\d)/),
      width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
      height = multiplier_h ? columnWidth*multiplier_h[1]*0.6-0 : columnWidth*0.6-0;
      $item.css({
        width: width,
        height: height
      });
    });
    return columnWidth;
  },
  isotope = function ($) {
   $container.isotope({
    resizable: true,
    itemSelector: '.item',
    masonry: {
      columnWidth: colWidth(),
      gutterWidth: 12
    }
  });
 };
 isotope();
 $(window).smartresize(isotope);

 $('.portfolioFilter a').click(function(){
  $('.portfolioFilter .current').removeClass('current');
  $(this).addClass('current');

  var selector = $(this).attr('data-filter');
  $container.isotope({
    filter: selector,
    animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    }
  });
  return false;
}); 
}
(jQuery)
);



/*-------------------------- works Item Filter -----------------------*/
(function ($) {
  "use strict";

  var $container = $('#works-item-2'),
  colWidth = function () {
    var w = $container.width(), 
    columnNum = 1,
    columnWidth = 0;
    if (w > 960) {
      columnNum  = 2;
    } 
    else if (w > 640) {
      columnNum  = 2;
    }  
    else if (w > 360) {
      columnNum  = 2;
    } 
    columnWidth = Math.floor(w/columnNum);
    $container.find('.item').each(function() {
      var $item = $(this),
      multiplier_w = $item.attr('class').match(/item-w(\d)/),
      multiplier_h = $item.attr('class').match(/item-h(\d)/),
      width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
      height = multiplier_h ? columnWidth*multiplier_h[1]*0.6-10 : columnWidth*0.6-10;
      $item.css({
        width: width,
        height: height
      });
    });
    return columnWidth;
  },
  isotope = function () {
    $container.isotope({
      resizable: true,
      itemSelector: '.item',
      masonry: {
        columnWidth: colWidth(),
        gutterWidth: 10
      }
    });
  };
  isotope();
  $(window).smartresize(isotope);

  $('.portfolioFilter a').click(function(){
    $('.portfolioFilter .current').removeClass('current');
    $(this).addClass('current');

    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    return false;
  }); 
}
(jQuery)
);


/*-------------------------- works Item Filter -----------------------*/
(function ($) {
  "use strict";

  var $container = $('#works-item-3'),
  colWidth = function () {
    var w = $container.width(), 
    columnNum = 1,
    columnWidth = 0;
    if (w > 960) {
      columnNum  = 3;
    } 
    else if (w > 640) {
      columnNum  = 3;
    }  
    else if (w > 360) {
      columnNum  = 2;
    } 
    columnWidth = Math.floor(w/columnNum);
    $container.find('.item').each(function() {
      var $item = $(this),
      multiplier_w = $item.attr('class').match(/item-w(\d)/),
      multiplier_h = $item.attr('class').match(/item-h(\d)/),
      width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
      height = multiplier_h ? columnWidth*multiplier_h[1]*0.6-10 : columnWidth*0.6-10;
      $item.css({
        width: width,
        height: height
      });
    });
    return columnWidth;
  },
  isotope = function () {
    $container.isotope({
      resizable: true,
      itemSelector: '.item',
      masonry: {
        columnWidth: colWidth(),
        gutterWidth: 10
      }
    });
  };
  isotope();
  $(window).smartresize(isotope);

  $('.portfolioFilter a').click(function(){
    $('.portfolioFilter .current').removeClass('current');
    $(this).addClass('current');

    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    return false;
  }); 
}
(jQuery)
);






/*-------------------------- works Item Filter -----------------------*/
(function ($) {
  "use strict";

  var $container = $('#works-item-4'),
  colWidth = function () {
    var w = $container.width(), 
    columnNum = 1,
    columnWidth = 0;
    if (w > 960) {
      columnNum  = 4;
    } 
    else if (w > 640) {
      columnNum  = 4;
    }  
    else if (w > 360) {
      columnNum  = 2;
    } 
    columnWidth = Math.floor(w/columnNum);
    $container.find('.item').each(function() {
      var $item = $(this),
      multiplier_w = $item.attr('class').match(/item-w(\d)/),
      multiplier_h = $item.attr('class').match(/item-h(\d)/),
      width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
      height = multiplier_h ? columnWidth*multiplier_h[1]*0.6-10 : columnWidth*0.6-10;
      $item.css({
        width: width,
        height: height
      });
    });
    return columnWidth;
  },
  isotope = function () {
    $container.isotope({
      resizable: true,
      itemSelector: '.item',
      masonry: {
        columnWidth: colWidth(),
        gutterWidth: 10
      }
    });
  };
  isotope();
  $(window).smartresize(isotope);

  $('.portfolioFilter a').click(function(){
    $('.portfolioFilter .current').removeClass('current');
    $(this).addClass('current');

    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    return false;
  }); 
}
(jQuery)
);

