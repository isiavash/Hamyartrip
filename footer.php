

<!-- Core -->
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/popper/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/headroom/headroom.min.js"></script>
<!-- Optional JS -->
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/onscreen/onscreen.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/nouislider/js/nouislider.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Argon JS -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/hamyar.js?v=1.0.1"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script>
$( document ).ready(function() {
var owl = $('#cities');
owl.owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText : ['<i class="fa fa-angle-left fa-2x" aria-hidden="true" style="color: rgba(0, 0, 0, 0.6);"></i>','<i class="fa fa-angle-right fa-2x" aria-hidden="true"  style="color: rgba(0, 0, 0, 0.6);"></i>'],
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }

});
  });

</script>
<?php wp_footer() ?>
</body>

</html>
