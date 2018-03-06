<?php
include('config.php') ;
session_start();
$user_check=$_SESSION['username'];
$ses_sql=mysqli_query($db,"select username,name from $usertable where username='$user_check'");
$row= mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session=$row['username'];
$name=$row['name'];
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>