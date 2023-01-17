<?php
    include('includes/config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Get Instant Quote | Xtreme Wireless</title>
<?php include('includes/head.php'); ?>
<style>
.contact-section .contact-form{
	max-width:100% !important;
}
</style>
</head>
<body>
<div class="page-wrapper"> 
    <?php include('includes/preloader.php'); ?>
    <!-- Main Header-->
    <?php include('includes/header.php'); ?>
    <!--End Main Header -->
 <!-- Services Section -->
    <section class="services-section-two alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2 class="mt-3">Select your device to get started</h2>
            </div>
            <div class="row">
                 <div class="service-block-two col-lg-12 col-md-6 col-sm-12 wow fadeInUp">
                     <iframe src="https://widget.xtremeiphonerepair.com/" id="edh-iframe" scrolling="no" title="Instant Quote Widget" class="widget-frame"></iframe>
                 </div>
            </div>
        </div>
    </section>
    <!-- Main Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- End Main Footer -->
</div>  
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    autoplay: true,
    /*center: true,*/
    loop: true,
    infinite:true,
    nav: false,
    rtl: true,
    dots:false,
    items: 4,
    autoplayTimeout:4000,
autoplayHoverPause:true,
  });
</script>
<script type='text/javascript'>
  // Listen for messages sent from the iFrame
  var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
  var eventer = window[eventMethod];
  var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
  
  eventer(messageEvent,function(e) {
    // If the message is a resize frame request
    if (e.data.indexOf('resize::') != -1) {
      var height = e.data.replace('resize::', '');
      document.getElementById('edh-iframe').style.height = height+'px';
    }
  } ,false);
</script>
</body>
</html>