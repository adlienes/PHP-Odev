<?php
session_start();
if(($_SESSION['kullanici']) and ($_SESSION['sifre']))
	{  
		session_unset();
	}
	
		echo "yine bekleriz";
		header("location:index.php");
		
?>
