<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:adminhome.php');
   
   $username=$_SESSION['username'];
   $password=$_POST['password'];
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'onlinetestdb');
   $q="update user set password='$password' where username='$username'";
   mysqli_query($con,$q);
   mysqli_close($con);
   header('location:myaccount.php');
?>
