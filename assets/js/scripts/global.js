+function ($) {
  'use strict';

  // Matchheight js
  $(document).ready(function() {
    $('[data-matchHeight]').matchHeight();

    $('.container-shop-products .products>.product').matchHeight();
  });

}(jQuery);


