
<div class="footer">
	 <div class="foot_top">
	      <div class="container">
		       <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						 <div class="foot_box">
							 <h2>Lorem Ipsum</h2>
							 <p><strong>Disclaimer: </strong><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
						 </div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						 <div class="foot_box">
							 <h3>Our Services</h3>
							 <ul>
				       	      <li><a href="services/proposal-writing.html">Dissertation Proposal Writing</a></li>
                              <li><a href="services/dissertation-writing-help.html">Custom Dissertation Writing </a></li>
                              <li><a href="services/abstract-writing.html">Abstract Writing</a></li>
                              <li><a href="services/literature-review-writing.html">Literature Review Writing</a></li>
				       	   </ul>
						 </div>
					</div>
           			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						 <div class="foot_box">
							 <h3>Our Subjects</h3>
							 <ul>
			       	        	<li><a href="services/phd-dissertation-help.html">PhD Dissertations </a></li>
				       	        <li><a href="services/nursing-dissertation-help.php">Nursing Dissertations </a></li>
				       	        <li><a href="services/law-dissertation-help.html">Law Dissertations </a></li>
				       	        <li><a href="services/engineering-dissertation-help.html">Engineering Dissertations </a></li>
				       	   </ul>
						 </div>
					</div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						 <div class="foot_box">
							 <h3>Useful Links</h3>
							 <ul>
				       	        <li><a href="https://dissertationeducators.co.uk/revision.php">Revision</a></li>
                                <li><a href="https://dissertationeducators.co.uk/refund.php">Refund</a></li>
                                <li><a href="blog/index.html">Blog</a></li>
				       	     </ul>
						 </div>
					</div>
	           </div>
          </div>
	 </div>
	 <div class="foot_bottom">
        <div class="container">
		    <div class="row">
	             <div class=" col-md-12 col-sm-12 col-xs-12 col-md-6 col-sm-6 col-xs-12">
		             <p>©2019 Dissertationeducators.co.uk All Rights Reserved.  </p>
			     </div>
			     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				      <ul>
						  <li><a href="about-us.html">about us</a></li>
						  <li><a href="pricing.html">Pricing</a></li>
						  <li><a href="contact-us.html">contact us</a></li>
						  <li><a href="terms-conditions.html">terms &amp; conditions</a></li>
				      </ul>
			     </div>
			</div>
	    </div>
     </div>
</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
	 $(document).ready(function() {
     $("#owl-demo").owlCarousel({
      autoplay: true,
      autoPlay: 5000, 
      items : 2,
	   itemsDesktop: [1000, 2],
       itemsDesktopSmall: [900, 1],
       itemsTablet: [600,1],
	  center: true,
      loop:true,
	  autoplayHoverPause:true,
	  martSpeed : 1200,
	 navigation : true,
		 
  });
 });
</script>
<script>
	$('.counter-count').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 5000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	</script>
<script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>

<script>
		(function($){
			$(window).on("load",function(){
		$("#content").mCustomScrollbar({
					axis:"x",
					theme:"dark-thin",
					autoExpandScrollbar:true,
					advanced:{autoExpandHorizontalScroll:true}
				});
			});
		})(jQuery);
</script>
</body>
</html>
