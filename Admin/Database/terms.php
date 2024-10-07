<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from terms";
$row = mysqli_query($conn,$query);

date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_new"]) == "new")
{    
  $content=$_POST['content'];
echo $content;
if(!$content)
{
    $error = "ban chua nhap Content";
    echo  $error;
}
else
{
    $conn = mysqli_connect($servername, $username, $password, $database);
    $query= "UPDATE  terms  SET  content='$content',created_at='$created_at',updated_at='$updated_at'  ";
    $up = mysqli_query($conn,$query );
    echo  $query;   
}

}