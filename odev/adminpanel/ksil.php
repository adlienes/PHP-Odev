<?php 
$GelenID=$_GET['id'];
include ("ayar.php");

if(GelenID)
{
	$sql="DELETE FROM uyeler1 WHERE kullanici_id=$GelenID";
	$sorgula=mysqli_query($baglan,$sql);
	
	header("location:kullanicilar.php");
}
else
{
	echo "Bir hata oluþtu";
}



?>

