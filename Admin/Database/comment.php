<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from comment";
$row = mysqli_query($conn,$query);
$total_comment = mysqli_num_rows($row);

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
     $query1= "INSERT INTO   VALUES('','$title','$status','$created_at','$updated_at')";
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