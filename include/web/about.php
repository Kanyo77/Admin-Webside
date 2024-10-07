<?php
 include "Admin/Database/about.php";
?>
<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
				   				<div class="slider-text-inner text-center">
				   					<h1>About</h1>
										
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-about">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center heading-section">
				<?php   while($ro =mysqli_fetch_array($row)) { ?>
					<h3>Our History</h3>
					<p><?php echo $ro["content"]; ?></p>
				</div>
			</div>

			<div class="row">
			
				<div class="col-md-10 col-md-offset-1 text-center	 animate-box">
					<p><img src="<?php echo $ro["image"]; ?>" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
				</div>
				<div class="col-md-8 col-md-offset-2 text-center animate-box">
					<div class="about-desc">
						<h3>Hi! I'm Khoa</h3>
						<p><?php echo $ro["footer"]; ?></p>
						 <?php  } ?>  
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->