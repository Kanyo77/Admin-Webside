<?php
include "Admin/Database/blogcategories.php";
$title_id ="select * from blogcategories";
$title = mysqli_query($conn,$query);

?>
<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="http://localhost:8080/Webblog/index.php?page=Home">Blog</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php?page=Home">Home</a></li>
							<li><a href="work.html">Work</a></li>
							<li class="has-dropdown">
								<a href="index.php?page=blog_home">Blog</a>

								  
								<ul class="dropdown">	
								<?php  while($ro =mysqli_fetch_array($title )) {?>   								
									<li><a href="index.php?page=blog_cata&recordId=<?php echo $ro["id"]; ?>"><?php echo $ro["title"]; ?></a></li>
									<?php }?>	
								</ul>
								

							</li>
							<li><a href="index.php?page=about_us">About</a></li>
							<li><a href="index.php?page=contact_us">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>