<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from user";
$row = mysqli_query($conn,$query);

$total = mysqli_num_rows($row);

date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());


if (isset($_POST["btn_new"]) == "new")
{
    
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $id_category=$_POST['id_category'];
    $status=1;
    $email_verifiled="erifiled";

    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_name = $_FILES["image"]["name"];
    $file_path = "images/user/".$file_name;

    // $conn = mysqli_connect($servername, $username,$password, $database);
    $query1= "INSERT INTO user  VALUES('','$name','$username','$password',' $email','$file_path','$phone','$id_category','$status','$email_verifiled','$created_at','$updated_at')";
    move_uploaded_file($file_tmp,$file_path);	
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
if (isset($_POST["btn_up"]) == "up")
{
    $rollon=$_GET['recordId'];
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $id_category=$_POST['id_category'];
    $email_verifiled="erifiled";

    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_name = $_FILES["image"]["name"];
    $file_path = "images/user/".$file_name;

    if(isset($_POST["status"]) == "on")
    {
        $status ="1" ;
    }
    else
    {
        $status ="0" ;
    }    
    // move_uploaded_file($file_tmp,$file_path);	
    // $up = mysqli_query($conn,$query1 );

    if ($file_name > 0)
{
    $query= "UPDATE user SET name='$name',username='$username',password='$password',email='$email',image='$file_path',phone='$phone',role='$id_category',status='$status',email_verifiled='$email_verifiled',updated_at='$updated_at' where id='".$rollon."'";
echo $query;
}
else if($file_name =="")
{ 
    $query= "UPDATE user SET name='$name',username='$username',password='$password',email='$email',phone='$phone',role='$id_category',status='$status',email_verifiled='$email_verifiled',updated_at='$updated_at' where id='".$rollon."'";
    echo $query;
}
move_uploaded_file($file_tmp,$file_path);	
 $up = mysqli_query($conn,$query );
}
?>