<?php
$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$rollon=$_GET['recordId'];
$conn = mysqli_connect($servername, $username, $password, $database);
$query = "DELETE FROM sliders WHERE id='$rollon'";
$row = mysqli_query($conn,$query);
if ($row)
{
    echo " Xoa thanh cong";

}
else
{
    echo " bi loi ";
}

?>