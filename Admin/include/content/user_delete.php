<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// $query ="select * from blogcategories";
// $row = mysqli_query($conn,$query);

$rollon=$_GET['recordId'];

$query1 = "DELETE FROM user WHERE id='$rollon'";
$data = mysqli_query($conn,$query1);
if ($data)
{
    echo " Xoa thanh cong";

}
else
{
    echo " bi loi ";
}

?>