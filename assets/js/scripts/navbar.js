+function ($) {
  'use strict';

	$(document).ready(function() {
		$('.yith-ajaxsearchform-container form').addClass('navbar-form pull-right hidden-xs hidden-sm');
		$('.navbar-form > div').addClass('form-group');
		$('.navbar-form input[type="search"]').addClass('form-control');
		$('.navbar-form input[type="submit"]').addClass('button');
	});

}(jQuery);