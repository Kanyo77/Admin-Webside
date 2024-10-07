<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from blogcategories";
$row = mysqli_query($conn,$query);

$query2 ="select title from blogcategories";
$row4 = mysqli_query($conn,$query2);

$query3 ="select * from blogcategories";
$name = mysqli_query($conn,$query3);
$status="1";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_new"]) == "new")
{
    $title= $_POST["title"];
    if(!$title)
    {
        $error = "ban chua nhap";
        echo  $error;
    
    }
    else
    {
     $conn = mysqli_connect($servername, $username, $password, $database);
     $query1= "INSERT INTO blogcategories  VALUES('','$title','$status','$created_at','$updated_at')";
     $up = mysqli_query($conn,$query1 );
    
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
    $title= $_POST["title"];  

    if(isset($_POST["status"]) == "on")
    {
        $status ="1" ;
    }
    else
    {
        $status ="0" ;
    }  

    if(!$title)
    {
        $error = "ban chua nhap";
        echo  $error;
    
    }
    else
    {
   
     $query1= "UPDATE blogcategories SET title='$title',status='$status',updated_at='$updated_at' where id='".$rollon."'";
     $up = mysqli_query($conn,$query1 );
    
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