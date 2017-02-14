<?php include('sidebar.php') ?>

<!-- JQuery v1.11.3 -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>

<!-- Library - Modernizer -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/modernizr/modernizr.js"></script>

<!-- Library - Bootstrap v3.3.5 -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/bootstrap/bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

<!-- jQuery Easing v1.3 -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.min.js"></script>

<!-- Library - jQuery.appear -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/appear/jquery.appear.js"></script>

<!-- Library - OWL Carousel V.2.0 beta -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.carousel.min.js"></script>

<!-- jQuery For Number Counter -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/number/jquery.animateNumber.min.js"></script>

<!-- Library - Isotope Portfolio Filter -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/isotope/isotope.pkgd.min.js"></script>

<!-- Library - Magnific Popup - v1.0.0 -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Library - Theme JS -->
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

 <!-- Compiled and minified JavaScript materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.open-popup-link').magnificPopup({
      type:'inline',
      midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide 	alternative source in href.
    });

    // product popup
    $('.product-popup').magnificPopup({
  type: 'inline',
  preloader: false,
  focus: '#name',
  midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide 	alternative source in href.

  // When elemened is focused, some mobile browsers in some cases zoom in
  // It looks not nice, so we disable it:
  callbacks: {
    beforeOpen: function() {
      if($(window).width() < 700) {
        this.st.focus = false;
      } else {
        this.st.focus = '#name';
      }
    }
  }
});


    $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<style >
html{
  margin-top:0 !important;
}
</style>
</body>
</html>
