<?php
     include "Admin/Database/about.php";
	  include "Admin/Database/links.php";
	 include "Admin/Database/setting.php";
?>
<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-3 fh5co-widget">
					<h4>About Blog</h4>
					<?php  while($ro =mysqli_fetch_array($row)) {?>  
					<p><?php echo $ro["footer"]; ?></p>
					<?php } ?>  
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Latest Posts</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Amazing Templates</a></li>
						<li><a href="#">100+ Free Download Templates</a></li>
						<li><a href="#">Neat is now available</a></li>
						<li><a href="#">Download 1000+ icons</a></li>
						<li><a href="#">Big Deal for this month of March, Join Us here</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
					<?php  while($ro =mysqli_fetch_array($link)) {?>     
						<li><a href="<?php echo $ro["url"]; ?>"><?php echo $ro["title"]; ?></a></li>
						 <!-- <li><a href="#">Work</a></li> 
						 <li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About us</a></li> -->
						 <?php } ?>    
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
					<?php  while($ro =mysqli_fetch_array($setting)) {?>     
						<li><?php echo $ro["contact_address"]; ?></li>
						<li><a href="tel://1234567920"><?php echo $ro["contact_phone"]; ?></a></li>
						<li><a href="mailto:info@yoursite.com"><?php echo $ro["contact_email"]; ?></a></li>
						<li><a href=""><?php echo $ro["site_footer"]; ?></a></li>
						<?php } ?> 
					</ul>
				</div>

			</div>

		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>