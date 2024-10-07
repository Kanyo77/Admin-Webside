<?php
 include "Admin/Database/blog.php";

 $rollon=$_GET['recordId'];
$query2 = "SELECT * from blog where id_category='$rollon'"; 
$data = mysqli_query($conn,$query2);
?>
<div class="container-wrap">
        <div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay-gradient"></div>
		   			<div class="row">
			   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
			   				<div class="slider-text-inner text-center">
			   					<h1>Blog</h1>
								  
			   				</div>
			   			</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-work">
			<div class="row">
			<?php  while($ro =mysqli_fetch_array($data)) {?>   		
				<div class="col-md-4 text-center animate-box">
					<a href="index.php?page=blog_view&recordId=<?php echo $ro["id"]; ?>" class="work" style="background-image: url(Admin/<?php echo $ro["image"]; ?>);">
						<div class="desc">
							<h3><?php echo $ro["title"]; ?></h3>
						
						
							 <span><?php echo $ro["id_category"]; ?></span>
						</div>
					</a>
				</div>
				<?php }?>			



			</div>
		</div>
	</div>