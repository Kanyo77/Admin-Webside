<?php
session_start();  

$servername = "localhost";
$database = "web_blog";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$query ="select * from user ";
$row = mysqli_query($conn,$query);

$check_name="select username from user";

if (isset($_POST["btn_new"]) == "new")
{


// $check = mysqli_query($conn,$check_name);
 
$usename=mysqli_real_escape_string($conn,$_POST['username']);  
echo $usename;

// $password=mysqli_real_escape_string($conn,$_POST['password']);  
// echo $password;


$query="select name from user WHERE  username='$username'";
$test = mysqli_query($conn,$query);
// if($test)
// $msg="";  
// if (isset($_POST['submit'])) {   
// 	 $id=mysqli_real_escape_string($conn,$_POST['id']);  
// 	 $password=mysqli_real_escape_string($conn,$_POST['password']);  
// 	 $sql=mysqli_query($conn,"select * from userid where id='$id' && password='$password'");  
// 	 $sql1=mysqli_query($conn,"select * from userid where id='$id' ");  
// 	 $num=mysqli_num_rows($sql);  
// 	 if ($num>0) 
// 	 {  
		  
// 		$_SESSION['id']=$id;
// 			if($id =="admin" && $password="1" )
// 			{

// 				// header("Location: http://localhost:89/CI4/public/Log/admin");
//                     // die();
// 			}
// 			else {
				
// 				// header("Location: http://localhost:89/CI4/public/home");
//                     // die();
// 			}
// 	 }else{  

// 		  echo "Tài khoản mật khẩu không chính xác";
// 	 }  
// }  
}
?>  