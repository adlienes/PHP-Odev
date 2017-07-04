<?php 
$GelenID=$_GET['id'];
include ("ayar.php");

if(GelenID)
{
	$sql="DELETE FROM sarki_kategori WHERE tur_id=$GelenID";
	$sorgula=mysqli_query($baglan,$sql);
	
	header("location:kategoriler.php");
}
else
{
	echo "Bir hata oluþtu";
}



?>