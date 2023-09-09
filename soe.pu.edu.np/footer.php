
  <!---------------------------------------------------- Footer ----------------------------------------------------------->
  <footer id="footer" class="footer" data-bg-color="#212331" role="contentinfo">
    <div class="container pt-50 pb-15">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="widget dark">
            <img class="mt-5 mb-10 footer-logo d-block m-auto" alt="" src="images/logo-soe.png">
            <h4 class="text-white text-center mb-0">Pokhara University School of Engineering</h4>
            <p class="text-center text-gray2">Pokhara-30, Kaski, Nepal</p>
            <ul class="list-inline mt-5 text-center">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white mr-5"></i> <a class="text-gray">+977-61-504046, +977-61-504039</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white mr-5"></i> <span class="spamspan">info@pusoe.edu.np</span> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-white mr-5"></i> <a class="text-gray" href="javascript:void(0)">www.soe.pu.edu.np</a> </li>
            </ul>
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10 text-center">
              <li><a href="https://twitter.com/soe" target="_blank" aria-label="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://linkedin.com/school/soe/" target="_blank" aria-label="Linkedin"><i class="fa fa-linkedin text-white"></i></a></li>
              <li><a href="https://www.facebook.com/soe/" target="_blank" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li> 
					  
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 brdr-left">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Quick Links</h4>
            <ul class="angle-double-right list-border">
              <li><a href="faculty.php">Departments</a></li>
              <li><a href="programme.php">Educational Programmes</a></li>
              <li><a href="under-construction.php">Academic Calendar</a></li> 
              <li><a href="under-construction.php">Extra Curricular Activities</a></li> 
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 explore">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Explore</h4>
			<ul class="angle-double-right list-border">
              <li><a href="gallery.php">Campus Life</a></li>
              <li><a href="under-construction.php"> Institute Newsletter</a></li>
		
              <li><a href="under-construction.php">PhD Seminar</a></li>
			  <li><a href="under-construction.php">Social Initiatives</a></li>
              <li><a href="under-construction.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
     
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-8">
            <p class="font-13 text-gray2 m-0 sm-text-center">Copyright © 2021 Pokhara University School of Engineering. All Rights Reserved.
		
          </div>
          <div class="col-md-4 text-right">
            <div class="widget no-border m-0">
              <div class="col-md-12">
            <p class="font-13 text-gray2 m-0 sm-text-center">Developed &amp; Maintained by <a target="_blank" >PU SOE</a></p>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  




<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script src="js/announcement.js"></script>

<script>
	$.fn.isInViewport = function() {
	  var elementTop = $(this).offset().top;
	  var elementBottom = elementTop + $(this).outerHeight();

	  var viewportTop = $(window).scrollTop();
	  var viewportBottom = viewportTop + $(window).height();

	  return elementBottom > viewportTop && elementTop < viewportBottom;
	};

	$(window).on('resize scroll', function() {
		$('.bw2ckk').each(function() {
			if ($(this).isInViewport()) {
				$('.bottom-img').addClass('color');
			} else {
				$('.bottom-img').removeClass('color');
			}
		});
	});
</script>

