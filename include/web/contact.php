<?php
 include "Admin/Database/setting.php";
 include "Admin/Database/contact.php";
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
				   					<h1>Contact</h1>
										
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Contact us</h2>
                    <?php   while($ro =mysqli_fetch_array($row2)) { ?>
					<p><?php echo $ro["contact"]; ?></p>
                    <?php  } ?>
                </div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box">
					<h3>Our Address</h3>
					<ul class="contact-info">
                    <?php   while($ro =mysqli_fetch_array($setting)) { ?>
						<li><i class="icon-location4"></i><?php echo $ro["contact_address"]; ?></li>
						<li><i class="icon-phone3"></i><?php echo $ro["contact_phone"]; ?></li>
						<li><i class="icon-location3"></i><a href="#"><?php echo $ro["contact_email"]; ?></a></li>
						<li><i class="icon-globe2"></i><a href="http://localhost:8080/Webblog/index.php">Webblog</a></li>
                        <?php  } ?>  
					</ul>
				</div>
				<div class="col-md-7 col-md-push-1 animate-box">
                <form role="form" method="Post" action="" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea  name="contact" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<!-- <input type="submit" value="send mail" name="btn_add" class="btn btn-primary btn-modify"> -->
                                <button type="submit" value="add" name="btn_add" class="btn btn-primary btn-modify">Submit</button>
                            </div>
						</div>
                    </form>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>