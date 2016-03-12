+function ($) {
  'use strict';

  var mobileMenuFunction = (function() {

  	if($(window).width() < 992){
  		$('#navbarToggle').click(function() {
  			$('#mobileMenu').slideDown();
  		});

  		$('#closeButton').click(function() {
  			$('#mobileMenu').slideUp();
  		});
  	}

  })();

}(jQuery);
