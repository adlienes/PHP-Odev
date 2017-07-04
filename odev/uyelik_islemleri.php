<?php
include("ayar.php");

$isim=$_POST['isim'];
$kullanici=$_POST['kullanici'];
$mail=$_POST['mail'];
$sifre=$_POST['sifre'];


if($kullanici=="" || $sifre=="")
	{
		echo "Lütfen Formu Tam Olarak Doldurunuz.";
	}
else
	{
	 $sql="insert into uyeler1(isim,kullanici,mail,sifre) values('$isim','$kullanici','$mail','$sifre')";	
     $sorgula=@mysqli_query($baglan,$sql);

		if($sorgula)
		{
			header("location:index.php");
		}
		else
		{
			echo "Uyelik işlemleriniz başarıyla tamamlanmıştır";
		}
	}	
?>