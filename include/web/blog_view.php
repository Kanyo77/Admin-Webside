<?php
 include "Admin/Database/blog.php";

$rollon=$_GET['recordId'];
$query2 = "SELECT * from blog where id='".$rollon."'"; 
$data = mysqli_query($conn,$query2);
?>

<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay-gradient"></div>
		   			<div class="row">
			   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
			   				<div class="slider-text-inner text-center">
			   					<h1>Work</h1>
								
			   				</div>
			   			</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-work">
        <?php  while($ro =mysqli_fetch_array($data)) {?>   
			<div class="row">
				<div class="col-md-8">
					<a href="Admin/<?php echo $ro["image"]; ?>" class="image-popup img-portfolio-detail">
						<img src="Admin/<?php echo $ro["image"]; ?>" alt="Free HTML5 Template by FreeHTML5.co" class="img-responsive">
					</a>	
				</div>
				<div class="col-md-4 fh5co-project-detail">
					<h2 class="fh5co-project-title">Project Title <?php echo $ro["title"]; ?></h2>
					<span class="fh5co-project-sub"><?php echo $ro["id_category"]; ?></span>
					<p><?php echo $ro["content"]; ?></p>

				
					</div>
				</div>
				
				
			</div>
            <?php }?>	
		</div>
	</div><!-- END container-wrap -->