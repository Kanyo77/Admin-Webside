<?php
session_start();  
ob_start(); 

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
    $username=mysqli_real_escape_string($conn,$_POST['username']);  
    $password=mysqli_real_escape_string($conn,$_POST['password']);  
    $sql=mysqli_query($conn,"select * from user where username='$username' && password='$password'");  
    $num=mysqli_num_rows($sql);  
    if ($num>0) 
    { 
       $role =mysqli_fetch_array($sql);
        
        if( $role["role"]=='admin') 
        {
            echo "admin";
        }
        elseif( $role["role"]=='Mod')
        {
            echo 2;
        }
        else
        {
            echo "User";
        }



    // $sql=mysqli_query($conn,"select * from user where username='$username' ");  
	// $num=mysqli_num_rows($sql); 
    // echo $num;
    // echo ($row);
    // print $row;
    // if($row =="admin" )
    // {
    //     echo 1;
    // }
    // else
    // {
    //     echo 2; 
    // }
       }
    else
    {
        echo "kiem tra lai";
    }
 

}
?>  