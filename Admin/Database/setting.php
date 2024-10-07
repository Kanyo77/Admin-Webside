<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from setting";
$setting = mysqli_query($conn,$query);

$status="1";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_new"]) == "new")
{

$file_tmp = $_FILES["image"]["tmp_name"];
$file_name = $_FILES["image"]["name"];
$file_path = "images/setting/".$file_name;    

$file_tmp2 = $_FILES["favicon"]["tmp_name"];
$file_name2 = $_FILES["favicon"]["name"];
$file_path2 = "images/favi/".$file_name2;    

$name=$_POST["name"];
$map=$_POST["map"];
$timezone=$_POST["timezone"];
$footer=$_POST["footer"];
$email=$_POST["email"];
$Phone=$_POST["Phone"];
$address=$_POST["address"];

$query= "UPDATE setting SET site_name='$name',site_logo='$file_path',site_favicon='$file_path2',site_map='$map',site_timezone='$timezone',site_footer='$footer',contact_phone='$Phone',contact_address='$address',contact_email='$email',updated_at='$updated_at'";
move_uploaded_file($file_tmp,$file_path);
move_uploaded_file($file_tmp2,$file_path2);				
$up = mysqli_query($conn,$query );   
echo $query;
}
?>