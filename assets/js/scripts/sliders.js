+function ($) {
  'use strict';

	$(document).ready(function(){
	  $('#categorySlider').bxSlider({
	    slideWidth: 200,
	    controls: true,
	    auto: true,
	    minSlides: 3,
	    maxSlides: 4,
	    slideMargin: 20,
	    pager: false,
	    responsive: true,
	    prevText: '<i class="fa fa-angle-left"></i>',
	    nextText: '<i class="fa fa-angle-right"></i>',
	  });

	  $('#homeHeroSlider').bxSlider({
	    controls: true,
	    auto: true,
	    pager: false,
	    responsive: true,
	    minSlides: 1,
	    maxSlides: 1,
	    touchEnabled: true,
	    prevText: '<i class="fa fa-angle-left"></i>',
	    nextText: '<i class="fa fa-angle-right"></i>',
	  });


	});

}(jQuery);
