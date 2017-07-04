<?php 
$GelenID=$_GET['id'];
include ("ayar.php");

if(GelenID)
{
	$sql="DELETE FROM sarkilar WHERE sarki_id=$GelenID";
	$sorgula=mysqli_query($baglan,$sql);
	
	header("location:muzikler.php");
}
else
{
	echo "Bir hata oluþtu";
}



?>

