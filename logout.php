<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_GET['logout']))
{
	$message="";
	session_destroy();
	unset($_SESSION['user']);
	$message="Successfully log out";
	header("Location: login.php");
}
?>