<?php
include('session.php');
include('rdatabase.php');
$name = $_GET['name'];
unset($_GET['name']);
$seats = $_GET['seats'];
unset($_GET['seats']);
$var=array("name"=>$name,"seats"=>$seats);
$x=new Rdatabase();
$x->add($var,$db);
header("location:reserve.php");
?>
