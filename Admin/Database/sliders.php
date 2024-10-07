<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from sliders";
$row = mysqli_query($conn,$query);

$blogcategories="1";
$status="1";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_new"]) == "new")
{
$file_tmp = $_FILES["image"]["tmp_name"];
$file_name = $_FILES["image"]["name"];
$file_path = "images/sliders/".$file_name;
$title= $_POST["title"];
$conn = mysqli_connect($servername, $username, $password, $database);
$query1= "INSERT INTO sliders  VALUES('','$file_path','$blogcategories','$title','$status','$created_at','$updated_at')";
$up = mysqli_query($conn,$query1 );
move_uploaded_file($file_tmp,$file_path);	
echo $query1;
}
if (isset($_POST["btn_up"]) == "up")
{
    $rollon=$_GET['recordId'];
    $title= $_POST["title"];

    $file_tmp = $_FILES["image"]["tmp_name"];
$file_name = $_FILES["image"]["name"];
$file_path = "images/sliders/".$file_name;   
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    $query1= "UPDATE sliders SET image='$file_path',blogcategories='$blogcategories',title='$title',status='$status',updated_at='$updated_at' where id ='$rollon'"; 
    move_uploaded_file($file_tmp,$file_path);	
    $up = mysqli_query($conn,$query1 );
  

    echo $query1;
}
?>