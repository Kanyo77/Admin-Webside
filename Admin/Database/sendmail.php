<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from send";
$data = mysqli_query($conn,$query);

date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_up"]) == "up")
{

$titile=$_POST["titile"];
$content=$_POST["content"];
$query= "UPDATE send SET title='$titile',content='$content' ";
$up = mysqli_query($conn,$query);

// // include "mail/sendmail.php";
// header("http://localhost:8080/Webblog/Admin/mail/sendmail.php");
// header("Location: https://google.com");
// header("Location: /index.php");


}

?>