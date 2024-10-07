<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from mailsetting";
$row = mysqli_query($conn,$query);

date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_up"]) == "up")
{

$email=$_POST["email"];
$sever=$_POST["sever"];
$username=$_POST["username"];
$password=$_POST["password"];
$post=$_POST["post"];

$query= "UPDATE mailsetting SET email='$email',sever='$sever',username='$username',password='$password',post='$post' ";
$up = mysqli_query($conn,$query );
echo $query;
}

?>