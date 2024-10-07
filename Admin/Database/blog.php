<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from blog";
$row = mysqli_query($conn,$query);

$total_blog = mysqli_num_rows($row);

date_default_timezone_set("Asia/Ho_Chi_Minh");
$created_at=date("Y-m-d h:i:s",time());
$updated_at=date("Y-m-d h:i:s",time());

if (isset($_POST["btn_new"]) == "new")
{

        $id_user=1;
        $id=$_POST['id_category'];
        $query02=" SELECT id FROM `blogcategories` WHERE  title ='$id'";
       
        $row1 = mysqli_query($conn,$query02);
        $id_category=$_POST['id_category'];
        echo $id_category;

        $Title=$_POST["title"];
        $content=$_POST["content"];
        $id_user="1";
        
        $file_tmp = $_FILES["image"]["tmp_name"];
        $file_name = $_FILES["image"]["name"];
        $file_path = "images/blog/".$file_name;

        $query1 = "INSERT INTO blog VALUES('','$id_user','$id_category','$Title','$file_path','$content','$created_at','$updated_at')";
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

    $title=$_POST["title"];
    $content=$_POST["content"];

    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_name = $_FILES["image"]["name"];
    $file_path = "images/blog/".$file_name;

    if ($file_name > 0)
{
    $query= "UPDATE blog SET title='$title',content='$content',image='$file_path',updated_at='$updated_at' where id='".$rollon."'";
echo $query;
}
else if($file_name =="")
{ 
    $query= "UPDATE blog SET title='$title',content='$content',updated_at='$updated_at' where id='".$rollon."'";
    echo $query;
}
move_uploaded_file($file_tmp,$file_path);	
 $up = mysqli_query($conn,$query);
echo $query;
}
?>