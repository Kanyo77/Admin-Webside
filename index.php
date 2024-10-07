<?php

$page = isset($_GET['page'])?$_GET['page']:"dashboard";

include "Admin/Database/blogcategories.php";
include "Admin/Database/sliders.php";

 $query2 ="select * from sliders ";
 $image = mysqli_query($conn,$query2);
?>
<!DOCTYPE HTML>
<html>
	<head>
<?php
     include "include/header.php";
   ?> 
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        
	<?php
     include "include/sidebar.php";
   ?> 
  
<?php
  if($page == "Home")
{   
    include "include/web/index.php";
}
else if($page == "about_us")
{
	include "include/web/about.php";
}
else if($page == "contact_us")
{
    include "include/web/contact.php";
}

else if($page == "categories")
{
    include "include/web/blogcategories.php";
}

else if($page == "blog_home")
{
    include "include/web/blog.php";
}
else if($page == "blog_view")
{
    include "include/web/blog_view.php";
}
else if($page == "blog_cata")
{
    include "include/web/blog_cata.php";
}

?>	
    <?php
     include "include/footer.php";
   ?>

	</body>
</html>

