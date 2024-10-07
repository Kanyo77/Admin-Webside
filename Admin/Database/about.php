<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from about";
$row = mysqli_query($conn,$query);

date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_new"]) == "new")
{    
  $content=$_POST['content'];
  $footer=$_POST['footer'];
if(!$content)
{
    $error = "ban chua nhap Content";
    echo  $error;
}
elseif(!$footer)
{
    $error = "ban chua nhap footer";
    echo  $error;
}
else
{
    $conn = mysqli_connect($servername, $username, $password, $database);
    $query= "UPDATE  about  SET  content='$content',footer='$footer',updated_at='$updated_at'  ";
    $up = mysqli_query($conn,$query );
    echo  $query;   
}

}