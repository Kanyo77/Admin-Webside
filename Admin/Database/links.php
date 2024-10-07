<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from links";
$link = mysqli_query($conn,$query);

$status="1";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_new"]) == "new")
{
$title=$_POST["title"];
$url=$_POST["url"];  

if(!$title)
{
    $error = "ban chua nhap Title";
    echo  $error;

}
elseif(!$url)
{
    $error = "ban chua nhap Url";
    echo  $error;
}
else
{
    $conn = mysqli_connect($servername, $username, $password, $database);
    $query= "INSERT INTO links  VALUES('','$title','$url','$created_at','$updated_at')";
     $up = mysqli_query($conn,$query );
    
if($up > 0)
{
echo " thanh cong";
}
else
{
    echo " Kiem tra lai";
}
}
}


if (isset($_POST["btn_up"]) == "up")
{
    $rollon=$_GET['recordId'];
    $title=$_POST["title"];
    $url=$_POST["url"];  
    
    if(!$title)
    {
        $error = "ban chua nhap Title";
        echo  $error;
    
    }
    elseif(!$url)
    {
        $error = "ban chua nhap Url";
        echo  $error;
    }
    else
    {
        $conn = mysqli_connect($servername, $username, $password, $database);
        $query= "UPDATE  links  SET   title='$title',url='$url',updated_at='$updated_at' where id ='$rollon' ";
         $up = mysqli_query($conn,$query );
        // echo  $query;
    if($up > 0)
    {
    echo " thanh cong";
    }
    else
    {
        echo " Kiem tra lai";
    }
    
    }
}
?>