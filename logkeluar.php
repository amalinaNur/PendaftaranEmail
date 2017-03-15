<?php
session_start();
  
if(isset($_SESSION['login_user'])) 
{	
	session_destroy();
	unset($_SESSION['login_user']);  
	header("Location: admin.php");
	exit();
}
?>