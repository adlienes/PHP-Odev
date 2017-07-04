<?php 
$GelenID=$_GET['id'];
include ("ayar.php");

if(GelenID)
{
	$sql="DELETE FROM yorumlar WHERE yorum_id=$GelenID";
	$sorgula=mysqli_query($baglan,$sql);
	
	header("location:yorumlar.php");
}
else
{
	echo "Bir hata oluþtu";
}



?>

