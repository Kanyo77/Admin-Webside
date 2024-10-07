<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from contact";
$row = mysqli_query($conn,$query);

$query1 ="select * from contact where id=1 ";
$row2 = mysqli_query($conn,$query);

date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_new"]) == "new")
{    
  $contact=$_POST['contact'];
if(!$contact)
{
    $error = "ban chua nhap Contact";
    echo  $error;
}
elseif($contact)
{
  $id =1;
    $conn = mysqli_connect($servername, $username, $password, $database);
    $query= "UPDATE  contact  SET  contact='$contact',updated_at='$updated_at' where id='$id' ";
    $up = mysqli_query($conn,$query );
    echo  $query;   
}
}

if (isset($_POST["btn_add"]) == "add")
{

$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];

$conn = mysqli_connect($servername, $username, $password, $database);
 $query1= "INSERT INTO contact  VALUES('','$name','$email','$contact','$created_at','$updated_at')";
 $up = mysqli_query($conn,$query1 );

}
?>