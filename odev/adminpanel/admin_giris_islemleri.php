<?php 
session_start();
include ("ayar.php");

$kullanici=$_POST['kullanici'];
$sifre=$_POST['sifre'];

if($kullanici=="" || $sifre=="")
{
	echo "Lütfen Alanları Tam Doldurunuz";
}
else
{
	$sql="select *from admin where admin_kullanici='$kullanici' and admin_sifre='$sifre'";
	$sorgula=mysqli_query($baglan,$sql);
	
	$result=mysqli_fetch_array($sorgula);
	
	if($kullanici==$result['admin_kullanici'] && $sifre==$result['admin_sifre'])
	{
		$_SESSION['admin_kullanici']=$_POST['kullanici'];
		$_SESSION['admin_sifre']=$_POST['sifre'];
		$_SESSION['admin_adsoyad']=$result['admin_adsoyad'];
		
		header("location:panel.php");	
	}
	else
	{
		echo "lütfen üyelik bilgilerinizi kontrol ederek tekrar giriniz";
	}	
}
?>
