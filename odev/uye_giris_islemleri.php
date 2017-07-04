<?php
session_start();
include("ayar.php");

$kullanici=$_POST['kullanici'];
$sifre=$_POST['sifre'];

if($kullanici=="" || $sifre=="")
	{
		echo "Lütfen Formu Tam Olarak Doldurunuz.";
	}
else
	{
		$sql="select * from uyeler1 where kullanici='$kullanici' and sifre='$sifre'";
		$result=mysqli_query($baglan,$sql);
		$sorgula=mysqli_fetch_array($result);
		
		if(($kullanici==$sorgula['kullanici']&& $sifre==$sorgula['sifre']))
		{
			$_SESSION['kullanici']=$_POST['kullanici'];
			$_SESSION['sifre']=$_POST['sifre'];
			$_SESSION['id']=$sorgula['kullanici_id'];
			header("location:index.php");
		}
		else
		{
			echo "lütfen üyelik bilgilerinizi kontrol ederek tekrar giriniz";
		}
	}
?>