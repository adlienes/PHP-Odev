<?php
include("ayar.php");
if( $GelenID = $_GET['sarki_id'])
{
	$sorgu="update sarkilar set begeni=begeni+1 where sarki_id='$GelenID'"; 
	$begen = mysqli_query($baglan,$sorgu);

if($begen)
{
	echo header("location:more.php?sarki_id=".$GelenID."");
	
}
else 
{
	echo mysql_error();
}
}





 

?>